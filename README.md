## 🎯LARAVEL Job Management Application

#### The Job Management Application is a PHP web application built with the Laravel framework that allows users to manage job listings. The application is designed for job seekers to create and publish their own job listings, which they can update or delete anytime they need. The primary goal of the application is to make it easier for job seekers to search for job openings and provide a platform for employers to find potential candidates.

## Technologies

**Project is created with**

- Laravel: v10.5.1
- Bootstrap: v5.3.0
- PHP/8.1.10
- MySQL: v8.0.27


## Features

The application allows users to:

- Create, edit, and delete job listings
- Search for job listings by title or description
- Filter job listings by category (with search bar or tag)
- Contact employers directly (email or phone btn) through the application

The application includes robust error handling to catch and display any errors that may occur during use.


## Installation

To install and run the application, follow these steps:

### 1. Clone the repository

```bash
git clone https://github.com/petermuladi/laravel-job.git
```
### 👉 go to my-app folder
***(laravel-job/my-app)***

### 2. Install dependencies

```bash
composer install
```
☝ If Composer is not installed on your system, follow these steps to install it:

Download the Composer installer from https://getcomposer.org/download/
Open a command prompt or terminal window and navigate to the directory where the installer was downloaded
Run the installer:

**On Windows:**

```bash
php composer-setup.php
```

**On macOS or Linux:**

```bash
php composer-setup.php --install-dir=/usr/local/bin --filename=composer
```

Verify that Composer was installed successfully by running the following command in your terminal or command prompt window:

```bash
composer --version
```

After installing Composer, you can proceed with the installation of the dependencies for your project using the **composer install** command.

### 3. Create a new .env file

```bash
cp .env.example .env
```

### 4. Update the .env file with your database credentials

```bash
DB_DATABASE=[your-database-name]
DB_USERNAME=[your-database-username]
DB_PASSWORD=[your-database-password]
```

### 5. Generate an application key

```bash
php artisan key:generate
```

### 6. Run database migrations

```bash
php artisan migrate:fresh --seed
```

### 7. Start the web server

```bash
php artisan serve
```

### 8. Navigate to the project URL

```bash
localhost:8000
```

## Usage

- The entry point for the application is **public/index.php**.
- The routes are defined in **routes/web.php**.
- The controllers are located in **app/Http/Controllers**.
- The views are located in **resources/views**.
- The database schema is defined in **database/migrations**.

## Code Snippets

Here are some important code snippets in the application:

- **routes/web.php**: This file defines the routes for the application.
- **app/Http/Controllers/ListingController.php**: This controller handles the job listing-related actions in the application.
- **resources/views/listings/listing.blade.php**: This view displays a list of all job listings in the application.
- **database/migrations/2022_03_25_161430_create_listings_table.php**: This migration file creates the listings table in the database.

## Development Environment IDE

The development environment used to build the application is:

- XAMPP web server package 3.3.0
- Visual Studio Code 1.62.2
- PHP 8.0.13
- Apache/2.4.51
- MySQL 8.0.27
- phpMyAdmin 5.1.1


## Additional Notes
**🎯The application was created by Muladi Péter.**
