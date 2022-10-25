<?php

namespace ArgilData\ArxiView\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\ComponentAttributeBag;

use ArgilData\ArxiView;
// use ArgilData\ArxiView\View\Components\{
//     Input,
// };

class ArxiViewServiceProvider extends ServiceProvider 
{

    public function boot() {
        //dd('ArxiView Service Provider');


        //views
        $this->loadViewsFrom(__DIR__ . '/../views', 'arxi');
        $this->loadViewsFrom(__DIR__.'/../views/components', 'arxi');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'arxi');
        

        //publish
        $this->publishes([
            __DIR__.'/../config/arxiview.php' => config_path('arxiview.php'),
            __DIR__."/../../dist/arxiview.css" => public_path('evulpo/arxiview.css'),
            __DIR__."/../../public" => public_path('vendor/argil-data/arxiview'),
            // if we want to publish the components views inside the project
            //__DIR__.'/../views' => resource_path('views/vendor/vui-kit')
        ], 'arxi');

        
        // BLADE COMPONENTS



        // LIVEWIRE COMPONENTS
        // Livewire::component('some-component', SomeComponent::class);

    }

    public function register() {

        $this->app->singleton('arxiview', ArxiView::class);

    }
}
