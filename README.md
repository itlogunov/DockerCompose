# Docker

## Run

`docker-compose up -d --build`

`http://localhost:9000`

---

#### mysql
`docker exec -it docker_db_1 bash`

`mysql -u root -psecret`

---

#### project path

`docker exec -it docker_php_1 bash`

`cd /var/www`

---

### в .env указывать
`DB_CONNECTION=mysql`
`DB_HOST=db`
`DB_PORT=3306`
`DB_DATABASE=db`
`DB_USERNAME=root`
`DB_PASSWORD=secret`