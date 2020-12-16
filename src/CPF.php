<?php


class CPF
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
    }

    public function recuperaNumeroCpf(): string
    {
        return $this->cpf;
    }
}