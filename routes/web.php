<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
}) ->name('home');


Route::get('/employees', 'EmployeeController@index')->name('employees-index');

Route::get('/employee/create', 'EmployeeController@create')->name('employee-create');

Route::get('/employee/delete/{id}', 'EmployeeController@destroy')->name('employee-destroy');

Route::get('/employee/edit/{id}', 'EmployeeController@edit')->name('employee-edit');
Route::post('/employee/post/{id}', 'EmployeeController@update')->name('employee-update');

Route::post('/employee/store','EmployeeController@store')->name('employee-store');

Route::get('/employee/{id}', 'EmployeeController@show')->name('employee-show');
