<?php

class DadoPessoal 
{
    private string $nome;
    private string $sexo;
    private string $estadoCivil;

    public function __construct(string $nome, string $sexo, string $estadoCivil)
    {
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->estadoCivil = $estadoCivil;
    }

    public function __toString() : string
    {
        return "Nome: {$this->nome}\nSexo: {$this->sexo}\nEstado Civil: {$this->estadoCivil}\n";
    }
}

