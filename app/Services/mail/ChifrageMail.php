<?php

namespace App\Services\mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ChifrageMail extends Mailable {
    use Queueable, SerializesModels;

    public string $fromEmail;
    public string $pdf;

    public function __construct(string $fromEmail, $pdf) {
        $this->fromEmail = $fromEmail;
        $this->pdf = base64_encode($pdf);
    }

    public function build(): ChifrageMail {
        return $this
            ->from($this->fromEmail)
            ->attachData(base64_decode($this->pdf), "invoice.pdf", ['mime' => 'application/pdf'])
            ->subject('Chiffrage immédiat')
            ->view('components.demo');
    }
}
