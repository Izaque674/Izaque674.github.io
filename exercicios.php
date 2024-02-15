<?php

//Substituir todas as vogais por *
$string = "Frase teste de vogais";
echo str_replace(["a","e","i","o","u"],"*", $string);



//Verificar se um número é primo
function isPrimo($num)
{
    for( $i = 2; $i < $num; $i++ )
    {
        if($num % $i == 0)
        {
            return false;
        }
    }
    return true;
}

echo"<br>";

$numero = 19;
if(isPrimo($numero))
{
    echo " $numero é  primo";
}
else
{
    echo "$numero não é  primo";
}

echo"<br><br>";

//Inverter uma string sem usar a função strrev
$string = "Repeticao";
$invertida = "";

for($i = strlen($string) - 1; $i >= 0; $i--)
{
    $invertida .= $string[$i];
}

echo $invertida;

echo"<br><br>";

//Crie uma função que verifique se uma palavra é um palíndromo 
function isPalindromo($palavra)
{
    $palavraInvertida = strrev($palavra);
    return strtolower($palavra) === strtolower($palavraInvertida);
}

$teste = "radar";
if(isPalindromo($teste))
{
    echo "$teste é um palíndromo";
}
else
{
    echo "$teste não é palíndromo";
}

echo"<br><br>";

// Crie uma função que receba um número e retorne se é positivo, negativo ou zero.

$numero = 45;

if($numero > 0)
{
    echo "$numero é positivo";
}

if($numero == 0)
{
    echo "$numero é zero";
}

if($numero < 0)
{
    echo "$numero é negativo";
}

echo"<br><br>";

// Conte o número de palavras em uma frase e imprima cada palavra em uma nova linha.

$frase = "esta é a primeira frase";
$numero_palavras = str_word_count($frase);

$palavras = str_word_count($frase,  1);
foreach ($palavras as $palavra) 
{
    echo "$palavra <br>";
}

echo"<br><br>";

// Crie uma função que remova os espaços em branco de uma string.

$fra = "Removendo os espaços em branco";
$numespaco = str_word_count($fra);

$frasesemespaco = str_replace(' ', '', $fra);
echo $frasesemespaco;

echo"<br><br>";

// Crie um programa que calcule e imprima os números Fibonacci até o décimotermo.

function fibonacci($n) 
{
    $sequencia = array(0,  1);
    for ($i =  2; $i <= $n; $i++) 
    {
        $sequencia[$i] = $sequencia[$i -  1] + $sequencia[$i -  2];
    }
    return $sequencia;
}

$decimoTermo = fibonacci(10);
foreach ($decimoTermo as $numero) 
{
    echo $numero . "<br>";
}

echo"<br><br>";

// Crie uma função que receba um texto e retorne se é um pangrama (contém todasas letras do alfabeto pelo menos uma vez).

function isPangrama($frase) {
    $frase = strtolower($frase);
    $frase = str_replace(' ', '', $frase);

    $caracteres = array_unique(str_split($frase));

    $numCaracteres = count($caracteres);

    return $numCaracteres == 26;
}

$frase = "hoje a noite, sem luz, decidi xeretar a quinta gaveta de vovo: achei linguica, pao e fuba.";
if (isPangrama($frase)) 
{
    echo "A frase é um pangrama.";
} 
else 
{
    echo "A frase não é um pangrama.";
}

echo"<br><br>";

// Crie um programa que imprima os números de 1 a 20, substituindo múltiplos de 3 por "Fizz" e múltiplos de 5 por "Buzz".

for ($i =  1; $i <=  20; $i++) {
    if ($i %  3 ==  0) 
    {
        echo "Fizz\n";
    } 
    if ($i %  5 ==  0) 
    {
        echo "Buzz\n";
    } 
    else 
    {
        echo $i . "\n";
    }
}
?>