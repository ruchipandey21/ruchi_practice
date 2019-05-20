<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;


class sendmail extends Mailable
{
    use Queueable, SerializesModels;
    public $allData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($allData)
    {
        $this->allData=$allData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(request $request)
    {
        $data= $request->all();
        //print_r($data['email']);die('ok');
       // print_r($this->allData); die('ok');
        return $this->view('mail')->with('data',$data)->to($data['notificationemail']);
    }
}

