<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Mailer默认邮件程序
    |--------------------------------------------------------------------------
    |
    | 此选项控制用于发送应用程序发送的任何电子邮件消息的默认邮件程序。
    | 可以根据需要设置和使用替代邮件程序；
    | 但是，默认情况下将使用此邮件程序。
    |
    */

    'default' => env('MAIL_MAILER', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | Mailer Configurations邮件配置
    |--------------------------------------------------------------------------
    |
    | 在这里您可以配置您的应用程序使用的所有邮件程序及其各自的设置。
    | 已经为您配置了几个示例
    | 您可以根据应用程序的需要自由添加自己的。
    |
    | Laravel 支持发送电子邮件时使用的各种邮件“transport”驱动程序。
    | 您将在下面指定您的邮件使用的是哪一个。
    | 您可以根据需要自由添加其他邮件程序。
    |
    | 支持: "smtp", "sendmail", "mailgun", "ses",
    |            "postmark", "log", "array", "failover"
    |
    */

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
            'port' => env('MAIL_PORT', 587),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'local_domain' => env('MAIL_EHLO_DOMAIN'),
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'mailgun' => [
            'transport' => 'mailgun',
        ],

        'postmark' => [
            'transport' => 'postmark',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address全局“发件人”地址
    |--------------------------------------------------------------------------
    |
    | You may wish for all e-mails sent by your application to be sent from
    | the same address. Here, you may specify a name and address that is
    | used globally for all e-mails that are sent by your application.
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'admin@tbcstar.com'),
        'name' => env('MAIL_FROM_NAME', '时光回溯项目组'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Markdown Mail SettingsMarkdown 邮件设置
    |--------------------------------------------------------------------------
    |
    | 如果您使用基于 Markdown 的电子邮件呈现，您可以在此处配置您的主题和组件路径，
    | 允许您自定义电子邮件的设计。
    | 或者，您可以简单地坚持使用 Laravel 默认设置！
    |
    */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
