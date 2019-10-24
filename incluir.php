<?php

// 3. Gerar um arquivo chamado incluir.php que retorne um echo com a
// seguinte string “Sou incluir.php”.
// a. Incluir no arquivo, cumprimento.php. O que acontece?
// b. Substituir include por require. O que acontece?
// c. Gerar na mesma pasta um arquivo cumprimento.php que faça
// somente echo “Olá, Mundo”. O que acontece agora com o ponto a e
// o ponto b?
// d. No arquivo incluir.php, substituir o require por include, e incluir 3
// vezes o mesmo arquivo. O que acontece?
// e. O arquivo incluir.php, substituir todos os include por include_once.
// O que acontece?

include_once ('cumprimento.php');
include_once ('cumprimento.php');
include_once ('cumprimento.php');

echo "Sou incluir.php";

