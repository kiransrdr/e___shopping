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
   /* 'google' => [
        'client_id' => '161893061129-61vu60r1v0ssba3pqfvbedsvrdqc3357.apps.googleusercontent.com',
        'client_secret' => 'Wb654Kazl9G0S81HO_5pmkAB',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ], */

    'google' => [
        'client_id' => '161893061129-4q4ai52r1alttmnmht4n9nfb6eiov1pu.apps.googleusercontent.com',
        'client_secret' => 'dxxtZvy42uh71xsmuxoSl13p',
        'redirect' => 'http://127.0.0.1:8000/home',
    ],

];
