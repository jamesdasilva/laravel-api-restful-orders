<?php


Route::group(array('prefix' => 'api'), function() {

  Route::get('/', function () {
      return response()->json(['message' => 'Teste Acruxx API', 'status' => 'Conectado']);
  });

  Route::resource('products', 'ProductsController');
  Route::resource('users', 'ProductUsersController');
  Route::resource('orders', 'OrdersController');

  Route::get('/today', 'OrdersController@today');
  Route::get('/week', 'OrdersController@week');

});

Route::get('/', function () {
    return redirect('api');
});
