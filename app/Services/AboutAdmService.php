<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class AboutAdmService
{
    /**
     * [index description]
     * @param  [type] $request [description]
     * @param  [type] $loads   [description]
     * @return [type]          [description]
     */
    public function index($request, $loads)
    {

        $result = empty($loads->data)?[]:json_decode($loads->data, true);

        return view('adms.about.index', $result);

    }
    /**
     * [store description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function store($request)
    {
        $data = $request->validated();

        $data['about_img'] = Storage::put('/images/about/', $data['about_img']);

        $jsonData = json_encode($data);

        return $jsonData;
    }
    /**
     * [update description]
     * @param  [type] $request [description]
     * @param  [type] $loads   [description]
     * @return [type]          [description]
     */
    public function update($request, $loads)
    {
        $result = $this->index($request, $loads);

        $data = $request->validated();

        $pathImage = $result['about_img'];

        if ( ! empty($data['about_img'])) {

            $pathImage = Storage::put('/images/about/', $data['about_img']);

        }

        $data['about_img'] = $pathImage;

        $jsonData = json_encode($data);

        return $jsonData;
    }

}
