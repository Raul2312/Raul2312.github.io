CREATE database hirotrips

use hirotrips;


CREATE TABLE USUARIOS (
    ID_USUARIOS INTEGER(20)  not nulL auto_increment,
    PASSWORD VARCHAR(50),
    CORREO VARCHAR(50),
    NOMBRE VARCHAR(20),
    AP_PATERNO VARCHAR(20),
    AP_MATERNO VARCHAR(20),
    EDAD INT,
    TELEFONO VARCHAR(15),
    PRIMARY key (ID_USUARIOS)
);


INSERT INTO USUARIOS(ID_USUARIOS,PASSWORD,CORREO,NOMBRE,AP_PATERNO,AP_MATERNO,EDAD,TELEFONO) VALUES(0,'1234','raulmadridflores202@gmail.com','Raul','Madrid','Flores',19,6361353989);
INSERT INTO USUARIOS(ID_USUARIOS,PASSWORD,CORREO,NOMBRE,AP_PATERNO,AP_MATERNO,EDAD,TELEFONO) VALUES(0,'4321','juanperes22@gmail.com','Juan','Perez','Flores',19,6361353988);
INSERT INTO USUARIOS(ID_USUARIOS,PASSWORD,CORREO,NOMBRE,AP_PATERNO,AP_MATERNO,EDAD,TELEFONO) VALUES(0,'2143','paulina132@gmail.com','Paulina','lopez','rodriguez',19,6361353987);
INSERT INTO USUARIOS(ID_USUARIOS,PASSWORD,CORREO,NOMBRE,AP_PATERNO,AP_MATERNO,EDAD,TELEFONO) VALUES(0,'3412','luisjavier90@gmail.com','Luis','Valverde','Trejo',19,6541353989);
INSERT INTO USUARIOS(ID_USUARIOS,PASSWORD,CORREO,NOMBRE,AP_PATERNO,AP_MATERNO,EDAD,TELEFONO) VALUES(0,'908070','alejandra12@gmail.com','Alejandra','contreras','torres',19,6361353562);
select * from USUARIOS


 


CREATE TABLE VIAJES (
    ID_VIAJE integer(20) not null auto_increment,
    DESTINO VARCHAR(20),
    FECHA_INICIO DATE,
    PRECIO NUMERIC(10,2),
    HORA_SALIDA TIME,
    ESTADO VARCHAR(10),
    FECHA_LLEGADA DATE,
    HORA TIME,
    
    primary key (ID_VIAJE)
);






CREATE TABLE RESERVACIONES (
    ID_RESERVACION INTEGER(20) not null AUTO_INCREMENT,
<<<<<<< HEAD
    USUARIO CHAR (30),
  	PAQUETE VARCHAR(20),
    NOMBRE_EMPLEADO VARCHAR(20), 
    MONTO VARCHAR(20),
    MODELO VARCHAR(20), 
    HOTEL VARCHAR(20), 
   	COMIDA VARCHAR (20),
   	FECHA_SALIDA VARCHAR(30),
   	FECHA_REGRESO VARCHAR (30),
=======
    ID_NOMBRE CHAR (30),
   
    
    NOMBRE_PAQUETE VARCHAR(20),
    NOMBRE VARCHAR(20), --SUCURSAL--
    NOMBRE VARCHAR(20), --EMPLEADO
    MONTO VARCHAR(20),	--MONTO--
    NOMBRE VARCHAR(20), --TRANSPORTE--
    HOTEL VARCHAR(20), --HOSPEDAJE
    ID_COMIDA VARCHAR (20),
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54

    
    
     primary key (ID_RESERVACION)
);


<<<<<<< HEAD

=======
SELECT 
    PAGOS.*,
    RESERVACIONES.ID_RESERVACION
FROM 
    PAGOS
INNER JOIN 
    RESERVACIONES ON PAGOS.ID_RESERVACION = RESERVACIONES.ID_RESERVACION;
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
   
