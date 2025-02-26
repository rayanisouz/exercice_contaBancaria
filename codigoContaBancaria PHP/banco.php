<?php
// Vinculamos os dados do titular ao banco
use codigoContaBancaria\src\CPF;
use codigoContaBancaria\src\Endereco;
use codigoContaBancaria\src\Funcionario;
use codigoContaBancaria\src\Pessoa;

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$nami = new Titular(new CPF('123.456.789-10'), 'Nami', $endereco);
$primeiraConta = new Conta($nami);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
