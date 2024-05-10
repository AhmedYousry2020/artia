<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;

class TakkaController extends Controller
{
 public function __construct()
 {
 }

    public function index(Request $request)
    {
        $headers = [
            'Content-Type' => 'application/json',
            'x-access-token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6Mzg5NywidHlwZSI6InVzZXIiLCJpYXQiOjE3MTQ0MzAzNzksImV4cCI6MTcxNzAyMjM3OX0.jjhwB_qI6OfRWKErlmGdyoQpPE3WnvIsCi3I5rDns-Q',
        ];
        $data = [
            "payment_type"=>"VOUCHER",
            "service_provider"=>"VODAFONE",
            "voucher_code"=>"VE.EV.FKA.P00300"
        ];
        $responses = Http::pool(fn (Pool $pool) => [
            $pool->withHeaders($headers)->post('https://dev-api.takka-pay.com/api/v2/cashcall/payments',$data),
            $pool->withHeaders($headers)->post('https://dev-api.takka-pay.com/api/v2/cashcall/payments',$data)
        ]);
        dd($responses[0]->json()['data']);
        foreach ($responses as $response) {
            if ($response->successful()) {
                $responseBody = $response->json();
                $codes[] = $responseBody;
            } else {
                Log::error("Error uploading image", [$response->json()]);
            }
        }

//        return $responses[0]->ok() &&
//            $responses[1]->ok() &&
//            $responses[2]->ok();
//
//
//        return response()->json(['success' => true]);
    }
}
