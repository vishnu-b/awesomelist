<?php

Route::group(['prefix' => 'awesomelist'], function () {
    get('', function () {
        return view('home');
    });

    get('items', function () {
        return App\Item::all();
    });

    post('items', function () {
        App\Item::create(Request::all());
    });
});
