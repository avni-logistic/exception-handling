<?php

Route::group(['namespace' => 'Logistic\Exceptionhandling', 'middleware' => ['web']], function(){
    Route::get('exception-logs', 'ExceptionHandlingController@index');
    Route::get('exception-logs/datatable', 'ExceptionHandlingController@datatable');
    Route::post('exception', 'ExceptionHandlingController@exception');
});
?>