CREATE TABLE PAQUETE (
    ID_PAQUETE INTEGER(20) not null AUTO_INCREMENT,
    NOMBRE_PAQUETE VARCHAR(20),
    PRECIO NUMERIC(10,2),
<<<<<<< HEAD
    CANTIDAD_PERSONAS INT,
=======
    CANTIDAD_PERSONAS INT	,
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
    DESCUENTOS NUMERIC(3),
    DESCRIPCION VARCHAR(50),
    IMAGEN VARCHAR (40),
    primary key (ID_PAQUETE)
);




	CREATE TABLE SUCURSAL (
	    ID_SUCURSAL INTEGER(20) not null AUTO_INCREMENT,
	    NOMBRE VARCHAR(20),
	    DIRECCION VARCHAR(30),
	    primary key (ID_SUCURSAL)
	);

CREATE TABLE HOSPEDAJE (
    ID_HOSPEDAJE INTEGER(20) not null AUTO_INCREMENT,
    HOTEL VARCHAR(30),
 	DIRECCION VARCHAR (50),
 	DESCRIPCION VARCHAR (200),
    IMAGEN varchar (40),
    primary key (ID_HOSPEDAJE)
   
);


CREATE TABLE TRANSPORTE (
    ID_TRANSPORTE integer not null AUTO_INCREMENT,
    NOMBRE VARCHAR(50),
    MODELO VARCHAR(50),
    DESCRIPCION VARCHAR(500),
    PRECIO NUMERIC(10),
    CANTIDAD INT (4),
    CAPACIDAD INT (4),
    MOTOR VARCHAR(50),
    CONSUMO VARCHAR(50),
    IMAGEN VARCHAR(50),
    PRIMARY key (ID_TRANSPORTE)
    
);
<<<<<<< HEAD
CREATE TABLE COMIDA2 (
    ID_COMIDA INTEGER(20) NOT NULL AUTO_INCREMENT,
    NOMBRE VARCHAR(30),
    DESCRIPCION VARCHAR(100),
    TOTAL_CALORIAS VARCHAR(30),
    CATEGORIA VARCHAR(30),
    PRECIO NUMERIC(10),
    PROCEDIMIENTO VARCHAR(30),
    IMAGEN VARCHAR(50),
    PRIMARY KEY (ID_COMIDA)
);


select * from COMIDA2



