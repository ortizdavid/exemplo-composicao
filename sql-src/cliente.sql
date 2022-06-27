SELECT tb_cliente.nome, tb_cliente.sexo,
    tb_cliente.num_identificacao
FROM tb_cliente
JOIN tb_dados_pessoais ON (tb_cliente.id_dados = tb_dados_pessoais.id_dados)
WHERE sexo = "Masculino"
    AND id_cliente < 5
ORDER BY data_nasc ASC;