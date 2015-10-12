cara penggunaan
buka git bash
lalu ganti direktori kerja (ex. ~/Documents/UKM) dengan perintah
cd ~
cd Documents/UKM
git pull
composer install
done!
jalankan MYSQL dan jalankan server dengan perintah
php artisan server

jika di direktori kerja tidak di temukan .env, maka buat dengan template sebagai berikut
------------------------------------
APP_ENV=local
APP_DEBUG=true
APP_KEY=key

DB_HOST=localhost
DB_DATABASE=nama_db
DB_USERNAME=username
DB_PASSWORD=password

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
----------------------------
lalu jalankan perintah php artisan key:generate