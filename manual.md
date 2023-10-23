- Pasos del proyecto.

1. instalación de laragon
2. instalación de phpMyAdmin
3. Configurar el entorno 
4. extraer, cortar, ubicar y pegar la carpeta de phpMyAdmin en la ruta de nombre 'C:\laragon\etc\apps\phpMyAdmin'
5. Creación del proyecto 
6. ejecutar los siguientes comandos en la terminal:
    -> cd C:\laragon\www
    -> composer create-project laravel/laravel nombre-del-proyecto
7. Crear una base de datos en phpMyAdmin y conectarla en el archivo .env
8. Crear un sistema de Register y Login automatico.
9. Ejecutar los siguientes comandos en la terminal:
    -> composer require laravel/ui
    -> php artisan ui bootstrap --auth
    -> npm install
    -> npm run dev
    -> ctrl + C (salir)
    -> npm run build
    -> php artisan migrate
10. Crear la tabla en la base de datos con los campos: id, nombres, apellidos, correo, edad, genero, dirección.
11. Crear la ruta resorce en el archivo de rutas (web.php)
12. Crear un modelo, con el siguiente comando:
    -> php artisan make:model NombreDelModelo
13. Escribir el código del Modelo
14. Crear el controlador resource con el siguiente comando:
    -> php artisan make:controller NombreDelControlador -r
15. Escribir el código del controlador
16. Crear una carpeta de nombre 'usuarios' dentro de resources/views
17. Crear las 4 vistas del CRUD
    -/usuarios
      ->create.blade.php
      ->edit.blade.php
      ->index.blade.php
