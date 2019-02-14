-- SQL lenguaje de consulta d eestructuras
-- interseccion entre fila y columna.
-- BASE DE DATOS me lo imagino como un ARCHIVO DE EXCEL, dentro de esa base de datos puedo tener diferentes tablas
-- dentro de estas tablas hay fils y columnas

--guardo informacion de cualquier tipo
-- TENEMOS EN FRONTEND
-- "cuando tengamos en back (PHP) vamos a hacer consultas desde el front que pasen por el backend r impacten en nuestra base de datos --> responde , pasa por el back end y vuelve al frontend para que el usuario vea los resultados"

-- XAMPP(abarca todos los Sistemas operativos, es inclusivo ggg TODXS)
--TODXS
--APACHE es un WEB SERVER (interprete(C,JAVA,ETC))
--MySQL
--PHP
--PEARL

--como crear bases de datos (interfaz de grafica)
--crear tablas en nuesta base de datos
--OPERACIONES dentro de tablas se haran por consola
--consultas que se hacen hacen a las tabla ses super importante para que podamos hacer un backend como la gente

--CRUD (CREATE, READ, UPDATE, DELETE)
--INGREAR REGISTROS (DAR DE ALTA UN USUARIO)
   --ESCRIBIR UNA PUBLICACION

--leer informacion que existe dentro de la tabla,todo lo que consiste en traer informacion
   --select
--actualizar una contraseña, editar un post en inta, bla bla --UPDATE
--si queremos BORRAR UN POSTEO

--http://localhost/phpmyadmin/

--Tipos de datos
--4 ()es entero
--3.14 (decimales) flotante
--franco - string
--dileofranco varchar
--0 o 1 boolean

--id,usuario,pass, permisos
--id: relacionar las tablas entre si (numero entero)
--usuario : varchar (5) franco --> almacena franc
--password: varchar (40)-->caracteres minimo siempre
--permisos : boolean -> 0 correspondientes al usuario comun, 1 (corresponde a el usuario)

--tipos de datos (valores maximos)
<input type="numbre"
--int : 2
-- el char completa con espacios
--varchar lo deja igual

--TODOS LOS DATOS QUE SEAN NUMERICOS NO LLEVAN COMILLAS
--los datos varchar lleban comillas

--SELECT le decimos que columnas queremos ver ,trae la informacion
-- * = all
--SET define el campo, por ejemplo cambio la pass , le doy un valor nuevo
--INSERT into tabla 
--si quiero actualizar el usuario y la contraseña del id 2, que quiero actualizar, lo que quiero actualizar lo separo por comas.
--DELETE BORRA TODOOO
--las bases de datos son sistemas encargados de :guardar informacion y de repetir la informacion el menor numero de veces posible


--LA IDEA ES TENER VARIAS TABLAS CON UN TIPO DE RELACION con un campo comun Y TENER LA INFORMACION SEGMENTADA
--la idea es mantener integridad referencial, la informacion se debe repetir la menor cantidad de veces posibles

--usuario:id,usuario,password,permisos
--informacion:id,nombre,apellido, mail


drop table usuarios;--borra la estructura
DELETE from usuarios;-- borra todo D:
DELETE from usuarios where id= 1 limit 1;--
--limit 5 trae los primeros 5
--limit 5,10 agarra los comprendidos entre 5 y 10
--limit 10,15 etc
--puedo entregar una pagina para administracion y le doy un formulario lindo ;) y eso en realidad se carga en una tabla

numeropagina=
numerodenoticias= 2;
numerolimit=
10,20
20,30
-SELECT * from noticias where usuario='imprentaBBY'

DELETE from usuarios where id= 1 limit 0,1 --trae el primer registro
DELETE from usuarios where id= 1 limit 1,3 -- trae los otros 2

registros :)

-- CUENTA
SELECT count (usuarios) from usuarios;
SELECT count (COLUMNA DE TABLAS) from usuarios
--esto devuelve un numero entero

--SE puede importar una tabla
