<?php

// 4. Criar uma arquivo tudoJunto.php que inclua o arquivo funcoes.php e
// superficie.php, definindo uma função que receberá os raios de 3 círculos
// e retornará a maior superfície entre ambos. Para este exercício, devemos
// reutilizar as funções já definidas.

include ('superficie.php');
include ('funcoes.php');


function tudoJunto($raio1,$raio2,$raio3){
    $resultado1 = circulo($raio1);
    $resultado2 = circulo($raio2);
    $resultado3 = circulo($raio3);
    maior ($resultado1,$resultado2,$resultado3);
};

tudoJunto(2,3,4);