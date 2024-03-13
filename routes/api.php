<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('nome/users', function (Request $request) {
    $nome = $request->input('naty');
    return $nome;
});

Route::get('nome/idade', function (Request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    return "meu nome é" . $nome . " ,tenho" . $idade . "anos de idade";
});

Route::get('nome/cidade', function (Request $request) {
    $nome = $request->input('nome');
    $ano = $request->input('ano');
    $cidade = $request->input('cidade');
    return "meu nome é" . $nome . "nasci no ano de " .  "na cidade de" . $cidade;
});

Route::get('somar', function (Request $request) {
    $primeiroNumero =$request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');

    $resultado = $primeiroNumero + $segundoNumero;
    return 'O resultado da soma dos numeros é ' .
        $primeiroNumero . ' + ' . $segundoNumero .   ' = ' . $resultado;
});

Route::get('subtrair', function (Request $request) {
    $primeiroNumero =$request->input>('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $terceiroNumero = $request->input('terceiroNumero');
    $resultado = $primeiroNumero - $segundoNumero - $terceiroNumero;
    return 'O resultado da subtracao dos numeros é: ' .
        $primeiroNumero . ' - ' . $segundoNumero . ' - ' . $terceiroNumero . ' = ' . $resultado;
});

Route::get('dividir', function (Request $request) {
    $primeiroNumero =$request->input('primeiroNumero');
    $segundoNumero =$request->input('seundoNumero');
    $resultado = $primeiroNumero / $segundoNumero;
    return 'O resultado da divisao é' .
        $primeiroNumero . ' / ' . $segundoNumero . ' = ' . $resultado;
});

Route::get('multiplicacao', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero =$request->input('segundoNumero');
    $resultado = $primeiroNumero * $segundoNumero;
    return ' O resultado da multiplicacao é' .
        $primeiroNumero . ' * ' . $segundoNumero . ' = ' . $resultado;
});


Route::get('media', function (Request $request) {
    $primeiraNota = $request->input('primeiraNota');
    $segundaNota =$request->input('segundaNota');
    $terceiraNota = $request->input('terceiraNota');
    $quartaNota = $request->input('quartaNota');
    $quintaNota = $request->input('quintaNota');
    $resultado = $primeiraNota + $segundaNota + $terceiraNota + $quartaNota + $quintaNota;
    return ' O resultado da media e' .
        $primeiraNota . ' + ' . $segundaNota . ' + ' . $terceiraNota . ' + ' . $quartaNota . ' + ' . $quintaNota . ' = ' . $resultado / 5;
});

Route::get('divisao', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $resultado = $segundoNumero / $primeiroNumero;
    return ' O resultado da divisao e ' .
        $segundoNumero . ' / ' . $primeiroNumero . ' = ' . $resultado;
});


Route::get('dobro', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $resultado = $primeiroNumero * 2;
    return 'O dobro de 30 e igual ' .
        $resultado;
});

Route::get('area ', function (Request $request) {
    $base = $request->input('base');
    $altura = $request->input('altura');
    $resultado = $base . $altura;
    return $resultado = $base * $altura;
});

Route::get('desconto', function (Request $request) {
    $compra = $request->input('compra');
    $desconto = $request->input('desconto');
    $porcentagem = $compra / 100;
    $resultado = $compra - ($desconto * $porcentagem);
    return $resultado;
});

Route::get('aumento', function (Request $request) {
    $salario = $request->input('salario');
    $aumento = $request->input('aumento');
    $porcentagem = $aumento / 100 *  $salario;
    $resultado = $salario + $porcentagem;
    return 'O salario anterior e de ' . $salario . 'O valor do aumento e de ' . $porcentagem . ' , o salario atual e de ' . $resultado;
});

Route::get('salario ', function (Request $request) {
    $compra = $request->input('compra');
    $resultado = $compra / 10;
    return $resultado;
});

Route::get('comissao ', function (Request $request) {
    $valorvendas = $request->input('valor');
    $comissao = $request->input('comissao');
    $resultado = $valorvendas / $comissao;
    return $resultado;
});

Route::get('dias', function (Request $request) {
    $dias = $request->input('dias');
    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;
    $resultado = $horas . $minutos . $segundos;
    return $resultado;
});

Route::get('produto', function (Request $request) {
    $precoProduto = $request->input('Produto');
    $quantidade = $request->input('quantidade');
    $resultado = "valor total: " . $precoProduto * $quantidade;
    return $resultado;
});
