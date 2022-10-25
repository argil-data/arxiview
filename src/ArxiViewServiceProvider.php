<?php

namespace ArgilData\ArxiView;

use Illuminate\Support\ServiceProvider;

class ArxiViewServiceProvider extends AppServiceProvider 
{

    public function boot() {
        dd('ArxiView Service Provider');
        Livewire::component('some-component', SomeComponent::class);

    }

    public function register() {

    }
}
