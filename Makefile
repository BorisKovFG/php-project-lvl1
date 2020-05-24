install:
	composer install
make lint:
	composer exec phpcs -- --standard=PSR12 src bin

