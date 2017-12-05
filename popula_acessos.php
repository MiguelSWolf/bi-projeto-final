<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

date_default_timezone_set('America/Sao_Paulo');
$conn = new PDO('sqlite:acessos.db');


$estados = ["Acre", "Alagoas", "Amapá", "Amazonas", "Bahia", "Ceará", "Distrito Federal", "Espírito Santo", "Goiás", "Maranhão", "Mato Grosso", "Mato Grosso do Sul", "Minas Gerais", "Pará", "Paraíba", "Paraná", "Pernambuco", "Piauí", "Rio de Janeiro", "Rio Grande do Norte", "Rio Grande do Sul", "Rondônia", "Roraima", "Santa Catarina", "São Paulo", "Sergipe", "Tocantins"];
$capitais = ["Rio Branco", "Maceió", "Macapá", "Manaus", "Salvador", "Fortaleza", "Brasília", "Vitória", "Goiânia", "São Luís", "Cuiabá", "Campo Grande", "Belo Horizonte", "Belém", "João Pessoa", "Curitiba", "Recife", "Teresina", "Rio de Janeiro", "Natal", "Porto Alegre", "Porto Velho", "Boa Vista", "Florianópolis", "São Paulo", "Aracaju", "Palmas"];
$perfis = ["Estagiario", "Funcionario", "Bolsista", "Professor"];
$nomePessoas = ["Alice", "Miguel", "Sophia", "Arthur", "Júlia", "Davi", "Laura", "Pedro", "Isabella", "Bernardo", "Manuela", "Gabriel", "Luiza", "Lucas", "Helena", "Matheus", "Valentina", "Heitor", "Giovanna", "Rafael", "Maria Eduarda", "Enzo", "Beatriz", "Nicolas", "Maria Clara", "Lorenzo", "Maria Luiza", "Guilherme", "Heloísa", "Samuel", "Mariana", "Theo", "Lara", "Felipe", "Lívia", "Gustavo", "Lorena", "Henrique", "Ana Clara", "João Pedro", "Isadora", "João Lucas", "Rafaela", "Daniel", "Sarah", "Murilo", "Yasmin", "Vitor", "Ana Luiza", "Pedro Henrique", "Letícia", "Eduardo", "Nicole", "Leonardo", "Gabriela", "Pietro", "Isabelly", "Benjamin", "Melissa", "Isaac", "Cecília", "João", "Esther", "Joaquim", "Ana Júlia", "Lucca", "Emanuelly", "Caio", "Clara", "Vinicius", "Marina", "Cauã", "Rebeca", "Bryan", "Vitória", "João Miguel", "Isis", "Vicente", "Lavínia", "Francisco", "Maria", "Antônio", "Bianca", "Benício", "Ana Beatriz", "João Vitor", "Larissa", "Enzo Gabriel", "Maria Fernanda", "Davi Lucas", "Catarina", "Davi Lucca", "Alícia", "Thiago", "Maria Alice", "Thomas", "Amanda", "Emanuel", "Ana", "Enrico"];
$dominios = ["www.google.com.br", "www.univates.br"];
{
    $paginas = array();
    $pagina = new stdClass();
    $pagina->peso = 200;
    $pagina->titulo = "Home";
    $pagina->url = "/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 180;
    $pagina->titulo = "Login";
    $pagina->url = "login/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 150;
    $pagina->titulo = "Ramais Telefonicos";
    $pagina->url = "ramais-telefonicos/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 150;
    $pagina->titulo = "Marcações de ponto";
    $pagina->url = "sistemas/ponto/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 120;
    $pagina->titulo = "Reserva de materiais";
    $pagina->url = "sistemas/reservas/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 20;
    $pagina->titulo = "Noticias";
    $pagina->url = "noticias/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 30;
    $pagina->titulo = "Centro de Ciências Biológicas e da Saúde";
    $pagina->url = "centro/ccbs/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 30;
    $pagina->titulo = "Centro de Ciências Humanas e Sociais";
    $pagina->url = "centro/cchs/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 20;
    $pagina->titulo = "Centro de Educação Profissional";
    $pagina->url = "centro/cep/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 30;
    $pagina->titulo = "Centro de Ciências Exatas e Tecnológicas";
    $pagina->url = "centro/cetec/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 30;
    $pagina->titulo = "Centro de Gestão Organizacional";
    $pagina->url = "centro/cgo/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 100;
    $pagina->titulo = "Setor - Compras";
    $pagina->url = "setores/compras/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 10;
    $pagina->titulo = "Setor - Diretorio de Relações Internacionais";
    $pagina->url = "setores/dri/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 5;
    $pagina->titulo = "Setor - Educação a Distancia";
    $pagina->url = "setores/ead/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 20;
    $pagina->titulo = "Setor - Escritorio de Relações com o Mercado";
    $pagina->url = "setores/erm/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 2;
    $pagina->titulo = "Setor - Extensão";
    $pagina->url = "setores/extensao/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 40;
    $pagina->titulo = "Setor - Marketing & Comunicação";
    $pagina->url = "setores/marketing/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 100;
    $pagina->titulo = "Setor - Recursos Humanos";
    $pagina->url = "setores/recursos-humanos/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 150;
    $pagina->titulo = "Souvenirs";
    $pagina->url = "souvenirs/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 81;
    $pagina->titulo = "Souvenirs - Bazar";
    $pagina->url = "souvenirs/bazar/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 120;
    $pagina->titulo = "Souvenirs - Escritorio";
    $pagina->url = "souvenirs/escritorio/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 120;
    $pagina->titulo = "Souvenirs - Gastronomia";
    $pagina->url = "souvenirs/gastronomia/";
    $paginas[] = $pagina;

    $pagina = new stdClass();
    $pagina->peso = 40;
    $pagina->titulo = "Souvenirs - Moda";
    $pagina->url = "souvenirs/moda/";
    $paginas[] = $pagina;
}
$limiteEnderecos = 1000;
$limiteClientes = 100;
$limiteAcessos = 500000;




