# ProyectoTallerdeSoftware

Generador de Guias para Mensajeria
Taller de Software 1 - Grupo 4
Año 2015
Software en ambiente web para generar Guias en formato pdf
Integrantes del equipo:
        
Nombre y Apellido
Código
E-mail
Teléfono
David Argemiro Blanco Hernandez
T00021689
Davidblancohez@gmail.com
-----
Docentes:
Resumen del proyecto
El proyecto consiste en un sistema de cotizaciones en línea el cual permitirá a los usuarios generar automáticamente una cotización mediante la selección de los artículos que necesiten.
El sistema permitirá a los usuarios administradores ingresar artículos con sus correspondientes valores y agruparlos en distintas categorías.
Especificación de Requerimientos
Historias de usuario

Como usuario debo poder seleccionar artículos de un listado para armar la cotización
Como administrador debo poder ingresar y editar artículos para mantener el listado actualizado.
Casos de Uso

Ingresar al Sistema

Identificador: CU-001
Actores: Cualquier usuario
Flujo básico:
El usuario ingresa a la página de login
El sistema le muestra el formulario de login
El usuario ingresa sus credenciales y hace clic en el botón ingresar
El sistema verifica si el usuario se encuentra en el sistema y le muestra la página de inicio correspondiente.
Flujo alternativo A: El usuario no está registrado o sus credenciales están equivocadas
Condición: El sistema no encontró al usuario en la bd
El sistema muestra nuevamente la página de login junto con el error correspondiente
Criterios de aceptación:
El sistema debe permitir ingresar un usuario si está registrado
El sistema debe regresar a la página de error si el usuario no está en la bd
Registrar un artículo

Identificador: CU-002
Actores: Administrador del sistema
Flujo básico:
El usuario hace clic en el botón ingresar artículo
El sistema le muestra el formulario para ingresar los datos
El usuario ingresa los datos del artículo y hace clic en el botón guardar
El sistema verifica los datos, los guarda en la base de datos y cierra el formulario
Post condiciones:
El artículo debe estar registrado en la base de datos


Repositorio con el proyecto desarrollado durante el segundo semestre del 2015
