<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class forgot_otp extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->data=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject='Forgrt OTP';
        $name="Doccure";

        return $this->view('patient.forgot_OTP')
        ->subject($subject)
        ->with(['name'=>$this->data['name'],'Forgot_pass'=>$this->data['Forgot_pass'],'body'=>$this->data['body']]);
    }
}
