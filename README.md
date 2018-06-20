# A demo Laravel app to demonstrate the dangers of using firstOrCreate in a queued environment

Read [this blogpost on murze.be](TODO: add link) first to get familiar with the problem.

## Usage

To run this demo you'll need to have Redis installed

1. Clone the repo
2. Install the dependencies with `composer install`
3. Copy `.env.example` to `.env`
4. Create a `racing_condition_demo` database
5. Run `php artisan key:generate`
6. Run `php artisan migrate`
7. In a seperate terminal start Horizon with `php artisan horizon`
8. Run `php artisan create-products`

If you look in the `products` table of the database multiple records with the same uuid will have been created.
