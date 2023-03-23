<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Documentation

## COVID-19 STAT PROJECT
This is a COVID-19 STAT REPORT application built with Laravel. The primary purpose is to show the current real-time situation of the COVID-19 patients reported in Sri Lanka. COVID-19 patient data is provided by the Health Promotion Bureau.

## Dependencies
To run this application, you will need to have the following installed on your computer:

1. PHP 8 or higher
2. Composer
3. MySQL or MariaDB

## Installation
To run this application, follow these steps:

1. Clone this repository onto your local machine: `git clone https://github.com/SameeraGurusinghe/covid19-report.git`
2. Navigate into the project directory: `cd covid19-report`
3. Install the project dependencies: `composer install`
4. Create a new MySQL database for the application
5. Copy the .env.example file and rename it to .env: `cp .env.example .env`
6. Update the .env file with your database credentials and other settings as needed
7. Generate a new application key: `php artisan key:generate`
8. Run the database migrations to create the necessary tables: `php artisan migrate`

#### Important step
9. When this application runs for the first time, you should do this. COVID-19 patient data is granted from the Health Promotion Bureau API. So, there is a command to update your local database with data fetched from the API. Run this command in your terminal after navigating into the project directory.

- Command to fetch covid-19 data: `php artisan update:covid19_data`

10. Then, start the development server: `php artisan serve`
11. Open your web browser and navigate to `http://localhost:8000`

## Usage
After successfully running this application, you are redirected to the COVID-19 STAT REPORT page. On this page, you can see the updated COVID-19 situation in Sri Lanka.

There is a page called "Help & Guide," and any user (without login) can see useful information regarding COVID-19. You can create an account in this application, which paves the way to adding your own help guide to the main "Help & Guides" page.

#### Note
- The first time you run the application, there is no data in the "Help & Guides" page. So, you need to perform the following:

- To add a new help guide, first you should register or log in to the application, and on the main 'HELP & GUIDE' page, a button (Add Help Guide) will be visible. Click on the "Add Help Guide" button.
- Then you will be redirected to a form.
- Add a link and description. Both fields are required. Finally, click the "Submit Help Guide" button, and your new help guide will be saved to the database and you will be redirected to the main "Help and Guides" page.
- It will display your newly added help guide at the top of the page with your name.

## Usful Resource
- API documentation: `https://hpb.health.gov.lk/en/api-documentation`

That's all.