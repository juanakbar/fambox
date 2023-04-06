<div align="center">

# FarmBox
![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![React](https://img.shields.io/badge/react-%2320232a.svg?style=for-the-badge&logo=react&logoColor=%2361DAFB)
![TailwindCSS](https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=white)

<p align="center">
  <a href="https://github.com/juanakbar/fambox/pulse">
    <img src="https://img.shields.io/github/last-commit/juanakbar/fambox?style=for-the-badge&logo=github&color=7dc4e4&logoColor=D9E0EE&labelColor=302D41"/>
  </a>
  <a href="https://github.com/juanakbar/fambox/stargazers">
    <img src="https://img.shields.io/github/stars/juanakbar/fambox?style=for-the-badge&logo=apachespark&color=eed49f&logoColor=D9E0EE&labelColor=302D41"/>
  </a>
  <a href="https://github.com/juankbar/fambox/blob/master/LICENSE"><img src="https://img.shields.io/github/license/juanakbar/fambox?color=%2361afef&style=for-the-badge"></a>
  <a href="https://github.com/juanakbar/fambox/issues">
  <img
        alt="Issues"
        src="https://img.shields.io/github/issues-raw/juanakbar/fambox?colorA=363A4f&colorB=F5A97F&logo=github&logoColor=D9E0EE&style=for-the-badge">
    </a>
  </a>
  <a href="https://github.com/juanakbar/fambox">
      <img alt="Repo Size" src="https://img.shields.io/github/repo-size/juanakbar/fambox?color=%23DDB6F2&label=SIZE&logo=codesandbox&style=for-the-badge&logoColor=D9E0EE&labelColor=302D41" />
    </a>
    <a href="https://twitter.com/intent/follow?screen_name=IndrianJuan">
      <img alt="follow on Twitter" src="https://img.shields.io/twitter/follow/IndrianJuan?style=for-the-badge&logo=twitter&color=8aadf3&logoColor=D9E0EE&labelColor=302D41" />
    </a>
</p>

</div>

## Getting Started
clone dulu repository git ini
```bash
git clone https://github.com/juanakbar/fambox.git farmbox/
```
Setelah clone Repository ini jalankan perintah menggunakan terminal
```bash
cd farmbox/
composer install
```
Setelah selesai  jalankan perintah beirkut
```bash
cp env.example .env
```
Setelah meng-Copy File .env lakukan konfigurasi pada didalam file tersebut
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=e_service
DB_USERNAME=root
DB_PASSWORD=root
```
Host dan port nya sesuaikan dengan mysql anda dan ketikan perintah
```bash
php artisan migrate:fresh
```
lalu genereta key
```bash
 php artisan key:generate
```
Lalu, ketikan:

```bash
npm install
```
seteleh itu buka 2 terminal di folder farmbox

Setelah itu diterminal pertama, ketikan:
```bash
npm run dev
```
seteleh selesai Jalankan perintah migrasi dan seed database di terminal ke dua
```php
php artisan migrate:fresh --seed
```
seteleh selesai Jalankan development server laravel
```php
php artisan artisan serve
```

dan akses melalu 127.0.0.1:8000
