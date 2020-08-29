<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMail extends Mailable
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
        //指定の変数を代入
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
        //メール送付文指示と変数を渡す指示
        return $this->view('cart.emails.'.$this->viewStr)
        ->to($this->content['to'],$this->content['to_name'])
        ->from($this->content['from'],$this->content['from_name'])
        ->subject($this->content['subject'])
        ->with([
            'content'=>$this->content,
        ]);
    }
}
