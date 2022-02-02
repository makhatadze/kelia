<?php

namespace App\Services\Pdf;

use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\File;

class PdfService {
    private PDF $pdf;

    public function __construct(PDF $pdf) {
        $this->pdf = $pdf;
    }

    public function download($answers, $userForm): array {
        $total = 0;
        foreach ($answers as $answer) {
            $total += $answer['total'];
        }
        // generate and render pdf
        $random = substr(str_shuffle('0123456789abcdefghijklmnop'), 0, 15);
        $pdfName = "$random.pdf";
        $pdfPath = "/uploads/chiffrage-clients";
        $pdfVew = $this->pdf->loadView('components.pdf.chiffrage_2', [
            'answers' => $answers,
            'user' => $userForm,
            'total' => $total
        ])->output();

        // put file in folder
        File::ensureDirectoryExists(public_path($pdfPath));
        File::put(public_path("$pdfPath/$pdfName"), $pdfVew);

        return [
            'name' => "$pdfPath/$pdfName",
            'pdf' => $pdfVew,
        ];
    }

    public function send(array $data) {
        return [123];
    }

//    public function send(Request $request, PDF $pdf): Collection {
//        $request->validate([
//            'users' => 'required',
//            'data' => 'required'
//        ]);
//
//        $data = $request->input('data');
//        $users = collect($request->input('users'));
//        $emails = $users->map(fn($el) => $el['email'])->filter(fn($el) => !!$el);
//
////        $invoicePrice =
//        $product = $data['products'][0];
//        $invoicePrice = $product['price'] ?? 0;
//        $contractID = $product['contract_id'];
//
//        if ($emails->isNotEmpty()) {
//            $activePos = $this->userPosition();
//            $ownerID = $activePos->owner_id;
//            $random = substr(str_shuffle('0123456789abcdefghijklmnop'), 0, 15);
//
//            $pdfName = "$random.pdf";
//            $pdfPath = "files/$ownerID/invoice/$pdfName";
//            $pdfVew = $pdf->loadView('invoices.boilerplate_gosms', compact('data'))->output();
//
//            File::ensureDirectoryExists(public_path("files/$ownerID/invoice"));
//            File::put(public_path($pdfPath), $pdfVew);
//
//
//            if (env("APP_DEBUG") == false) {
//                $jobs = [];
//                $user = User::where('id', '=', Auth::id())->first();
//                $emails->each(function ($email) use ($pdfVew, $user, &$jobs) {
//                    $jobs[] = new SendEmail($email, new Invoice($user->email, $pdfVew));
//                });
//                // start background work with help of redis
//                Bus::chain($jobs)->dispatch();
//            }
//            else {
//                $jobs = [];
//                $emails->each(function ($email) use ($pdfVew, &$jobs) {
//                    $jobs[] = new SendEmail(env("MAIL_USERNAME"), new Invoice($email, $pdfVew));
//                });
//                // start background work with help of redis
//                Bus::chain($jobs)->dispatch();
//            }
//
//            foreach ($users as $user) {
//                $this->invoiceService->saveToDB(
//                    $activePos,                // positouter_company_idion of user
//                    $user['outer_company_id'], // outer company id
//                    $contractID,               // contract id
//                    $user['id'],               // user id
//                    $invoicePrice,             // sent invoice price amount
//                    $pdfPath                   // pdf path
//                );
//            }
//        }
//
//        return $emails;
//    }
}


