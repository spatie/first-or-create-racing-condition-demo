# A demo Laravel app to demonstrate the dangers of using firstOrCreate in a queued environment

Read [this blogpost on murze.be](https://murze.be/breaking-laravels-firstorcreate-using-race-conditions) first to get familiar with the problem.

## Support us

[![Image](https://github-ads.s3.eu-central-1.amazonaws.com/first-or-create-racing-condition-demo.jpg)](https://spatie.be/github-ad-click/first-or-create-racing-condition-demo)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

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
