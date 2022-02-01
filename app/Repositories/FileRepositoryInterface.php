<?php
/**
 *  app/Repositories/FileRepositoryInterface.php
 *
 * Date-Time: 01.02.22
 * Time: 13:03
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Repositories;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

interface FileRepositoryInterface
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function setRequest(Request $request);

    /**
     * @param UploadedFile $file
     * @return mixed
     */
    public function setFile(UploadedFile $file);

    /**
     * @param string $disk
     *
     * @return mixed
     */
    public function setFileSystemMode(string $disk = 'public');

    /**
     * @return mixed
     */
    public function getFile();

    /**
     * @return mixed
     */
    public function uploadFile();

}