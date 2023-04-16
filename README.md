Sure, here's how you can update your "README" file with the corrected instructions:

# alexon task

## Installation

To run this project, follow the instructions below.

### Method 1

1. Run "composer install".
2. Create a new MySQL database or any database engine you like.
3. Define the database credentials in your ".env" file.
4. Run "php artisan migrate --seed".
5. Run "php artisan serve".
6. Enjoy!

### Method 2

1. Make sure you have Docker installed.
2. Run "docker-compose build && docker-compose up".
3. Take the credentials from the MySQL environment in the Docker Compose file.
4. Run "php artisan migrate --seed".
5. Enjoy and have a nice day!
