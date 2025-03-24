# Aplicação Web AWS: Integração EC2 e RDS

## Descrição do Projeto

Este projeto demonstra a criação de uma aplicação web PHP integrada com um banco de dados MySQL, utilizando os serviços Amazon EC2 e Amazon RDS da AWS. A aplicação foi desenvolvida seguindo o tutorial fornecido pela AWS e inclui funcionalidades adicionais.

## Componentes Principais

1. **Instância EC2**: Hospeda o servidor web Apache e os scripts PHP.
2. **Instância RDS**: Executa o banco de dados MySQL.
3. **Aplicação PHP**: Realiza operações de leitura e escrita no banco de dados.

## Funcionalidades Implementadas

- Listagem de funcionários da tabela 'employee'.
- Cadastro e listagem de produtos com nome, descrição, preço e data.

## Estrutura do Banco de Dados

Duas tabelas principais foram criadas:

1. `employee`: Armazena informações dos funcionários.
2. `PRODUTOS`: Contém dados dos produtos, incluindo nome, descrição, preço e data de cadastro.

## Arquivos Principais

- `SamplePage.php`: Página principal que integra as funcionalidades de funcionários e produtos.
- `inc/dbinfo.inc`: Arquivo de configuração com as credenciais do banco de dados.

## Processo de Desenvolvimento

1. Seguiu-se o tutorial da AWS para criar a instância EC2 e RDS.
2. Configurou-se o Apache e PHP na instância EC2.
3. Criou-se a tabela adicional 'PRODUTOS' no banco de dados RDS.
4. Desenvolveu-se a funcionalidade de cadastro e listagem de produtos.
5. Integrou-se a nova funcionalidade com a página existente de listagem de funcionários.

## Segurança

- Configuraram-se grupos de segurança para EC2 e RDS conforme as recomendações do tutorial.

## Demonstração

## Vídeo Demonstrativo
[Assista ao vídeo aqui](https://youtu.be/_m6CCr1JaWM)

O vídeo demonstra o funcionamento da aplicação, incluindo a visualização das instâncias no console AWS e a execução das funcionalidades implementadas.


