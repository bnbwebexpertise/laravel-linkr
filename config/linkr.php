<?php

return [
    'url' => env('LINKR_URL'),
    'key' => env('LINKR_KEY'),
    'length' => env('LINKR_LENGTH', 6),
    'proxy' => [
        'url_key' => env('LINKR_PROXY_CONFIG_KEY', 'services.proxy.http'),
        'user_key' => env('LINKR_PROXY_USER_CONFIG_KEY', 'services.proxy.http_user'),
        'password_key' => env('LINKR_PROXY_PASSWORD_CONFIG_KEY', 'services.proxy.http_password'),
    ],
];
