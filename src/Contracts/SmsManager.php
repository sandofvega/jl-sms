<?php

namespace Jl\Sms\Contracts;

interface SmsManager
{
    public function to($to);

    public function from($from);

    public function message($message);

    public function send();
}