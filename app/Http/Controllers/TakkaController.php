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

    public function index(Request $request,$count)
    {
        $codes=[];
        $headers = [
            'Content-Type' => 'application/json',
            'x-access-token' => $request->header('x-access-token'),
        ];
        //'x-access-token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6Mzg5NywidHlwZSI6InVzZXIiLCJpYXQiOjE3MTQ0MzAzNzksImV4cCI6MTcxNzAyMjM3OX0.jjhwB_qI6OfRWKErlmGdyoQpPE3WnvIsCi3I5rDns-Q',
//        $data = [
//            "payment_type"=>"VOUCHER",
//            "service_provider"=>"VODAFONE",
//            "voucher_code"=>"VE.EV.FKA.P00300"
//        ];
        $data = [
            "payment_type"=>"VOUCHER",
            "service_provider"=>$request->service_provider,
            "voucher_code"=>$request->voucher_code
        ];

//        $request_hup = array_fill(0, $count, $pool->withHeaders($headers)->post('https://dev-api.takka-pay.com/api/v2/cashcall/payments', $data));
//        $responses = Http::pool(fn(Pool $pool) =>[
//            $pool->withHeaders($headers)->post('https://dev-api.takka-pay.com/api/v2/cashcall/payments', $data),
//            $pool->withHeaders($headers)->post('https://dev-api.takka-pay.com/api/v2/cashcall/payments', $data),
//            $pool->withHeaders($headers)->post('https://dev-api.takka-pay.com/api/v2/cashcall/payments', $data)
//        ]
//        );
        try {

            $callback = function (Pool $pool) use ($count,$headers,$data) {
                $promises = array_fill(0, $count, $pool->withHeaders($headers)->post('https://dev-api.takka-pay.com/api/v2/cashcall/payments', $data));
                return $promises;
            };

            $responses = Http::pool($callback);


        //dd($responses);
            foreach ($responses as $response) {
                if ($response->successful()) {
                    $responseBody = $response->json();
                    $codes[] = $responseBody['data'];
                } else {
                    //Log::error("Error uploading image", [$response->json()]);
                }
            }
            return response()->json(['success' => true,"codes"=>$codes,"count"=>count($codes)]);

        }catch (\Throwable $e) {
            //Log::error("takkapay", [$e->getMessage()]);
            return response()->json(['success' => false,'message'=>$e->getMessage(),"codes"=>[],"count"=>0]);

        }


    }
}
