# JL SMS

## Setup

RUN:

```bash
php artisan vendor:publish --tag=jl-sms-config
```

## Example

```php
<?php

namespace App\Http\Controllers;

use Jl\Sms\Contracts\SmsManager;

class HomeController extends Controller
{
    public function __construct(SMSManager $sms)
 	{
 		$this->sms = $sms;
 	}

    public function home()
    {
        $response = $this->sms->from('01700000000')
 			->to('01600000000')
 			->message('Hello world')
 			->send();

        return $response;
    }
}

```
