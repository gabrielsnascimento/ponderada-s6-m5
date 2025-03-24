# Aplicação Web com AWS EC2 e RDS

Aplicação PHP para gerenciamento de funcionários e produtos, hospedada na AWS com integração entre EC2 e RDS.

## Funcionalidades
- **Funcionários**: Listagem de registros.
- **Produtos**: Cadastro e listagem com preço e data de registro.

## Tecnologias
- **Front-end**: HTML, CSS, Bootstrap
- **Back-end**: PHP
- **Banco de Dados**: MySQL (Amazon RDS)
- **Infraestrutura**: Amazon EC2, Amazon RDS

## Estrutura do Banco de Dados
-- Tabela employee
CREATE TABLE employee (
empid INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL
);

-- Tabela PRODUTOS
CREATE TABLE PRODUTOS (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
descricao TEXT,
preco DECIMAL(10,2) NOT NULL,
data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP
);

## Vídeo Demonstrativo
[Assista ao vídeo aqui](https://youtu.be/_m6CCr1JaWM)
