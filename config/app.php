<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | Este valor es el nombre de tu aplicación, se usa en notificaciones
    | y otros elementos de la interfaz donde se necesita mostrar el nombre.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | Define el "entorno" actual de la aplicación, que puede afectar
    | configuraciones y servicios usados.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | Si está activado, muestra mensajes de error detallados y rastros de pila.
    | Si está desactivado, muestra una página genérica de error.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | URL base usada para generar URLs con Artisan u otros procesos.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Zona horaria predeterminada para funciones de fecha/hora PHP.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | Idioma predeterminado para la aplicación.
    |
    */

    'locale' => 'es',

    /*
    |--------------------------------------------------------------------------
    | Fallback Locale
    |--------------------------------------------------------------------------
    |
    | Idioma que se usará si no hay traducción para el idioma predeterminado.
    |
    */

    'fallback_locale' => 'es',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | Idioma para generar datos falsos con Faker (nombres, direcciones, etc).
    |
    */

    'faker_locale' => 'es_ES',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | Clave usada para cifrar datos, debe ser una cadena aleatoria de 32 caracteres.
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Previous Encryption Keys
    |--------------------------------------------------------------------------
    |
    | Claves previas para facilitar la rotación de claves sin perder datos cifrados.
    |
    */

    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | Controla cómo se maneja el modo mantenimiento.
    | Puede ser "file" o "cache".
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];