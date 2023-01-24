# Laravel News Management API

# How to start/deploy app

1. `cd laravel-news`
2. `composer install && composer update`
3. `php artisan key:generate`
4. Set your database and password in `.env`
5. `php artisan migrate:fresh --seed`
6. `php artisan storage:link`
7. `npm install && npm run dev`
8. `php artisan serve`
9. Visit `localhost:8000/login` in your browser
10. Choose one `email` from table `users`. Use password : `password` to login.
