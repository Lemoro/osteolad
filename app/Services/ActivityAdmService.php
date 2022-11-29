<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class ActivityAdmService
{

    public function __construct()
    {

        view()->share('heightCropp', config('imagesize.activity')['height']);

        view()->share('widthCropp', config('imagesize.activity')['width']);
    }

    public function store($data, $request)
    {
        $data['publish'] = $request->has('publish') ? 1 : 0;

        $data['full_image'] = Storage::put('/images/activity/full', $data['image']);

        $data['image'] = \MyImage::cropStorage($data, '/images/activity/');

        return $data;
    }

    public function update($data, $request, $activity)
    {

        $data['publish'] = $request->has('publish') ? 1 : 0;

        if (isset($data['image'])) {

            Storage::delete($activity->image);

            Storage::delete($activity->full_image);

            $data['full_image'] = Storage::put('/images/activity/full', $data['image']);
            $data['image']      = \MyImage::cropStorage($data, '/images/activity/');
        }

        $activity->update($data);

    }

}
