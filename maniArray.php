<?php

$keys = array ('nome', 'telefone', 'endereço');
$values = array('Carolina', '11975891168', 'Rua Mateu Grou');
$names = array('Carol', 'Mari', 'Marcia', 'Vini', 'Luisa', 'Marcia');
$numbers = array(15, 5, 10, 20);

echo '<pre>';
$register = (array_combine($keys, $values)); // combina dois arrays transformando um em chaves e o outro em valores;
echo '</pre>';
echo '</pre>';
var_dump(array_count_values($names)); //conta quantas ocorrências tem um valor em um array;
echo '</pre>';
echo '<pre>';
var_dump(array_key_exists('nome', $register)); //vê se uma chave existe em um array associativo, retorna booleano;
echo '</pre>';
echo '<pre>';
var_dump(array_keys($register)); //retorna um array com as chaves de um array associativo;
echo '</pre>';
echo '<pre>';
var_dump(array_merge($keys, $names, $values)); //junta dois ou mais arrays;
echo '</pre>';
echo '<pre>';
var_dump(array_rand($names)); //retorna um indice randomico de um array;
echo '</pre>';
echo '<pre>';
var_dump(array_search('Carol', $names)); //procura um valor e retorna o índice do valor;
echo '</pre>';
echo '<pre>';
var_dump(array_sum($numbers)); //soma todos os valores de um array;
echo '</pre>';
echo '<pre>';
var_dump(array_unique($names)); //elimina valores repitidos de um array;
echo '</pre>';
echo '<pre>';
var_dump(array_values($register)); //retorna os valores de um array associativo;
echo '</pre>';
echo '<pre>';
asort($names);
var_dump($names); //ordena um array;
echo '</pre>';
echo '<pre>';
var_dump(sizeof($names)); //retorna o tamanho do array;
echo '</pre>';
echo '<pre>';
extract($register);
echo $endereço; //extrai os valores de um array transformando as chaves em variáveis;
echo '</pre>';
echo '<pre>';
var_dump(in_array(5, $numbers)); //procura a existência um elemento dentro de um array, retorna bool;
echo '</pre>';
echo '<pre>';
$acentos = array('á', 'é', 'í', 'ó', 'ú');
$vogais = array('a', 'e', 'i', 'o', 'u');
var_dump(array_replace($acentos, $vogais)); //substitui um array por outro através dos índices;
echo '</pre>';
// funções de navegação de arrays.
echo reset($names) . '<br>'; // volta para o primeiro índice do array.
echo next($names) . '<br>'; //segue para a próxima posição.
echo current($names) . '<br>'; //mostra a posição atual do ponteiro de navegação.
echo prev($names) . '<br>'; //retrocede para a posição anterior.
echo key($names) . '<br>'; //mostra o índice da posição atual.
echo end($names) . '<br>'; //vai para a última posição.