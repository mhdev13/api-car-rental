### How to install cd rental jojonomic
##### 1. install lumen

```bash
$ composer create-project laravel/lumen rental --prefer-dist
```

##### 2. setup database and migration in .env

```bash
$ DB_DATABASE=jojonomic
DB_USERNAME=youruername
DB_PASSWORD=yourpassword(if any)
```

##### run this function
```bash
$ php artisan migrate

```
