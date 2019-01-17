
## Installation Guide:

- Clone the project.

- Navigate to the cloned project and run "Composer update" to update dependencies.

- Create an .env (with required values such as, DB_DATABASE, DB_USERNAME, DB_PASSWORD) file and and generate an app key. 

- Run "composer dump-autoload" to get namespace working as expected.

- Create a Database. For local development, I used "Cinemas". You may choose any name you like.

- I have created 4 modules (User, Cinema, Movie, Showtime) for this application.

- I have created 4 migrations (namely, users, cinemas, movies, showtimes). We need to set-up all the migrations by running "php artisan module:migrate".

- Run "php artisan module:seed Cinema". 

- Run "php artisan storage:link" to resolve our uploaded images' path. 

- It is time to run our app. Run "php artisan serve", then go to your localhost (example: "http://127.0.0.1:8000").

The app runs so reliably on my system. Thank you :)

