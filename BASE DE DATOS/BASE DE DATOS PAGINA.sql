create database HIROTRIPS
USE HIROTRIPS
CREATE TABLE USUARIOS(ID_USUARIOS VARCHAR (20) PRIMARY KEY,CONTRASE�A VARCHAR (30),CORREO VARCHAR (40),NOMBRE CHAR(30),AP_PATERNO CHAR (20),AP_MATERNO CHAR(20),EDAD NUMERIC (3),TELEFONO NUMERIC (10))
CREATE TABLE VIAJES(ID_VIAJE VARCHAR (20) PRIMARY KEY,DESTINO CHAR (20),FECHA_INICIO DATE,PRECIO NUMERIC(10),HORA_SALIDA TIME,ESTADO CHAR (10),FECHA_LLEGADA DATE,HORA TIME)
CREATE TABLE RESERVACIONES (ID_RESERVACION VARCHAR (20) PRIMARY KEY,ID_VIAJE VARCHAR (20),ID_USUARIOS VARCHAR(20),ID_PAQUETE VARCHAR (20),ID_SUCURSAL VARCHAR (20),ID_EMPLEADO VARCHAR (20),ID_PAGO VARCHAR (20) )
CREATE TABLE PAQUETE (ID_PAQUETE VARCHAR (20) PRIMARY KEY,NOMBRE_PAQUETE CHAR (20),PRECIO NUMERIC (10),CANTIDAD_PERSONAS NUMERIC (2),DESCUENTOS NUMERIC (3),RECORRIDOS CHAR (50))
CREATE TABLE SUCURSAL(ID_SUCURSAL VARCHAR (20) PRIMARY KEY,NOMBRE CHAR (20),DIRECCION VARCHAR (30))
CREATE TABLE HOSPEDAJE(ID_HOSPEDAJE VARCHAR(20) PRIMARY KEY,HOTEL CHAR(30),ID_TRANSPORTE VARCHAR(20),ID_COMIDA VARCHAR (20),ID_PAQUETE VARCHAR (20))
CREATE TABLE TRANSPORTE(ID_TRANSPORTE VARCHAR(20) PRIMARY KEY,PRECIO NUMERIC (10),TIPO CHAR (20),ID_PAQUETE VARCHAR(20))
CREATE TABLE COMIDA (ID_COMIDA VARCHAR (20) PRIMARY KEY ,TIPO CHAR (20),PRECIO NUMERIC (10),ID_PAQUETE VARCHAR (20))
CREATE TABLE PAGOS (ID_PAGO VARCHAR (20) PRIMARY KEY, ID_RESERVACION VARCHAR(20),MONTO NUMERIC (10),FECHA_PAGO DATE ,METODO_PAGO CHAR (10),ESTADO_PAGO CHAR (10))
CREATE TABLE EMPLEADO(ID_EMPLEADO VARCHAR (20),NOMBRE CHAR (20),CARGO CHAR (20),SALARIO NUMERIC (7),CONTRATACON_FECHA DATE ,TELEFONO NUMERIC (10),CORREO VARCHAR (40),DIRECCION VARCHAR(40))


--USUARIOS
INSERT INTO USUARIOS(ID_USUARIOS,CONTRASE�A,CORREO,NOMBRE,AP_PATERNO,AP_MATERNO,EDAD,TELEFONO) VALUES(1,'1234','raulmadridflores202@gmail.com','Raul','Madrid','Flores',19,6361353989)
INSERT INTO USUARIOS(ID_USUARIOS,CONTRASE�A,CORREO,NOMBRE,AP_PATERNO,AP_MATERNO,EDAD,TELEFONO) VALUES(2,'4321','juanperes22@gmail.com','Juan','Perez','Flores',19,6361353988)
INSERT INTO USUARIOS(ID_USUARIOS,CONTRASE�A,CORREO,NOMBRE,AP_PATERNO,AP_MATERNO,EDAD,TELEFONO) VALUES(3,'2143','paulina132@gmail.com','Paulina','lopez','rodriguez',19,6361353987)
INSERT INTO USUARIOS(ID_USUARIOS,CONTRASE�A,CORREO,NOMBRE,AP_PATERNO,AP_MATERNO,EDAD,TELEFONO) VALUES(4,'3412','luisjavier90@gmail.com','Luis','Valverde','Trejo',19,6541353989)
INSERT INTO USUARIOS(ID_USUARIOS,CONTRASE�A,CORREO,NOMBRE,AP_PATERNO,AP_MATERNO,EDAD,TELEFONO) VALUES(5,'908070','alejandra12@gmail.com','Alejandra','contreras','torres',19,6361353562)


