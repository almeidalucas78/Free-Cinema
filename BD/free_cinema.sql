create database free_cinema;

use free_cinema;

drop table cadastroUsuario(
	id_usuario int primary key auto_increment,
    nome varchar(250),
    sexo varchar(1),
    nascimento date,
    email varchar(250),
    senha varchar(20));

	SELECT * FROM cadastroUsuario;

    