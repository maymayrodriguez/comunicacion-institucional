-- Insertar datos de prueba en la base de datos comunicacion institucional

USE comunicacion_institucional;

INSERT INTO usuarios (correo_electronico, contrasenia, nombre, rol) VALUES
    ('lucia.garcia@gmail.com', 'Lucia1234', 'Lucía García', 'estudiante'),
    ('mateo.lopez@gmail.com', 'Mateo1234', 'Mateo López', 'estudiante'),
    ('sofia.perez@gmail.com', 'Sofia1234', 'Sofía Pérez', 'estudiante'),
    ('tomas.silva@gmail.com', 'Tomas1234', 'Tomás Silva', 'estudiante'),
    ('valentina.rodriguez@gmail.com', 'Valentina1234', 'Valentina Rodríguez', 'estudiante'),

    ('andrea.martinez@gmail.com', 'Andrea1234', 'Andrea Martínez', 'docente'),
    ('bruno.fernandez@gmail.com', 'Bruno1234', 'Bruno Fernández', 'docente'),
    ('carolina.cabrera@gmail.com', 'Carolina1234', 'Carolina Cabrera', 'docente'),
    ('diego.pereira@gmail.com', 'Diego1234', 'Diego Pereira', 'docente'),
    ('elena.torres@gmail.com', 'Elena1234', 'Elena Torres', 'docente'),

    ('facundo.sosa@gmail.com', 'Facundo1234', 'Facundo Sosa', 'administrativo'),
    ('gabriela.mendez@gmail.com', 'Gabriela1234', 'Gabriela Méndez', 'administrativo'),
    ('hector.nunez@gmail.com', 'Hector1234', 'Héctor Núñez', 'administrativo'),
    ('ines.castro@gmail.com', 'Ines1234', 'Inés Castro', 'administrativo'),
    ('juan.romero@gmail.com', 'Juan1234', 'Juan Romero', 'administrativo');

INSERT INTO orientaciones (nombre) VALUES
    ('Tecnologías de la Información'),
    ('Administración'),
    ('Electrónica'),
    ('Construcción'),
    ('Gastronomía');

INSERT INTO grupos (nombre, turno, nombre_orientacion) VALUES
    ('3°MC', 'Nocturno', 'Tecnologías de la Información'),
    ('2°MC', 'Vespertino', 'Tecnologías de la Información'),
    ('3°ADM', 'Nocturno', 'Administración'),
    ('3°ELE', 'Vespertino', 'Electrónica'),
    ('3°GAS', 'Matutino', 'Gastronomía');

INSERT INTO materias (nombre) VALUES
    ('Matemáticas'),
    ('Idioma Español'),
    ('Inglés'),
    ('Filosofía'),
    ('Ciencias Físicas'),
    ('Bases de Datos');

INSERT INTO dias (nombre) VALUES
    ('Lunes'),
    ('Martes'),
    ('Miércoles'),
    ('Jueves'),
    ('Viernes');

INSERT INTO docentes (correo_electronico) VALUES
    ('andrea.martinez@gmail.com'),
    ('bruno.fernandez@gmail.com'),
    ('carolina.cabrera@gmail.com'),
    ('diego.pereira@gmail.com'),
    ('elena.torres@gmail.com');

INSERT INTO administrativos (correo_electronico) VALUES
    ('facundo.sosa@gmail.com'),
    ('gabriela.mendez@gmail.com'),
    ('hector.nunez@gmail.com'),
    ('ines.castro@gmail.com'),
    ('juan.romero@gmail.com');

INSERT INTO estudiantes (correo_electronico, nombre_grupo) VALUES
    ('lucia.garcia@gmail.com', '3°ADM'),
    ('mateo.lopez@gmail.com', '3°ADM'),
    ('sofia.perez@gmail.com', '3°MC'),
    ('tomas.silva@gmail.com', '2°MC'),
    ('valentina.rodriguez@gmail.com', '2°MC');

INSERT INTO notificaciones (nombre, descripcion, publico) VALUES
    ('Entrega de boletines', 'Se realizará la cuarta entrega de boletines del grupo.','2°MC'),
    ('2da edición Miss y Mister UTU', 'Entrada $100. Servicio de gastronomía a cargo de alumnos. Habrá coronación y premios.', 'Restringido'),
    ('Feria gastronómica', 'Feria gastronómica organizada por la institución.', 'General'),
    ('Asueto por el Día del Alumno y Funcionario de UTU', 'Se recuerda que el 9 de septiembre hay asueto por el Día del Alumno y Funcionario de UTU.', 'General'),
    ('Docente ausente', 'El docente Diego Pereira de filosofía se encontrará ausente durante la semana del 7 al 11 de septiembre.', '2°MC');

INSERT INTO avisos (identificador) VALUES
(4),
(5);

INSERT INTO eventos
(identificador, hora_inicio, hora_fin, fecha_inicio, fecha_fin) VALUES
(1, '19:30:00', NULL, '2026-11-25', NULL),
(2, '18:00:00', NULL, '2026-09-11', NULL),
(3, '10:00:00', '13:00:00', '2026-10-15', NULL);


INSERT INTO administrativo_notificacion
(correo_administrativo, identificador_notificacion) VALUES
('facundo.sosa@gmail.com', 1),
('gabriela.mendez@gmail.com', 2),
('hector.nunez@gmail.com', 3),
('ines.castro@gmail.com', 4),
('ines.castro@gmail.com', 5);

INSERT INTO grupo_materia
(nombre_grupo, nombre_materia, correo_docente) VALUES
('2°MC', 'Matemáticas', 'andrea.martinez@gmail.com'),
('2°MC', 'Idioma Español', 'bruno.fernandez@gmail.com'),
('2°MC', 'Inglés', 'carolina.cabrera@gmail.com'),
('2°MC', 'Filosofía', 'diego.pereira@gmail.com'),
('2°MC', 'Bases de Datos', 'elena.torres@gmail.com'),

('3°ADM', 'Matemáticas', 'andrea.martinez@gmail.com'),
('3°ADM', 'Idioma Español', 'bruno.fernandez@gmail.com'),
('3°ADM', 'Inglés', 'carolina.cabrera@gmail.com'),
('3°ADM', 'Filosofía', 'diego.pereira@gmail.com'),
('3°ADM', 'Ciencias Físicas', 'andrea.martinez@gmail.com');

INSERT INTO clases
(hora_inicio, hora_fin, nombre_dia, nombre_grupo, nombre_materia) VALUES

('13:30:00', '14:15:00', 'Lunes', '2°MC', 'Matemáticas'),
('14:15:00', '15:00:00', 'Lunes', '2°MC', 'Matemáticas'),
('15:10:00', '15:55:00', 'Lunes', '2°MC', 'Inglés'),
('15:55:00', '16:40:00', 'Martes', '2°MC', 'Bases de Datos'),
('16:50:00', '17:35:00', 'Martes', '2°MC', 'Bases de Datos'),

('17:20:00', '18:05:00', 'Lunes', '3°ADM', 'Matemáticas'),
('18:05:00', '18:50:00', 'Lunes', '3°ADM', 'Idioma Español'),
('19:00:00', '19:45:00', 'Lunes', '3°ADM', 'Idioma Español'),
('19:45:00', '20:30:00', 'Jueves', '3°ADM', 'Filosofía'),
('20:40:00', '21:25:00', 'Jueves', '3°ADM', 'Filosofía');