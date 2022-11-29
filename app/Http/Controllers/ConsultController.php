<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConsultRequest;
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
        $consults = Consult::orderBy('id', 'desc')->where('publish', '1')->paginate(7);

        return view('pages.consult.index', compact('consults'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consult = Consult::where('publish', '1')->findOrFail($id);

        return view('pages.consult.show', compact('consult'));
    }

    /**
     * [store description]
     * @param  StoreConsultRequest $request [description]
     * @return [type]                       [description]
     */
    public function store(StoreConsultRequest $request)
    {

        $data = $request->validated();

        $response = Consult::create($data);

        return response()->json([
            'message' => __('main.response create'),
        ], 200);

    }
}
