FROM node:15.3.0-alpine3.10

WORKDIR /app

COPY package.json package-lock.json ./

RUN npm install

COPY . /app

EXPOSE 3000

CMD ["npm", "start"]