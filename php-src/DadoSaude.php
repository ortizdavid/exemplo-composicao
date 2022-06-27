<?php 

class DadoSaude
{
    private string $tipoSanguineo;
    private float $altura;
    private float $peso;
    private string $temDoenca;

    public function __construct(string $tipoSanguineo, string $altura, string $peso, string $temDoenca)
    {
        $this->tipoSanguineo = $tipoSanguineo;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->temDoenca = $temDoenca;
    }

    public function __toString() : string
    {
        return "Tipo Sanguíneo: {$this->tipoSanguineo}\nAltura:{$this->altura} m\nPeso:{$this->peso} kg\nPossui Doença: {$this->temDoenca}";
    }
}