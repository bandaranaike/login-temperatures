# Login Temperatures

### Features

* User can register a new account
* User can select two cities when registering
* When user logged in, system keeps city temperature records
* All records are showing in the dashboard
* Temperature data can be sorted using buttons

### How to install

* Copy the repository
* Extract it to `<the-directory>`
* Go to the directory `cd <the-directory>`
* Install dependencies `composer install`
* If necessary `npm install` and `npm run dev`.
  * Compiled files are included
* Database is sqlite. 
  * In `.env` file change `DB_CONNECTION=sqlite`
    * Please refer `.env.example` file
  * Create a database file in `\database\login_temperatures.sqlite`
  * Change the file absolute path in .env file as follows:
    * `DB_DATABASE=C:\xampp\htdocs\login-temperatures\database\login_temperatures.sqlite`
  * Run the migration and seeds as follows:
    * `php artisan migrate --seed`
* Start the server `php artisan serve`
* Open the project url
  * Usually http://127.0.0.1:8000/
