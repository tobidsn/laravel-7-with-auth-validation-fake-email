# Example Laravel 7 Project with Authentication & Validation Fake Email

# Installation
```
git clone https://github.com/tobidsn/laravel-7-with-auth-validation-fake-email.git
Create a database and cp .env.example to .env
composer install
php artisan key:generate
php artisan migrate --seed
import table disposable_email_domains to database
```

# Resource

[List SQL of disposable and temporary email address domains](https://github.com/tobidsn/disposable-email-domains-sql)

[Rules FakeEmail](https://github.com/tobidsn/laravel-7-with-auth-validation-fake-email/blob/master/app/Rules/FakeEmail.php)

[Controller RegisterController ](https://github.com/tobidsn/laravel-7-with-auth-validation-fake-email/blob/master/app/Http/Controllers/Auth/RegisterController.php)

[Model DisposableDomain ](https://github.com/tobidsn/laravel-7-with-auth-validation-fake-email/blob/master/app/DisposableDomain.php)

## Maintainer
* [Tobi](https://twitter.com/tobidsn/)