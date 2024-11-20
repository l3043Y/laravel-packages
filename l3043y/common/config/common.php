<?php

return [
    'include_raw_xml' => false,
    'cbs' => [
        'endpoint' => env('BSS_CBS_ENDPOINT'),
        'username' => env('BSS_CBS_USERNAME'),
        'password' => env('BSS_CBS_PASSWORD'),
        'cache_duration' => 10,
        'ch' => 39
    ],
    'crm' => [
        'endpoint' => env('BSS_CRM_ENDPOINT'),
        'username' => env('BSS_CRM_USERNAME'),
        'password' => env('BSS_CRM_PASSWORD'),
        'cache_duration' => 10,
        'ch' => 39
    ]
];
