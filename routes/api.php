<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/sanctum/token/destroy', function (Request $request) {
        $request->user()->currentAccessToken()->delete();
        return response()->json(null, 204);
    });
});

Route::post('/sanctum/token', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'string', 'email'],
        'password' => ['required', 'string'],
    ]);

    if (!Auth::attempt($credentials)) { 
        throw ValidationException::withMessages([
            'email' => [__('The provided credentials are incorrect.')],
        ]);
    }
    $user = Auth::user(); 
    return $user->createToken($user->name.'-AuthToken')->plainTextToken;
});
