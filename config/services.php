<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services第三方服务
    |--------------------------------------------------------------------------
    |
    | 此文件用于存储第三方服务（例如 Mailgun、Postmark、AWS 等）的凭证。
    | 该文件提供了此类信息的实际位置，允许包有一个常规文件来定位各种服务凭证。
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
