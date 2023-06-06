# ![WebKit Laravel Tailwind](public/assets/img/logo.png)

> ### Testing for Laravel/Blade.

---

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

Alternative installation is possible without local dependencies relying on [Docker](#docker).

Clone the repository

    git clone https://github.com/superior57/webkit_laravel_tailwind.git

Switch to the repo folder

    cd webkit_laravel_tailwind

Install all the dependencies using composer and yarn or npm

    composer install
    yarn install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Build SASS styles

    yarn build

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000