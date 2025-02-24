
![GitHub Repo stars](https://img.shields.io/github/stars/omaralalwi/laravel-starter-template?logo=github&style=flat-square)
![GitHub forks](https://img.shields.io/github/forks/omaralalwi/laravel-starter-template?color=%23345FF0%20&logo=github&style=flat-square)
![GitHub Release Date](https://img.shields.io/github/release-date/omaralalwi/laravel-starter-template?color=%2348C604%20&logo=github&style=flat-square)
![MIT Licensed](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)

this Repo forked from this [original repo](https://github.com/nasirkhan/laravel-starter)

# Based on Laravel8.x
laravel starter Template, to save your time when You start with new scalable Laravel projects with many features.

# [Live Demo](https://larastarter.me)
you can see all things in live demo

```
Dashboard Creditional 
Super Admin
User: super@admin.com
Pass: secret

User
User: user@user.com
Pass: secret

```

![backend-rtl2](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/laravel-starter-template-screenshots/backend-rtl3.png)

# Requirements

please be careful about the Requirements:-
- Highly Recommended  to use it with PHP v7.4 or up, and ensure that , the version used by composer is 7.4 to Avoid any problems with contianed packages.
- All packages work probably with PHP 7.2, BUT PHP7.4 and The exif extension is required for Spatie Media Library.

## IMPORTANT NOTE
if you have PHP7.4 you will use this template with all features without any problems, but if your PHP under 7.4 you Can NOT use it with Spatie Media Library, SO you must uninstall Spatie Media Library or Upgrade your php to 7.4 or UP [see more about Spatie Media Library here](https://spatie.be/docs/laravel-medialibrary/v9/introduction)

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
- <a href="https://github.com/omaralalwi/laravel-startkit"><img src="https://raw.githubusercontent.com/omaralalwi/laravel-startkit/master/public/screenshots/backend-rtl.png" width="26" height="26" style="border-radius:13px;" alt="Laravel Startkit" /> **Laravel Startkit** </a>  Laravel Admin Dashboard, Admin Template with Frontend Template, for scalable Laravel projects.

* Role-Permissions for Users
* Dynamic Menu System
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

## Additional features

* Well Structure of Scalable Laravel Projects (Modules Structure, Folders,Routes,Controllers,Views)
* Language Switcher Frontend and Backend (with middleware)
* RTL Support by one click ,Just change language to Arabic , it will change Direction to RTL
* Eloquent models translatable with [spatie/laravel-translatable](https://github.com/spatie/laravel-translatable)
* SEO Friendly by Forcing all frontend routes with locale prefix
* with Spatie Media Library and conversitions
* with [Yajra DataTables](https://github.com/yajra/laravel-datatables)
* with [infyom Laravel Generator](https://github.com/InfyOmLabs/laravel-generator)
* with [laravel fractal](https://github.com/spatie/laravel-fractal)
* All Stubs are ready to customize
* Notifications for Admin


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
9. Login to Admin Panel `localhost:8000/admin/dashboard` Username: super@admin.com Password: secret


*After creating the new permissions use the following commands to update cashed permissions.*

`php artisan cache:forget spatie.permission.cache` 

## Icons
FontAwesome & CoreUI Icons, two different font icon library is installed for the Backend theme and only FontAwesome for the Frontend. For both of the cases we used the free version. You may install the pro version separately for your own project.

* **FontAwesome** - https://fontawesome.com/icons?d=gallery&m=free
* **CoreUI Icons** - https://icons.coreui.io/icons/

## Making a model translatable
 According to spaite pakcage:-
- to make default local open config/translatable and edit 'fallback_locale' => null, to your prefferd local like: 'fallback_locale' => ar, if you prefer Arabic.
- NOTE: This prefferd local for translated models not for App local, this mean if you insert product with many languages the primary language will be ar.

- All Toturials for Translation package [here](https://github.com/spatie/laravel-translatable) , you do't need to install it , it is preinstalled, Just see Toturials.

# insert Demo Data in DB

to login with Admin You must add it by run the follwing command
```
php artisan db:seed
```

Then insert Demo Data For Posts and comments and Tags and another Models , Run the follwing Command

```
php artisan starter:insert-demo-data --fresh

```

## Screenshots

these some screenshotes 

![backend-ltr img](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/laravel-starter-template-screenshots/backend-ltr.png)

![backend-rtl img](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/laravel-starter-template-screenshots/backend-rtl.png)

![backend-rtl2 img](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/laravel-starter-template-screenshots/backend-rtl2.png)

![backend-rtl3 img](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/laravel-starter-template-screenshots/backend-rtl3.png)

![frontend1 img](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/laravel-starter-template-screenshots/frontend1.png)

![frontend2 img](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/laravel-starter-template-screenshots/frontend2.png)

![userprofile update img](https://amoori-web-app-resources.s3-ap-southeast-1.amazonaws.com/laravel-starter-template-screenshots/update_profile.png)

## Development

This project will continue to evolve and grow, until it becomes the first Laravel Starter Template, follwo me to still up to date.

## Credits

- [Omar Alalwi](https://github.com/omaralalwi)

Contact ME  [ Twitter ](https://twitter.com/omaralalwi2013)
OR Hire me on  [ Freelancer ](https://www.freelancer.com/u/omaralwi2010)
OR Hire me on  [ UpWork ](https://www.upwork.com/fl/omaralalwi)
OR Contact by [ Email ](mailto:Contact@omaralalwi.info)

## License

This  Project is open sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

 
## 📚 Helpful Open Source Packages

- <a href="https://github.com/omaralalwi/lexi-translate"><img src="https://raw.githubusercontent.com/omaralalwi/lexi-translate/master/public/images/lexi-translate-banner.jpg" width="26" height="26" style="border-radius:13px;" alt="lexi translate" /> Lexi Translate </a> simplify managing translations for multilingual Eloquent models with power of morph relationships and caching .
  
- <a href="https://github.com/omaralalwi/Gpdf"><img src="https://raw.githubusercontent.com/omaralalwi/Gpdf/master/public/images/gpdf-banner-bg.jpg" width="26" height="26" style="border-radius:13px;" alt="laravel Taxify" /> Gpdf </a> Open Source HTML to PDF converter for PHP & Laravel Applications, supports Arabic content out-of-the-box and other languages..

- <a href="https://github.com/omaralalwi/laravel-taxify"><img src="https://raw.githubusercontent.com/omaralalwi/laravel-taxify/master/public/images/taxify.jpg" width="26" height="26" style="border-radius:13px;" alt="laravel Taxify" /> **laravel Taxify** </a> Laravel Taxify provides a set of helper functions and classes to simplify tax (VAT) calculations within Laravel applications.

- <a href="https://github.com/omaralalwi/laravel-deployer"><img src="https://raw.githubusercontent.com/omaralalwi/laravel-deployer/master/public/images/deployer.jpg" width="26" height="26" style="border-radius:13px;" alt="laravel Deployer" /> **laravel Deployer** </a> Streamlined Deployment for Laravel and Node.js apps, with Zero-Downtime and various environments and branches.

- <a href="https://github.com/omaralalwi/laravel-trash-cleaner"><img src="https://raw.githubusercontent.com/omaralalwi/laravel-trash-cleaner/master/public/images/laravel-trash-cleaner.jpg" width="26" height="26" style="border-radius:13px;" alt="laravel Trash Cleaner" /> **laravel Trash Cleaner** </a>clean logs and debug files for debugging packages.

- <a href="https://github.com/omaralalwi/laravel-time-craft"><img src="https://raw.githubusercontent.com/omaralalwi/laravel-time-craft/master/public/images/laravel-time-craft.jpg" width="26" height="26" style="border-radius:13px;" alt="laravel Trash Cleaner" /> **laravel Time Craft** </a>simple trait and helper functions that allow you, Effortlessly manage date and time queries in Laravel apps.

