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
        
        Route::get('nome/cidade', function(Request $request){
            $nome = "naty" ;
            $ano = "2007" ;
            $cidade = "Presidente Epitácio" ;
            return "meu nome é" . $nome . "nasci no ano de " .  "na cidade de" . $cidade;     
        });

