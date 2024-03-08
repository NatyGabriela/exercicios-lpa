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

        Route::get('somar', function(Request $request){
            $primeiroNumero = 20;
            $segundoNumero = 10;
    
            $resultado = $primeiroNumero + $segundoNumero;
            return 'O resultado da soma dos numeros é '.
            $primeiroNumero . ' + '. $segundoNumero .   ' = '. $resultado;
    
            });

            Route::get('subtrair', function(Request $request){
                $primeiroNumero = 20;
                $segundoNumero = 10;
                $terceiroNumero = 30;
                $resultado = $primeiroNumero - $segundoNumero - $terceiroNumero; 
                return 'O resultado da subtracao dos numeros é: ' . 
                $primeiroNumero . ' - ' . $segundoNumero . ' - ' . $terceiroNumero . ' = ' . $resultado;
                        });

                        Route::get('dividir', function (Request $request){
                            $primeiroNumero = 60;
                            $segundoNumero = 20;
                            $resultado=$primeiroNumero/$segundoNumero;
                            return 'O resultado da divisao é'. 
                            $primeiroNumero . ' / ' . $segundoNumero . ' = ' . $resultado;
                            });

