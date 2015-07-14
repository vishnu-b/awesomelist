<?php

Route::group(['prefix' => 'awesomelist'], function () {
    get('', function () {
        return view('home');
    });

    get('items', function () {
        return App\Item::all();
    });

    post('items', function () {
        $item = App\Item::create(Request::all());
        return $item->id;
    });

    put('items/{id}', function ($id) {
        $item = App\Item::find($id);
        $item->completed = $item->completed? false : true;
        $item->update();
    });

    delete('items/{id}', function ($id) {
        $item = App\Item::find($id);
        $item->delete();
    });
});
