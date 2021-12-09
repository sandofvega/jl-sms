<?php

namespace Yasin\Sms;

use Illuminate\Support\ServiceProvider;
use Yasin\Sms\Contracts\SmsManager;
use Yasin\Sms\SendSms;

class SmsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(SmsManager::class, SendSms::class);
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/sms.php' => config_path('sms.php'),
        ], 'sms-config');
    }
}