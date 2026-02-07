serve:
	php artisan serve --host 0.0.0.0

start-frontend:
	npm run dev

watch-frontend:
	npm run watch

console:
	php artisan tinker

test:
	php artisan test

migrate:
	php artisan migrate

make-controller(name):
	php artisan make:controller $name

make-resource-controller(name):
	php artisan make:controller $name --resource

log:
	tail -f storage/logs/laravel.log

lint:
	composer phpcs

lint-fix:
	composer phpcbf

install:
	make setup-backend
	make setup-frontend
	make ide-helper

setup-backend:
	composer install
	cp -n .env.example .env
	php artisan key:generate --ansi
	touch database/database.sqlite
	php artisan migrate
	php artisan db:seed

setup-frontend:
	npm ci
	npm run build

ide-helper:
	php artisan ide-helper:eloquent
	php artisan ide-helper:gen
	php artisan ide-helper:meta
	php artisan ide-helper:mod -n
