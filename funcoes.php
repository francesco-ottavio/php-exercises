<?php

// 1- Gerar um arquivo chamado funcoes.php:
// a. Definir uma função maior() que receba 3 números e retorne o maior
// deles.

function maior($num1,$num2,$num3){
    if ($num1 == $num2 || $num1 == $num3 || $num2 == $num3) {
        echo "Números iguais";
        exit;
    }
    if ($num1 > $num2 && $num1 > $num3) {
        echo $num1;
    } if ($num2 > $num1 && $num2 > $num3){
        echo $num2;
    } if ($num3 > $num1 && $num3 > $num2) {
        echo $num3;
    }
}

// maior(30,30,20);

// b. Definir uma função tabela() que receba um parâmetro base, um
// parâmetro limite, e retorne um array com a sequência de números a
// partir do número base até o número limite.

// function tabela($base, $limite){
//     if ($limite < $base) {
//         echo "Base menor que o limite";
//         exit;
//     }
//     $array= [];
//     for ($i=$base; $i <= $limite; $i++) { 
//         $array[] = $base ++;
//     }
//     echo '<pre>';
//     print_r($array);
//     echo '</pre>';
// }

// tabela(5,10);

// c. Definir uma variável chamada numeroMagico, que contenha um
// número. Tal variável deverá estar na primeira linha do nosso código
// PHP.

// $numeroMagico = 50;

// // d. Modificar maior() de forma que, se receber apenas 2 parâmetros, a
// // função compare esses dois números com numeroMagico.

// function maior($num1,$num2,$num3 = ""){
//     global $numeroMagico;
//     if ($num3 == "") {
//         $num3 = $numeroMagico;
//     }
//     if ($num1 == $num2 || $num1 == $num3 || $num2 == $num3) {
//         echo "Números iguais";
//         exit;
//     }
//     if ($num1 > $num2 && $num1 > $num3) {
//         echo $num1;
//     } if ($num2 > $num1 && $num2 > $num3){
//         echo $num2;
//     } if ($num3 > $num1 && $num3 > $num2) {
//         echo $num3;
//     }
// }

// maior(5,10);


// e. Modificar tabela de forma que, se a receber apenas um parâmetro,
// a função use numeroMagico como limite

// function tabela($base, $limite = ""){
//     global $numeroMagico;
//     if ($limite == ""){
//         $limite = $numeroMagico;
//     }
//     if ($limite < $base) {
//         echo "Base menor que o limite";
//         exit;
//     }
//     $array = [];
//     for ($i=$base; $i <= $limite; $i++) { 
//         $array[] = $base ++;
//     }
//     echo '<pre>';
//     print_r($array);
//     echo '</pre>';
// }

// tabela(30);