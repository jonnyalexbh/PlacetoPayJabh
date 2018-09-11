PlacetoPay integraciones
=================
## Instrucciones
### Clonar e instalar las dependencias:

``` bash
# Clonar el repositorio.
git clone https://github.com/jonnyalexbh/PlacetoPayJabh.git
cd PlacetoPayJabh/
# Instalar las dependencias del proyecto.
composer install
```
### Copia el archivo de entorno:
``` bash
cp .env.example .env
php artisan key:generate
```

Mínimo debe tener las siguientes variables de entorno:

``` env
APP_NAME=PlaceToPay
PSE_WSDL=https://test.url.com/soap/pse/?wsdl
PSE_ID=XXXXXXXXXXXXXXXXXXX
PSE_KEY=XXXXXXXXX

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=PlacetoPayJabh
DB_USERNAME=XXXX
DB_PASSWORD=XXXX
```
### Crear la base de datos y migrar las tablas:
``` bash
# Crear una base de datos en mysql => PlacetoPayJabh
# Realizar las migraciones.
php artisan migrate
```
### Aplicacion en produccion
``` bash
# Cambie la variable APP_ENV=local por
APP_ENV=production
# Optimizar el tiempo de carga y respuesta de la aplicacion
php artisan config:cache
php artisan route:cache
```
