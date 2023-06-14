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
	p_precio 		DECIMAL(10,2),
	p_id_usuario	int,
	p_boolActivo 	boolean,
    p_action		ENUM('crearCurso',
						 'verMisCursos',
                         'EliminarCurso'
						)
)
BEGIN
	CASE p_action
		WHEN 'crearCurso' THEN
			INSERT INTO curso(nombre, descripcion, foto, metodoCobro, precio, id_usuario)
            VALUES (p_nombre, p_descripcion, p_foto, p_metodoCobro, p_precio, p_id_usuario);
			
            SELECT id_curso, nombre, descripcion, foto, metodoCobro, precio, id_usuario, fechaCreacion
            FROM misCursos
            WHERE id_curso = LAST_INSERT_ID();
            
		WHEN 'verMisCursos' THEN
			SELECT id_curso, nombre, descripcion, foto, metodoCobro, precio, id_usuario, fechaCreacion
            FROM misCursos
            WHERE id_usuario = p_id_usuario AND boolActivo = true;
		
        WHEN 'EliminarCurso' THEN
			UPDATE curso 
            SET  boolActivo = false
            WHERE id_curso = p_id_curso;
            
		ELSE
			SELECT 'ninguna opcion valida seleccionada' AS 'procedure';
	END CASE;
END //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE nivel_procedure(
	p_id_nivel 		int,
    p_nombre 		varchar(50),
    p_teoria 		varchar(1000),
    p_metodoPago 	int,
    p_precio 		DECIMAL(10,2),
    p_id_curso 		int,
    p_fechaCreacion datetime,
    p_pdf			varchar(500),
    p_link			varchar(500),
    p_imagen		mediumblob,
    p_video			varchar(500),
    p_action		ENUM('crearNivel',
						 'verMisNiveles',
                         'agregarImagen',
                         'agregarVideo',
                         'agregarPDF',
                         'agregarLink',
                         'nivelDetalle'
						)
)
BEGIN
	CASE p_action
		WHEN 'crearNivel' THEN
			INSERT INTO nivel(nombre, teoria, metodoPago, precio, id_curso)
            VALUES (p_nombre, p_teoria, p_metodoPago, p_precio, p_id_curso);
            
            SELECT id_nivel, teoria, metodoPago, precio, id_curso, fechaCreacion
            FROM misNiveles
            WHERE id_nivel = LAST_INSERT_ID();
			
		WHEN 'verMisNiveles' THEN
			SELECT nombre, id_nivel, teoria, metodoPago, precio, id_curso, fechaCreacion
            FROM misNiveles
            WHERE id_curso = p_id_curso;
            
		WHEN 'agregarImagen' THEN
			INSERT INTO imagen(imagen, id_nivel)
            VALUES (p_imagen, p_id_nivel);
		
        WHEN 'agregarVideo' THEN
			INSERT INTO video(directorio, id_nivel)
            VALUES (p_video, p_id_nivel);
            
		WHEN 'agregarPDF' THEN
			INSERT INTO pdf(directorio, id_nivel)
            VALUES (p_pdf, p_id_nivel);
            
		WHEN 'agregarLink' THEN
			INSERT INTO link(link, id_nivel)
            VALUES (p_link, p_id_nivel);
            
		WHEN 'nivelDetalle' THEN
			SELECT id_nivel, nombre, teoria, metodoPago, precio, id_curso, fechaCreacion, video, pdf, imagen, link
            FROM nivelDetalle
            WHERE id_curso = p_id_curso;
            
		ELSE
			SELECT 'ninguna opcion valida seleccionada' AS 'procedure';
	END CASE;
END //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE categoria_procedure(
	p_id_categoria 	int,
    p_nombre 		varchar(50),
    p_descripcion 	varchar(500),
    p_foto 			mediumblob,
    p_id_curso 		int,
    p_id_usuario	int,
    p_action		ENUM('crearCategoria',
						 'verCategorias',
                         'verCategoriaEspecifica',
                         'modificarCategoria',
                         'cursoCategoria'
						)
)
BEGIN
	CASE p_action
		WHEN 'crearCategoria' THEN
			INSERT INTO categoria (nombre, descripcion, foto, id_usuario)
            VALUES (p_nombre, p_descripcion, p_foto, p_id_usuario);
            
		WHEN 'verCategorias' THEN
			SELECT id_categoria, nombre, descripcion, foto, id_usuario, fechaCreacion
            FROM totalCategorias;
            
		WHEN 'verCategoriaEspecifica' THEN
			SELECT id_categoria, nombre, descripcion, foto, id_usuario, fechaCreacion
            FROM categoria
            WHERE id_categoria = p_id_categoria;
		
        WHEN 'modificarCategoria' THEN
            
            IF p_foto = "" THEN
				UPDATE categoria
				SET nombre = p_nombre,
					descripcion = p_descripcion
				WHERE id_categoria = p_id_categoria;
            ELSE
				UPDATE categoria
				SET nombre = p_nombre,
					descripcion = p_descripcion,
					foto = p_foto
				WHERE id_categoria = p_id_categoria;
            END IF;
            
		WHEN 'cursoCategoria' THEN
			INSERT INTO cursoCategoria (id_curso, id_categoria)
            VALUES (p_id_curso, p_id_categoria);
            
		ELSE
			SELECT 'ninguna opcion valida seleccionada' AS 'procedure';
	END CASE;
END //
DELIMITER ;

select * from imagen;
select * from video;
select * from pdf;
select * from link;

