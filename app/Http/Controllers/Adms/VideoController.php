<?php

namespace App\Http\Controllers\Adms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Video\StoreRequest;
use App\Http\Requests\Video\UpdateRequest;
use App\Models\Main;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $loads = Main::query()->where('name', '=', 'video')->first();
        $result = empty($loads->data)?[]:json_decode($loads->data, true);

        $result['id'] = $loads->id;

        return view('adms.video.index', $result);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adms.video.create');
    }

    public function store(StoreRequest $request)
    {

        $data = $request->validated($request);

        $jsonData = json_encode($data);

        $video = Main::create(
            [
                'name'    => 'video',
                'id_elem' => 0,
                'data'    => $jsonData,
            ]
        );

        return redirect()->route('video.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $loads = Main::query()->where('name', '=', 'video')->first();

        $data = json_decode($loads->data, true);

        return view('adms.video.edit', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request)
    {
        $data = $request->validated($request);

        $jsonData = json_encode($data);

        $video = Main::updateOrCreate(
            [
                'name' => 'video',
            ],
            [
                'id_elem' => 0,
                'data'    => $jsonData,
            ]
        );

        return redirect()->route('video.index');
    }

    public function destroy($id)
    {
        $video = Main::find($id);
        $video->delete();

        return redirect()->route('video.index');
    }

}
