<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/test',function(){
    $test = new App\Models\Test();
    $test->name = 'test';
    $test->save();
    return redirect()->route('result');
    dd('test');
    
})->name('test');
Route::get('/result',function(){
    $test = App\Models\Test::all();
    return $test;
})->name('result');