# Shift Screenshots
This project recreates the GitHub Pull Request screens to allow automating the process of taking screenshots for each of the individual Shifts.

## Installation
The following commands will install the project dependencies:

```shell
composer install
npm install
```

This project uses a simple SQLite database. If you have not run the project before, you may create this database with by running:

```shell
touch database/database.sqlite
```

Afterwards, run the database migrations and seed the project data:

```shell
php artisan migrate:fresh --seed
```

## Running
To run the project, first build the assets:

```shell
npm run dev
```

Then, run the application:

```shell
php artisan serve
```
