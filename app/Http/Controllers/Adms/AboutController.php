<?php

namespace App\Http\Controllers\Adms;

use App\Http\Controllers\Controller;
use App\Http\Requests\About\StoreRequest;
use App\Http\Requests\About\UpdateRequest;
use App\Models\Main;
use App\Services\AboutAdmService;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    private $service;

    public function __construct(AboutAdmService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $loads = Main::query()->where('name', '=', 'about')->first();

        $result = $this->service->index($request, $loads);

        return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adms.about.create');
    }

    /**
     * [store description]
     * @param  StoreRequest $request [description]
     * @return [type]                [description]
     */
    public function store(StoreRequest $request)
    {

        $data = $this->service->store($request);

        $about = Main::create(
            [
                'name'    => 'about',
                'id_elem' => 0,
                'data'    => $data,
            ]
        );

        return redirect()->route('about');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request)
    {
        $loads = Main::query()->where('name', '=', 'about')->first();

        $data = $this->service->update($request, $loads);

        $about = Main::updateOrCreate(
            [
                'name' => 'about',
            ],
            [
                'id_elem' => 0,
                'data'    => $data,
            ]
        );

        return redirect()->route('about');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $loads = Main::query()->where('name', '=', 'about')->first();

        $result = json_decode($loads->data, true);

        return view('adms.about.edit', $result);
    }

}
