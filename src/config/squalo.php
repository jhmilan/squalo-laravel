<?php

return [
    /*
     * The host where Squalo's Remora is running
     */
    'host' => [
        'ip' => env('SQUALO_HOST_IP', '127.0.0.1'),
        'port' => env('SQUALO_HOST_PORT', 5005),
    ],
    /*
     * Keys
     */
    'keys' => [
        'public' => env('SQUALO_PUBLIC_KEY', ''),
        'private' => env('SQUALO_PRIVATE_KEY', ''),
    ],
];