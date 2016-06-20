# laravel-froala-example
Laravel 5.2 Froala Implementation
	
This is the example for my articles on Using Froala to Upload Images with Laravel 5.2 and Using Froala Image Manager with Laravel 5.2.

Step 1)
	sudo git clone https://github.com/JoshuaBedford/laravel-froala-example.git

Step 2)
	cd laravel-froala-example

Step 3)
	sudo composer install

Step 4 (if you get file_put_contents() permission denied) tested on Mac/Ubuntu Server:
Fix permissions:
	echo “Fixing folder permissions…” && sudo find . -type d -exec chmod 0755 {} \; && echo “Successfully fixed folder permissions \n Fixing file permissions.” && sudo find . -type f -exec chmod 0644 {} \; && echo “Successfully fixed file permissions. \n Fixing storage permissions…” && sudo chmod -R 777 storage && echo “Successfully fixed permissions \n Clearing application cache to register new permissions…” && php artisan cache:clear

Step 5)
	create database

Step 6)
	create .env file and connect to database

Step 7)
	php artisan migrate

Step 8)
	Enjoy!
