<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class GaleryAdmService
{
    public function __construct()
    {
        view()->share('heightCropp', config('imagesize.galery')['height']);
        view()->share('widthCropp', config('imagesize.galery')['width']);
    }

    /**
     * [store description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function store($data)
    {
        $data['full_image'] = Storage::put('/images/galery/full', $data['image']);
        $data['image']      = \MyImage::cropStorage($data, '/images/galery/');

        return $data;
    }

    /**
     * [update description]
     * @param  [type] $data   [description]
     * @param  [type] $galery [description]
     * @return [type]         [description]
     */
    public function update($data, $galery)
    {

        if (isset($data['image'])) {
            Storage::delete($galery->image);
            Storage::delete($galery->full_image);

            $data['full_image'] = Storage::put('/images/galery/full', $data['image']);
            $data['image']      = \MyImage::cropStorage($data, '/images/galery/');
        }

        $galery->update($data);
    }

}
