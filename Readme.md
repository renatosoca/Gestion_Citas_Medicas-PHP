# Proyecto de Gestión de citas medicas

## Iniciar el proyecto

Primero se debe crear el contenedor con el siguiente comando:

```bash
docker-compose up -d
```

luego se debe de importar las tablas de la base de datos con el siguiente comando:

```bash
docker exec -i sanjose_db mysql -u root -proot san-jose < ./includes/Hospital.sql
```

una ves hecho lo anterior, se debe instalar las dependencias del proyecto con el siguiente comando:

```bash
npm install
```

y luego se debe instalar las dependencias de composer con el siguiente comando:

```bash
composer update
```

finalmente, se debe acceder a la carpeta public con el siguiente comando:

```bash
cd public
```

y ejecutar el siguiente comando:

```bash
php -S localhost:3000
```

y listo, ya se puede acceder al proyecto desde el navegador con la siguiente url:

```bash
http://localhost:3000
```
