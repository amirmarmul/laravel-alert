<?php

namespace Kcdev\Alert;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AlertServiceProvider extends ServiceProvider
{
    public function register()
    {
        App::singleton('alert', Alert::class);
    }
}
