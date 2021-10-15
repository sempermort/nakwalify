<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],


    'google' => [
        'client_id'     => '359124088061-om60ttf86890sinrupetp9e3o8igngq8.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect'      => 'https://www.nakwalify.co.tz/callback/google'
    ],
    'facebook' => [
        'client_id'     => '557491708851560',
        'client_secret' => '6edab83ad3f4035d6d29e7be5e58e817',
        'redirect'      => 'https://www.nakwalify.co.tz/callback/facebook/'
    ],
];
