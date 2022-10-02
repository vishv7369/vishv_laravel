<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class doctormail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject='Please Save Your Password';
        $name="Doccure";

        return $this->view('admin.doctormail')
        ->subject($subject)
        ->with(['first_name'=>$this->data['first_name'],'last_name'=>$this->data['last_name'],
        'dpass'=>$this->data['dpass'],'body'=>$this->data['body']]);
    }
}
