<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class CertificateAdmService
{
    public function __construct()
    {

        view()->share('heightCropp', config('imagesize.certificate')['height']);

        view()->share('widthCropp', config('imagesize.certificate')['width']);
    }
    /**
     * [store description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function store($data)
    {
        $data['full_image'] = Storage::put('/images/certificate/full', $data['image']);

        $data['image'] = \MyImage::cropStorage($data, '/images/certificate/');

        return $data;
    }
    /**
     * [update description]
     * @param  [type] $data        [description]
     * @param  [type] $request     [description]
     * @param  [type] $certificate [description]
     * @return [type]              [description]
     */
    public function update($data, $certificate)
    {

        if (isset($data['image'])) {
            Storage::delete($certificate->image);
            Storage::delete($certificate->full_image);

            $certificate->full_image = Storage::put('/images/certificate/full', $data['image']);
            $certificate->image      = \MyImage::cropStorage($data, '/images/certificate/');
        }

        $certificate->title = $data['title'];

        $certificate->save();

        return $certificate;
    }

}
