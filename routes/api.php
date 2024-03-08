<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('nome/users', function (Request $request){
    $nome = 'naty';
   return $nome;
    });