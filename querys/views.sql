USE AcademyHour;

CREATE OR REPLACE VIEW misCursos AS
	SELECT id_curso, nombre, descripcion, foto, metodoCobro, metodoPago, precio, id_usuario, fechaCreacion
	FROM curso
    order by fechaCreacion desc;
    
CREATE OR REPLACE VIEW misNiveles AS
	SELECT id_nivel, teoria, metodoPago, precio, id_curso, fechaCreacion
	FROM nivel
    order by fechaCreacion desc;