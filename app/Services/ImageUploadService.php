<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;

class ImageUploadService {
    public function upload(UploadedFile $file, string $fileLocation = null): string {
        // generate random string
        $random = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz'), 0, 15);
        $type = $file->extension();
        $fileName = $fileLocation ? "uploads/$fileLocation/$random.$type" : "uploads/$random.$type";
        // move file
        $file->move(storage_path("/app/public/uploads/$fileLocation"), $fileName);

        return $fileName;
    }
}
