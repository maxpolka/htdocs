<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
   ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);

Route::add(['GET', 'POST'], '/colculate_compos', [Controller\Site::class, 'colculate_compos']);
Route::add(['GET', 'POST'], '/department_sel', [Controller\Site::class, 'department_sel']);
Route::add(['GET', 'POST'], '/tier', [Controller\Site::class, 'tier']);
Route::add(['GET', 'POST'], '/Add_employee', [Controller\Site::class, 'Add_employee']);
Route::add(['GET', 'POST'], '/employee', [Controller\Site::class, 'employee']);

