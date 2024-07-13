<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
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
