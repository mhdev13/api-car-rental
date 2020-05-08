### How to install cd rental jojonomic
##### 1. Clone this project

```bash
$ git clone https://github.com/ahmadpato/rental 
```


##### 2. Install lumen

```bash
$ composer create-project laravel/lumen rental --prefer-dist
```

##### 3. Setup database in .env

```bash
$ DB_DATABASE=jojonomic
DB_USERNAME=youruername
DB_PASSWORD=yourpassword(if any)
```

##### 4. Migration with run this function
```bash
$ php artisan migrate

```

##### 5. Run this project
```bash
$ php -S localhost:8000 -t ./public
```
