<?php

namespace App\Http\Controllers;

use App\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activitys = Activity::orderBy('id', 'desc')->where('publish','1')->paginate(9);

        return view('pages.activity.index', compact('activitys'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = Activity::where('publish', '1')->findOrFail($id);

        return view('pages.activity.show', compact('activity'));
    }

}
