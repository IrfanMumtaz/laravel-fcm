<?php

namespace Irfanmumtaz\FirebaseCloudMessage;

use Illuminate\Support\ServiceProvider;

class FCMServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/fcm.php' => config_path('fcm.php'),
        ], 'config');
    }
}
