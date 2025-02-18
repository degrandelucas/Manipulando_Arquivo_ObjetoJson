<?php

$string = '{"nome":"Lucas","anoNascimento":1993,"profissao":"Dev"}';

$objeto = json_decode($string);

var_dump($objeto);

echo $objeto->nome . PHP_EOL . "\n";

$arrayAssociativo = json_decode($string, 'true');

var_dump($arrayAssociativo);

echo $arrayAssociativo['nome'] . PHP_EOL . "\n";