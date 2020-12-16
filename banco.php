<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$primeiraConta = new Conta(new Titular(new CPF('123.456.789-00'),'Vinicius Dias' ));
$primeiraConta->deposita(500);
$primeiraConta->saca(300);


echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;;
echo Conta::recuperaNumeroDeContas() . PHP_EOL;
