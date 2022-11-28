<?php 

namespace Lara\LaraAvatarMaker;

use Illuminate\Support\ServiceProvider;

class LaraAvatarMakerServiceProvider extends ServiceProvider
{
    public function register()
  {
    $this->app->bind('lara-avatar-maker', function($app) {
        return new LaraAvatarMaker();
    });
  }

  public function boot()
  {
    //
  }
}