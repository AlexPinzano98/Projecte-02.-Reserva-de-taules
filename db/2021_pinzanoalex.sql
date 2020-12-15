CREATE DATABASE 2021_pinzanoalex;
USE bd_reserva_mesa;

CREATE TABLE tbl_camareros (
    id_camarero int (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Name varchar (100) NOT NULL,
    Email varchar (255) NOT NULL,
    Passwd varchar (50) NOT NULL,
    Status enum('0', '1') NOT NULL,
    Profile int (11) NOT NULL
);

CREATE TABLE tbl_perfil (
    id int (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Name varchar (100) NOT NULL
);

CREATE TABLE tbl_salas (
    id_sala int (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    num_mesas int (2) NOT NULL,
    num_sillas int (2) NOT NULL
);

CREATE TABLE tbl_mesas (
    id_mesa int (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_sala int (11) NOT NULL,
    num_sillas_mesa int (2) NOT NULL,
    disponibilidad_mesa enum('disponible', 'no disponible') NOT NULL
);

CREATE TABLE tbl_reservas (
    id_reserva int (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_mesa int (11) NOT NULL,
    dia_reserva date NOT NULL,
    hora_entrada_reserva time NOT NULL,
    hora_salida_reserva time NULL
);

CREATE TABLE tbl_incidencias (
    id_inc int (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_mesa int (11) NOT NULL,
    descrip text NOT NULL,
    dispo enum('si', 'no') NOT NULL
);

alter table tbl_mesas 
add constraint fk_id_sala foreign key (id_sala)
references tbl_salas (id_sala);

alter table tbl_reservas
add constraint fk_id_mesa foreign key (id_mesa)
references tbl_mesas (id_mesa);

alter table tbl_incidencias
add constraint fk_id_inc foreign key (id_mesa)
references tbl_mesas (id_mesa);

alter table tbl_camareros
add constraint fk_id_perfil foreign key (Profile)
references tbl_perfil (id);

INSERT INTO tbl_perfil (id,Name)	
VALUES	("1","Camarero"),
("2","Mantenimiento"),
("3","Administrador");

INSERT INTO tbl_camareros (Name,Email,Passwd,Status,Profile)	
VALUES	("Admin","admin@admin.com","81dc9bdb52d04dc20036dbd8313ed055","1","3"),
("Random","random@random.com","81dc9bdb52d04dc20036dbd8313ed055","1","1"),
("Alex","alex@gmail.com","81dc9bdb52d04dc20036dbd8313ed055","1","3"),
("Dani","dani@gmail.com","81dc9bdb52d04dc20036dbd8313ed055","1","2"),
("Carlos","carlos@gmail.com","81dc9bdb52d04dc20036dbd8313ed055","1","1");

INSERT INTO tbl_salas (num_mesas,num_sillas)	
VALUES	("6","24"),
("6","24"),
("6","24") ;

INSERT INTO tbl_mesas (id_sala,num_sillas_mesa,disponibilidad_mesa)
VALUES ("1","2","disponible"),("1","2","disponible"),("1","4","disponible"),
("1","4","disponible"),("1","6","disponible"),("1","6","disponible"),
("2","2","disponible"),("2","2","disponible"),("2","4","disponible"),
("2","4","disponible"),("2","6","disponible"),("2","6","disponible"),
("3","2","disponible"),("3","2","disponible"),("3","4","disponible"),
("3","4","disponible"),("3","6","disponible"),("3","6","disponible");

INSERT INTO tbl_incidencias (id_mesa,descrip, dispo)	
VALUES	("4","Esta mesa esta jodia","no"),
("8","Esta mesa esta bien bellaca","si"),
("3","Esta mesa esta para tirar","no"),
("1","Esta mesa esta bien dura papi","si");
