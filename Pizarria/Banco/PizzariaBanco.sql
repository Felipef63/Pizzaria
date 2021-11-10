/*Criando o database das tabelas*/
create database pizzaria;

/*Criando a tabela perfil*/
create table perfil (
    
    ID int AUTO_INCREMENT PRIMARY KEY,
    Nome_Perfil varchar(255),
    Endereco varchar(255),
    Bairro varchar(255),
    CEP varchar(9),
    Cidade varchar(255),
    Estado varchar(2),
    Telefone varchar(14),
    Celular varchar(15)
);    
/*Colocando dados na tabela*/
INSERT INTO `pizzaria`.`perfil` (`ID`, `Nome_Perfil`, `Endereco`, `Bairro`, `CEP`, `Cidade`, `Estado`, `Telefone`, `Celular`) 
VALUES (NULL, 'Felipe Fernandes Bernardes', 'Rua Padre Aldemar Moreira n° 417', 'Cidade Tiradentes', '08471-010', 'São Paulo', 'SP', '(11) 2285-7311', '(11) 98220-8251');

/*Criando a tabela produtos*/
create table produto (
    
    ID_Produto int AUTO_INCREMENT PRIMARY KEY,
    Nome_Produto varchar(255),
    img longblob,
    Descricao varchar(255),
    Valor_Unitario double
);

/*Coloca os dados desta tabela assim: 
Id: Nada 
Nome:Pizza de queijo e calabresa 
img: coloca da pizza que tá na pasta 
Desc: Pizza metade de queijo, metade de calabresa
valor: 15 */