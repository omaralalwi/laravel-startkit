[![MIT Licensed](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

laravel starter Template, to save your time when You start with new scalable Laravel projects with many features.

### [ Another Laravel8 Starter with jetstream and Livewire ](https://github.com/omaralalwi/modern_laravel_starter)

# Based on Laravel8.x

![backend-rtl2](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/laravel-starter-template-screenshots/backend-rtl2.png)

# Custom Commands

I have created a number of custom commands for the project. The commands are listed below with a brief about the use of it.

## Clear All Cache

`composer clear-all`

this is a shortcut command clear all cache including config, route and more

## Code Style Fix

`composer fix-cs`

apply the code style fix by this command.


# Features

The `laravel-starter-template` comes with a number of features which are the most common in almost all the applications. It is a template project which means it is intended to build in a way that it can be used for other projects.

It is a modular application, and a number of modules are installed by default. It will be helpful to use it as a base for the future applications.

* Admin feature and public views are completely separated as `Backend` and `Frontend` namespace.
* Major feature are developed as `Modules`. Module like Posts, Comments, Tags are separated from the core features like User, Role, Permission

## Core Features

* User Authentication
* Social Login
  * Google
  * Facebook
  * Github
  * Build in a way adding more is much easy now
* User Profile with Avatar
  * Separate User Profile table
* Role-Permissions for Users
* Dynamic Menu System
* Language Switcher
* Backend Theme
  * Bootstrap 4, CoreUI
  * Fontawesome 5
* Frontend Theme
  * Bootstrap 4, Impact Design Kit
  * Fontawesome 5
* Article Module
  * Posts
  * Categories
  * Tags
  * Comments
  * wysiwyg editor
  * File browser
* Application Settings
* External Libraries
  * Bootstrap 4
  * Fontawesome 5
  * CoreUI
  * Impact Design Kit
  * Select2
  * Date Time Picker
* Backup (Source, Files, Database as Zip)
* Log Viewer
* Built by Modules (microservices) Archticture
* Notification
  * Dashboard and details view
* RSS Feed
* Localization Switcher Frontend and Backend
* RTL Support by one click ,Just change language to Arabic , it will change Direction to RTL
* Eloquent models translatable with [spatie/laravel-translatable] (https://github.com/spatie/laravel-translatable)
* SEO Friendly by Forcing all frontend routes with locale prefix
* with Spatie Media Library and conversitions
* with [Yajra DataTables](https://github.com/yajra/laravel-datatables)
* with [infyom Laravel Generator](https://github.com/InfyOmLabs/laravel-generator)
* All Stubs are ready to customize.


# User Guide

## Installation

Follow the steps mentioned below to install and run the project.

1. Clone or download the repository `git clone https://github.com/omaralalwi/laravel-starter-template`
2. Go to the project directory and run `composer install`
3. Create `.env` file by copying the `.env.example`. You may use the command to do that `cp .env.example .env`
4. Update the database name and credentials in `.env` file
5. Run the command `php artisan migrate --seed`
6. Link storage directory: `php artisan storage:link`
7. generate encryption key to app: `php artisan key:generate`
8. You may create a virtualhost entry to access the application or run `php artisan serve` from the project root and visit `http://127.0.0.1:8000`
9. Login to Admin Panel `localhost:8000/admin` Username: super@admin.com Password: secret


*After creating the new permissions use the following commands to update cashed permissions.*

`php artisan cache:forget spatie.permission.cache` 

## Icons
FontAwesome & CoreUI Icons, two different font icon library is installed for the Backend theme and only FontAwesome for the Frontend. For both of the cases we used the free version. You may install the pro version separately for your own project.

* **FontAwesome** - https://fontawesome.com/icons?d=gallery&m=free
* **CoreUI Icons** - https://icons.coreui.io/icons/

# insert Demo Data in DB

to login with Admin You must add it by run the follwing command
```
php artisan db:seed
```

Then insert Demo Data For Posts and comments and Tags and another Models , Run the follwing Command

```
php artisan starter:insert-demo-data --fresh

```

```
Dashboard Creditional 
Super Admin
User: super@admin.com
Pass: secret

User
User: user@user.com
Pass: secret

```

## Screenshots

these some screenshotes 

![backend-ltr](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/laravel-starter-template-screenshots/backend-ltr.png)

![backend-rtl](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/laravel-starter-template-screenshots/backend-rtl.png)

![backend-rtl2](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/laravel-starter-template-screenshots/backend-rtl2.png)

![backend-rtl3](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/laravel-starter-template-screenshots/backend-rtl3.png)

![frontend1](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/laravel-starter-template-screenshots/frontend1.png)

![frontend2](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/laravel-starter-template-screenshots/frontend2.png)

## Thanks
many benfits and features taked from [ asirkhan ](https://github.com/nasirkhan/laravel-starter)

# Developer
Please if you Note any bugs OR issues, contact me:

Omar Alalwi
[ Twitter ](https://twitter.com/omaralalwi2013)
[ Linkedin ](https://www.linkedin.com/in/omaralalwi)
hire me in [ Freelancer ](https://www.freelancer.com/u/omaralwi2010)
[ Email ](mailto:Contact@omaralalwi.info)