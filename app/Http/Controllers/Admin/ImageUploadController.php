<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ImageUploadController extends Controller
{
    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function uploadImage(Request $request): \Illuminate\Http\JsonResponse
    {
        $image = (new UploadImage)->setFile($request->file('file'))->setType($request->get('type'))
            ->initImage()->uploadImage()->saveSrc()->getImage();

        Session::flash('toastr', ['type' => 'solid-green', 'position' => 'rt','content' => '<b> Image Upload </b> successfully']);
        return response()->json([
            'message'   => __('Image Upload Successfully'),
            'item'  => $image
        ]);
    }
}
