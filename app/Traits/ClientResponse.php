<?php

namespace App\traits;

use App\Helpers\Helper;
use App\Models\Service;

trait ClientResponse {
    public array $clientResp;

    public function __construct() {
        $this->setRecursive();
    }

    public function clientMerged(array $arr = []): array {
        return array_merge_recursive($arr, $this->clientResp);
    }

    public function setRecursive() {
        $this->clientResp = [
            'services' => Service::with('pages')->get(),
            'configData' => Helper::applClasses()
        ];
    }
}
