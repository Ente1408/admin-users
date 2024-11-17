Proyecto para prueba tecnica de desarrollador full Stack

Al descargar el proyecto , hay que definir las variables de entorno respectivas, usando como referencia el archivo .env.example


Despues hacer las respectivas instalacion de dependencias
composer install
npm install

hay que implementar las migraciones del proyecto
php artisan migrate

Y despues ejecutar los seeders del proyecto para poder ingresar al sistema

php artisan db:seed

Compilar los archivos js y css  por medio de vite usando 

npm run build, se configura los archivos de dependencias


Despues de estos pasos hay que levantar el servidor por medio de 
php artisan serve

Al final ingresar al localhost que indica la terminal y aparecera la pestaña para ingresar hay que hacer click en la parte superior derecha donde dice iniciar sesion 

el usuario por defecto es 
test@example.com
y la contraseña es
password
por defecto para todos los usuarios
