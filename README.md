<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## COVID-19 STAT PROJECT
This is a COVID-19 STAT REPORT application built with Laravel. The primary purpose is to show the current real-time situation of the COVID-19 patients reported in Sri Lanka. COVID-19 patients data provided by the Health Promotion Bureau.

## Dependencies
To run this application, you will need to have the following installed on your computer:

1. PHP 8 or higher
2. Composer
3. MySQL or MariaDB

## Installation
To run this application, follow these steps:

1. Clone this repository onto your local machine: ``
2. Navigate into the project directory: `cd `
3. Install the project dependencies: `composer install`
4. Create a new MySQL database for the application
5. Copy the .env.example file and rename it to .env: `cp .env.example .env`
6. Update the .env file with your database credentials and other settings as needed
7. Generate a new application key: `php artisan key:generate`
8. Run the database migrations to create the necessary tables: `php artisan migrate`

## Important step:
9. When this application run first time, you should do this. COVID-19 patients data granted from Health Promotion Bureau API. So, There is a command to update your local database with data fetched from the API. Run this command in your terminal after navigate into the project directory.

- Command to fetch covid-19 data: `php artisan update:covid19_data`

10. Then, start the development server: `php artisan serve`
11. Open your web browser and navigate to `http://localhost:8000`

## Usage
After successfully run this application you are redirect to the COVID-19 STAT REPORT page. In this page you can see updated covid-19 situaltion in Sri Lanka.

There is a page called 'HELP & GUIDE' and any user(without login) can see usful information regarding the covid-19. You can create an account in this application and it is paves the way to add your own help guide to main 'HELP & GUIDE' page.

- To add a new help guide, first you should register/ log in to the application and the main 'HELP & GUIDE' page, a button (Add Help Guide) will be visible. Click on the "Add Help Guide" button.
- Then you will be redirect to a form.
- Add a link and description. Both fields are required. Finally click the "Submit Help Guide" button and your new help guide will save on database and you will be redirect to the main 'HELP & GUIDE' page.
- It will visible your newly added help guide top of the page with your name.

That's all.