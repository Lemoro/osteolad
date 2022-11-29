<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Blog;
use App\Models\Certificate;
use App\Models\Consult;
use App\Models\Galery;
use App\Models\Main;
use App\Models\Response;

class MainController extends Controller
{
    /**
     * [index description]
     * @return [type] [description]
     */
    public function index()
    {

        $result = Main::all();

        foreach ($result as $key => $value) {
            $data[$value->name] = json_decode($value->data);
        }

        $data['certificates'] = Certificate::orderBy('id', 'desc')->take(3)->get();

        $data['activitys'] = Activity::orderBy('id', 'desc')->take(3)->where('publish', '1')->get();

        $data['consults'] = Consult::orderBy('id', 'desc')->take(3)->where('publish', '1')->get();

        $data['responses'] = Response::orderBy('id', 'desc')->take(9)->where('publish', '1')->get();

        $data['blogs'] = Blog::orderBy('id', 'desc')->take(3)->where('publish', '1')->get();

        $data['galerys'] = Galery::orderBy('id', 'desc')->take(9)->get();

        return view('index', $data);
    }

}
