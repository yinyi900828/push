<?php

return [
    'app_key' => env('JPUSH_APP_KEY', ''),
    'master_secret' => env('JPUSH_MASTER_SECRET', ''),
    'file'  => env('JPUSH_LOG_FILE', storage_path('logs/jpush.log')),
    'title'  => env('JPUSH_TITLE', '享车'),
];