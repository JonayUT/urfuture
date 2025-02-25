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
   git clone https://github.com/usuario/repositorio.git
   ```

4. Ingresa a la carpeta del proyecto con:

   ```sh
   cd nombre-del-proyecto
   ```

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
   DB_HOST=cluster0.urfurtunedb.com
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

Si ves la página de bienvenida de Laravel, ¡todo está listo para comenzar! 🎉

## 💡 Contribución

Si deseas contribuir al desarrollo del proyecto, sigue estos pasos para asegurarte de que tus cambios se integren correctamente:

1. Haz un fork del repositorio en GitHub para crear tu propia copia.
2. Crea una nueva rama para trabajar en tu mejora o corrección de errores:
   ```sh
   git checkout -b mi-rama
   ```
3. Realiza los cambios en tu código y guarda los archivos.
4. Confirma los cambios con un mensaje descriptivo:
   ```sh
   git commit -m "Descripción de los cambios"
   ```
5. Sube tus cambios a tu repositorio en GitHub:
   ```sh
   git push origin mi-rama
   ```
6. Crea un pull request para solicitar que tus cambios sean revisados e integrados en el repositorio principal.

## 📄 Licencia

Este proyecto está bajo la licencia MIT. ¡Siéntete libre de usarlo, modificarlo y compartirlo con la comunidad! ✨

---

⚡ *Desarrollado con pasión y buenas prácticas.* 💙
