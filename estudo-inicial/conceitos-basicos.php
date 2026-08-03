<?php

/*
===========================================
  CONCEITOS BÁSICOS DE PHP
===========================================

O que é PHP?
PHP (acrônimo recursivo para PHP: Hypertext Preprocessor) é uma linguagem de script open source
de uso geral, muito utilizada e especialmente adequada para o desenvolvimento web.
Os scripts PHP são executados no servidor e o resultado é enviado de volta para o navegador como HTML simples.

*/


// ==========================================
// SINTAXE BÁSICA
// ==========================================

// Os scripts PHP podem ser colocados em qualquer lugar do documento.
// Instruções PHP terminam com um ponto e vírgula (;).
// Comentários de uma linha começam com //

// Isto é um comentário de uma linha
echo "Olá Mundo!";


// ==========================================
// VARIÁVEIS
// ==========================================

// As variáveis em PHP começam com o símbolo $, seguido pelo nome da variável.
// PHP é uma linguagem fracamente tipada, ou seja, não é necessário declarar o tipo da variável antes de sua atribuição.
// Variáveis são case-sensitive.

$cor = "vermelho";
echo "Minha cor favorita é " . $cor . ".";


// ==========================================
// TIPOS DE DADOS
// ==========================================

// PHP suporta os seguintes tipos de dados:
// String, Integer, Float, Boolean, Array, Object, NULL

$string   = "Olá";
$inteiro  = 123;
$float    = 3.14;
$booleano = true;
$array    = array("volvo", "BMW", "Toyota");
$nulo     = null;