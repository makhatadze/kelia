<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Eloquent\FileRepository;
use App\Utilities\ServiceResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileController extends Controller
{
    /**
     * @var \App\Repositories\Eloquent\FileRepository
     */
    public FileRepository $fileRepository;

    public function __construct(
        FileRepository $fileRepository
    )
    {
        $this->fileRepository = $fileRepository;
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function uploadForEditor(Request $request): \Illuminate\Http\JsonResponse
    {
        try {
            $request->request->add(['type' => 'ck_editor']);
            $request->request->add(['file_type' => 'image']);

            // Upload file.
            $this->fileRepository->setFile($request->file('upload'))->setRequest($request)
                ->uploadFile();

            // Set file data.
            $file = $this->fileRepository->getFile();

            // Set original image url.
            $originalUrl = $file->fullUrl;

            return response()->json(['urls' =>
                [
                    'default'   => $originalUrl
                ]]);
        } catch (\Exception $ex) {
            return ServiceResponse::jsonNotification($ex->getMessage(), $ex->getCode(), []);
        }
    }

}
