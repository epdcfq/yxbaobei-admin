<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Pulse Storm](http://www.pulsestorm.net/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


[artisan]命令总结

1，创建一个controller控制器的artisan的命令

(1)默认在Controllers/UserController:
  php artisan make:controller UserController
  
(2)在Controllers/Home/UserController:
  php artisan make:controller Home/UserController
   

2,创建一个model的命令：
 位置：app/Model:
     php artisan make:model  Model\User
     或者
     php artisan make:model User



3,定义中间件 在app\http:
php artisan make:middleware CheckLogin

4，创建迁移目录：

php artisan make:migration create_user_table

5,导出laravel中提供的分页视图

php artisan vendor :publish –tag=laravel-pagination

#################################################

安装composer :  composer install

生成 .env :   copy .env.example  .env

生成laravel秘钥： php artisan key:generate

npm install

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

1.创建数据迁移之前请先配置好数据库信息 /config/database.php

2.php artisan make:migration create_table_users --create=users

（1）create_table_users 数据迁移文件名称，如下图所示



（2）--create=users 要创建的表名为users

3.php artisan migrate --pretend

--pretend 查看数据库执行语句，并不直接创建数据表

4.php artisan migrate 创建数据表

5.php artisan migrate:rollback 将上一步生成的数据表删除，删除操作的实现与migrations表相关


一，laravel使用artisan创建迁移后手动删除迁移文件报错解决方法

 在laravel项目中，使用php artisan make:migration xxx 创建了数据库迁移文件，测试时手动删除了该迁移文件就会报错：

  [ErrorException]
  include(D:\projects\lav53\vendor\composer/../../database/migrations/2017_03_28_113253_change_sex_on_users_table.php): failed to open stream: No such file or directory

原因：

  在执行 artisan 命令后，会在 vendor/composer/autoload_classmap.php 和 vendor/composer/autoload_static.php 这两个文件里加上新生成的类和文件的映射，因为有了这个映射， artisan 命令就没有再生成新的文件


  解决方法：

     解决方法1、执行composer update；

     解决方法2、删除上面两个文件中含有报错信息的那行

     解决方法3、创建新的迁移文件