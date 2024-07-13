<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Setting;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function settings($setting){
        $view_arr = ['about_settings','header_settings','footer_settings','navbar_settings'];
        if(in_array($setting, $view_arr)){
            return view('dashboard.pages.'.$setting);
        }else{
             abort(404);
        }
    }

    public function update(Request $request){

        foreach ($request->types as $key => $type) {

                $settings = Setting::where('setting_name', $type)->first();
                $setting_val = '';
                $setting_name = '';
                if($request->hasFile($request[$type]))
                {
                    $request[$type] = $this->storeImage($request[$type],'/uploads');
                }
                if ($settings != null) {
                    $setting_val = $request[$type];
                    $business_setting =Setting::findOrFail($settings->id);
                    $business_setting->update(
                        ['setting_val'=> $setting_val],
                    );
                } else {
                    $setting_name = $type;
                    $setting_val = $request[$type];

                    Setting::create(
                        ['setting_name'=> $setting_name, 'setting_val'=> $setting_val]
                    );
                }
        }

       Artisan::call('cache:clear');
       return response()->json([
        'success'=> true,
        'redirect'=> route('dashboard.settings.index', $request->page)
       ]);

    }


}
