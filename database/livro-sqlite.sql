CREATE TABLE estado (
	id integer PRIMARY KEY NOT NULL,
    SIGLA CHAR(2),
    NOME TEXT
);

CREATE TABLE cidade (
	id integer PRIMARY KEY NOT NULL,
    nome text,
    id_estado INTEGER REFERENCES estado (id)
);

CREATE TABLE grupo (
	id integer PRIMARY KEY NOT NULL,
    NOME text
);
CREATE TABLE fabricante(
	id integer PRIMARY KEY NOT NULL,
    SIGLA TEXT,
    SITE TEXT
);

CREATE TABLE unidade (
	id integer PRIMARY KEY NOT NULL,
    SIGLA TEXT, 
    NOME TEXT
);

CREATE TABLE tipo (
	id integer PRIMARY KEY NOT NULL,
    nome text
);
create table Produto (
	ind integer PRIMARY KEY NOT NULL,
    descrição text,
    estoque float,
    preco_custo float,
    preco_venda float,
    id_fabricante integer REFERENCES fabricante(id),
    id_unidade integer REFERENCES unidade (id),
    id_tipo integer references tipo(id)
);

CREATE TABLE PESSOA (
	Id integer PRIMARY KEY NOT NULL,
    nome text,
    endereco text,
    bairro text,
    telefone text,
    email text,
    id_cidade integer references cidade(id)
);

CREATE TABLE venda (
	id integer PRIMARY KEY NOT NULL,
    id_cliente integer references pessoa(id),
    data_venda date,
    valor_venda float,
    desconto float,
    acrescimos float,
    valor_final float,
    obs text
);

CREATE TABLE item_venda (
	id integer PRIMARY KEY NOT NULL,
    id_produto integer references produto(id),
    id_venda integer references venda(id),
    quantidade float, 
    preco float
);
CREATE TABLE CONTA (
	id integer PRIMARY KEY NOT NULL,
    id_cliente INTEGER REFERENCES pessoa(id),
    dt_emissao date,
    dt_vencimento date,
    valor float,
    paga char(1)
);

CREATE TABLE pessoa_grupo (
	id integer PRIMARY KEY NOT NULL,
    id_pessoa integer REFERENCES pessoa(id),
    id_grupo integer references grupo(id)
);