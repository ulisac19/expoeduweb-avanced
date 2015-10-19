<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => '',
        'secret' => '',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key'    => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => '',
        'secret' => '',
    ],

    // Socialite
    'facebook' => [
        'client_id'     => '917799878286958',
        'client_secret' => '4371a9299d4d0e4bcf57c803db926cc1',
        'redirect'      => 'http://youwebframe.com/expoeduweb/public/callback/facebook',
    ],

     'google' => [
        'client_id'     => '999749650823-rgmn7vpvhg6o63c0v7fthm9mqcp6addp.apps.googleusercontent.com',
        'client_secret' => '5nAztVTXl--Ht_BeU4rYhSdl',
        'redirect'      => 'http://youwebframe.com/expoeduweb/public/callback/google',
    ],

];
