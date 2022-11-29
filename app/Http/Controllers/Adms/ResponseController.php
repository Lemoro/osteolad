<?php

namespace App\Http\Controllers\Adms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Response\StoreRequest;
use App\Http\Requests\Response\UpdateRequest;
use App\Models\Response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responses = Response::orderBy('id', 'desc')->paginate(5);
        return view('adms.response.index', compact('responses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adms.response.create');
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

        $data['publish'] = $request->has('publish') ? 1 : 0;

        $response = Response::create($data);
        return redirect()->route('response.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Response $response)
    {
        // $response = Response::find($id);
        return view('adms.response.show', compact('response'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Response $response)
    {
        // $response = Response::find($id);

        return view('adms.response.edit', compact('response'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Response $response)
    {
        $data            = $request->validated();

        $data['publish'] = $request->has('publish') ? 1 : 0;

        $response->update($data);

        return redirect()->route('response.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Response $response)
    {
        $response->delete();

        return redirect()->route('response.index');
    }
}
