DELIMITER //
CREATE FUNCTION cantidadVideos(v_id_nivel int)
    RETURNS INT UNSIGNED
    DETERMINISTIC NO SQL
BEGIN
	SET @auxiliar = 0;
    
	IF ISNULL(v_id_nivel) = false THEN
		SELECT count(id_nivel) FROM video
        WHERE id_nivel = v_id_nivel
        INTO @auxiliar;
        
    END IF;
    
    RETURN @auxiliar;
END //
DELIMITER ;

DELIMITER //
CREATE FUNCTION cantidadPDFs(v_id_nivel int)
    RETURNS INT UNSIGNED
    DETERMINISTIC NO SQL
BEGIN
	SET @auxiliar = 0;
    
	IF ISNULL(v_id_nivel) = false THEN
		SELECT count(id_nivel) FROM pdf
        WHERE id_nivel = v_id_nivel
        INTO @auxiliar;
        
    END IF;
    
    RETURN @auxiliar;
END //
DELIMITER ;

DELIMITER //
CREATE FUNCTION cantidadImagen(v_id_nivel int)
    RETURNS INT UNSIGNED
    DETERMINISTIC NO SQL
BEGIN
	SET @auxiliar = 0;
    
	IF ISNULL(v_id_nivel) = false THEN
		SELECT count(id_nivel) FROM imagen
        WHERE id_nivel = v_id_nivel
        INTO @auxiliar;
        
    END IF;
    
    RETURN @auxiliar;
END //
DELIMITER ;

DELIMITER //
CREATE FUNCTION cantidadLink(v_id_nivel int)
    RETURNS INT UNSIGNED
    DETERMINISTIC NO SQL
BEGIN
	SET @auxiliar = 0;
    
	IF ISNULL(v_id_nivel) = false THEN
		SELECT count(id_nivel) FROM link
        WHERE id_nivel = v_id_nivel
        INTO @auxiliar;
        
    END IF;
    
    RETURN @auxiliar;
END //
DELIMITER ;