<?php

/*
===========================================
  ESTRUTURAS DE CONTROLE
===========================================

if...else
while
do...while
for
foreach
switch
break
continue

*/


// ==========================================
// 1. IF, ELSE E ELSEIF
// ==========================================

// if: Executa o bloco se a condição for verdadeira.
// else: Executa se a condição do if for falsa.
// elseif: Testa uma nova condição se a anterior falhar.

$nota = 7;

if ($nota >= 7) {
    echo "Aprovado!";
} elseif ($nota >= 5) {
    echo "Recuperação!";
} else {
    echo "Reprovado!";
}


// ==========================================
// 2. SWITCH
// ==========================================

// Switch: Compara uma variável com vários valores fixos (cases)

$dia = "2";

switch ($dia) {
    case "1":
        echo "Segunda-feira";
        break;
    case "2":
        echo "Terça-feira";
        break;
    default:
        echo "Outro dia";
}


// ==========================================
// 3. LAÇO FOR
// ==========================================

// O laço for é ideal quando você sabe exatamente quantas vezes o bloco de código deve rodar.
// Ele usa um valor inicial, uma regra de parada e um passo de aumento.
// Exemplo básico contando de 1 até 5:

for ($i = 1; $i <= 5; $i++) {
    echo "Número: $i <br>";
}


// ==========================================
// 4. LAÇO FOREACH
// ==========================================

// O laço foreach passa por cada item de uma matriz (array)
// sem precisar controlar números de índice manualmente.
// Exemplo simples com uma lista de frutas:

$frutas = ["Maçã", "Banana", "Uva"];

foreach ($frutas as $fruta) {
    echo "Fruta: $fruta <br>";
}