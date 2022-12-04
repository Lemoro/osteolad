<?php

namespace App\Http\Controllers\Adms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\UpdateRequest;
use App\Models\Main;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $loads = Main::query()->where('name', '=', 'contact')->first();

        $result = empty($loads->data)?[]:json_decode($loads->data, true);

        return view('adms.contact.index', $result);
    }

    /**
     * [edit description]
     * @return [type] [description]
     */
    public function edit()
    {
        $loads = Main::query()->where('name', '=', 'contact')->first();

        $result = empty($loads->data)?[]:json_decode($loads->data, true);

        return view('adms.contact.edit', $result);
    }

    /**
     * [store description]
     * @return [type] [description]
     */
    public function update(UpdateRequest $request)
    {
        $data = $request->validated($request);

        $data['phones']=trim($data['phones'],',').',';

        $jsonData = json_encode($data);

        $contact = Main::updateOrCreate(
            [
                'name' => 'contact',
            ],
            [
                'id_elem' => 0,
                'data'    => $jsonData,
            ]
        );

        return redirect()->route('contact.index');
    }

    public function create(){}

    public function store(){}

    public function show(){}

    public function destroy(){}


}