select * from usuarios






INSERT INTO VIAJES(ID_VIAJE,DESTINO,FECHA_INICIO,PRECIO,HORA_SALIDA,ESTADO,FECHA_LLEGADA,HORA) VALUES(1,'Hawai','22/10/24',10000,'02:00','Reservado','30/12/24','16:00')
INSERT INTO VIAJES(ID_VIAJE,DESTINO,FECHA_INICIO,PRECIO,HORA_SALIDA,ESTADO,FECHA_LLEGADA,HORA) VALUES(2,'Paris','20/10/24',17000,'04:00','Reservado','10/01/25','11:00')
INSERT INTO VIAJES(ID_VIAJE,DESTINO,FECHA_INICIO,PRECIO,HORA_SALIDA,ESTADO,FECHA_LLEGADA,HORA) VALUES(3,'Londres','20/10/24',19000,'04:00','Reservado','10/01/25','11:00')
INSERT INTO VIAJES(ID_VIAJE,DESTINO,FECHA_INICIO,PRECIO,HORA_SALIDA,ESTADO,FECHA_LLEGADA,HORA) VALUES(4,'USA','20/10/24',11000,'04:00','Reservado','10/01/25','11:00')
INSERT INTO VIAJES(ID_VIAJE,DESTINO,FECHA_INICIO,PRECIO,HORA_SALIDA,ESTADO,FECHA_LLEGADA,HORA) VALUES(5,'BRASIL','22/10/24',18000,'04:00','Reservado','10/01/25','11:00')


select * from viajes


INSERT INTO RESERVACIONES(ID_RESERVACION,ID_VIAJE,ID_USUARIOS,ID_PAQUETE,ID_SUCURSAL,ID_EMPLEADO,ID_PAGO) VALUES('1','1','1','1','8','1','10')
INSERT INTO RESERVACIONES(ID_RESERVACION,ID_VIAJE,ID_USUARIOS,ID_PAQUETE,ID_SUCURSAL,ID_EMPLEADO,ID_PAGO) VALUES('2','2','2','2','18','2','12')
INSERT INTO RESERVACIONES(ID_RESERVACION,ID_VIAJE,ID_USUARIOS,ID_PAQUETE,ID_SUCURSAL,ID_EMPLEADO,ID_PAGO) VALUES('3','3','3','3','85','3','13')
INSERT INTO RESERVACIONES(ID_RESERVACION,ID_VIAJE,ID_USUARIOS,ID_PAQUETE,ID_SUCURSAL,ID_EMPLEADO,ID_PAGO) VALUES('4','4','4','4','67','4','14')
INSERT INTO RESERVACIONES(ID_RESERVACION,ID_VIAJE,ID_USUARIOS,ID_PAQUETE,ID_SUCURSAL,ID_EMPLEADO,ID_PAGO) VALUES('5','5','5','5','98','5','19')


SELECT * FROM RESERVACIONES

