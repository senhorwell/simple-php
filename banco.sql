CREATE SCHEMA `simple`;

USE `simple`;

CREATE TABLE user (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `nome` varchar(255),
    `cpf` varchar(15),
    `cnpj` varchar(255),
    `nomefantasia` varchar(255),
    `razaosocial` varchar(255),
    `endereco` varchar(255),
    `numero` varchar(10),
    `bairro` varchar(255),
    `cep` varchar(10),
    `cidade` varchar(255),
    `estado` varchar(255),
    `telefone` varchar(255),
    `contato` varchar(255),
    `email_faturamento` varchar(255),
    `vencimento_fatura` varchar(255)
);

CREATE TABLE vendedor (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `nome` varchar(255),
    `telefone` varchar(10),
    `email` varchar(255),
    `senha` varchar(255)
);

CREATE TABLE user_produto (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_user int,
    `descricao` varchar(255),
    `qtd` int,
    `valor_unitario` varchar(255),
    `frete` varchar(255),
    `tipo_envio` varchar(255),
    `status` boolean
);

CREATE TABLE user_informacoes (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `id_user` int,
    `franquia` int,
    `taxa_ativacao` int,
    `prazo_ativacao` int,
    `taxa_cancelamento` int,
    `substituicao_linha` varchar(255),
    `valor_sms` int,
    `obs` varchar(1000)
);