<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo = 0;

    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->$saldo) {
            echo "Saldo indisponivel";
            return;
        } 
        $this->$saldo -= $valorASacar;
        
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor a depositar";
            return;
        } 
        $this->saldo += $valorADepositar;
        
    }


    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if($valorATransferir > $this->saldo) {
            echo "SAldo Indisponivel";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorADepositar);
        
    }
}