{
    $conn->query('begin');
    $create = file_get_contents("create.sql");
    $conn->exec($create);
    $conn->query('commit');
}


{
    $count = 0;
    $conn->query('begin');
    foreach ($estados as $estado) {
        $sql = "INSERT INTO estado (nome, pais) VALUES ('$estado', 'Brasil')";
        $count++;
        $conn->query($sql);
    }
    $conn->query('commit');
    echo "Inserido $count estados<br />";
}


{
    $count = 0;
    $conn->query('begin');
    foreach ($capitais as $capital) {
        $sql = "INSERT INTO cidade (nome, id_estado) VALUES ('$capital', '".($count+1)."')";
        $count++;
        $conn->query($sql);
    }
    $conn->query('commit');
    echo "Inserido $count cidades<br />";
}


{
    $count = 0;
    $conn->query('begin');
    for ($i = 0; $i < $limiteEnderecos; $i++) {
        $latitude = rand();
        $longitude = rand();
        $id_cidade = rand(1, count($capitais));
        $sql = "INSERT INTO endereco (latitude, longitude, id_cidade) VALUES ('$latitude', '$longitude', $id_cidade)";
        $count++;
        $conn->query($sql);
    }
    $conn->query('commit');
    echo "Inserido $count enderecos<br />";
}


{
    $count = 0;
    $conn->query('begin');
    foreach ($perfis as $perfil) {
        $sql = "INSERT INTO perfil (descricao) VALUES ('$perfil')";
        $count++;
        $conn->query($sql);
    }
    $conn->query('commit');
    echo "Inserido $count perfis<br />";
}


