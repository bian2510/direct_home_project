# Getting Started:

Download & Install docker, docker-compose, helpfull link: https://docs.docker.com/.

Move to inside the project

```
  cd direct_home_project
```

Clone the phoenix api

```
  git clone https://github.com/bian2510/direct_home_api.git
```

Clone the react app

```
  git clone https://github.com/bian2510/direct_home_app.git
```

Move to `/direct_home_api` and create a file .env using sample.env

Build and run with docker-compose:

```
  docker-compose build
```
```
  docker-compose up
```

Install dependency:
```
  docker exec api mix deps.get
```


# Create Database & Run migrations
create:
```
  docker exec api mix ecto.create
```

migrate:
```
  docker exec api mix ecto.migrate
```

## Apps are running in the following ports:

- React http://localhost:3000
- Phoenix http://localhost:4000
