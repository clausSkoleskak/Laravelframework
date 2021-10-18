## Assingment
 This project is  created with laravel 8,
 
 In order to run this project follows the steps below.
 
# Create database 
1-Create  Mysql database  with user and password of your choice for testing purpose (  host_name , user_name, database_name,password='' ) 
# Create env.
2-Create and fill the .env file variables with these values.
# Run migration
3-Run  php artisan migrate
# seed the Fen string to the database
4- The fen string is in App/public/Seeder/fen.text 
 -Run php artisan db:seed --class=FenSeeder 
 
 to seed fen string to the  database

# Run the project
5- run npm to install  for dependencies

6- run composer to install dependencies

7-php artisan serve

 
