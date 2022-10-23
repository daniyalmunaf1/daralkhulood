<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Email extends Mailable
{
    use Queueable, SerializesModels;


    public $name,$email,$equipment,$message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$equipment,$message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->equipment = $equipment;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('user-booking')->with([
            'name'=>$this->name,
            'email'=>$this->email,
            'equipment'=>$this->equipment,
            'message'=>$this->message

        ]);
        
    }
}
