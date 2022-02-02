<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Chifrage;
use App\Services\mail\ChifrageMail;
use App\Services\Pdf\PdfService;
use HttpException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\PDF;

class ChifrageController extends Controller {
    private PdfService $pdfService;

    public function __construct(PdfService $pdfService) {
        $this->pdfService = $pdfService;
    }

    /*** @throws HttpException */
    public function downloadOrSendPdf(Request $request, PDF $pdf) {
        $request->validate([
            "type" => "required",
            "answers" => "required|array",
            "userForm" => "required",
        ]);

        $type = $request->input('type');
        $userForm = $request->input('userForm');
        $answersArr = $request->input('answers');

        if ($type < 1 || $type > 2) throw new HttpException(['type' => 'incorrect']);

        $data = $this->pdfService->download($answersArr, $userForm);

        $model = new Chifrage();
        $model->pdf = $data['name'];
        $model->name = $userForm['name'] ?? '';
        $model->email = $userForm['mail'] ?? '';
        $model->city = $userForm['city'] ?? '';
        $model->address = $userForm['address'] ?? '';
        $model->postalCode = $userForm['postalCode'] ?? '';
        $model->phone = $userForm['phoneNumber'] ?? '';
        $model->save();

        if ($type === 1) {
            return ['url'=> url($data['name'])];
        }

        if ($type === 2) {
            // send
            Mail::to($userForm['mail'])->send(new ChifrageMail(env('MAIL_USERNAME'), $data['pdf']));

            return ['message'=>'success'];
        }
    }
}
