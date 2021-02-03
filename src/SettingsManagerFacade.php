<?php namespace globusgroup\LaravelSettingsManager;

use Illuminate\Support\Facades\Facade;

class SettingsManagerFacade extends Facade {
  protected static function getFacadeAccessor() { return 'SettingsManager'; }
}