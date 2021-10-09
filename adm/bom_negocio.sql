/* ************************************************************************ Escala 1 ****************************************************************************************************************************** */

create table usuario (
	codigo int not null auto_increment primary key, 
	usuario varchar (50) not null,
	senha varchar (50) not null
);

insert into usuario (USUARIO, SENHA) values('midiamix','midiamix');

create table banner(
	id int not null auto_increment primary key, 
	imagem varchar (255),
	obs blob
);


/* ************************************************************************ Escala 2 ****************************************************************************************************************************** */

create table cidade(
	id int not null auto_increment primary key, 
	nome varchar (255)
);

create table categoria_cliente(
	id int not null auto_increment primary key, 
	nome varchar (255)
);

/* ************************************************************************ Escala 3 ****************************************************************************************************************************** */


create table cliente(
	id int not null auto_increment primary key, 
	id_cidade int,
	id_categoria_cliente int not null,
	senha varchar (255),
	nome varchar (50),
	telefone varchar (50),
	endereco varchar (255),
	email varchar (255),
	nome_fantasia varchar (255),
	imagem varchar (255),
	obs blob,
	cep varchar (100)
);

alter table cliente
add constraint fk_cliente_cidade
foreign key (id_cidade)
references cidade(id);

alter table cliente
add constraint fk_cliente_categoria_cliente
foreign key (id_categoria_cliente)
references categoria_cliente(id);

/* ************************************************************************ Escala 4 ****************************************************************************************************************************** */


create table bairro(
	id int not null auto_increment primary key, 
	nome varchar (255)
);

create table marca(
	id int not null auto_increment primary key, 
	nome varchar (255)
);



/* ************************************************************************ Escala 5 ****************************************************************************************************************************** */


create table endereco(
	id int not null auto_increment primary key,
	id_bairro int not null,
	nome varchar (255)
);

alter table endereco
add constraint fk_endereco_bairro
foreign key (id_bairro)
references bairro(id);

create table modelo(
	id int not null auto_increment primary key, 
	id_marca int not null,
	nome varchar (255)
);

alter table modelo
add constraint fk_marca_modelo
foreign key (id_marca)
references marca(id);



create table tipo_produto(
	id int not null auto_increment primary key, 
	nome varchar (255)
);


/* ************************************************************************ Escala 6 ****************************************************************************************************************************** */

create table imovel(
	id int not null auto_increment primary key, 
	id_cliente int not null,
	id_bairro int , 
	id_endereco int , 
	id_cidade int , 
	imagem varchar (255),
	cep varchar (255),
	numero varchar (255),
	valor varchar (255),
	complemento varchar (255),
	obs blob
);

alter table imovel
add constraint fk_imovel_cliente
foreign key (id_cliente)
references cliente(id);

alter table imovel
add constraint fk_imovel_bairro
foreign key (id_bairro)
references bairro(id);

alter table imovel
add constraint fk_imovel_endereco
foreign key (id_endereco)
references endereco(id);

alter table imovel
add constraint fk_imovel_cidade
foreign key (id_cidade)
references cidade(id);


create table veiculo(
	id int not null auto_increment primary key, 
	id_cliente int not null,
	id_marca int , 
	id_modelo int , 
	id_cidade int , 
	combustivel varchar (255),
	cor varchar (255),
	km varchar (255),
	imagem varchar (255),
	valor varchar (255),
	obs blob
);

alter table veiculo
add constraint fk_veiculo_cliente
foreign key (id_cliente)
references cliente(id);

alter table veiculo
add constraint fk_veiculo_marca
foreign key (id_marca)
references marca(id);

alter table veiculo
add constraint fk_imovel_modelo
foreign key (id_modelo)
references modelo(id);

alter table veiculo
add constraint fk_veiculo_cidade
foreign key (id_cidade)
references cidade(id);



create table outros(
	id int not null auto_increment primary key , 
	id_cliente int not null,
	id_tipo_produto int not null,
	produto varchar (255),
	imagem varchar (255),
	obs blob
);

alter table outros
add constraint fk_outros_cliente
foreign key (id_cliente)
references cliente(id);

alter table outros
add constraint fk_outros_tipo_produto
foreign key (id_tipo_produto)
references tipo_produto(id);

/* ************************************************************************ Escala 7 ****************************************************************************************************************************** */


create table fotos(
	id int not null auto_increment primary key , 
	id_imovel int null,
	id_veiculo int null,
	id_outros int null,
	imagem varchar (255),
	obs varchar (100)
);

alter table fotos
add constraint fk_fotos_imovel
foreign key (id_imovel)
references imovel(id);

alter table fotos
add constraint fk_fotos_veiculo
foreign key (id_veiculo)
references veiculo(id);

alter table fotos
add constraint fk_fotos_outros
foreign key (id_outros)
references outros(id);


drop table usuario;
drop table banner;
drop table cidade;
drop table categoria_cliente;
drop table cliente;
drop table bairro;
drop table marca;
drop table endereco;
drop table modelo;
drop table tipo_produto;
drop table imovel;
drop table veiculo;
drop table outros;
drop table fotos;