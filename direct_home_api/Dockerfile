FROM elixir:1.11.3-alpine

RUN mkdir /app

WORKDIR /app

COPY mix.exs mix.lock ./

RUN mix deps.get, deps.compile

RUN mix local.hex --force

COPY . .

EXPOSE 4000

CMD ["mix", "phx.server"]