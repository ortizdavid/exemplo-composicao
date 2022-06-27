<?php
require_once 'Endereco.php';
require_once 'DadoPessoal.php';
require_once 'DadoSaude.php';

class Cidadao 
{
    private int $idCidadao;
    private DadoPessoal $dadoPessoal;
    private DadoSaude $dadoSaude;
    private Endereco $endereco;

    public function __construct(int $idCidadao, DadoPessoal $dadoPessoal, DadoSaude $dadoSaude, Endereco $endereco)
    {
        $this->idCidadao = $idCidadao;
        $this->dadoPessoal = $dadoPessoal;
        $this->dadoSaude = $dadoSaude;
        $this->endereco = $endereco;
    }

    public function mostrarDados() : void
    {
        echo "Id: {$this->idCidadao}\n";
        echo $this->dadoPessoal->__toString();
        echo $this->dadoSaude->__toString();
        echo $this->endereco->__toString();
    }
   
}