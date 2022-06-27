<?php

require_once 'php-src/Cidadao.php';


$dadoPessoal = new DadoPessoal("Manuel", "Masculino", "Solteiro");
$endereco = new Endereco("Luanda", "Samba", "Largo da Samba");
$dadoSaude = new DadoSaude("O+", 189.2, 87.99, "Sim");
$cidadao = new Cidadao(1, $dadoPessoal, $dadoSaude, $endereco);

$cidadao->mostrarDados();