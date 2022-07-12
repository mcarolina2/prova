use prova;
create table usuario (
id integer primary key auto_increment,
nome varchar(255),
email varchar(255), 
senha varchar(255),
cpf varchar(11),
telefone varchar(11),
redesocial varchar(11)
);  
 select * from antiguidades; 
 
 create table antiguidades (
id integer primary key auto_increment,
tipo varchar(255),
ano date,
marca varchar(255),
preco int,
usuario_id integer,
constraint foreign key (usuario_id) references usuario(id)
);   drop table antiguidades;
