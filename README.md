# Getting Started:

Download & Install docker, docker-compose, helpfull link: https://docs.docker.com/.

Build and run with docker-compose:

```
  docker-compose build
```
```
  docker-compose up
```


# Create Database & Run migrations
create:
```
  docker-compose run --rm api mix ecto.create
```

migrate:
```
  docker-compose run --rm api mix ecto.migrate
```

## Apps are running in the following ports:

- React http://localhost:3000
- Phoenix http://localhost:4000
