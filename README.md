#App setup
****
`````
git clone https://github.com/nguyenhien0809/Study-laravel-7.git

composer install

cp .env.example .env

php artisan cache:clear

composer dump-autoload

php artisan key:generate

php artisan serve
`````
Create the DB .env
````
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
````
php artisan migrate
````
php artisan migrate
````
Use pusher for message
````
Register account https://pusher.com/
Create project real-time
Add key to .env

BROADCAST_DRIVER=pusher
PUSHER_APP_ID= your_app_id
PUSHER_APP_KEY= your_app_key
PUSHER_APP_SECRET= your_app_secret
PUSHER_APP_CLUSTER= your_app_cluster
````
Now run this command to start the project
````
npm i

npm run dev
````
