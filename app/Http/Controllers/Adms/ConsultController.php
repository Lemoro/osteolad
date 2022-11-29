<?php

namespace App\Http\Controllers\Adms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Consult\StoreRequest;
use App\Http\Requests\Consult\UpdateRequest;
use App\Models\Consult;
use Illuminate\Http\Request;

class ConsultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consults = Consult::orderBy('id', 'desc')->paginate(5);
        return view('adms.consult.index', compact('consults'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adms.consult.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data            = $request->validated();
        $data['publish'] = $request->has('publish') ? 1 : 0;
        $consult         = Consult::create($data);
        return redirect()->route('consult.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Consult $consult)
    {

        return view('adms.consult.show', compact('consult'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Consult $consult)
    {

        return view('adms.consult.edit', compact('consult'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Consult $consult)
    {
        $data = $request->validated();

        $data['publish'] = $request->has('publish') ? 1 : 0;

        $consult->update($data);
// dd($data);
        return redirect()->route('consult.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consult $consult)
    {
        $consult->delete();

        return redirect()->route('consult.index');
    }
}
