<?php

// 1. Mostra a tabela de multiplicação de 2 usando um for.

$tab = 2;

for ($i=1; $i <= 10 ; $i++) {
    $res = $i * $tab; 
    echo "$i x $tab =  $res <br>";    
}

echo "<br>";
echo "<br>";

//Solução Hendy

for ($i=1; $i <= 10; $i++) { 
    echo "2 x $i = " . 2*$i . "<br>";
}

echo "<br>";
echo "<br>";

// 2. Um loop while que conta de 100 a 85 (observe que, nesse caso, está
// diminuindo).

$i = 100;
do {
    echo "$i ";
    $i--;
} while ($i >= 85);

echo "<br>";
echo "<br>";

// 3. Um loop while que dê uma variável $counter que recebe valores de 1 a 5,
// mostra por tela duas vezes o valor de $counter, ou seja, que mostra 2, 4, 6, 8,
// 10.



// 4. Utilizando um while, vamos fazer um programa que puxa uma moeda (ele
// selecionará um número aleatório que pode ser 0 ou 1) até que ele tire 5 vezes
// cara(o número 1). Quando terminar, você deve imprimir quantas jogadas de
// moedas foram necessárias para obter 5 vezes a cara.

$cara = 0;
$jogadas = 0;

while ($cara < 5) {
    $moeda = mt_rand(0,1);
    if($moeda == 1){
        $cara++;
    }
    $jogadas++;
}
echo "Joguei a moeda $jogadas vezes";


echo "<br>";
echo "<br>";

// 5. Defina um array com 5 strings que são nomes. Passe por este array para
// imprimir cada um dos nomes na tela.
// a. Resolva este problema com um for.
// b. Resolva esse problema com o while.
// c. Resolva este problema com um do / while.
// d. Resolva este problema com um foreach.

$umArray = ["João", "Maria", "Pedro", "José", "Matheus"];

for ($i=0; $i < count($umArray) ; $i++) { 
    echo "$umArray[$i] ";
}
echo "<br>";
echo "<br>";

$i=0;
while ($i < count($umArray) ) {
    echo "$umArray[$i] ";
    $i++;
}
echo "<br>";
echo "<br>";

$position = 0;
do {
    echo "$umArray[$position] ";
    $position++;
} while ($position < count($umArray));
echo "<br>";
echo "<br>";

foreach ($umArray as $key) {
    echo "$key ";
}
echo "<br>";
echo "<br>";

// 6. Defina um array com 10 números aleatórios entre 0 e 10. Passe por esse array
// para imprimir todos os números. A execução deve ser concluída se qualquer
// um dos números encontrados for um 5 (deve imprimir "O 5 foi encontrado!")


$resultado = [];
    
for ($i=0; $i <= 10; $i++) {
$numRandom = mt_rand(0,10); 
$resultado[$i]=$numRandom;
if ($numRandom == 5) {
    echo "O 5 foi encontrado!";
    break;
    }
}

//Solução Hendy

// for ($i=0; $i < 10; $i++) { 
//     $resultado[$i] = mt_rand(0,10);
// }

// foreach ($resultado as $key => $value) {
//     if ($value == 5) {
//         echo "Encontrei o 5 na posição $key";
//         break;
//     }
// }

echo '<pre>';
print_r ($resultado);
echo '</pre>';



// for($i=0;$i < 10;$i++){
//     $array[$i] = rand(0,10);    
//         for($a=0;$a < $i;$a++){        
//             while($array[$i] == $array[$a]){        
//                 $array[$i] = rand(0,10);                
//                 $a = 0;            
//             }	
//         }        
//     }    
//     print_r($array);


// 7. Defina um array com 10 números aleatórios entre 0 e 100. Passe por essa
// matriz, contando quantos números são pares.

// 8. Definir uma variável $mascote que é um array associativo
// a. No índice de animais, você deve dizer qual animal é
// b. Na idade do índice deve informar a idade.
// c. No índice de altura, você deve dizer a altura.
// d. No índice do nome, você deve dizer o nome
// e. Percorra os valores do array com uma impressão foreach (como um
// exemplo):
// animal: cão
// idade: 5 anos
// altura: 0,60
// nome: Sonic

// 9. Começando de um arquivo com a seguinte variável definida:
// $ceu = array ("Itália" => "Roma", "Luxemburgo" => "Luxemburgo", "Bélgica" =>
// "Bruxelas", "Dinamarca" => "Copenhaga", "Finlândia" => "Helsínquia", "França" =>
// "Paris", "Eslováquia" => "Bratislava", "Eslovénia" => "Liubliana", "Alemanha" =>
// "Berlim", "Grécia" => "Atenas", "Irlanda" => "Dublin", "Holanda" => "Amesterdão",
// "Portugal" => "Lisboa", "Espanha" => "Madrid", "Suécia" => "Estocolmo", "Reino
// Unido" => "Londres", "Chipre" => "Nicósia", "Lituânia" => "Vilnius", "República
// Checa" => "Praga", "Estónia" => "Tallinn", "Hungria" => "Budapeste", "Letónia" = >
// "Riga", "Malta" => "Valeta", "Áustria" => "Viena", "Polónia" => "Varsóvia");
// Crie um script que mostre o nome da capital e o país da variável $ceu.

// 10. Começando de um arquivo com a seguinte variável definida:
// $ceu = [
// "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
// "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
// "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
// "França" => ["Paris", "Nantes", "Lyon"],
// "Itália" => ["Roma", "Milão", "Veneza"],
// "Alemanha” => ["Munique", "Berlim", "Frankfurt"]
// ];

// Crie um script que mostre o nome de cada país e suas cidades da variável $ceu
// com o seguinte formato:
// As cidades da Argentina são:
// ● Buenos Aires
// ● Córdoba
// ● Santa Fé
// As cidades do Brasil são:
// ● Brasília
// ● Rio de Janeiro
// ● São Paulo

// 15. Do exercício anterior:
// ● Adicione a cada país um dado extra, além de suas cidades chamadas
// eAmericano. Este valor deve ser verdadeiro ou falso.
// ● Faça com que a impressão anterior não mostre países que não sejam
// americanos.

// IMPORTANTE: Para que isso funcione de maneira simples, você deve criar uma
// matriz associativa para cada país em que cada país terá os dados de suas
// cidades e seja americano.








?>