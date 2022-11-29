<?php

namespace App\Http\Controllers\Adms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Galery\StoreRequest;
use App\Http\Requests\Galery\UpdateRequest;
use App\Models\Galery;
use App\Services\GaleryAdmService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    private $service;

    public function __construct(GaleryAdmService $service)
    {
        $this->service = $service;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $galerys = Galery::orderBy('id', 'desc')->paginate(5);

        return view('adms.galery.index', compact('galerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adms.galery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $data = $this->service->store($data);

        $galery = Galery::create($data);

        return redirect()->route('galery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
        return view('adms.galery.edit', $galery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Galery $galery)
    {
        $data = $request->validated();

        $data = $this->service->update($data, $galery);

        return redirect()->route('galery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $galery)
    {
        Storage::delete($galery->image);

        $galery->delete();

        return redirect()->route('galery.index');
    }

}
