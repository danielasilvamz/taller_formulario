create table clientes(
	id int primary key auto_increment,
	nombre varchar(75) not null,
	email varchar(100) not null,
	ciudad varchar(50) not null,
	queja varchar(250) not null
);