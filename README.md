# 📘 Proyecto Educativo con Laravel y MongoDB

¡Bienvenido al repositorio de nuestro proyecto educativo! 🚀 Este proyecto está diseñado para aprender y aplicar buenas prácticas en el desarrollo web con Laravel y MongoDB. Implementamos cifrado de datos, gestión de sesiones y código limpio. Además, utilizamos Bootstrap para el diseño.

## 📌 Requisitos Previos

Antes de comenzar, asegúrate de tener instalados los siguientes programas:

- [Git](https://git-scm.com/) → Herramienta de control de versiones que nos permite clonar el repositorio y manejar cambios de código.
- [PHP](https://www.php.net/) → Lenguaje de programación necesario para ejecutar Laravel.
- [Composer](https://getcomposer.org/) → Administrador de dependencias para proyectos PHP, indispensable para instalar Laravel y sus paquetes.
- [MongoDB](https://www.mongodb.com/) → Base de datos NoSQL que usaremos para almacenar la información del proyecto.
- [Node.js](https://nodejs.org/) → Entorno de ejecución de JavaScript necesario para compilar y gestionar los assets del frontend.
- [Laravel](https://laravel.com/) → Framework PHP que facilita el desarrollo de aplicaciones web con buenas prácticas.

## 🚀 Clonación del Proyecto

Para obtener una copia local del proyecto, sigue estos pasos:

1. Abre una terminal o consola de comandos.

2. Ubícate en la carpeta donde deseas clonar el proyecto usando `cd nombre-de-la-carpeta`.

3. Ejecuta el siguiente comando para descargar el código fuente:

   ```sh
   git clone https://github.com/JonayUT/urfuture.git
   ```

4. Ingresa a la carpeta del proyecto con:

   ```sh
   cd laragon/www/nombre-del-proyecto
   ```

## 🔧 Intalacion de complementos

El proyecto necesita que se instale el archivo php_mongodb.dll el cual se encuentra en la siguiente pagina:

- [Pecl_MongoDb](https://pecl.php.net/package/mongodb/1.20.1/windows) → Se descarga la version con php compatible del sistema actual en su version Thread Safe (TS).

Este archivo se descomprimira en la siguiente direccion ```php/php-version/ext```

Despues se modifica el archivo php.ini
Puedes agregar la línea en la sección donde se cargan las extensiones dinámicas, que normalmente está cerca de la parte final del archivo, justo después de un comentario como ```; Dynamic Extensions``` o ```; Extensions```. Si no encuentras una sección específica, lo ideal es buscar las líneas que empiezan con ```extension``` y agregarla en una línea separada

```
; Habilitar la extensión de MongoDB
extension = php_mongodb.dll
```

Despues de esto tendras que reiniciar Laragon y ejecutar la siguiente linea
```sh
composer show -p ext-mongodb
```
El resultado debera de arrojar ```true```, de lo contrario se tendra que probar con una version compatible de el elemento .dll

## 📦 Instalación de Dependencias

Para que el proyecto funcione correctamente, debemos instalar todas sus dependencias antes de configurarlo.

### 1️⃣ Instalar dependencias de PHP con Composer

Laravel utiliza múltiples paquetes para su funcionamiento. Para instalarlos, ejecuta dentro de la carpeta del proyecto:

```sh
composer install
```

Esto descargará todas las bibliotecas necesarias para el backend.

### 2️⃣ Instalar dependencias de Node.js (Incluye Bootstrap)

El frontend del proyecto requiere paquetes como Bootstrap y herramientas de compilación. Para instalarlos, ejecuta:

```sh
npm install
```

Este comando instalará todas las dependencias necesarias para manejar los estilos y scripts de la interfaz gráfica.

### 3️⃣ Compilar los assets de frontend

Bootstrap y otros estilos necesitan ser procesados antes de ser utilizados. Para ello, usa el siguiente comando:

```sh
npm run dev
```

Este comando compilará los estilos y scripts asegurando que la interfaz se vea correctamente.

## 🔑 Configuración de la Aplicación

1. Laravel usa un archivo de entorno para almacenar configuraciones. Copia el archivo de ejemplo con:

   ```sh
   cp .env.example .env
   ```

2. Genera una nueva clave de aplicación para la seguridad del framework:

   ```sh
   php artisan key:generate
   ```

3. Configura la conexión con MongoDB editando el archivo `.env` con los siguientes valores:

   ```env
   DB_CONNECTION=mongodb
   DB_HOST=cluster.wqqvq.mongodb.net
   DB_PORT=27017
   DB_DATABASE=nombre_de_tu_base
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
   ```

4. Guarda los cambios y cierra el archivo. Esto permitirá que Laravel se conecte a la base de datos.

## ⚡ Ejecutando el Proyecto

Para iniciar la aplicación y verificar que todo funciona correctamente, sigue estos pasos:

1. Levanta el servidor de Laravel ejecutando:

   ```sh
   php artisan serve
   ```

2. Abre tu navegador y accede a la URL que se muestra en la terminal, normalmente:

   ```
   http://127.0.0.1:8000
   ```

Si ves la página Principal del proyecto, ¡todo está listo para comenzar! 🎉

## 💻 -> 🖥 Proceso de tunnel

El proceso de tunnel se utiliza como alternativa de un host para pocos usuarios y se utilizo - [Ngrok](https://ngrok.com) y se siguieron loas pasos que marca su documentacion, aqui un pequeño resumen

1. Instalacion via Chocolatey(Abrir Power-Shell como administrador):

   ```sh
   choco install ngrok
   ```

2. Inicia sesion en la pagina de [Ngrok-Login](https://dashboard.ngrok.com/signup?ref=home-hero) ; Para obtener tu toquen de autenticación

3. Sin cerrar la terminal utilizar el siguiente comando para agregar tu token de atentificacion de manera automatica:

   ```sh
   ngrok config add-authtoken [Tu_token]
   ```

4. Una vez registrado tu token, se ejecutara el sistema de tunnel con un puerto a eleccion(Preferentemente el que utilizan como local-host):
    ```sh
    ngrok http --url = [Tu_url_personalizada] [Puerto]
    ```

### ❕ Para mas informacion y una guia mas especifica a las necesidades personales revisar el siguiente vinculo [Ngrok-Started](https://dashboard.ngrok.com/get-started/setup/windows)
## 🛠 Hoja de Comandos de Git

- **Crear y cambiar a una nueva rama**
  ```sh
  git checkout -b nombre-rama
  ```
- **Agregar archivos al commit**
  ```sh
  git add .
  ```
  * En caso de querer subir un archivo en epecifico, se ecribe la ruta y nombre en lugar del "."
- **Hacer un commit con mensaje**
  ```sh
  git commit -m "Descripción de los cambios"
  ```
- **Subir cambios al repositorio remoto**
  ```sh
  git push origin nombre-rama
  ```
- **Actualizar el código local con la última versión del remoto**
  ```sh
  git pull origin main
  ```
- **Fusionar cambios de una rama a otra**
  ```sh
  git merge nombre-rama
  ```
- **Eliminar una rama local**
  ```sh
  git branch -d nombre-rama
  ```
- **Eliminar una rama remota**
  ```sh
  git push origin --delete nombre-rama
  ```

## 📄 Licencia

Este proyecto está bajo la licencia MIT. ¡Siéntete libre de usarlo, modificarlo y compartirlo con la comunidad! ✨

---

⚡ *Desarrollado con pasión y buenas prácticas.* 💙
