<?php



namespace App\Jobs;

use App\Mail\MailUser;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class MailSend implements ShouldQueue {
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected string $sendTo;
    protected object $sendBody;

    public function __construct(string $sendTo, Mailable $sendBody) {
        $this->sendTo = $sendTo;
        $this->sendBody = $sendBody;
    }

    public function handle(): void {
        Mail::to($this->sendTo)->send($this->sendBody);
    }
}
