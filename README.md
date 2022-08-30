<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Hestia VP

Esta aplicación es una adaptación para gestionar Hestia VP en una sola aplicación adaptada a nuestras necesidades del centro

Está realizada con Laravel como framework y para el tema de front usamos inertia.

La primera y principal opción es la de dar de alta usuarios

Va haber dos tipos de usuarios: profesores y alumnos
Los profesores se han de registrar con la cuenta del centro, de esta forma se creará al instante una cuenta en hestia

El resto de usuarios se  registren en la aplicación, serán dados de alta en el sistema hestia, cuando el administrador de su validación. El administrador será avisado por correo cuando haya alumnos pendientes de dar de alta en el sistema.
## Requisitos del proyecto
*****RF1*****  Al acceder aparece una pantalla general con opciones básicas:

1. Información varia
2. Login
3. Registrarse

*****RF2*****Logueado en función del tipo de usuario aparecerán opicones

1. Usuario Alumno Crear un usuario en vesta
2. Usuario Profesor
   1. Se crea automáticamente un usuario en vesta
   2. Puede ver a sus alumnos y administrarlos (son sus alumnos aquellos que estén matriculados en su/s módulos ???)
3. Usuario Administrador
 1. Puede hacerlo todo ????
  

## Mokups




##Estado del proyecto
## RF Autentificacion
Estoy en la fase de registrar. Uso fortify, y no me carga la view de register
 https://jetstream.laravel.com/2.x/features/registration.html#views-pages

Añado en el modelo el campo ***checked*** que al registrar tiene valor false
(./app/Action/Fortify/CreateNewUser.php)
 Un usuario checkeado a true va a ser un profesor con email *****@cpilosenlaces.com*****
