<?php

use App\Http\Controllers\ControllerExample;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return response()->json(['message' => '✅ API test success!']);
});
Route::get('/test-controller', [ControllerExample::class, 'index']);

Route::middleware('auth:sanctum')->group(function (): void {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
