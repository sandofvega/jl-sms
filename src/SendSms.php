<?php

namespace Jl\Sms;

use Jl\Sms\Contracts\SmsManager;

class SendSms implements SmsManager
{
    protected $to;
    protected $form;
    protected $message;

    public function to($to)
    {
        $this->to = $to;
        
        return $this;
    }

    public function from($from)
    {
        $this->from = $from;
        
        return $this;
    }

    public function message($message)
    {
        $this->message = $message;
        
        return $this;
    }

    public function send()
    {
        $operator = config('jl-sms.default_operator');
        
        // sending sms

        return "Successfully send SMS from $this->from to $this->to by $operator. Message is: $this->message.";
    }
}