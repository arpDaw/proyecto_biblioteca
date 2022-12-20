SELECT *
FROM biblioteca1.libros
WHERE Cod_libro NOT IN(SELECT Cod_libro
                        FROM biblioteca1.prestamos
                        WHERE Devuelto = false);