<?php

namespace Jl\Sms;

use Illuminate\Support\ServiceProvider;
use Jl\Sms\Contracts\SmsManager;
use Jl\Sms\SendSms;

class SmsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(SmsManager::class, SendSms::class);
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/jl-sms.php' => config_path('jl-sms.php'),
        ], 'jl-sms-config');
    }
}