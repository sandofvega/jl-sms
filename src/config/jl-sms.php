<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default SMS Operator
    |--------------------------------------------------------------------------
    |
    | This option controls the default sms operator.
    |
    */

    'default_operator' => env('SMS_VENDOR', 'banglalink'),

    /*
    |--------------------------------------------------------------------------
    | Operators
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the sms operators for your application.
    |
    | Supported operators: "banglalink", "sslwireless", "infobip"
    |
    */

    'operators' => [

        'banglalink' => [
            'host' => 'https://banglalink.com',
        ],

        'sslwireless' => [
            'host' => 'https://sslwireless.com',
        ],

        'infobip' => [
            'host' => 'https://infobip.com',
        ],

    ],

];
