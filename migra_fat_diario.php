<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
$conn1 = new PDO('sqlite:acessos.db');
$conn2 = new PDO('sqlite:acessosdw.db');

$conn2->beginTransaction();
$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$cache_pagina = array();
$cache_data = array();


$result = $conn2->query("SELECT * FROM DIM_PAGINA ORDER BY id_pagina");
foreach ($result as $row) {
    $cache_pagina[$row['id_pagina_erp']] = $row['id_pagina'];
}

$result = $conn2->query("SELECT * FROM DIM_DATA ORDER BY data");
foreach ($result as $row) {
    $cache_data[$row['data']] = $row['id_data'];
}

$result = $conn2->query("SELECT id_pagina, id_data, count(*) as quantidade, avg(duracao_navegacao) as media_duracao, avg(duracao_carregamento) as media_carregamento, avg(tamanho_trafegado) as media_tamanho FROM FAT_ACESSO GROUP BY 1, 2");

foreach ($result as $row)
{
    $id_data = $row['id_data'];
    $id_pagina = $row['id_pagina'];
	$quantidade = $row['quantidade'];
	$duracao = $row['media_duracao'];
	$carregamento = $row['media_carregamento'];
	$tamanho = $row['media_tamanho'];
    
    $sql = "INSERT INTO FAT_DIARIO 
                        (id_pagina, id_data, quantidade, media_duracao, media_carregamento, media_tamanho)
                    VALUES (
                            '{$id_pagina}',
                            '{$id_data}',
							'{$quantidade}',
							'{$duracao}',
							'{$carregamento}',
							'{$tamanho}'
                           )";
    $conn2->exec($sql);
    echo '.';
}
$conn2->commit();

/*
	Isso é tudo pessoal!
*/