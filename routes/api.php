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

Route::get('verifica/idade', function(Request $request){
$idade = $request->input('idade');

if($idade > 18){
    return "maior de idade";
} else {
    return "menor de idade";
}
});

Route::get('verificar/par', function(Request $request){
$numero = $request->input('numero');

if($numero % 2 == 0){
    return 'par';
} else {
    return 'impar';
}

});

Route::get('verificar/numero', function (Request $request){
$numero = $request->input('numero');

if($numero >= 10){
    return 'maior numero';
    
} else{
    return 'menor numero';
}
});

Route::get('temperatura', function (Request $request){
$temperatura = $request->input('numero');

if($temperatura >= 30){
    return 'esta quente';
}else{
    return 'nao esta quente';
}
});

Route::get('positivo/negativo', function (Request $request){
$numero = $request->input('numero');
if ($numero >0){
    return 'este numero e positivo';

}else if($numero <0){
    return 'este numero e negativo';

}else {
    return 'este numero e zero';
}
});

Route::get('maior/numero', function (Request $request){
$numero1 = $request->input('numero1');
$numero2 = $request->input('numero 2');
if ('$numero1 > $numero2'){
    return 'o numero maior e ' . $numero1;

} else {
    return 'o numero menor e ' . $numero2;
}


});

Route::get('divisao/tres', function (Request $request){
    $numero =$request->input('numero');
    $resto = ($numero %3);
    if($resto ==0){
    return 'numero e divisivel';
    }else{
        return 'numero nao e divisivel';
    }
});

Route::get('questao 6' , function(Request $request){
$numero =$request->input('numero');
$resto = ($numero %9);
    if($resto ==0){
        return 'numero e divisivel';
    }else{
        return 'numero nao e divisivel';
    }
});

Route::get('questao 9', function (Request $request){
$idade =$request->input('numero');
if ($idade = 12){
return 'voce e uma crianca';
}else{
    return 'voce e maior que crianca';
}

});

Route::get('questao 10', function (Request $request){
$numero =$request->input('numero');
if ($numero){
    return 'este numero e positivo';
}else{
    return 'este numero e impar';
}

});

Route::get('divisivel/seis', function (Request $request){
$numero =$request->input('numero');
$resto =($numero %6);
if($resto ==0){
    return 'numero e divisivel';
}else{
    return 'numero nao e divisivel';
}
});

Route::get('usuario/nome', function (Request $request){
$nome =$request->input('nome');
if ($nome ){
    return 'nome e alice';
}else{
    return 'ola alice';
}
});

Route::get('nome/idade', function (Request $request){
$nome =$request->input('nome');
$idade =$request->input('idade');
if($idade >=18){
    return 'voce e maior de idade';
}else{
    return 'maior igual de idade';
}


});

Route::get('questao 14', function (Request $request){
$idade=$request->input('idade');
$carteira=$request->input('carteira');
if ($idade >=18 . $carteira = "sim"){
    return 'voce pode dirigir';
} else if ($idade < 18 . $carteira ="nao"){
    return 'voce nao pode dirigir';
}
});

Route::get('questao 13', function (Request $request){
$numero1=$request->input('numero1');
$numero2=$request->input('numero2');
if ($numero1 < $numero2){
    return 'numero e menor que ' . $numero1;
} else if ($numero2 < $numero1){
    return 'numero e menor que ' . $numero2;
} else {
    return 'eles sao iguais';
}

});

Route::get('questao 8', function (Request $request){
$numero=$request->input('numero');
$resto=($numero %7);
if ($resto ==0){
    return 'numero e divisivel';
}else{
    return 'numero nao e divisivel';
}
});

Route::get('questao 11', function (Request $request){
$numero=$request->input('numero');
if ($numero >100){
    return 'numero e maior ';
}else if ($numero <100){
    return "numero e menor ";
}
});

Route::get('questao 20', function (Request $request){
$numero1=$request->input('numero1');
$numero2=$request->input('numero2');
$resultado=($numero1 + $numero2);
if ($resultado / 2 == 0 . $numero1 * $numero2){
    return ' este numero e par';
}
});

Route::get('questao 19', function (Request $request){
$numero1=$request->input('numero1');
$numero2=$request->input('numero2');
$resultado = ($numero1 * $numero2);
if ($resultado > 100){
    return 'o resultado  e maior que cem';
} else{
return 'o resultado e menor que cem';
}
});


