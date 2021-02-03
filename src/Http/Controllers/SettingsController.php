<?php namespace globusgroup\LaravelSettingsManager\Http\Controllers;


use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use globusgroup\LaravelSettingsManager\models\Setting;

class SettingsController extends Controller
{
    public function index() {
      return view('settings::index', ['settings' => $this->collectSettings()]);
    }

    private function collectSettings() {
      $settings = [];

      foreach(Setting::all() as $setting) {
        $settings[$setting['key']] = $setting;
      }

      return collect($settings);
    }

    public function store(Request $request) {

      foreach($request->settings as $setting_input) {

        //find setting by key
        $setting = Setting::where('key',$setting_input['key'])->first();
        //if not found, create a new one
        if(! $setting) {
          $setting = $this->newSetting($setting_input);
        }

        $setting->value = isset($setting_input['value'])? $setting_input['value']:null;
        $setting->save();
      }

      Session::flash('message','Settings saved.');
      return redirect()->back();
    }

    private function newSetting($setting_input) {
      $setting = new Setting;
      $setting->key = $setting_input['key'];
      $setting->type = $setting_input['type'];
      $setting->label = $setting_input['label'];
      return $setting;
    }
}
