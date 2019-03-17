<?php

    Route::get('employees', 'EmployeeController@index');

    Route::get('employee/{id}', 'EmployeeController@showForm')->name('employee.showForm');
    Route::post('employee/{id}', 'EmployeeController@showForm')->name('employee.new');
    Route::patch('employee/{id}', 'EmployeeController@edit')->name('employee.edit');