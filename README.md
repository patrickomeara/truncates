This is a temporary repository to test the `DatabaseTruncates` trait in parallel tests.

## Installation

Create a database named `truncates`.

```
git clone git@github.com:patrickomeara/truncates.git
cd truncates
composer install
cp .env.example .env
php artisan test -p
```
