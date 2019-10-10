<?php

//ARRAY

$pessoa = [
    "Nome" => "Jon",
    "Sobrenome" => "Snow",
    "Idade" => 27,
    "Passatempos" => ["Netflix", "Futebol", "Música"]
];

$pessoa["Idade"] = 25;
$pessoa["Endereço"]= "Winterfell";
$pessoa["Passatempos"][] = "Games";

echo '<pre>';
print_r ($pessoa);
echo '</pre>';

//CONDICIONAL

// 1. Defina duas variáveis com números e compare-as com um if para decidir qual número
// é maior e imprima "O maior número é N", onde N é o valor da variável que acabou por
// ser maior, e outro para cobrir o caso inverso.

$num1 = 200;
$num2 = 120;

if ($num1 > $num2) {
    echo "O maior número é " . $num1;
} else{
     echo "O menor número é " . $num2;
}
echo "<br>";
echo "<br>";

// 2. Usando a própria função PHP rand (x, y), onde "x" é o número mínimo e "y" o número
// máximo, gere um número aleatório entre 1 e 5, atribua-o a uma variável e imprima a
// variável se e somente se o número gerado for 3 ou 5.

$randomNumber = rand (1,5);

if ($randomNumber == 3 || $randomNumber == 5) {
    echo $randomNumber;
}
echo "<br>";
echo "<br>";


// 3. Usando a variável do exercício anterior, imprima "O número NÃO é 3" no caso em que
// a premissa é verdadeira. Caso contrário, basta imprimir o número 3.

if ($randomNumber !== 3){
    echo "O número não é 3";
} else{
    echo "É o número " . 3;
}
echo "<br>";
echo "<br>";

// 4. Usando a mesma lógica anterior gere um número entre 1 e 100, verifique se é maior
// que 50. No caso em que é verdade, retorne "O número é maior que 50", no caso de
// ser falso: "O número é menor que 50".

$randomNumber2 = rand (1,100);

if ($randomNumber2 > 50) {
    echo "O número é maior que 50";
} else {
    echo "O número é menor que 50";
}
echo "<br>";
echo "<br>";

// 5. Gere duas variáveis, um $username e $password, ambas com strings. Valide se o
// usuário corresponde a "admin" ea senha para "1234". Em caso afirmativo, imprima
// "Bem-vindo!", Caso contrário, imprima que há um erro no login.

$username = "admin";
$password = "1234";

if ($username == "admin" && $password == "1234") {
    echo "Bem-vindo!";
} else {
    echo "Erro de login";
}
echo "<br>";
echo "<br>";

// 6. Teremos 3 variáveis: idade (um número), casado (um booleano) e sexo (string que
// pode ser "masculino", "feminino" ou "outro"). Se a pessoa tiver mais de 18 anos de
// idade e não for casada, a mensagem "Bem-vindo" será impressa.

$idade = 33;
$casado = true;
$sexo = "outro";

if ($idade > 18 && $casado == false) {
    echo "Bem-vindo!!";
} elseif ($sexo == "outro"){
    echo "Bem-vindo!!!!";
} else{
    echo "Não é bem-vindo!";
}

// a. Vamos modificar o exercício anterior para também imprimir bem-vindo se o sexo for
// "Outro", independentemente do restante das condições.

echo "<br>";
echo "<br>";

// 7. Defina uma variável $number com um número. Imprimir "O número é par" se for ou "O
// número for ímpar", se não for. Tentar utilizar if ternário

$number = rand (0,30);

echo $number % 2 == 0 ? "O número é par" : "O número é ímpar";

echo "<br>";
echo "<br>";

// 8. Crie uma variável $nota com um valor de 1 a 10. Usando um switch gerar a seguinte
// lógica:
// - Se a nota for menor que 4 imprima "Aluno reprovado"
// - Se a nota for 4 ou 5 print "Na risca"
// - Se a nota estiver entre 6 e 8 print "Bom !!!"
// - Se a nota for um 9 print " MUITO BOM !! "
// - Se a nota é uma impressão 10" Excelente !!!!! "

$nota = 11;

switch ($nota) {
    case 1:
    case 2:
    case 3:
        echo "Aluno reprovado";
        break;
    case 4:
    case 5:
        echo "Na risca";
        break;
    case 6:
    case 7:
    case 8:
        echo "Bom!!!";
        break;
    case 9:
        echo "MUITO BOM!!";
        break;
    case 10:
        echo "Excelente!!!!!";
        break;
    default:
        echo "O número não é válido";
        break;
}

// 9. Adicione ao anterior mude uma mensagem caso a nota não seja um número de 1 a 10
// dizendo" O número não é válido ".

?>