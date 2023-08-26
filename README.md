## Project 2

-   Manipulate the json files
-   Sort json large to small

## Installation

-   Install Composer and Xampp or Nginx
-   Install PHP 8.0 or Higher.

Clone Project From Github

```bash
git clone https://github.com/Marsudii/project-2-nawatech.git
```

Install Package Laravel Masuk ke foldernya project-2-nawatech

```bash
cd project-2-nawatech
composer install
```

Copy file .env.example dan ubah namanya menjadi .env dan Generate APP_KEY

```bash
cp .env.example .env
php artisan key:generate
```

Run local server for command

```bash
php artisan serve
```

## Endpoint API

Only One Endpoint for akses API.

-   Manipulate json file and return as an API endpoint ✅
-   You can create many functions for manipulating data ✅
-   You can only create 1 endpoint for this case ✅
-   You’re not allowed to use any database for this case ✅

```bash
  http://localhost:8000/api/manipulate/data
```
