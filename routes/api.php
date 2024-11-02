<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('oauth')->get('/hello', function (Request $request) {
    return response()->json([
        'message' => 'Hello World! -> API Groups v1',
        'user' => $request->user()
    ]);
});
