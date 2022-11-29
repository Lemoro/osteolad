<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreResponseRequest;
use App\Models\Response;

class ResponseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responses = Response::orderBy('id', 'desc')->where('publish', '1')->paginate(7);

        return view('pages.response.index', compact('responses'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResponseRequest $request)
    {

        $data = $request->validated();

        $response = Response::create($data);

        return response()->json([
            'message' => __('main.response create'),
        ], 200);

    }
}