{
    $count = 0;
    $conn->query('begin');
    for ($i = 0; $i < $limiteClientes; $i++) {
        $nome =  $nomePessoas[array_rand($nomePessoas)];
        $id_endereco = rand(1, count($limiteEnderecos));
        $id_perfil = rand(1, count($perfis));
        $sql = "INSERT INTO cliente (nome, id_endereco, id_perfil) VALUES ('$nome', $id_endereco, $id_perfil)";
        $count++;
        $conn->query($sql);
    }
    $conn->query('commit');
    echo "Inserido $count clientes<br />";
}


{
    $sql = "INSERT INTO pagina (url, dominio, titulo) VALUES ('', '1', 'Google')";
    $conn->query($sql);

    $count = 0;
    $conn->query('begin');
    $limitePaginas = count($paginas);
    for ($i = 0; $i < $limitePaginas; $i++) {
        $dominio = 2;
        $url = $paginas[$i]->url;
        $titulo = $paginas[$i]->titulo;
        $sql = "INSERT INTO pagina (url, dominio, titulo) VALUES ('$url', '$dominio', '$titulo')";
        $count++;
        $conn->query($sql);
    }
    $conn->query('commit');
    echo "Inserido $count pagina<br />";
}


{
    $conn->query('begin');
    $conn->query("INSERT INTO motor (nome) VALUES ('Webkit')");
    $conn->query("INSERT INTO motor (nome) VALUES ('Presto')");
    $conn->query("INSERT INTO motor (nome) VALUES ('Trident')");
    $conn->query("INSERT INTO motor (nome) VALUES ('Gekko')");
    $conn->query("INSERT INTO motor (nome) VALUES ('Blink')");
    $conn->query('commit');
    echo "Inserido 5 motores<br />";
}

{
    $conn->query('begin');
    $conn->query("INSERT INTO empresa (nome) VALUES ('Google')");
    $conn->query("INSERT INTO empresa (nome) VALUES ('Opera')");
    $conn->query("INSERT INTO empresa (nome) VALUES ('Mozilla')");
    $conn->query("INSERT INTO empresa (nome) VALUES ('Microsoft')");
    $conn->query("INSERT INTO empresa (nome) VALUES ('Apple')");
    $conn->query('commit');
    echo "Inserido 5 empresas<br />";
}


{
    $conn->query('begin');
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Chrome 41.0.2228.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36', 1, 1);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Chrome 41.0.2227.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.1 Safari/537.36', 1, 1);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Chrome 41.0.2227.0', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.0 Safari/537.36', 1, 1);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Chrome 41.0.2226.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2226.0 Safari/537.36', 1, 4);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Chrome 41.0.2225.0', 'Mozilla/5.0 (Windows NT 6.4; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2225.0 Safari/537.36', 1, 4);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Chrome 41.0.2224.3', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2224.3 Safari/537.36', 1, 1);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Chrome 40.0.2214.93', 'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36', 1, 1);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Chrome 37.0.2062.124', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36', 1, 2);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Chrome 37.0.2049.0', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2049.0 Safari/537.36', 1, 1);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Chrome 36.0.1985.67', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.67 Safari/537.36', 1, 1);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Firefox 40.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1', 3, 4);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Firefox 36.0', 'Mozilla/5.0 (Windows NT 6.3; rv:36.0) Gecko/20100101 Firefox/36.0', 3, 4);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Firefox 33.0', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10; rv:33.0) Gecko/20100101 Firefox/33.0', 3, 4);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Firefox 31.0', 'Mozilla/5.0 (X11; Linux i586; rv:31.0) Gecko/20100101 Firefox/31.0', 3, 4);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Firefox 29.0', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:29.0) Gecko/20120101 Firefox/29.0', 3, 4);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Opera 12.16', 'Opera/9.80 (X11; Linux i686; Ubuntu/14.10) Presto/2.12.388 Version/12.16', 2, 2);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Opera 12.14', 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14', 2, 2);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Opera 12.02', 'Opera/12.80 (Windows NT 5.1; U; en) Presto/2.10.289 Version/12.02', 2, 2);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Opera 12.00', 'Opera/9.80 (Windows NT 6.1; U; es-ES) Presto/2.9.181 Version/12.00', 2, 5);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Safari 7.0.3', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_3) AppleWebKit/537.75.14 (KHTML, like Gecko) Version/7.0.3 Safari/7046A194A', 5, 5);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Safari 6.0', 'Mozilla/5.0 (iPad; CPU OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5355d Safari/8536.25', 5, 5);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Safari 5.1.7', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.13+ (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2', 5, 5);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Safari 5.1.3', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_3) AppleWebKit/534.55.3 (KHTML, like Gecko) Version/5.1.3 Safari/534.53.10', 5, 5);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Safari 5.1', 'Mozilla/5.0 (iPad; CPU OS 5_1 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko ) Version/5.1 Mobile/9B176 Safari/7534.48.3', 5, 5);");
    $conn->query("INSERT INTO navegador(versao, user_agent, id_empresa, id_motor) values('Safari 5.0.5', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_8; de-at) AppleWebKit/533.21.1 (KHTML, like Gecko) Version/5.0.5 Safari/533.21.1', 5, 5);");
    $conn->query('commit');
    echo "Inserido 25 navegadores<br />";
}


