<?php

// 4. Criar uma arquivo tudoJunto.php que inclua o arquivo funcoes.php e
// superficie.php, definindo uma função que receberá os raios de 3 círculos
// e retornará a maior superfície entre ambos. Para este exercício, devemos
// reutilizar as funções já definidas.

include ('superficie.php');
include ('funcoes.php');

//Resolvido.. era só criar a variável global "valor", e solvar os calculos nela... depois trabalhar com ela
// na funcao tuduJunto.


$valor = "";

function tudoJunto($raio1,$raio2,$raio3){
    global $valor;
    circulo($raio1);
    $resultado1 = $valor;
    circulo($raio2);
    $resultado2 = $valor;
    circulo($raio3);
    $resultado3 = $valor;
    maior ($resultado1,$resultado2,$resultado3);
};

tudoJunto(11,0,2);

?>