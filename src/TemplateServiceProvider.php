<?php


namespace MicroweberPackages\Template\Shopmag;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider
{




    public function register()
    {

        $this->loadMigrationsFrom(__DIR__ . '/migrations/');

    }


}
