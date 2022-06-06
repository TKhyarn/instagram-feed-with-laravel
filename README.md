# Instagram feed display
## Presentation
A small project on Laravel to get the instagram feed of an account. To display the feed I used
[Dymantic /laravel-instagram-feed](https://github.com/Dymantic/laravel-instagram-feed)
## Installation
Set up your .env file by using the .env.example then
```
docker-compose build
docker-compose up -d
docker-compose exec laravel.test composer install
```
run the migrations `vendor/bin/sail artisan migrate`

Before running the app you need to create the instagram profile
`php artisan instagram-feed:profile {username}`

Then get the instagram OAUTH url to send to the instagram account owner:
`php artisan instagram:authorisation-url {username}`

