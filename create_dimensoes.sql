DROP TABLE IF EXISTS DIM_PAGINA;
DROP TABLE IF EXISTS DIM_ENDERECO;
DROP TABLE IF EXISTS DIM_CLIENTE;
DROP TABLE IF EXISTS DIM_IP;
DROP TABLE IF EXISTS DIM_NAVEGADOR;
DROP TABLE IF EXISTS DIM_DISPOSITIVO;
DROP TABLE IF EXISTS DIM_RESOLUCAO;
DROP TABLE IF EXISTS DIM_DATA;
DROP TABLE IF EXISTS DIM_TEMPO;
DROP TABLE IF EXISTS FAT_ACESSO;
CREATE TABLE DIM_PAGINA(
	id_pagina INTEGER PRIMARY KEY,
    url TEXT,
    dominio TEXT,
    titulo TEXT,
    codigo TEXT,
    id_pagina_erp INTEGER
);

CREATE TABLE DIM_ENDERECO (
    id_endereco INTEGER PRIMARY KEY,
    latitude TEXT,
    longitude TEXT,
    complemento TEXT,
    numero TEXT,
    rua TEXT,
    logradouro TEXT,
    bairro TEXT,
    codigo_postal TEXT,
    cidade TEXT,
    estado TEXT,
    pais TEXT,
    id_endereco_erp INTEGER
);

CREATE TABLE DIM_CLIENTE (
    id_cliente INTEGER PRIMARY KEY,
    nome TEXT,
    perfil TEXT,
    latitude TEXT,
    longitude TEXT,
    complemento TEXT,
    numero TEXT,
    rua TEXT,
    logradouro TEXT,
    bairro TEXT,
    codigo_postal TEXT,
    cidade TEXT,
    estado TEXT,
    pais TEXT,
    id_cliente_erp INTEGER
);

CREATE TABLE DIM_IP (
	id_ip INTEGER PRIMARY KEY,
	ip_erp TEXT
);

CREATE TABLE DIM_NAVEGADOR(
    id_navegador INTEGER PRIMARY KEY,
    versao TEXT,
    user_agent TEXT,
    empresa TEXT,
    motor TEXT,
    id_navegador_erp INTEGER
);

CREATE TABLE DIM_DISPOSITIVO (
    id_dispositivo INTEGER PRIMARY KEY,
    nome TEXT,
    marca TEXT,
    tipo_dispositivo TEXT,
    id_dispositivo_erp INTEGER
);

CREATE TABLE DIM_RESOLUCAO (
	id_resolucao INTEGER PRIMARY KEY,
	largura INTEGER,
    altura INTEGER,
    apresentacao TEXT,
    id_resolucao_erp INTEGER
);

CREATE TABLE DIM_DATA (
	id_data INTEGER PRIMARY KEY, 
	dia INTEGER, 
	mes INTEGER, 
	ano INTEGER, 
	nome_dia TEXT, 
	nome_mes TEXT, 
	data DATE
);


CREATE TABLE DIM_TEMPO (
	id_tempo INTEGER PRIMARY KEY, 
	hora INTEGER, 
	minuto INTEGER, 
	segundo INTEGER, 
	turno TEXT, 
	tempo TIME
);

CREATE TABLE FAT_ACESSO (
	id_acesso INTEGER PRIMARY KEY,
	id_pagina INTEGER REFERENCES DIM_PAGINA(id_pagina),
	id_pagina_entrada INTEGER REFERENCES DIM_PAGINA(id_pagina),
	id_pagina_saida INTEGER REFERENCES DIM_PAGINA(id_pagina),
	id_endereco INTEGER REFERENCES DIM_ENDERECO(id_endereco),
	id_cliente INTEGER REFERENCES DIM_CLIENTE(id_cliente),
	id_resolucao INTEGER REFERENCES DIM_RESOLUCAO(id_resolucao),
	id_dispositivo INTEGER REFERENCES DIM_DISPOSITIVO(id_dispositivo),
	id_navegador INTEGER REFERENCES DIM_NAVEGADOR(id_navegador),
	id_ip INTEGER REFERENCES DIM_IP(id_ip),
	id_data INTEGER REFERENCES DIM_DATA(id_data),
	id_tempo INTEGER REFERENCES DIM_TEMPO(id_tempo),
    duracao_navegacao INTEGER,
    duracao_carregamento INTEGER,
    tamanho_trafegado REAL
);

CREATE TABLE FAT_DIARIO (
	id_diario INTEGER PRIMARY KEY, 
	id_pagina INTEGER REFERENCES DIM_PAGINA(id_pagina),
	id_data INTEGER REFERENCES DIM_DATA(id_data),
	quantidade INTEGER,
	media_duracao REAL,
	media_carregamento REAL,
	media_tamanho REAL
);