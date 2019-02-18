Ya en la consola de Mysql
-ingresar:
Mysql -u root -p --entro en la terminal, hago enter
create databases dataejemplo;--creo una base de datos
show databases; --muetra las bases de datos
use dataejemplo;--uso esa database
create table editoriales (IDeditorial int(44) prima key not null auto_increment unique,
nombre varchar(100),
apellido varchar(100),
telefono varchar(100));--el nombre de la fila, el tipo de dato 
--(int,char,varchar), not null auto-increment sirve para crear una primary key (llave primaria osea que crea un valor unico en una tabla), NOT NULL (que no puede contener valores nulos)
--CADA TABLA SOLO PUEDE TENER UNA CLAVE PRIMARIA


INSERT INTO `editoriales1` (`IDeditorial`, `nombre`, `direccion`, `telefono`)
    -> VALUES (NULL, 'Alfaguara', 'Medrano 951', '2645-4538');--inserto dartos en la tabla 

create table libros(
    -> idlibro int(44) primary key not null auto_increment unique,
    -> autor varchar(100),
    -> titulo varchar(100),
    -> precio varchar(100),
    -> IDeditorial int(44) not null);

     INSERT INTO `libros` (`idlibro`, `autor`, `titulo`, `precio`, `IDeditorial`) VALUES (NULL, 'Rowilng', 'HP 1', '1237', '2');

agregar un campo:

alter table add nombreCampo caracteristicas after/before otro campo
alter table add precio int default 0 after libro; 

AHORA LOS EJERCICIOS

1. select avg(precio)--promedio
    ->  from editoriales1 as e1 join libros as l on e1.ideditorial=l.ideditorial --junto ambas tablas con un apodo
    -> where nombre='salamanca';--cuando se cumpla esta regla

2.  select nombre,titulo from editoriales1 as e1 join libros as l on e1.ideditorial=l.ideditorial;

3.  select min(precio),nombre
    ->  from editoriales1 as e1 join libros as l on e1.ideditorial=l.ideditorial
    -> where nombre='alfaguara';

4.  select titulo,precio
    -> ,if (precio>450,'caro','barato')
    ->  from editoriales1 as e1 join libros as l on e1.ideditorial=l.ideditorial;

5.  select titulo,autor,precio,nombre
    ->  from editoriales1 as e1 join libros as l on e1.ideditorial=l.ideditorial
    -> where precio<500 and nombre='planeta';



