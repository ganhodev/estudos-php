<?php

/*
===========================================
  FUNÇÕES
===========================================

Uma função é um bloco de instruções que pode ser usado repetidamente em um programa.
As funções em PHP são definidas usando a palavra-chave function:

*/


// ==========================================
// 1. FUNÇÃO SIMPLES (SEM PARÂMETRO)
// ==========================================

function mostraMensagem(): void {
    echo "Olá Mundo!";
}

mostraMensagem(); // chama a função


// ==========================================
// 2. FUNÇÃO COM PARÂMETRO
// ==========================================

function boasVindas(string $nome): void {
    echo "Bem-vindo, $nome!";
}

boasVindas("Guilherme");


// ==========================================
// 3. FUNÇÃO COM RETORNO
// ==========================================

$a = 10;
$b = 20;

function soma(int $a, int $b): int {
    return $a + $b;
}

$resultado = soma($a, $b);
echo "O resultado da soma é: $resultado";