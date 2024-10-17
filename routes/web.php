<?php

use App\Http\Middleware\AlwaysEchoMidlewave;
use App\Mail\TestSendEmail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(AlwaysEchoMidlewave::class)->group(function () {
Route::get('/check/history', function () {
    return view('checkout.history');
});
Route::get('/checkout', function () {
    return view('checkout.checkout');
});
});
Route::get('/email', function () {
    $name = 'QuanThai';
    $from="PTIT 2K5";
    Mail::to("thaithanhquan11102005@gmail.com")->send(new TestSendEmail(compact("name","from")));
    dd("SEND EMAIL THANH CONG");
});