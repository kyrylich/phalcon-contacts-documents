# Phalcon test task

### Installation

You can start this project via docker

```bash
docker-compose up -d --build
```

### Tasks

#### Task 1

```http request
GET http://localhost:8080/
```

#### Task 2
You can find schema in file data/task_2_schema.sql

#### Task 3
```http request
GET http://localhost:8080/contacts?search[custom_fields][field_string]=DATA

GET http://localhost:8080/contacts?search[custom_fields][field_date]=2022-01-01

GET http://localhost:8080/contacts?search[custom_fields][field_select]=1

GET http://localhost:8080/contacts?search[custom_fields][field_multi_select]=3
```
