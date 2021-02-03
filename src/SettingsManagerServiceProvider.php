<?php namespace globusgroup\LaravelSettingsManager;

use \App;
use \Auth;
use Illuminate\Support\ServiceProvider;
use globusgroup\LaravelSettingsManager\SettingsManager;


class SettingsManagerServiceProvider extends ServiceProvider {

  public function boot() {

  }

  public function register() {

    //load config
    $this->mergeConfigFrom(
      __DIR__.'/config/settings.php', 'settings'
    );
    //load migrations
    $this->loadMigrationsFrom(__DIR__.'/migrations');
    //load routes
    $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    //load views
    $this->loadViewsFrom(__DIR__.'/views','settings');

    //publish config
    $this->publishes([
      __DIR__.'/config/settings.php' => config_path('settings.php'),
    ],'laravel-settings-manager-config');
    
    //bind to container
    App::bind('SettingsManager', function() {
      return new SettingsManager;
    });
  }

}