INSERT INTO PAQUETE(ID_PAQUETE,NOMBRE_PAQUETE,PRECIO,CANTIDAD_PERSONAS,DESCUENTOS,RECORRIDOS) VALUES('1','MALTERCIO',10000,3,10,'Viaje')
INSERT INTO PAQUETE(ID_PAQUETE,NOMBRE_PAQUETE,PRECIO,CANTIDAD_PERSONAS,DESCUENTOS,RECORRIDOS) VALUES('2','Cuarteto',20000,4,6,'Senderismo En Monta�a')
INSERT INTO PAQUETE(ID_PAQUETE,NOMBRE_PAQUETE,PRECIO,CANTIDAD_PERSONAS,DESCUENTOS,RECORRIDOS) VALUES('3','Cuarteto',20000,4,7,'Viaje a hawai')
INSERT INTO PAQUETE(ID_PAQUETE,NOMBRE_PAQUETE,PRECIO,CANTIDAD_PERSONAS,DESCUENTOS,RECORRIDOS) VALUES('4','Pareja',9000,4,9,'Senderismo en el himalaya')
INSERT INTO PAQUETE(ID_PAQUETE,NOMBRE_PAQUETE,PRECIO,CANTIDAD_PERSONAS,DESCUENTOS,RECORRIDOS) VALUES('5','Individual',8000,4,5,'Senderismo En Monta�a')


SELECT * FROM PAQUETE

INSERT INTO SUCURSAL(ID_SUCURSAL,NOMBRE,DIRECCION) VALUES('1','Hiro Trips MEXICO','AV NUEVO_LAREDO 907 CHIHUAHUA')
INSERT INTO SUCURSAL(ID_SUCURSAL,NOMBRE,DIRECCION) VALUES('2','Hiro Trips Japon','AV Luna 9107 Tokio')
INSERT INTO SUCURSAL(ID_SUCURSAL,NOMBRE,DIRECCION) VALUES('3','Hiro Trips USA','AV Sol 90667 Miami')
INSERT INTO SUCURSAL(ID_SUCURSAL,NOMBRE,DIRECCION) VALUES('4','Hiro Trips Brasil','AV Nieve 9507 Rio de Janeiro')
INSERT INTO SUCURSAL(ID_SUCURSAL,NOMBRE,DIRECCION) VALUES('5','Hiro Trips Inte','AV Himalaya 3907 Los Angeles')

select * from SUCURSAL


INSERT INTO Hospedaje(ID_HOSPEDAJE,HOTEL,ID_TRANSPORTE,ID_COMIDA,ID_PAQUETE) VALUES('1','Casa Grande','1','2','1')
INSERT INTO Hospedaje(ID_HOSPEDAJE,HOTEL,ID_TRANSPORTE,ID_COMIDA,ID_PAQUETE) VALUES('2','La villa','3','4','45')
INSERT INTO Hospedaje(ID_HOSPEDAJE,HOTEL,ID_TRANSPORTE,ID_COMIDA,ID_PAQUETE) VALUES('3','TrebOL Inn','2','5','34')
INSERT INTO Hospedaje(ID_HOSPEDAJE,HOTEL,ID_TRANSPORTE,ID_COMIDA,ID_PAQUETE) VALUES('4','EL Pueblo','1','3','90')
INSERT INTO Hospedaje(ID_HOSPEDAJE,HOTEL,ID_TRANSPORTE,ID_COMIDA,ID_PAQUETE) VALUES('5','Los Andes','2','1','11')


select * from HOSPEDAJE


INSERT INTO TRANSPORTE(ID_TRANSPORTE,PRECIO,TIPO,ID_PAQUETE) VALUES('1',5000,'CAMION','3')
INSERT INTO TRANSPORTE(ID_TRANSPORTE,PRECIO,TIPO,ID_PAQUETE) VALUES('2',7000,'CARRO','2')
INSERT INTO TRANSPORTE(ID_TRANSPORTE,PRECIO,TIPO,ID_PAQUETE) VALUES('3',2000,'BICICLETA','1')
INSERT INTO TRANSPORTE(ID_TRANSPORTE,PRECIO,TIPO,ID_PAQUETE) VALUES('4',3000,'TAXI','4')
INSERT INTO TRANSPORTE(ID_TRANSPORTE,PRECIO,TIPO,ID_PAQUETE) VALUES('5',6000,'MOTO','5')

SELECT * FROM TRANSPORTE

