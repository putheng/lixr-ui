<?php

namespace Lixr\Ui;

use Illuminate\Support\ServiceProvider;

class LixrCoreServicProvider extends ServiceProvider
{
    
    public function register()
    {
        //
    }

    
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Lixr\Ui\Commands\GenerateVueRoute::class,
                \Lixr\Ui\Commands\VueGroup::class,
                \Lixr\Ui\Commands\VueMenu::class,
                \Lixr\Ui\Commands\VuexFetch::class
            ]);
        }
    }
}
