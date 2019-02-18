APACHE : Nos daba una interfaz gráfica para hacer nuestras bases de datos y tablas.

localhost/phpmyadmin  o apretar el boton admin en mysql


Pueden hacer las tablas en la consola :DD::D:D:D

CRUD -> CREATE READ UPDATE DELETE 

INSERT into nombreDeLaTabla (columna1,column2,columna3) values ('valor1','valor2','valor3');

SELECT campos from tabla where condicion1 and condicion; 

UPDATE empleados set nombre = 'pastel';
-- se modificaban todos los valores de la tabla empleados 
update empleados set nombre = 'Te escribo' where id = 1; 
update empleados set nombre='tu', apellido='vieja' where id=1; 

insert into empleados (nombre,apellido,trabajo,edad,salario,mail) values ('franquito','di leo','docente',24,2,'dileofrancoj@gmail.com')

dentro de la base de datos empleados
show tables; mostrar todas las tablas dentro de la base de datos que estamos (podemos tener mas de una tabla)
describe empleados; (muestra la estructura de la tabla empleadps)

DELETE from empleados; -- borra todos los registros
DELETE from empleados where condicionUnica id = 022;

empleados EMPLEADOS; // no importan las mayusculas y minusculas


usuarios : id, usuario, password
datos : id, idUsuario, nombre, apellido, correo 
(id auto_increment y primary)

libros : id (auto_increment,primary), idUsuario, libro 


alter table libros add nuevaColumna varchar(100) after idUsuario; 

Los unicos int son id, idUsuario
create table usuarios (
	id int auto_increment,
	usuario varchar(100),
	password varchar(100),
	primary key(id)
);

create table datos (
	id int auto_increment,
	idUsuario int,
	nombre varchar(100),
	apellido varchar(100),
	correo varchar(100),
	primary key(id)
);

create table libros (
	id int auto_increment,
	idUsuario int,
	libro varchar(100),
	primary key(id)
);
id | usuarios 

Unicos -> no haya registros repetidos 
SQL -> primary key (clave primaria)

id : 1  nomre : franco

insert into usuarios (id,nombre) values (1,'franco');

	error duplicate entry for primary key id


	base de datos gestion 

AUTO INCREMENT : AL CAMPO QUE TILDAMOS COMO PRIMARY KEY LE DA LA PROPIEDAD DE AUTO INCREMENTABLE

propiedades del primary key : solo puede haber uno por tabla
							: esto evita los registros duplicados 
propiedades del A_I : solo puede tildarse esta propiedad para campos que son primary !!!!! y solo para enteros

tildo un A_I en un campo entero automagicamente lo asigna como clave primaria 

campos que vinculan ambas tablas : id en usuarios
	idUsuario en datos
	idUsuario en libros 

-- JOIN (JUNTAR)
SELECT * from usuarios; -- Solo me trae id,usuario,password de la tabla usuarios
SELECT * from datos ; -- solo me trae id,idUsuario, nombre,apellido,email;

-- Puedo a una tabla darle un alias (sobrenombre) que me facilita las consultas. Los alias se asignan con as
SELECT * from usuarios as u join datos as d on u.id = d.idUsuario where u.id = 1;  


SELECT * from usuarios as u left join libros as l on u.id =l.idUsuario where u.id = 1;

SELECT * from usuarios as u right join libros as l on u.id =l.idUsuario where u.id = 1;

SELECT * from usuarios as u  join libros as l on u.id =l.idUsuario where u.id = 1;

MODIFICAION DE TABLAS : 

agregar un campo:

alter table add nombreCampo caracteristicas after/before otro campo
alter table add precio int default 0 after libro; 

MODIFICAR UNA TABLA: 
-- un cliente: mi usuario tiene que tener 101 caracteres 

alter table usuarios modify usuario varchar(101) not null;
alter table usuarios add precio float not null default 0;
alter table usuarios drop precio; -- bora la columna precio de nuestra tabla. 


-- alter table nos sirve para agregar columnas o campos a nuestra tabla existente, nos sirve para modificar campos, y para borrar campos 

LIKE

SELECT * from usuarios where usuario like "%f";
-- mostrar todos los usuarios que terminen con f
SELECT * from usuarios where usuario like "f%";

-- mostrar todos los usuarios que empiecen con f
SELECT * from usuarios where usuario like "%f%";
-- mostrar todos los usuarios que contengan f
 -- ""
 -- 0
 --  NULL 

 min, max, avg
 -- Quiero llevarme el libro mas caro...

 select * from libros where precio = max(precio);
 select max(precio),nombre from libros; -- nos trae el precio y el nombre del libro mas caro
 select min(precio),nombre from libros; -- nos trae el precio y el nombre del libro mas barato.

 select avg(precio) from libros; 


 select * from usuarios order by usuario asc; 
 select * from usuarios order by usuario desc;