INSERT INTO COMIDA(ID_COMIDA,TIPO,PRECIO,ID_PAQUETE) VALUES('1','Enchiladas',500,'2')
INSERT INTO COMIDA(ID_COMIDA,TIPO,PRECIO,ID_PAQUETE) VALUES('2','Tacos',200,'4')
INSERT INTO COMIDA(ID_COMIDA,TIPO,PRECIO,ID_PAQUETE) VALUES('3','Huevos Rancheros',1500,'5')
INSERT INTO COMIDA(ID_COMIDA,TIPO,PRECIO,ID_PAQUETE) VALUES('4','Quesadilas de asado',540,'1')
INSERT INTO COMIDA(ID_COMIDA,TIPO,PRECIO,ID_PAQUETE) VALUES('5','Barbacoa',150,'6')

select * from COMIDA



INSERT INTO PAGOS(ID_PAGO,ID_RESERVACION,MONTO,FECHA_PAGO,METODO_PAGO,ESTADO_PAGO) VALUES('1','1',34500,'13/11/24','EFECTIVO','PENDIENTE')
INSERT INTO PAGOS(ID_PAGO,ID_RESERVACION,MONTO,FECHA_PAGO,METODO_PAGO,ESTADO_PAGO) VALUES('2','2',14400,'09/03/24','TARJETA','PAGADO')
INSERT INTO PAGOS(ID_PAGO,ID_RESERVACION,MONTO,FECHA_PAGO,METODO_PAGO,ESTADO_PAGO) VALUES('3','3',19500,'08/06/24','TARJETA','PAGADO')
INSERT INTO PAGOS(ID_PAGO,ID_RESERVACION,MONTO,FECHA_PAGO,METODO_PAGO,ESTADO_PAGO) VALUES('4','4',31100,'21/10/24','EFECTIVO','PENDIENTE')
INSERT INTO PAGOS(ID_PAGO,ID_RESERVACION,MONTO,FECHA_PAGO,METODO_PAGO,ESTADO_PAGO) VALUES('5','5',12000,'30/12/24','DEPOSITO','PENDIENTE')


SELECT * FROM PAGOS


INSERT INTO EMPLEADO(ID_EMPLEADO,NOMBRE,CARGO,SALARIO,CONTRATACON_FECHA,TELEFONO,CORREO,DIRECCION) VALUES('1','JUAN RODRIGUEZ','AZAFATA',5000,'12/05/08',6361345678,'juanrodrig@gmail.com','puertas del sol #678')
INSERT INTO EMPLEADO(ID_EMPLEADO,NOMBRE,CARGO,SALARIO,CONTRATACON_FECHA,TELEFONO,CORREO,DIRECCION) VALUES('2','ALONDRA SALAS','CONTADORA',6000,'11/09/11',6363456790,'alondrasalas23@gmail.com','puertas de luna #5538')
INSERT INTO EMPLEADO(ID_EMPLEADO,NOMBRE,CARGO,SALARIO,CONTRATACON_FECHA,TELEFONO,CORREO,DIRECCION) VALUES('3','MIGUEL TORRES','CHOFER',3000,'19/04/02',6369086713,'torresmiguel45@gmail.com','puertas de poseidon #908')
INSERT INTO EMPLEADO(ID_EMPLEADO,NOMBRE,CARGO,SALARIO,CONTRATACON_FECHA,TELEFONO,CORREO,DIRECCION) VALUES('4','LEONARDO DICAPRIO','SECRETARIA',6000,'09/01/06',6560909688,'pirata@hotmail.com','Av Miguel Angel Escarcega #6758')
INSERT INTO EMPLEADO(ID_EMPLEADO,NOMBRE,CARGO,SALARIO,CONTRATACON_FECHA,TELEFONO,CORREO,DIRECCION) VALUES('5','CRISTIANO RONALDO','TECNICO',10000,'12/10/07',6324569183,'elmejordelmundo87@outlook.es','Calle Zeus #6623')

select * from EMPLEADO


--Producto cartesiano

