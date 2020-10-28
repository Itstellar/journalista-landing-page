<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class ItStellar extends Mailable
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

        public function build(Request $request)
    {

        $email=$request->email;
        return $this->Subject("ItStellar(Contact_Us)")->view('mail',['comment'=>$request->comment,'Subject'=>$request->subject,'name'=>$request->name,
            'email'=>$request->email])->to("asmaa@efficoat.com")->from("$email");

    }
}
