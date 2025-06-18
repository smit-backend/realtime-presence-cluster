<?php

return [
    'enabled' => env('REALTIME_PRESENCE_CLUSTER_ENABLED', true),
    'timeout' => env('REALTIME_PRESENCE_CLUSTER_TIMEOUT', 30),
    'log_channel' => env('REALTIME_PRESENCE_CLUSTER_LOG', 'stack'),
];
