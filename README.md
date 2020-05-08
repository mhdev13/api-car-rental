### How to install cd rental jojonomic
##### 1. git clone this project

```bash
$ git clone https://github.com/ahmadpato/rental 
```


##### 2. install lumen

```bash
$ composer create-project laravel/lumen rental --prefer-dist
```

##### 3. setup database and migration in .env

```bash
$ DB_DATABASE=jojonomic
DB_USERNAME=youruername
DB_PASSWORD=yourpassword(if any)
```

##### run this function
```bash
$ php artisan migrate

```