{
    $conn->query('begin');
    $conn->query("INSERT INTO resolucao (largura, altura) VALUES (640, 480)");
    $conn->query("INSERT INTO resolucao (largura, altura) VALUES (480, 640)");
    $conn->query("INSERT INTO resolucao (largura, altura) VALUES (720, 480)");
    $conn->query("INSERT INTO resolucao (largura, altura) VALUES (480, 720)");
    $conn->query("INSERT INTO resolucao (largura, altura) VALUES (1440, 900)");
    $conn->query("INSERT INTO resolucao (largura, altura) VALUES (1920, 1080)");
    $conn->query('commit');
    echo "Inserido 6 resolucoes<br />";
}


{
    $conn->query('begin');
    $conn->query("INSERT INTO marca (nome) VALUES ('Apple')");
    $conn->query("INSERT INTO marca (nome) VALUES ('Samsung')");
    $conn->query("INSERT INTO marca (nome) VALUES ('Dell')");
    $conn->query('commit');
    echo "Inserido 3 marcas<br />";    
}


{
    $conn->query('begin');
    $conn->query("INSERT INTO tipo_dispositivo (nome) VALUES ('Desktop')");
    $conn->query("INSERT INTO tipo_dispositivo (nome) VALUES ('Smartphone')");
    $conn->query("INSERT INTO tipo_dispositivo (nome) VALUES ('Notebook')");
    $conn->query('commit');
    echo "Inserido 3 tipos de dispositivos<br />";    
}


