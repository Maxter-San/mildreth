CREATE DATABASE IF NOT EXISTS AcademyHour;
USE AcademyHour;

CREATE TABLE IF NOT EXISTS usuario (
	id_usuario int 			unsigned not null unique auto_increment
							comment 'Id del usuario',
                            
    nombre varchar(50) 		not null
							comment '',
                            
	apellido varchar(50) 	not null
							comment '',
                            
    genero varchar(20)		not null
							comment '',
                            
	fechaNacimiento date	not null
							comment '',
            
	foto mediumblob			not null
							comment '',
            
    email varchar(50)		not null
							comment '',
                            
	password varchar(50)	not null
							comment '',
                            
	rol ENUM('Instructor', 'Estudiante', 'Admin') not null
							comment '',

	fechaCreacion datetime	default CURRENT_TIMESTAMP
							comment '',
                            
	fechaModificacion datetime default CURRENT_TIMESTAMP
							comment '',
	
    boolActivo boolean		default true
							comment '',
                            
	intentosFallidos int 	unsigned
							comment '',
                            
    PRIMARY KEY(id_usuario)
);

CREATE TABLE IF NOT EXISTS curso (
	id_curso int 			unsigned not null unique auto_increment
							comment '',
                            
    nombre varchar(50) 		not null
							comment '',
                            
	descripcion varchar(500) not null
							comment '',
                            
	foto mediumblob			not null
							comment '',
                            
	metodoCobro ENUM('curso', 'nivel') not null
							comment '',
	
    metodoPago int			unsigned not null
							comment '',
                            
	precio DECIMAL(10,2)	unsigned
							comment '',
                            
	id_usuario int			unsigned not null
							comment 'ID del usuario creador del curso',
		FOREIGN KEY (id_usuario)
		REFERENCES usuario(id_usuario),

	fechaCreacion datetime	default CURRENT_TIMESTAMP
							comment '',
                            
    boolActivo boolean		default true
							comment '',
						           
    PRIMARY KEY(id_curso)
);

CREATE TABLE IF NOT EXISTS comentario (
	id_comentario int 		unsigned not null unique auto_increment
							comment '',
                            
    comentario varchar(500) not null
							comment '',
                            
	fechaCreacion datetime	default CURRENT_TIMESTAMP
							comment '',
                            
	id_usuario int			unsigned not null
							comment '',
		FOREIGN KEY (id_usuario)
		REFERENCES usuario(id_usuario),
	
    id_curso int			unsigned not null
							comment '',
		FOREIGN KEY (id_curso)
		REFERENCES curso(id_curso),
          
    boolActivo boolean		default true
							comment '',
						           
    PRIMARY KEY(id_comentario)
);

CREATE TABLE IF NOT EXISTS nivel (
	id_nivel int 			unsigned not null unique auto_increment
							comment '',
                            
    teoria varchar(1000) 	not null
							comment '',
                            
	metodoPago int			not null
							comment '',
                            
	precio DECIMAL(10,2)	unsigned
							comment '',
                            
	id_curso int			unsigned not null
							comment '',
		FOREIGN KEY (id_curso)
		REFERENCES curso(id_curso),

	fechaCreacion datetime	default CURRENT_TIMESTAMP
							comment '',
						           
    PRIMARY KEY(id_nivel)
);

CREATE TABLE IF NOT EXISTS pdf (
	id_pdf int 				unsigned not null unique auto_increment
							comment '',
                            
    directorio varchar(500) not null
							comment '',
                            
	id_nivel int			unsigned not null
							comment '',
		FOREIGN KEY (id_nivel)
		REFERENCES nivel(id_nivel),

	fechaCreacion datetime	default CURRENT_TIMESTAMP
							comment '',
						           
    PRIMARY KEY(id_pdf)
);

CREATE TABLE IF NOT EXISTS link (
	id_link int 			unsigned not null unique auto_increment
							comment '',
                            
    link varchar(500)		not null
							comment '',
                            
	id_nivel int			unsigned not null
							comment '',
		FOREIGN KEY (id_nivel)
		REFERENCES nivel(id_nivel),

	fechaCreacion datetime	default CURRENT_TIMESTAMP
							comment '',
						           
    PRIMARY KEY(id_link)
);

CREATE TABLE IF NOT EXISTS imagen (
	id_imagen int 			unsigned not null unique auto_increment
							comment '',
                            
    imagen mediumblob		not null
							comment '',
                            
	id_nivel int			unsigned not null
							comment '',
		FOREIGN KEY (id_nivel)
		REFERENCES nivel(id_nivel),

	fechaCreacion datetime	default CURRENT_TIMESTAMP
							comment '',
						           
    PRIMARY KEY(id_imagen)
);

CREATE TABLE IF NOT EXISTS video (
	id_video int 			unsigned not null unique auto_increment
							comment '',
                            
    directorio varchar(500) not null
							comment '',
                            
	id_nivel int			unsigned not null
							comment '',
		FOREIGN KEY (id_nivel)
		REFERENCES nivel(id_nivel),

	fechaCreacion datetime	default CURRENT_TIMESTAMP
							comment '',
						           
    PRIMARY KEY(id_video)
);

CREATE TABLE IF NOT EXISTS usuarioCurso (
	id_usuarioCurso int		unsigned not null unique auto_increment
							comment '',
                            
	fechaCreacion datetime	default CURRENT_TIMESTAMP
							comment '',
                            
	id_usuario int			unsigned not null
							comment '',
		FOREIGN KEY (id_usuario)
		REFERENCES usuario(id_usuario),
        
	id_curso int			unsigned not null
							comment '',
		FOREIGN KEY (id_curso)
		REFERENCES curso(id_curso),

    PRIMARY KEY(id_usuarioCurso)
);

CREATE TABLE IF NOT EXISTS usuarioNivel (
	id_usuariNivel int		unsigned not null unique auto_increment
							comment '',
                            
	fechaCreacion datetime	default CURRENT_TIMESTAMP
							comment '',
                            
	id_usuario int			unsigned not null
							comment '',
		FOREIGN KEY (id_usuario)
		REFERENCES usuario(id_usuario),
        
	id_nivel int			unsigned not null
							comment '',
		FOREIGN KEY (id_nivel)
		REFERENCES nivel(id_nivel),
        
	id_usuarioCurso int			unsigned not null
							comment '',
		FOREIGN KEY (id_usuarioCurso)
		REFERENCES usuarioCurso(id_usuarioCurso),

    PRIMARY KEY(id_usuariNivel)
);

CREATE TABLE IF NOT EXISTS categoria (
	id_categoria int 		unsigned not null unique auto_increment
							comment 'Id del usuario',
                            
    nombre varchar(50) 		not null
							comment '',
                            
	descripcion varchar(500) not null
							comment '',
            
	foto mediumblob			not null
							comment '',

	fechaCreacion datetime	default CURRENT_TIMESTAMP
							comment '',
                            
    PRIMARY KEY(id_categoria)
);

CREATE TABLE IF NOT EXISTS cursoCategoria (
	id_cursoCategoria int	unsigned not null unique auto_increment
							comment '',
                            
	id_curso int			unsigned not null
							comment '',
		FOREIGN KEY (id_curso)
		REFERENCES curso(id_curso),
        
	id_categoria int			unsigned not null
							comment '',
		FOREIGN KEY (id_categoria)
		REFERENCES categoria(id_categoria),
        

    PRIMARY KEY(id_cursoCategoria)
);
