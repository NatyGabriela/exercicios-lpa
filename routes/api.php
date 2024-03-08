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

                            Route::get('multiplicacao' , function (Request $request){
                                $primeiroNumero = 10;
                                $segundoNumero = 5;
                                $resultado = $primeiroNumero*$segundoNumero;
                                return ' O resultado da multiplicacao é'. 
                                $primeiroNumero . ' * ' . $segundoNumero . ' = ' . $resultado;
                                 }); 
                                 
                                 
                                 Route::get('media', function (Request $request){
                                    $primeiraNota = 7;
                                    $segundaNota = 3;
                                    $terceiraNota = 5;
                                    $quartaNota = 2;
                                    $quintaNota = 8;
                                    $resultado= $primeiraNota + $segundaNota + $terceiraNota + $quartaNota + $quintaNota;
                                    return ' O resultado da media e'.
                                     $primeiraNota .' + ' . $segundaNota . ' + ' . $terceiraNota . ' + ' . $quartaNota . ' + '. $quintaNota . ' = '. $resultado/5;
                                     });

                                     Route::get('divisao', function (Request $request){
                                        $primeiroNumero = 20;
                                        $segundoNumero = 10;
                                        $resultado = $segundoNumero / $primeiroNumero;
                                        return ' O resultado da divisao e ' . 
                                        $segundoNumero . ' / ' . $primeiroNumero . ' = '. $resultado;
                                         });  
                                         
                                         
                                         Route::get('dobro', function (Request $request){
                                            $primeiroNumero = 40;
                                            $resultado = $primeiroNumero * 2;
                                            return 'O dobro de 30 e igual ' . 
                                            $resultado;
                                         });                        


