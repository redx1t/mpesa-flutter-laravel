<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::prefix("/secret-url")->group(function () {
    Route::post("/validation", function (Request $req) {
        //To reject: {
        // 	"ResultCode": 1,
        // 	"ResultDesc": "Rejected"
        // }

        //To accept {
        // 	"ResultCode": 0,
        // 	"ResultDesc": "Accepted"
        // }
        Log::info($req);
        return response()->json(["ResultCode" => 0, "ResultDesc" => "Accepted"], 200);
    });
    Route::post("/confirmation", function (Request $req) {
        Log::info($req);
        return;
    });
});
