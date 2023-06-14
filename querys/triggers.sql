USE AcademyHour;

DELIMITER //
CREATE TRIGGER falloLogIn_trigger
    BEFORE UPDATE
    ON usuario FOR EACH ROW
BEGIN

	IF new.intentosFallidos >= 3 THEN
		SET new.boolActivo = false;
    END IF;
    
END //
DELIMITER ;

DELIMITER //
CREATE TRIGGER editarUsuario_trigger
    BEFORE UPDATE
    ON usuario FOR EACH ROW
BEGIN

	SET new.fechaModificacion = NOW();
    
END //
DELIMITER ;