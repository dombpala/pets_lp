USE gestion_mascotas;

# Inserts persona
INSERT INTO gestion_mascotas.persona (cedula, nombre, apellido, fechaNacimiento, tipo) VALUES 
("0922178323","Rodrigo","Saraguro", NOW(), "voluntario"),
("0923839712","Fabio","Quimi", NOW(), "voluntario"),
("0983028772","Kristel","Pelaez", NOW(), "voluntario"),
("0836273664","Gabriela","Vaca", NOW(), "patrocinador"),
("0399178323","Carlos","Pillajo", NOW(), "patrocinador"),
("0923455271","Daniela","Sinchi", NOW(), "patrocinador"),
("0846282304","Alejandro","Vargas", NOW(), "patrocinador");

select * from persona;

# Inserts voluntarios
INSERT INTO gestion_mascotas.voluntario (id_persona, tipo) VALUES
("0922178323", "Cuidador"),
("0923839712", "Veterinario"),
("0983028772", "Cuidador");

select * from voluntario;

# Inserts mascotas
INSERT INTO gestion_mascotas.mascota (nombre, edad, especie) VALUES
("Tetsu",3,"Gato"),
("Kira",8,"Gato"),
("Trueno",5,"Perro"),
("Arthur",6, "Gato");

select * from mascota;
