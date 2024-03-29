<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Setup requirements:

- [XAMPP - 4.2.4 / PHP 8.2.4](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.4/xampp-windows-x64-8.2.4-0-VS16-installer.exe)
- [PHP Composer - 2.5.7](https://getcomposer.org/Composer-Setup.exe)
- [Node.js - 18.16.0](https://nodejs.org/dist/v18.16.0/node-v18.16.0-x64.msi)

## Setup

1. Install XAMPP.
2. Instal PHP Composer with php path set.
3. Install Node.js.
4. Put this repository to %xampp_localization%\htdocs.
5. Run XAMPP and start Apache and MySQL modules.
6. Run 3 instances of CMD in repository directory as Administrator.
7. Type:
    <br> php artisan serve
    <br> npm run dev
    <br> php artisan migrate --seed
8. Go to your browser and open "localhost:8000".
9. You are all set to run my application!

## Test environment 

- Email: <br> Admin@gmail.com
- Password: <br> Admin

## About

This application is simple university project which supposed to be WMS at first but then I decided that I will focus on IAM module and a little bit of WMS. It was supposed to implement Clean Onion Architecture which was really hard to achieve. I wanted to show possibilities of PHP and Laravel framework. I dropped it and started a new one based on my current experience becouse I made tons of mistake at the beginning. Enjoy

## API

![Example Image](1.png)

http://localhost:8000/api/user/show/1 - Show details of user with id equal to 1
<br>http://localhost:8000/api/user/create - Create user: 
<br>{
    "name": "Test",
    "email": "test@gmail.testtest",
    "password": "tetetet"
}
<br>http://localhost:8000/api/user/update/2 - Update details of user with id equal to 2:
<br>{
    "name": "Test_update",
    "email": "testupdate@gmail.com",
    "role_id": 2
}
<br>http://localhost:8000/api/user/delete/2 - Delete user with id equal to 2
<br>http://localhost:8000/api/user/show_all - Show all users

<br>http://localhost:8000/api/warehouse/show/1 - Show details of warehouse with id equal to 1
<br>http://localhost:8000/api/warehouse/create - Create warehouse:
<br>{
    "code": "ACE",
    "description": ""
}
<br>http://localhost:8000/api/warehouse/delete/2 - Delete warehouse with id equal to 2
<br>http://localhost:8000/api/warehouse/update/2 - Update details of warehouse with id equal to 2:
<br>{
    "code": "TST",
    "description": "test",
    "is_active": 1
}
<br>http://localhost:8000/api/warehouse/show_all - Show all warehouses
<br>http://localhost:8000/api/warehouse/assign - Assign warehouse to certain user
<br>{
  "user_id": 1,
  "warehouse_id": 2
}



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
