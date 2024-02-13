# Proyecto de Gestión de Alumnos

Este es un proyecto de gestión de alumnos desarrollado con Laravel. Permite realizar operaciones básicas como agregar, editar y eliminar alumnos.

## Requisitos Previos

Antes de comenzar, asegúrate de tener instalados los siguientes elementos:

- [PHP](https://www.php.net/) (preferiblemente versión 7.4 o superior)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) o [MariaDB](https://mariadb.org/)

## Instrucciones de Instalación

1. **Clonar el Repositorio:**

    ```bash
    git clone https://github.com/tuusuario/tuproyecto.git
    ```

2. **Instalar Dependencias:**

    Navega al directorio del proyecto e instala las dependencias utilizando Composer:

    ```bash
    cd tuproyecto
    composer install
    ```

3. **Configurar el Archivo de Entorno:**

    Copia el archivo `.env.example` a un nuevo archivo llamado `.env` y configura las variables de entorno, especialmente la conexión a la base de datos.

    ```bash
    cp .env.example .env
    ```

4. **Generar Clave de Aplicación:**

    Genera la clave de aplicación de Laravel:

    ```bash
    php artisan key:generate
    ```

5. **Migraciones y Semillas:**

    Ejecuta las migraciones y las semillas para inicializar la base de datos:

    ```bash
    php artisan migrate --seed
    ```

6. **Servir la Aplicación:**

    Inicia el servidor de desarrollo de Laravel:

    ```bash
    php artisan serve
    ```

    La aplicación estará disponible en `http://localhost:8000`.

## Uso

- Accede a la aplicación desde tu navegador.
- Gestiona los alumnos: agrega, edita o elimina información.
- ¡Listo para usar!

## Contribuciones

Siéntete libre de contribuir al proyecto. Abre problemas (issues) o envía solicitudes de extracción (pull requests).