CREATE TABLE PAGOS (
    ID_PAGO INTEGER(20) not null AUTO_INCREMENT,
=======
CREATE TABLE COMIDA (
    ID_COMIDA INTEGER(20) not null AUTO_INCREMENT,
    TIPO VARCHAR(20),
    PRECIO NUMERIC(10,2),
    ID_PAQUETE VARCHAR(20),
      primary key (ID_COMIDA)
);


select * from comida
CREATE TABLE PAGOS (
    ID_PAGO INTEGER(20) not null AUTO_INCREMENT,
    ID_RESERVACION VARCHAR(20),
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
    NOMBRE CHAR (50),
    MONTO NUMERIC(10),
    FECHA_PAGO DATE,
    METODO_PAGO VARCHAR(15),
    ESTADO_PAGO VARCHAR(15),
    primary key (ID_PAGO)
   
);





<<<<<<< HEAD
INSERT INTO RESERVACIONES (USUARIO, PAQUETE, NOMBRE_EMPLEADO, MONTO, MODELO, HOTEL, COMIDA, FECHA_SALIDA, FECHA_REGRESO) VALUES ('Luis Grijalva', 'Paquete Familiar', 'Raúl Madrid', '500.00', 'Toyota Avanza', 'Hotel Sunset', 'Todo Incluido', '2024-12-15', '2024-12-20');
 INSERT INTO RESERVACIONES (USUARIO, PAQUETE, NOMBRE_EMPLEADO, MONTO, MODELO, HOTEL, COMIDA, FECHA_SALIDA, FECHA_REGRESO) VALUES    ('María López', 'Luna de Miel', 'Raúl Madrid', '1200.00', 'Honda Civic', 'Hotel Paradise', 'Media Pensión', '2024-12-18', '2024-12-25');
 INSERT INTO RESERVACIONES (USUARIO, PAQUETE, NOMBRE_EMPLEADO, MONTO, MODELO, HOTEL, COMIDA, FECHA_SALIDA, FECHA_REGRESO) VALUES    ('Carlos Pérez', 'Aventura Extrema', 'Raúl Madrid', '800.00', 'Jeep Wrangler', 'Hotel Adventure', 'Desayuno', '2024-12-10', '2024-12-15');





=======
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54


INSERT INTO VIAJES(ID_VIAJE,DESTINO,FECHA_INICIO,PRECIO,HORA_SALIDA,ESTADO,FECHA_LLEGADA,HORA) VALUES(0,'Hawai','22/10/24',10000,'02:00','Reservado','30/12/24','16:00');
INSERT INTO VIAJES(ID_VIAJE,DESTINO,FECHA_INICIO,PRECIO,HORA_SALIDA,ESTADO,FECHA_LLEGADA,HORA) VALUES(0,'Paris','20/10/24',17000,'04:00','Reservado','10/01/25','11:00');
INSERT INTO VIAJES(ID_VIAJE,DESTINO,FECHA_INICIO,PRECIO,HORA_SALIDA,ESTADO,FECHA_LLEGADA,HORA) VALUES(0,'Londres','20/10/24',19000,'04:00','Reservado','10/01/25','11:00');
INSERT INTO VIAJES(ID_VIAJE,DESTINO,FECHA_INICIO,PRECIO,HORA_SALIDA,ESTADO,FECHA_LLEGADA,HORA) VALUES(0,'USA','20/10/24',11000,'04:00','Reservado','10/01/25','11:00');
INSERT INTO VIAJES(ID_VIAJE,DESTINO,FECHA_INICIO,PRECIO,HORA_SALIDA,ESTADO,FECHA_LLEGADA,HORA) VALUES(0,'BRASIL','22/10/24',18000,'04:00','Reservado','10/01/25','11:00');



<<<<<<< HEAD

select * from reservaciones


INSERT INTO COMIDA (NOMBRE, DESCRIPCION, TOTAL_CALORIAS, CATEGORIA, PRECIO, PROCEDIMIENTO, IMAGEN) VALUES('Pizza Margarita', 'Pizza tradicional con queso mozzarella y albahaca', '800', 'Italiana', 12.50, 'Hornear', 'pizza_margarita.jpg');
INSERT INTO COMIDA (NOMBRE, DESCRIPCION, TOTAL_CALORIAS, CATEGORIA, PRECIO, PROCEDIMIENTO, IMAGEN) VALUES('Sushi Roll', 'Rollo de sushi con aguacate y salmón', '300', 'Japonesa', 15.00, 'Enrollar', 'sushi_roll.jpg');

=======
INSERT INTO RESERVACIONES(ID_RESERVACION,ID_NOMBRE,ID_USUARIOS,ID_PAQUETE,ID_SUCURSAL,ID_EMPLEADO,ID_PAGO,ID_TRANSPORTE,ID_HOSPEDAJE,ID_COMIDA) VALUES(0,'raul','1','1','8','1','10','3','5','6');
INSERT INTO RESERVACIONES(ID_RESERVACION,ID_NOMBRE,ID_USUARIOS,ID_PAQUETE,ID_SUCURSAL,ID_EMPLEADO,ID_PAGO,ID_TRANSPORTE,ID_HOSPEDAJE,ID_COMIDA) VALUES(0,'juan','1','1','8','1','10','3','5','6');
INSERT INTO RESERVACIONES(ID_RESERVACION,ID_NOMBRE,ID_USUARIOS,ID_PAQUETE,ID_SUCURSAL,ID_EMPLEADO,ID_PAGO,ID_TRANSPORTE,ID_HOSPEDAJE,ID_COMIDA) VALUES(0,'pedro,'1','1','8','1','10','3','5','6);
INSERT INTO RESERVACIONES(ID_RESERVACION,ID_NOMBRE,ID_USUARIOS,ID_PAQUETE,ID_SUCURSAL,ID_EMPLEADO,ID_PAGO,ID_TRANSPORTE,ID_HOSPEDAJE,ID_COMIDA) VALUES(0,'juan','1','1','8','1','10','3','5','6');
select * from reservaciones

INSERT INTO COMIDA(ID_COMIDA,TIPO,PRECIO,ID_PAQUETE) VALUES(0,'Enchiladas',500,'2');
INSERT INTO COMIDA(ID_COMIDA,TIPO,PRECIO,ID_PAQUETE) VALUES(0,'Tacos',200,'4');
INSERT INTO COMIDA(ID_COMIDA,TIPO,PRECIO,ID_PAQUETE) VALUES(0,'Huevos Rancheros',1500,'5');
INSERT INTO COMIDA(ID_COMIDA,TIPO,PRECIO,ID_PAQUETE) VALUES(0,'Quesadilas de asado',540,'1');
INSERT INTO COMIDA(ID_COMIDA,TIPO,PRECIO,ID_PAQUETE) VALUES(0,'Barbacoa',150,'6');
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54




INSERT INTO EMPLEADO(ID_EMPLEADO,NOMBRE,CARGO,SALARIO,CONTRATACON_FECHA,TELEFONO,CORREO,DIRECCION) VALUES('1','JUAN RODRIGUEZ','AZAFATA',5000,'12/05/08',6361345678,'juanrodrig@gmail.com','puertas del sol 678');
INSERT INTO EMPLEADO(ID_EMPLEADO,NOMBRE,CARGO,SALARIO,CONTRATACON_FECHA,TELEFONO,CORREO,DIRECCION) VALUES('2','ALONDRA SALAS','CONTADORA',6000,'11/09/11',6363456790,'alondrasalas23@gmail.com','puertas de luna 5538');
INSERT INTO EMPLEADO(ID_EMPLEADO,NOMBRE,CARGO,SALARIO,CONTRATACON_FECHA,TELEFONO,CORREO,DIRECCION) VALUES('3','MIGUEL TORRES','CHOFER',3000,'19/04/02',6369086713,'torresmiguel45@gmail.com','puertas de poseidon 908');
INSERT INTO EMPLEADO(ID_EMPLEADO,NOMBRE,CARGO,SALARIO,CONTRATACON_FECHA,TELEFONO,CORREO,DIRECCION) VALUES('4','LEONARDO DICAPRIO','SECRETARIA',6000,'09/01/06',6560909688,'pirata@hotmail.com','Av Miguel Angel Escarcega 6758');
INSERT INTO EMPLEADO(ID_EMPLEADO,NOMBRE,CARGO,SALARIO,CONTRATACON_FECHA,TELEFONO,CORREO,DIRECCION) VALUES('5','CRISTIANO RONALDO','TECNICO',10000,'12/10/07',6324569183,'elmejordelmundo87@outlook.es','Calle Zeus 6623');

select * from empleado 





INSERT INTO PAGOS(ID_RESERVACION,NOMBRE,MONTO,FECHA_PAGO,METODO_PAGO,ESTADO_PAGO) VALUES('1','Guillermo Perez',34500,'13-11-24','EFECTIVO','PENDIENTE');
INSERT INTO PAGOS(ID_RESERVACION,NOMBRE,MONTO,FECHA_PAGO,METODO_PAGO,ESTADO_PAGO) VALUES('2','Leonardo Trujillo',14400,'09/03/24','TARJETA','PAGADO');
INSERT INTO PAGOS(ID_RESERVACION,NOMBRE,MONTO,FECHA_PAGO,METODO_PAGO,ESTADO_PAGO) VALUES('3','Juan torres',19500,'08/06/24','TARJETA','PAGADO');
INSERT INTO PAGOS(ID_RESERVACION,NOMBRE,MONTO,FECHA_PAGO,METODO_PAGO,ESTADO_PAGO) VALUES('4','Raul Madrid',31100,'21/10/24','EFECTIVO','PENDIENTE');
INSERT INTO PAGOS(ID_RESERVACION,NOMBRE,MONTO,FECHA_PAGO,METODO_PAGO,ESTADO_PAGO) VALUES('5','Maria Lujan',12000,'30/12/24','DEPOSITO','PENDIENTE');

select * from pagos 




INSERT INTO HOSPEDAJE (HOTEL, DIRECCION, DESCRIPCION,IMAGEN) VALUES ('Hotel Sol y Mar', 'Calle del Mar, 45, Barcelona', 'Un hotel frente al mar con excelentes vistas y servicios.','default.png');
INSERT INTO HOSPEDAJE (HOTEL, DIRECCION, DESCRIPCION,IMAGEN) VALUES ('Montaña Blanca Resort', 'Avenida de la Montaña, 12, Andorra', 'Resort en la montaña con spa y actividades al aire libre.','default.png');
INSERT INTO HOSPEDAJE (HOTEL, DIRECCION, DESCRIPCION,IMAGEN) VALUES ('Hotel Urbano Centro', 'Calle Central, 101, Madrid', 'Hotel moderno en el centro de la ciudad, ideal para negocios y turismo.','default.png');
INSERT INTO HOSPEDAJE (HOTEL, DIRECCION, DESCRIPCION,IMAGEN) VALUES ('Río Verde Lodge', 'Camino del Río, 8, Valencia', 'Un lodge ecológico rodeado de naturaleza, perfecto para el descanso.','default.png');
INSERT INTO HOSPEDAJE (HOTEL, DIRECCION, DESCRIPCION,IMAGEN) VALUES ('Gran Hotel Imperial', 'Plaza Mayor, 1, Sevilla', 'Hotel de lujo con instalaciones históricas y servicio cinco estrellas.','default.png');


select * from hospedaje 



INSERT INTO TRANSPORTE (NOMBRE, MODELO, DESCRIPCION, PRECIO, CANTIDAD, CAPACIDAD, MOTOR, CONSUMO, IMAGEN)  VALUES('Toyota Corolla', '2023', 'El Toyota Corolla 2023 es un sedán compacto con tecnología avanzada y características de seguridad líderes en su clase. Ofrece una conducción suave, excelente eficiencia de combustible y un interior espacioso que lo convierte en una opción ideal para familias pequeñas o conductores urbanos. Su motor de 1.8L brinda un rendimiento confiable y bajo consumo.', 35000.00, 5, 5, '1.8L', '6.5L/100km', 'toyota_corolla.jpg');
INSERT INTO TRANSPORTE (NOMBRE, MODELO, DESCRIPCION, PRECIO, CANTIDAD, CAPACIDAD, MOTOR, CONSUMO, IMAGEN)  VALUES('Ford Explorer', '2022', 'La Ford Explorer 2022 es una SUV robusta y espaciosa, perfecta para viajes familiares largos. Con un motor potente de 3.0L, es capaz de manejar caminos difíciles y ofrecer un rendimiento eficiente. Además, cuenta con un sistema de entretenimiento de última generación y un amplio espacio para pasajeros y carga, lo que la hace ideal para aventuras en carretera.', 45000.00, 3, 7, '3.0L', '8.5L/100km', 'ford_explorer.jpg');
INSERT INTO TRANSPORTE (NOMBRE, MODELO, DESCRIPCION, PRECIO, CANTIDAD, CAPACIDAD, MOTOR, CONSUMO, IMAGEN)  VALUES('Honda Civic', '2021', 'El Honda Civic 2021 es un vehículo confiable y económico, conocido por su eficiencia de combustible y durabilidad. Con un diseño elegante y moderno, ofrece un excelente rendimiento de manejo, ideal tanto para la ciudad como para viajes largos. El motor de 2.0L combina potencia y bajo consumo, y el interior es cómodo y tecnológico, ofreciendo una experiencia de conducción placentera.', 25000.00, 8, 5, '2.0L', '5.8L/100km', 'honda_civic.jpg');
INSERT INTO TRANSPORTE (NOMBRE, MODELO, DESCRIPCION, PRECIO, CANTIDAD, CAPACIDAD, MOTOR, CONSUMO, IMAGEN)  VALUES('Tesla Model 3', '2023', 'El Tesla Model 3 2023 es un vehículo eléctrico de última generación que ofrece un rendimiento impresionante, con una aceleración rápida y una autonomía extendida. Con un sistema de propulsión totalmente eléctrico, este modelo elimina la necesidad de combustibles fósiles y reduce significativamente las emisiones. Además, cuenta con tecnología avanzada de asistencia al conductor y un interior minimalista y moderno.', 60000.00, 2, 5, 'Eléctrico', '0L/100km', 'tesla_model3.jpg');





select * from transporte 


INSERT INTO PAQUETE (NOMBRE_PAQUETE, PRECIO, CANTIDAD_PERSONAS, DESCUENTOS, DESCRIPCION, IMAGEN) VALUES('Aventura Maya', 899.99, 2, 10, 'Excursión en la selva y cenotes', 'aventura_maya.jpg');
INSERT INTO PAQUETE (NOMBRE_PAQUETE, PRECIO, CANTIDAD_PERSONAS, DESCUENTOS, DESCRIPCION, IMAGEN) VALUES('Playa Relax', 499.50, 1, 5, 'Hotel frente al mar con desayuno', 'playa_relax.jpg');
INSERT INTO PAQUETE (NOMBRE_PAQUETE, PRECIO, CANTIDAD_PERSONAS, DESCUENTOS, DESCRIPCION, IMAGEN) VALUES('Tour Europa', 1999.99, 4, 15, 'Visita a 5 países en 10 días', 'tour_europa.jpg');
INSERT INTO PAQUETE (NOMBRE_PAQUETE, PRECIO, CANTIDAD_PERSONAS, DESCUENTOS, DESCRIPCION, IMAGEN) VALUES('Escapada Romántica', 650.75, 2, 7, 'Cena privada y spa en la montaña', 'escapada_romantica.jpg');
INSERT INTO PAQUETE (NOMBRE_PAQUETE, PRECIO, CANTIDAD_PERSONAS, DESCUENTOS, DESCRIPCION, IMAGEN) VALUES('Safari Africano', 3200.00, 6, 20, 'Safari guiado y alojamiento en lodge', 'safari_africano.jpg');


	select * from paquete 

CREATE TABLE EMPLEADO (
    ID_EMPLEADO INTEGER(20) not null AUTO_INCREMENT,
    NOMBRE VARCHAR(20),
    CARGO VARCHAR(20),
    SALARIO NUMERIC(10,2),
    CONTRATACON_FECHA DATE,
    TELEFONO VARCHAR(15),
    CORREO VARCHAR(40),
    DIRECCION VARCHAR(40),
    ESTADO VARCHAR(20),
    IMAGEN varchar(40),
   
    primary key (ID_EMPLEADO)
);

<<<<<<< HEAD
=======
select * from empleado

delete from EMPLEADO where ID_EMPLEADO=1
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54




CREATE PROCEDURE INSERTAREMPLEADO(
    @ID_EMPLEADO INTEGER (20),
    @NOMBRE VARCHAR(20),
    @CARGO VARCHAR(20),
    @SALARIO DECIMAL(10,2),
    @CONTRATACION_FECHA DATE,
    @TELEFONO VARCHAR(15),
    @CORREO VARCHAR(40),
    @DIRECCION VARCHAR(40)
)
BEGIN
    INSERT INTO EMPLEADO (ID_EMPLEADO, NOMBRE, CARGO, SALARIO, CONTRATACION_FECHA, TELEFONO, CORREO, DIRECCION)
    VALUES (ID_EMPLEADO, NOMBRE, CARGO, SALARIO, CONTRATACION_FECHA, TELEFONO, CORREO, DIRECCION);
END 



CALL INSERTARR(
    1, -- ID_EMPLEADO (INT)
    'Raul', -- NOMBRE (VARCHAR)
    'Jefe', -- CARGO (VARCHAR)
    1000000.00, -- SALARIO (DECIMAL)
    '2024-11-29', -- CONTRATACION_FECHA (DATE)
    '6361353989', -- TELEFONO (VARCHAR)
    'raulmadridflores@gmail.com', -- CORREO (VARCHAR)
    'av san isidro' -- DIRECCION (VARCHAR)
);



/DISPARADOR para cuando se actualiza el monto de pagos/

create table control_actualizacion(
ID_PAGO integer,
message text,
date date
);


create trigger actualizacion
after update on PAGOS
for each row 
begin 
	
	if old.MONTO != new.MONTO then 
		
		insert into control_actualizacion(ID_PAGO, message, date)
		values (new.ID_PAGO, 'el monto se actualizo', now());
	end if;
end;

select * from control_actualizacion


update PAGOS 
set MONTO= 78888
where ID_PAGO =47;



 --eliminar 

drop table VIAJES ;
drop table RESERVACIONES;
drop table PAQUETE;
drop table SUCURSAL;
drop table HOSPEDAJE;
drop table TRANSPORTE ;
drop table COMIDA;
drop table PAGOS;
drop table EMPLEADO;



