<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
//print_r($categorias);  imprime a variável $categorias indicando suas posições no Array

$nome = 'Eduardo';
$idade = 28;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12)
{
    echo 'infantil';
}
elseif($idade > 12 && $idade <= 18)
{
    echo 'adolescente';
}
else
{
    echo 'adulto';
}
?>