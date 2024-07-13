<?php


use App\Http\Utility\ApiResponseUtility;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;


define('FL', strtoupper('en'));
define('SL', strtoupper('ar'));


if (!function_exists('storeImage')) {
  function storeImage($photo, $folder)
  {
      $file_extension = $photo->getClientOriginalExtension();
      $file_name = Str::uuid() . '.' . $file_extension;

    //   $saved = $photo->storeAs($folder, $file_name, ['disk' => 'public']);
      $saved = $photo->move(public_path('uploads'), $file_name);
      if ($saved) {
          return $file_name;
      }
  }
}

if (!function_exists('getLocale')) {
    /**
     * @return String
     */
    function getLocale(): String
    {
        return  app()->getLocale();
    }
  }


if (!function_exists('get_setting')) {
    function get_setting($key, $default = null, $lang = false)
    {

        $settings = Cache::rememberForever('business_settings', function ()  {
            return Setting::all();
        });
        $setting = $settings instanceof Collection ? $settings->where('setting_name', $key)->first() : null;

        return $setting == null ? $default : $setting->setting_val;
    }
}


