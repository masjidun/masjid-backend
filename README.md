## Tentang Projek

*Masih dalam tahap pengembangan.*

- [Instalasi](#instalasi)
    - [Pengguna Sistem](#pengguna-sistem)
- [Dokumentasi API](#dokumentasi-api)
    - [Authentication](#authentication)
        - [Login](#login)
        - [Register](#register)

## Instalasi

- Buka CMD atau Terminal

- *Clone* projek ini ke komputer Antum

    `git clone https://github.com/masjidun/masjid-backend.git`

- Masuk ke dalam direktori projek

    `cd masjid-backend`

- Copy file .env

    `cp .env.example .env`

- Install *dependencies*

    `composer install`

- Pasang key aplikasi

    `php artisan key:generate`

- Jalankan migrasi dan seeder

    `php artisan migrate --seed`

- Jalankan *server*

    `php artisan serve`

### Pengguna Sistem

Sebagai **Administrator**

email : *admin@webmasjid.org*
password : *password*

Sebagai **Member**

email : *member@webmasjid.org*
password : *password*

---

## Dokumentasi API

Base URI : <kbd>http://localhost:8000/api</kbd>

### Authentication

#### Login

POST <kbd>/auth</kbd>

Auth : *none*

Parameter :

- **email** : required
- **password** : required
- **device_name** : required

#### Register

POST <kbd>/auth/register</kbd>

Auth : *none*

Parameter :

- **name** : required
- **email** : required
- **password** : required
- **device_name** : required
