USE AcademyHour;

CREATE OR REPLACE VIEW misCursos AS
	SELECT id_curso, nombre, descripcion, foto, metodoCobro, precio, id_usuario, fechaCreacion, boolActivo
	FROM curso
    order by fechaCreacion desc;
    
CREATE OR REPLACE VIEW misNiveles AS
	SELECT id_nivel, nombre, teoria, metodoPago, precio, id_curso, fechaCreacion
	FROM nivel
    order by fechaCreacion desc;
    
CREATE OR REPLACE VIEW nivelDetalle AS
	SELECT id_nivel, nombre, teoria, metodoPago, precio, id_curso, fechaCreacion, cantidadVideos(id_nivel) AS video, cantidadPDFs(id_nivel) AS pdf, cantidadImagen(id_nivel) AS imagen, cantidadLink(id_nivel) AS link
	FROM nivel
    ORDER BY id_nivel desc;
    
CREATE OR REPLACE VIEW totalCategorias AS
	SELECT id_categoria, nombre, descripcion, foto, id_usuario, fechaCreacion
	FROM categoria
    order by nombre ASC;