{
    $conn->query('begin');
    $conn->query("INSERT INTO dispositivo (nome, id_tipo_dispositivo, id_marca) VALUES ('Iphone 5S', 2, 1)");
    $conn->query("INSERT INTO dispositivo (nome, id_tipo_dispositivo, id_marca) VALUES ('Iphone 6S', 2, 1)");
    $conn->query("INSERT INTO dispositivo (nome, id_tipo_dispositivo, id_marca) VALUES ('Iphone X', 2, 1)");
    $conn->query("INSERT INTO dispositivo (nome, id_tipo_dispositivo, id_marca) VALUES ('Iphone 7 Plus', 2, 1)");
    $conn->query("INSERT INTO dispositivo (nome, id_tipo_dispositivo, id_marca) VALUES ('Samsung Note 7', 2, 2)");
    $conn->query("INSERT INTO dispositivo (nome, id_tipo_dispositivo, id_marca) VALUES ('Samsung S7', 2, 2)");
    $conn->query("INSERT INTO dispositivo (nome, id_tipo_dispositivo, id_marca) VALUES ('Samsung S7 Edge', 2, 2)");
    $conn->query("INSERT INTO dispositivo (nome, id_tipo_dispositivo, id_marca) VALUES ('Samsung S8', 2, 2)");
    $conn->query("INSERT INTO dispositivo (nome, id_tipo_dispositivo, id_marca) VALUES ('Vostro 1520', 2, 3)");
    $conn->query("INSERT INTO dispositivo (nome, id_tipo_dispositivo, id_marca) VALUES ('Vostro 2520', 2, 3)");
    $conn->query("INSERT INTO dispositivo (nome, id_tipo_dispositivo, id_marca) VALUES ('XPS 1530', 1, 3)");
    $conn->query("INSERT INTO dispositivo (nome, id_tipo_dispositivo, id_marca) VALUES ('Vostro 1520', 1, 3)");
    $conn->query("INSERT INTO dispositivo (nome, id_tipo_dispositivo, id_marca) VALUES ('XPS 230', 1, 3)");
    $conn->query("INSERT INTO dispositivo (nome, id_tipo_dispositivo, id_marca) VALUES ('XPS 530', 1, 3)");
    $conn->query("INSERT INTO dispositivo (nome, id_tipo_dispositivo, id_marca) VALUES ('Samsung Essentials E25S', 3, 2)");
    $conn->query('commit');
    echo "Inserido 15 dispositivos<br />";    
}


{
    $paginas_com_peso = array();
    foreach ($paginas as $indice => $pagina) {
        $pagina->indice = $indice+2;
        for ($i=0; $i < $pagina->peso; $i++) { 
            $paginas_com_peso[] = $pagina;
        }
    }

    $count = 0;
    $conn->query('begin');
    $limitePaginas = count($paginas_com_peso)-1;
    for ($i = 0; $i < $limiteAcessos; $i++) {
        $data = new DateTime();
        $data->setDate(2017, rand(4,10), rand(1,30));
        $data->setTime(rand(0,23), rand(0,59), 0);
        $data_acesso = $data->format('Y-m-d H:i:s');
        /*$x = rand(1, 5);
        $duracao = -6*pow($x,4)+4*pow($x,3)+10*pow($x,2)+$x+90;
        $duracao = $duracao*rand(1, 300);
		$duracao = $duracao < 0 ? -$duracao : $duracao;*/
		$duracao = rand(-10, 300);
		$duracao = $duracao < 1 ? 1 : $duracao;
        $carregamento = rand(1, 10);
        $tamanho = rand(1, 10);
        

        $ip = rand(0, 255).'.'.rand(0, 255).'.'.rand(0, 255).'.'.rand(0, 255);
        $id_cliente = rand(1, $limiteClientes);
        $id_endereco = rand(1, $limiteEnderecos);
        
        $id_pagina = $paginas_com_peso[rand(2, $limitePaginas)]->indice;
        $indice = rand(1, $limitePaginas);
        $id_pagina_entrada = $paginas_com_peso[$indice]->indice;
        $id_pagina_saida = $paginas_com_peso[rand(2, $limitePaginas)]->indice;
        $id_navegador = rand(1, 25);
        $id_dispositivo = rand(1,15);
        $id_resolucao = rand(1, 6);

        $sql = "INSERT INTO acesso (data_acesso, duracao_navegacao, duracao_carregamento, tamanho_trafegado, ip, id_cliente, id_endereco, id_pagina, id_pagina_entrada, id_pagina_saida, id_navegador, id_dispositivo, id_resolucao) VALUES 
        ('$data_acesso', $duracao, $carregamento, $tamanho, '$ip', $id_cliente, $id_endereco, $id_pagina, $id_pagina_entrada, $id_pagina_saida, $id_navegador, $id_dispositivo, $id_resolucao)";
        $count++;
        $conn->query($sql);
    }
    $conn->query('commit');
    echo "Inserido $count acessos<br />";
}



unset($conn);