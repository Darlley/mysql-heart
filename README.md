# mysql-heart
Projeto da aula "APRENDA MYSQL COM ESSE VIDEO - Mutirão4noobs #1" - https://youtu.be/AcctxgmY4tQ

### PASS A PASSO

root - password (Senha do MySQL e Ubuntu)

Abrir Command Line Interface do MySQL Ubuntu
> mysql -u root -p

CREATE banco de dados
> create database dev_database;
> show databases; (READ)

Usar banco de dados
> use dev_database;
> show tables; (READ)

CREATE tabelas
> create table nome ( 
    id int not null primary key AUTO_INCREMENT, 
    nome varchar(40) not null, 
    idade int(2) not null 
);
> describe bebidas;

INSERIR dados
> insert into bebidas values (null, "Imperio", 330);
> select * from bebidas;

Ou especificar quais campos
> insert into bebidas (nome, ml) values ('Skol', 225);

UPDATE uma coluna ja existente
> alter table `nome` modify column `id` int AUTO_INCREMENT;

Condicionais com Where
maior >, maior ou igual >=, menor <, menor ou igual <=, diferent <>
> select * from bebidas where id > 2;

UPDATE dados 
> update bebidas set nome = "Fulano";
( NÃO SE FAZ UPDATE SEM WHERE! )
> update bebidas set nome = "Fulano" where id = 1;


DELETE 
> delete from bebidas;
( NÃO SE FAZ DELETE SEM WHERE! )
> delete from bebidas where id >= 3;

CHAVE ESTRANGEIRA serve para criar ção de relacionamentos entre tabelas;

JOIN serve para juntar tabelas de acordo com seus relacionamentos;
> SELECT * FROM usuarios 
	JOIN endereco_usuario
	ON endereco_usuario.usuario_id = usuarios.id
	WHERE endereco_usuario.usuario_id = 1;

COMO QUEBRAR SISTEMAS LEGADOS
> 100); DELETE FROM bebidas; ==


REINSTALAR
- https://www.fredericomarinho.com/removendo-php-mysql-e-apache-do-linux/
- https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-20-04-pt
