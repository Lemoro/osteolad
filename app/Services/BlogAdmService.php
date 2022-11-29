<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class BlogAdmService
{
    /**
     * [__construct description]
     */
    public function __construct()
    {
        view()->share('heightCropp', config('imagesize.blog')['height']);
        view()->share('widthCropp', config('imagesize.blog')['width']);
    }
    /**
     * [store description]
     * @param  [type] $data    [description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function store($data, $request)
    {
        $data['publish'] = $request->has('publish') ? 1 : 0;

        $data['full_image'] = Storage::put('/images/blog/full', $data['image']);

        $data['image'] = \MyImage::cropStorage($data, '/images/blog/');

        return $data;
    }
    /**
     * [update description]
     * @param  [type] $data    [description]
     * @param  [type] $request [description]
     * @param  [type] $blog    [description]
     * @return [type]          [description]
     */
    public function update($data, $request, $blog)
    {
        $data['publish'] = $request->has('publish') ? 1 : 0;

        if (isset($data['image'])) {
            Storage::delete($blog->image);
            Storage::delete($blog->full_image);

            $data['full_image'] = Storage::put('/images/blog/full', $data['image']);
            $data['image']      = \MyImage::cropStorage($data, '/images/blog/');
        }

        $blog->update($data);

    }

}
