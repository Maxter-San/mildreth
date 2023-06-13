USE AcademyHour;

DELIMITER //
CREATE PROCEDURE usuario_procedure(
    p_id_usuario 	int,
    
    p_nombre 		varchar(50),
	p_apellido 		varchar(50),
    p_genero 		varchar(20),
	p_fechaNacimiento date,
	p_foto 			mediumblob,
    p_email 		varchar(50),
	p_password 		varchar(50),
    
	p_rol 			ENUM('Instructor', 'Estudiante', 'Admin'),
	p_fechaCreacion datetime,
	p_fechaModificacion datetime,
    p_boolActivo 	boolean,
	p_intentosFallidos int,
    
    p_action		ENUM('logIn',
						 'falloLogIn',
                         'signUp',
                         'infoUsuario'
						)
	)
BEGIN
	DECLARE auxiliar int;
    
	CASE p_action
		WHEN 'logIn' THEN
			SELECT id_usuario, rol, boolActivo
			FROM usuario
            WHERE email = p_email and password = p_password;
            
            SELECT id_usuario
			FROM usuario
            WHERE email = p_email and password = p_password
            LIMIT 1
            INTO auxiliar;
            
            IF (auxiliar IS NOT NULL) THEN
				UPDATE usuario
					SET intentosFallidos = 0
					WHERE id_usuario = auxiliar;
            END IF;
			
		WHEN 'falloLogIn' THEN
			SET SQL_SAFE_UPDATES = 0;
            
            UPDATE usuario
            SET intentosFallidos = intentosFallidos + 1
            WHERE email = p_email;
            
            SELECT id_usuario, boolActivo FROM usuario WHERE email = p_email;
        
		WHEN 'signUp' THEN
			INSERT INTO usuario (nombre, apellido, genero, fechaNacimiento, foto, email, password, rol) 
			VALUES (p_nombre, p_apellido, p_genero, p_fechaNacimiento, p_foto, p_email, p_password, p_rol);
            
		WHEN 'infoUsuario' THEN
			SELECT id_usuario, nombre, apellido, genero, fechaNacimiento, foto, email, rol, fechaCreacion
			FROM usuario
            WHERE id_usuario = p_id_usuario;
        
        ELSE
			SELECT 'ninguna opcion valida seleccionada' AS 'procedure';
    
    END CASE;
	
END //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE curso_procedure(
	p_id_curso 		int,    
    p_nombre 		varchar(50), 
	p_descripcion 	varchar(500), 
	p_foto 			mediumblob,          
	p_metodoCobro 	ENUM('curso', 'nivel'),
    p_metodoPago 	int,    
	p_precio 		DECIMAL(10,2),
	p_id_usuario	int,
	p_boolActivo 	boolean,
    p_action		ENUM('crearCurso'
						)
)
BEGIN
	CASE p_action
		WHEN 'crearCurso' THEN
			INSERT INTO curso(nombre, descripcion, foto, metodoCobro, metodoPago, precio, id_usuario)
            VALUES (p_nombre, p_descripcion, p_foto, p_metodoCobro, p_metodoPago, p_precio, p_id_usuario);
			
		ELSE
			SELECT 'ninguna opcion valida seleccionada' AS 'procedure';
	END CASE;
END //
DELIMITER ;

SELECT* from usuario;

CALL curso_procedure(null, "prueba", "desc", "foto", "curso", 1, 10, 5, null, "crearCurso");