--1.RESERVACIONES QUE ESTAN PENDIENTES DE PAGO
SELECT RESERVACIONES.ID_RESERVACION,USUARIOS.NOMBRE,PAQUETE.NOMBRE_PAQUETE,PAGOS.MONTO, PAGOS.ESTADO_PAGO FROM RESERVACIONES,USUARIOS,PAQUETE,PAGOS WHERE PAGOS.ESTADO_PAGO='PENDIENTE' 

--2.Empleados que estaran en las resevaciones del cliente y la fecha en que trabajaran
SELECT EMPLEADO.ID_EMPLEADO,EMPLEADO.NOMBRE,RESERVACIONES.ID_RESERVACION,VIAJES.FECHA_INICIO,VIAJES.FECHA_LLEGADA FROM EMPLEADO,RESERVACIONES,VIAJES WHERE RESERVACIONES.ID_EMPLEADO = EMPLEADO.ID_EMPLEADO AND VIAJES.ID_VIAJE=RESERVACIONES.ID_VIAJE

SELECT USUARIOS.ID_USUARIOS,USUARIOS.NOMBRE,PAQUETE.NOMBRE_PAQUETE,PAQUETE.DESCUENTOS FROM USUARIOS,PAQUETE WHERE PAQUETE.DESCUENTOS <8 







--INNER JOIN

--1.Ingresos Totales Por destino 
SELECT VIAJES.DESTINO, SUM(VIAJES.PRECIO) AS ingresos_totales FROM  RESERVACIONES INNER JOIN VIAJES ON RESERVACIONES.ID_VIAJE = VIAJES.ID_VIAJE GROUP BY  VIAJES.DESTINO;

--2. Lista de usuarios y los paquetes que han reservado
SELECT  USUARIOS.NOMBRE AS nombre_usuario, USUARIOS.AP_PATERNO AS apellido_usuario,PAQUETE.NOMBRE_PAQUETE, PAQUETE.PRECIO AS precio_paquete FROM  RESERVACIONES INNER JOIN USUARIOS ON RESERVACIONES.ID_USUARIOS = USUARIOS.ID_USUARIOS INNER JOIN PAQUETE ON RESERVACIONES.ID_PAQUETE = PAQUETE.ID_PAQUETE;

--3. NOMBRE,METODO DE PAGO Y MONTO
SELECT USUARIOS.NOMBRE AS nombre_usuario, USUARIOS.AP_PATERNO AS apellido_usuario,PAGOS.METODO_PAGO AS metodo_pago, PAGOS.MONTO AS monto FROM PAGOS INNER JOIN RESERVACIONES ON PAGOS.ID_RESERVACION = RESERVACIONES.ID_RESERVACION INNER JOIN USUARIOS ON RESERVACIONES.ID_USUARIOS = USUARIOS.ID_USUARIOS;






--Funciones de Columna y Consultas de resumen

--NUMERO DE RESERVACIONES POR LUGAR DE DESTINO
SELECT VIAJES.DESTINO,COUNT(RESERVACIONES.ID_RESERVACION) AS NoReservaciones FROM RESERVACIONES INNER JOIN VIAJES ON RESERVACIONES.ID_VIAJE = VIAJES.ID_VIAJE GROUP BY VIAJES.DESTINO ORDER BY  NoReservaciones DESC;

--2. Promedio y total de ingresos por m�todo de pago

SELECT PAGOS.METODO_PAGO AS metodo_pago,SUM(PAGOS.MONTO) AS total_ingresos,AVG(PAGOS.MONTO) AS promedio_ingresos FROM PAGOS GROUP BY PAGOS.METODO_PAGO;
-- 3.PAQUETES MAS VENDIDOS POR NOMBRE
SELECT PAQUETE.NOMBRE_PAQUETE,COUNT(RESERVACIONES.ID_PAQUETE) AS paquetes_vendidos FROM RESERVACIONES INNER JOIN PAQUETE ON RESERVACIONES.ID_PAQUETE = PAQUETE.ID_PAQUETE GROUP BY PAQUETE.NOMBRE_PAQUETE ORDER BY paquetes_vendidos DESC;