<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $content;
    protected $viewStr;

    public function __construct($content,$viewStr = 'to')
    {
        $this->content = $content;
        $this->viewStr = $viewStr;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contact.emails.'.$this->viewStr)
            ->to($this->content['to'],$this->content['to_name'])
            ->from($this->content['from'],$this->content['from_name'])
            ->subject($this->content['subject'])
            ->with([
                'content'=>$this->content,
            ]);
    }
}
