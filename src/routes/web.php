<?php
Route::group(['namespace'=>'Andrew\Contact\Http\Controllers'],function () {
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send')->name('andrew.contact');
});