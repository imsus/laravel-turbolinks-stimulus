<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::view('/login', 'login')->name('login');
    Route::post('/login', function(Request $request) {
        if (auth()->attempt($request->all())) {
            session()->flash('turbolinks-redirect', 'b');
            return redirect()->intended('b');
        } else {
            session()->flash('turbolinks-redirect', 'login');
            return back()->withInput($request->only('email'))
                        ->withErrors(['email' => 'Email not match']);
        }
    });
});

Route::get('/logout', function() {
    auth()->logout();
    session()->flash('turbolinks-redirect', 'login');
    return redirect()->route('login');
})->name('logout');

Route::middleware('auth')->group(function() {
    Route::view('/a', 'a')->name('a');
    Route::view('/b', 'b')->name('b');
});
