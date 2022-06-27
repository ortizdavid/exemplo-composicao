<?php 

class Endereco 
{
    private string $cidade;
    private string $bairro;
    private string $rua;

    public function __construct(string $cidade, string $bairro, string $rua)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
    }

    public function __toString() : string
    {
        return "Cidade: {$this->cidade}\nBairro:{$this->bairro}\nRua:{$this->rua}\n";
    }
}