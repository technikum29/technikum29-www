# This docker file allows running a *DEVELOPMENT* server for 11ty locally. 
# Usage is like: docker run -it --rm -v"$(pwd)":/ -p 8080:8080 t29v8

FROM node:22-alpine
WORKDIR /app
# Copy only package files to install dependencies
COPY package*.json ./
RUN npm install
EXPOSE 8080
CMD npm run start

