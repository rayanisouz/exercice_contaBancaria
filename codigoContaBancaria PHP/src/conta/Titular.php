<?php

namespace codigoContaBancaria\src\conta\Titular;

use codigoContaBancaria\src\CPF;
use codigoContaBancaria\src\Endereco;
use codigoContaBancaria\src\Pessoa;

class Titular extends codigoContaBancaria\src\pessoa
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}
