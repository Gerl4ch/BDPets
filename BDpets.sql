drop database BdPets;

create database BdPets;

use BdPets;

create table dbPets(
codPet int not null auto_increment,
nome varchar(50) not null,
raca varchar(25) not null,
cor varchar(25) not null,
endereco varchar(50) not null,
dataNasc date,
peso decimal(9,2),
idade int,
rga char(7) unique,
primary key(codPet));

desc dbPets;
