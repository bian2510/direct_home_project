# Instalacion del entorno:

- Descarga e instala Docker y docker-compose
- Clona el repositorio a tu local
- Corre `docker-compose build`
- Luego `docker-compose up`

# Crear base de datos y correr las migraciones:

- Corre `docker-compose run --rm api mix ecto.create`
- Corre `docker-compose run --rm api mix ecto.migrate`

## Las App's estan corriendo en:

- React en http://localhost:3000
- Phoenix en http://localhost:4000
- Postgres en http://localhost:2345
