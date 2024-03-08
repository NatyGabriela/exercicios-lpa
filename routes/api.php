<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('nome/users', function (Request $request){
    $nome = 'naty';
   return $nome;
    });
    
    Route::get('nome/idade' , function (Request $request){
        $nome = 'naty';
        $idade = '16' ;
        return "meu nome é" . $nome . " ,tenho" . $idade . "anos de idade";
        }); 