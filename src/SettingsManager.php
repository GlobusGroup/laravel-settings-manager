<?php namespace globusgroup\LaravelSettingsManager;

use globusgroup\LaravelSettingsManager\models\Setting;

class SettingsManager {

  public function get(String $key) {
    $setting = Setting::where('key',$key)->first();
    if($setting) {
      return $setting->value;
    } else {
      return config($key);
    }
  }

}