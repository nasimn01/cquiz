-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 09:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cquiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option_one` varchar(255) NOT NULL,
  `option_two` varchar(255) NOT NULL,
  `option_three` varchar(255) NOT NULL,
  `option_four` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `option_one`, `option_two`, `option_three`, `option_four`, `ans`, `sub`, `grade`, `created_at`, `updated_at`, `deleted_at`) VALUES
(67, 'What will you need for install Laravel, update Laravel and bring in external dependencies?', 'XAMPP', 'Developing machine', 'Composer ', 'NPM', '3', 'Laravel', '2', '2022-10-27 07:45:12', NULL, NULL),
(68, 'Server.php is a backup server that tries to allow less-capable servers to still preview the Laravel application', 'true ', 'false', '', '', '1', 'Laravel', '2', '2022-10-27 07:49:51', NULL, NULL),
(69, 'Whatever machine you are developing on will need to have____ install globally?', 'NPM', 'XAMPP', 'XML PHP extension', 'Composer ', '4', 'Laravel', '2', '2022-10-27 07:52:03', NULL, NULL),
(70, 'Laravel offers two tools for local development, they are___.', 'XML, JSON', 'Valetl, Homestead', 'XAMPP, Composer', 'None of them', '2', 'Laravel', '2', '2022-10-27 07:53:26', NULL, NULL),
(71, 'Which is correct way to create new Laravel project?', 'Laravel installer tool', 'Composer’s create-project feature', 'a and b both ', 'None of them', '3', 'Laravel', '2', '2022-10-27 07:54:50', NULL, NULL),
(72, '‘Composer create-project laravel/laravel projectName’ what will be done after this command line execute?', 'This will create a new subdirectory named {projectName}', 'This will create a new database named (projectName}', 'This command line is wrong', 'a and b both will be created', '1', 'Laravel', '2', '2022-10-27 07:56:12', NULL, NULL),
(73, 'Where does database, seeds and factories live?', 'storage', 'database ', 'resources', 'tests', '2', 'Laravel', '2', '2022-10-27 07:57:27', NULL, NULL),
(74, 'Where caches, logs and compiled system file live?', 'database', 'storage ', 'resources', 'tests', '2', 'Laravel', '2', '2022-10-27 07:58:56', NULL, NULL),
(75, 'Which configuration files is user editable?', 'Composer.json ', 'Composer.lock', 'a and b both', '', '1', 'Laravel', '2', '2022-10-27 07:59:59', NULL, NULL),
(76, 'Server.php is a backup server that tries to allow less-capable servers to still preview the Laravel application', 'true ', 'false', '', '', '1', 'Laravel', '2', '2022-10-27 08:00:58', NULL, NULL),
(77, 'APP_KEY  is important environment variables that randomly generated string that’s used to encrypt data', 'true ', 'false', '', '', '1', 'Laravel', '2', '2022-10-27 08:01:48', NULL, NULL),
(78, 'Which configuration file for PHPUnit, the tool Laravel uses for testing out of the box?', 'config', 'tests', 'phpunit.xml ', 'None of them', '3', 'Laravel', '2', '2022-10-27 08:02:55', NULL, NULL),
(79, 'Which artisan command is used to create new middleware?  (page:270)', 'make:middleware', 'create:middleware', 'make::middleware', 'created::middleware', '1', 'Laravel', '10', '2022-10-27 08:10:08', NULL, NULL),
(80, 'Laravel offers a custom templating engine called Blade.', 'true', ' false', '', '', '1', 'Laravel', '4', '2022-10-27 08:10:32', NULL, NULL),
(81, 'It boasts ', 'a concise syntax and a shallow learning curve  ', 'a powerful and intuitive inheritance model', 'and easy extensibility', ' all of above.', '4', 'Laravel', '4', '2022-10-27 08:12:20', NULL, NULL),
(82, ' Which of the following list is used to register middleware for specific routes ', '$routeMiddleware', ' $Middleware  ', '$routingMiddleware', '$middlewareGroups', '1', 'Laravel', '10', '2022-10-27 08:14:19', NULL, NULL),
(83, 'Which of the following file is used to register newly created middleware.', 'middleware ', 'kernel ', 'config ', 'setmiddleware', '2', 'Laravel', '10', '2022-10-27 08:15:57', NULL, NULL),
(84, 'Kernel.php file located in __________ directory.', 'app/http 	', 'app/http/controllers', 'app/http/Middleware ', 'routes/', '1', 'Laravel', '10', '2022-10-27 08:17:27', NULL, NULL),
(85, '<h1>{{$group-> title}}<h1> ', ' correct', 'incorrect', '', '', '1', 'Laravel', '4', '2022-10-27 08:17:38', NULL, NULL),
(86, 'The public disk is intended for use with any files you intend to be served by your application.', 'True', 'False', '', '', '1', 'Laravel', '14', '2022-10-27 08:18:51', NULL, NULL),
(87, 'Sometimes Laravel’s container is called the….?', 'IoC container', 'loV container', 'Container', 'None', '1', 'Laravel', '11', '2022-10-27 08:19:06', NULL, NULL),
(88, 'The response object is intended to represent every relevant piece of information you might care to know about a user’s HTTP request.', ' true 	 ', 'false', '', '', '2', 'Laravel', '10', '2022-10-27 08:19:17', NULL, NULL),
(89, 'How to echoing data in Laravel?', ' {{$example}} ', ' [[$example]]', ' (($example))', 'None of them', '1', 'Laravel', '4', '2022-10-27 08:20:32', NULL, NULL),
(90, 'Laravel 5.4 introduced a new concept called?', 'Of-time facades', 'On-time facades', 'real-time facades', 'Nome adobe this', '3', 'Laravel', '11', '2022-10-27 08:21:33', NULL, NULL),
(91, '@if, @else, @elseif,@endif is it correct conditional structure in Laravel?', ' true', ' false', '', '', '1', 'Laravel', '4', '2022-10-27 08:21:58', NULL, NULL),
(92, 'TL;DR means Too long; didn’t read.', 'True', 'False', '', '', '1', 'Laravel', '11', '2022-10-27 08:22:07', NULL, NULL),
(93, 'What is returns an array of user-provider input?', 'All', 'input  ', 'Export', 'only', '1', 'Laravel', '10', '2022-10-27 08:22:54', NULL, NULL),
(94, 'Laravel’s helpers make a few common string operations for..', 'faster and simpler', 'faster and slower', 'only faster', 'none', '1', 'Laravel', '17', '2022-10-27 08:23:33', NULL, NULL),
(95, 'Which artisan command is following to use of the directory to serve files to the public?', 'php artisan storage:public', 'php artisan storage:link', 'php artisan disk:link', 'php artisan disk:public', '2', 'Laravel', '14', '2022-10-27 08:23:44', NULL, NULL),
(96, 'You may have heard the phrase “inversion of control” used in conjunction with…?', 'container injection', 'dependency injection', 'all above', 'None', '2', 'Laravel', '11', '2022-10-27 08:23:45', NULL, NULL),
(97, '@forelse is a @foreach that ', ' also allows you to program in a fallback ', ' if the object you’re iterating over is empty ', 'all of above', 'none', '3', 'Laravel', '4', '2022-10-27 08:25:11', NULL, NULL),
(98, 'What is Laravel’s ActiveRecord ? ', 'MVC', 'ORM', 'RPM', 'CMV', '2', 'Laravel', '5', '2022-10-27 08:25:51', NULL, NULL),
(99, '2.	Laravel’s ActiveRecord is ORM here ‘ORM’ means__', 'object-relational mapper', 'optional regular model', 'a+b', 'None', '1', 'Laravel', '5', '2022-10-27 08:30:59', NULL, NULL),
(100, '3.	Laravel’s database functionality is___', 'migrations', 'seeders', 'query builder', 'All above', '4', 'Laravel', '5', '2022-10-27 08:31:54', NULL, NULL),
(101, 'We have three Blade directives here:   ', ' @yield(\'content\') alone ', ' @yield(\'title\', \'Home Page\')', 'and @section/@show', 'all of above', '4', 'Laravel', '4', '2022-10-27 08:32:35', NULL, NULL),
(102, 'Which one is represents the template that outputs the user\'s data?', 'Model', 'View', 'Controllers', 'Routes', '2', 'Laravel', '3', '2022-10-27 08:35:01', NULL, NULL),
(103, 'str_plural($value, $count = n)can do?', 'converts a array to plural forma', 'converts array to object', 'Converts string to Boolean', 'Converts a string to its plural forma', '4', 'Laravel', '17', '2022-10-27 08:35:17', NULL, NULL),
(104, 'Where is database connection in laravel?', 'config/database.php', '.env', '.web', 'a+b', '4', 'Laravel', '5', '2022-10-27 08:35:17', NULL, NULL),
(105, 'What method should we use to create new users?', 'Patch', 'Put', 'Post', 'Get', '3', 'Laravel', '3', '2022-10-27 08:35:37', NULL, NULL),
(106, 'Which method will automatically convert the array into appropriate json response?', 'A. application.json ', 'B. json ', 'C. routes ', 'D. test', '2', 'Laravel', '12', '2022-10-27 08:35:39', NULL, NULL),
(107, 'How can we pass a parameter through a router?', 'Route::get(‘users/(:num)’) = `Controller_path/1`', 'Route::get(‘users/{id}/friends’ ,function ($id) { })', 'Router:::get(‘users/{id}/friends’ ,function ($id) { })', 'Route::get(‘users/{id}/friends’ ,function ($id) { })', '2', 'Laravel', '3', '2022-10-27 08:36:08', NULL, NULL),
(108, 'The advantage of router name is ……', 'Create a reference to the URL', 'A global Url helper to simplify the view link', 'Give simple names to the complex frontend links', 'All of them', '4', 'Laravel', '3', '2022-10-27 08:36:40', NULL, NULL),
(109, 'Migrations are always run in order by date. ', 'True', 'False', '', '', '1', 'Laravel', '5', '2022-10-27 08:37:04', NULL, NULL),
(110, 'Route Group shares a particular character of …..', 'To set an authentication requirement', 'To make a path prefix', 'Controller namespace', 'All of above', '4', 'Laravel', '3', '2022-10-27 08:37:12', NULL, NULL),
(111, 'Why do we use laravel middleware?', 'For Authenticating users', 'For restriction guest', 'A + b', 'None of above', '3', 'Laravel', '3', '2022-10-27 08:37:35', NULL, NULL),
(112, 'How can you set the routes prefix?', 'Route::prefix(‘dashboard’)->group(function(){})', 'Route::setPrefix(‘dashboard’)->group(function(){})', 'Route::prefix(dashboard)->group(function(){})', 'Router::prefix(‘dashboard’)->group(function(){})', '1', 'Laravel', '3', '2022-10-27 08:38:03', NULL, NULL),
(113, 'The idea of inversion of control refers to flipping that “control” to the opposite end of your Application', 'true', 'false', '', '', '1', 'Laravel', '11', '2022-10-27 08:38:20', NULL, NULL),
(114, 'How can you set routes for a controller?', 'Route::get(‘products’,ProductsController::class,’index’)', 'Route::get(‘products’,’ProductsController@index’)', 'Route::get(‘products’,[ProductsController::class,’index’])', 'b + c', '4', 'Laravel', '3', '2022-10-27 08:38:36', NULL, NULL),
(115, 'Why are we use “php artisan migrate” command? ', 'to create database table', 'to create folder', 'a+b', 'None', '1', 'Laravel', '5', '2022-10-27 08:38:52', NULL, NULL),
(116, 'What is right function?', 'public function _construct() {}', 'public function __construct {}', 'function construct() {}', 'public function __construct() {}', '4', 'Laravel', '11', '2022-10-27 08:39:23', NULL, NULL),
(117, 'Is It possible to share certain variables with every template or just specific templates?', 'Yes', 'No', '--', '--', '1', 'Laravel', '3', '2022-10-27 08:39:29', NULL, NULL),
(118, 'How to generate a new Api resource controller?', 'Php artisan make:api MyApiController', 'php artisan make:controller MyApiController  –api', 'Php artisan api:controller MyApiController', 'None of above', '2', 'Laravel', '3', '2022-10-27 08:39:56', NULL, NULL),
(119, 'The container’s bind() method is what we use to bind to the container.', 'True', 'false', '', '', '1', 'Laravel', '11', '2022-10-27 08:40:02', NULL, NULL),
(120, 'To create migration table we need to use _____command.', 'php artisan migrate', 'php artisan make:Model', 'php artisan make:migration', 'None', '3', 'Laravel', '5', '2022-10-27 08:40:19', NULL, NULL),
(121, 'How can we bind an api resource controller?', 'Route:resources(‘tasks’,’TasksController’);', 'Router::resources(‘tasks’,’TasksController’);', 'Router:resources(‘tasks’,’TasksController’);', 'Route:apiResource(‘tasks’,’TasksController’);', '4', 'Laravel', '3', '2022-10-27 08:40:23', NULL, NULL),
(122, 'To specify a disk call ____ on the facade.', 'storage(‘diskname’)', 'disk(‘profer’)', 'disk(‘diskname’)', ' A & C', '3', 'Laravel', '14', '2022-10-27 08:40:36', NULL, NULL),
(123, 'If you want to reduce response time.What action should be taken?', 'Make cache', 'Remove cache', 'Do nothing', 'Create a cache file', '1', 'Laravel', '3', '2022-10-27 08:40:48', NULL, NULL),
(124, 'What is binding to singletons pattern?', '$this->app-singleton()', '$this>app>singleton()', '$this->app->singleton()', '$this->app->singleton', '3', 'Laravel', '11', '2022-10-27 08:40:49', NULL, NULL),
(125, 'How many types of Middleware in Laravel?', '2 ', '3', '4', '5', '1', 'Laravel', '10', '2022-10-27 08:41:13', NULL, NULL),
(126, 'str_plural($value, $count = n)can do?', 'converts a array to plural forma', 'converts array to object', 'Converts string to Boolean', 'Converts a string to its plural forma', '4', 'Laravel', '17', '2022-10-27 08:41:14', NULL, NULL),
(127, 'Which method we use to Allows NULL values to be inserted into column?', 'null()', 'nullable()', 'nullvalue()', 'default()', '2', 'Laravel', '5', '2022-10-27 08:41:28', NULL, NULL),
(128, '7)	Use @show when you’re defining the place for a section, in the parent template. Use @endsection when you’re defining the content for a template in a child template.', 'a) true', ' b) false', '', '', '1', 'Laravel', '4', '2022-10-27 08:41:38', NULL, NULL),
(129, 'The most common place to use method injection is in ….?', 'controller methods', 'Model methods', 'All', 'None', '1', 'Laravel', '11', '2022-10-27 08:41:39', NULL, NULL),
(130, 'Which command we can run your migrations and your seeds? ', 'php artisan migrate –seed', 'php artisan migrate –m', 'php artisan migrate –c', 'php artisan migrate --mc', '1', 'Laravel', '5', '2022-10-27 08:42:13', NULL, NULL),
(131, 'How to create route cache?', 'Php artisan route:cache', 'Php artisan make:cache –route', 'Php artisan make:route –cache', 'None of above', '1', 'Laravel', '3', '2022-10-27 08:42:13', NULL, NULL),
(132, 'Laravel’s facades are not classes that provide simple access to core pieces of Laravel’s functionality.', 'True', 'False', '', '', '2', 'Laravel', '11', '2022-10-27 08:42:15', NULL, NULL),
(133, 'Which command is used to create Middleware?', ' php make:middleware <middleware-name>', 'php artisan middleware <middleware-name>', 'php middleware <middleware-name>', 'php artisan make:middleware <middleware-name>', '4', 'Laravel', '12', '2022-10-27 08:42:17', NULL, NULL),
(134, 'Which is true?', 'move(‘file.jpg’, ‘newfile.jpg’)', 'putfile(‘my.log’, ‘log text’)', 'append(‘mypath’)', 'A & C', '1', 'Laravel', '14', '2022-10-27 08:42:20', NULL, NULL),
(135, 'To call CSS and JS file we use @stack', 'a) true', ' b) false', '', '', '1', 'Laravel', '4', '2022-10-27 08:42:32', NULL, NULL),
(136, 'How can we remove routing cache ', 'Php artisan clear:cache –route', 'Php artisan clear:route –cache', 'Php artisan route:clear', 'None of above', '3', 'Laravel', '3', '2022-10-27 08:42:41', NULL, NULL),
(137, '4)	which function Instance of the Laravel authenticator returns …?', 'authentic()', 'authentication()', 'auth()', 'none', '4', 'Laravel', '17', '2022-10-27 08:42:46', NULL, NULL),
(138, 'Rolls back every database migration you’ve run on this instance command is___', 'migrate:refresh', 'migrate:reset', 'migrate:clear', 'a+b', '4', 'Laravel', '5', '2022-10-27 08:42:58', NULL, NULL),
(139, 'Which one is not routing method?', 'Route::patch()', 'Route::any()', 'Route::match()', 'Route::make()', '4', 'Laravel', '3', '2022-10-27 08:43:08', NULL, NULL),
(140, 'To add content at the beginning of my.log.', 'append', 'put', 'prepend', 'A & C', '3', 'Laravel', '14', '2022-10-27 08:43:09', NULL, NULL),
(141, 'How can we protect user data on cross-site requests?', 'Use form_open()', 'Use csrf token', 'Use csrm token', 'Use csfr token', '2', 'Laravel', '3', '2022-10-27 08:43:34', NULL, NULL),
(142, 'Drops all of your tables and runs every migration again command is___', 'migrate:fresh', 'migrate:reset', 'migrate:clear', 'all', '1', 'Laravel', '5', '2022-10-27 08:43:55', NULL, NULL),
(143, ' The _______________ will run on every HTTP request of the application', 'Global Middleware ', 'Route Middleware', ' Both A and B', ' None of the above', '1', 'Laravel', '10', '2022-10-27 08:44:04', NULL, NULL),
(144, 'Where can we use the @csrf token?', 'In Model file', 'In blade template', 'In controller', 'None of above', '2', 'Laravel', '3', '2022-10-27 08:44:09', NULL, NULL),
(145, 'Which provides laravel  primary tool command-line interaction?', 'Artisan', 'Tinker', 'installer', 'All ', '4', 'Laravel', '8', '2022-10-27 08:44:21', NULL, NULL),
(146, 'Laravel will check the X-XSRF-TOKEN on every request, and valid tokens passed there will mark the CSRF protection as satisfied.', 'True', 'False', '---', '---', '1', 'Laravel', '3', '2022-10-27 08:44:35', NULL, NULL),
(147, 'Laravel offers another pattern for including content between views, which was introduced in 5.4.', ' components ', 'slots', 'components and slots', 'All', '3', 'Laravel', '4', '2022-10-27 08:44:43', NULL, NULL),
(148, 'How to pass json-encoded HTTP response?', 'res.JSON()', 'response()->json()', 'json-encoder($request)', 'None of above', '2', 'Laravel', '3', '2022-10-27 08:45:02', NULL, NULL),
(149, 'which function return the dot notated configuration?', 'config($key)', 'csrf_field()', 'event($event)', 'dispatch($job)', '1', 'Laravel', '17', '2022-10-27 08:45:16', NULL, NULL),
(150, 'Rolls back just the migrations that ran the last time you ran migrate command is___', 'migrate:fresh', 'migrate: reset', 'migrate:rollback', 'all', '3', 'Laravel', '5', '2022-10-27 08:45:24', NULL, NULL),
(151, 'How to pass HTTP requests manually into the first parameter?', 'response->make()', 'response->jsonp()', 'response->download()', 'None of above', '1', 'Laravel', '3', '2022-10-27 08:45:31', NULL, NULL),
(152, 'a view composer allows you to define that any time a particular view loads', 'true', ' false', '', '', '1', 'Laravel', '4', '2022-10-27 08:45:38', NULL, NULL),
(153, 'To create a new directory ___.', 'createDirectory', 'makeDirectory', 'addDirectory', 'A & C', '2', 'Laravel', '14', '2022-10-27 08:45:45', NULL, NULL),
(154, 'The cookie can be attached to the response using the ?', ' isCookie() method ', 'withCookie() method', 'getCookie() method', 'putCookie() method', '2', 'Laravel', '10', '2022-10-27 08:46:00', NULL, NULL),
(155, 'How remove laravel compiler class file?', 'fresh –compiler', 'refresh –compiler', 'remove –compiler', 'clear –compiler', '4', 'Laravel', '8', '2022-10-27 08:46:05', NULL, NULL),
(156, 'Laravel’s database architecture can connect to___ Server.', 'MySQL, SQL', 'Postgres', 'SQLite', 'all above', '4', 'Laravel', '5', '2022-10-27 08:46:27', NULL, NULL),
(157, 'What do you want to add an additional Flysystem provider needs ___.', 'addFlysystem ', 'createFlysystem ', 'extend', 'All of the above', '3', 'Laravel', '14', '2022-10-27 08:46:30', NULL, NULL),
(158, 'Query builder queries and for Eloquent queries. Start with___.', 'DB::beginTransaction()', 'end with DB::commit()', 'abort with DB::rollBack()', 'All above', '4', 'Laravel', '5', '2022-10-27 08:47:16', NULL, NULL),
(159, '6)	If you want just a single item from your collection, which function you will use ?', 'first()', 'last()', 'each()', 'all', '1', 'Laravel', '17', '2022-10-27 08:47:24', NULL, NULL),
(160, 'Which is used to grab our contents from the uploaded file?', 'put()', 'push()', 'past()', 'None of the above', '1', 'Laravel', '14', '2022-10-27 08:47:25', NULL, NULL),
(161, 'which command run all database migration?', 'migrate', 'serve', 'tinker', 'all  of the above', '1', 'Laravel', '8', '2022-10-27 08:48:28', NULL, NULL),
(162, 'Valet is a local development server for which operationg system? ', 'only window', 'only linux', 'only mac', 'none', '3', 'Laravel', '17', '2022-10-27 08:48:55', NULL, NULL),
(163, '15.	If you’ve ever needed to process a large amount (thousands or more) of records at a time.', 'chunk()', 'trunk()', 'a+b', 'None', '1', 'Laravel', '5', '2022-10-27 08:49:00', NULL, NULL),
(164, '____ is we use in web applications to store state between page requests.', 'localhost', 'database', 'session', 'None of the above', '3', 'Laravel', '14', '2022-10-27 08:49:37', NULL, NULL),
(165, 'What is Mix? ', 'Mix is a Webpack-based frontend build system', 'Mix is a frontend testing framework', 'Mix is a queue monitoring package', 'none', '1', 'Laravel', '17', '2022-10-27 08:50:09', NULL, NULL),
(166, 'which command serve localhost port?', 'php artisan serve', 'php artisan serve:all', 'php artisan seve localhost', 'both a & b', '1', 'Laravel', '8', '2022-10-27 08:51:41', NULL, NULL),
(167, 'How many session instances most common methods?', 'three', 'two', 'one', 'five', '2', 'Laravel', '14', '2022-10-27 08:51:58', NULL, NULL),
(168, '. ________________ can be defined as a class of elements in which each element has a unique name to that associated class.', 'Routing', 'Cookie', 'Namespaces', 'Request', '3', 'Laravel', '12', '2022-10-27 08:53:42', NULL, NULL),
(169, 'Creating a Migration Along with Your Model we can use____', 'php artisan make:model modelName -m', 'php artisan make:model modelName –migration', 'a+b', 'None', '3', 'Laravel', '5', '2022-10-27 08:54:01', NULL, NULL),
(170, 'what is correct way make custom command?', 'php artisan command WelcomecomeNewUsers –command=email:newusers', 'php artisan make:command WelcomecomeNewUsers –command=email:newusers', 'php artisan command:make WelcomecomeNewUsers –command=email:newusers', 'php artisan make WelcomecomeNewUsers –command=email:newusers', '2', 'Laravel', '8', '2022-10-27 08:54:04', NULL, NULL),
(171, 'Which is following the most common methods in session instances?', 'put()', 'post()', 'get()', 'A & C', '4', 'Laravel', '14', '2022-10-27 08:54:08', NULL, NULL),
(172, 'What is Envoy? ', 'Envoy is a Webpack-based frontend build system', 'Envoy is a paid package for generating a SaaS that accepts payments', 'Envoy is a local task runner that makes it easy to define common tasks', 'none', '3', 'Laravel', '17', '2022-10-27 08:54:17', NULL, NULL),
(173, 'Soft deletes mark database rows as deleted without actually deleting them from the database is__', 'softdelete()', 'soft()', 'delete()', 'someDelete()', '1', 'Laravel', '5', '2022-10-27 08:54:39', NULL, NULL),
(174, 'which argument optional?', 'password:reset {userId}', 'password:reset {userId?}', 'password:reset {userId?=1}', 'both b & c', '4', 'Laravel', '8', '2022-10-27 08:55:56', NULL, NULL),
(175, 'base_path($path = \'\')return what? ', 'Returns the path for configuration files in your app', 'Returns the path for the root directory of your app', 'Returns the path for database files in your app', 'Returns the path for the storage directory in your app', '2', 'Laravel', '18', '2022-10-27 08:56:45', NULL, NULL),
(176, 'Webpack is a ______designed for compiling static assets.', 'JavaScript tool', 'Php tool', 'Bootstrap tool', 'None', '1', 'Laravel', '6', '2022-10-27 08:57:05', NULL, NULL),
(177, 'when return all arguments array?', '$this->argument()', '$this->arrayargument()', '$this->argumentarray()', '$this->arguments()', '4', 'Laravel', '8', '2022-10-27 08:57:25', NULL, NULL),
(178, 'Prior to Laravel 5.4, Laravel’s frontend build tool was named ?', 'Webpack', 'mix', 'Elixer', 'all', '3', 'Laravel', '6', '2022-10-27 08:58:01', NULL, NULL),
(179, '………prompts the user to choose one of the provided options.', 'choice()', 'ask()', 'one()', 'none', '1', 'Laravel', '8', '2022-10-27 08:58:23', NULL, NULL),
(180, 'Systems require for setting up a Laravel-', 'composer ', 'XAMPP ', 'mysql ', 'all of the above ', '4', 'Laravel', '2', '2022-10-27 08:58:35', NULL, NULL),
(181, 'In 5.4 and later, the new build tool is named ?', 'Mix', 'Elixer', 'Gulp', 'None', '1', 'Laravel', '6', '2022-10-27 08:58:35', NULL, NULL),
(182, 'Mix can preprocess your CSS using, , and/or.  ', 'Sass', 'Less', 'PostCSS', 'all', '4', 'Laravel', '6', '2022-10-27 08:59:15', NULL, NULL),
(183, 'Composer is a __ ', 'dependency manager ', 'application manager ', 'system controller ', 'none ', '1', 'Laravel', '2', '2022-10-27 08:59:57', NULL, NULL),
(184, 'The table() method makes it simple to create ASCII table full of you data.', 'true', 'false', '', '', '1', 'Laravel', '8', '2022-10-27 09:00:08', NULL, NULL),
(185, 'If you need to display next and previous links in your pagination view, you may use …', 'users = DB :: table ( ‘users’) -> simplepaginate(15);', '$users = DB  table ( ‘users’) -> simplepaginate(15);', '$users = DB :: table ( ‘users’) -> simplepaginate(15);', '$users = DB :: table ( ‘users’)   simplepaginate(15);', '3', 'Laravel', '6', '2022-10-27 09:01:06', NULL, NULL),
(186, 'Laravel offers _ tools for local development. ', 'one', 'two ', 'three', 'four', '2', 'Laravel', '2', '2022-10-27 09:01:10', NULL, NULL),
(187, 'which correct progress bar?', 'progressAdvance()', 'progressFinish()', ' Both', '', '3', 'Laravel', '8', '2022-10-27 09:01:16', NULL, NULL),
(188, 'you can create manually pagiantion  by using……. Classes.', 'Illuminate\\Pagination \\Paginator;', 'Illuminate\\Pagination\\LengthAwarePaginator;', 'A and B', 'None', '3', 'Laravel', '6', '2022-10-27 09:01:50', NULL, NULL),
(189, 'How include login and logout processes?', 'Authentication ', 'Authorization', 'both', '', '1', 'Laravel', '9', '2022-10-27 09:02:55', NULL, NULL),
(190, 'What gives you an array containing all of the input the user has provided? ', '$request all()', '$request->all', '$request->()', '$request->all()', '4', 'Laravel', '6', '2022-10-27 09:02:55', NULL, NULL),
(191, 'Valet is a___ tool for laravel. ', 'composer ', 'local development ', 'global development', 'none', '2', 'Laravel', '2', '2022-10-27 09:03:05', NULL, NULL),
(192, 'What allows you to get the value of just a single field?', '$request->input() ', '$request->except()', '$request->only()', '$request->all()', '1', 'Laravel', '6', '2022-10-27 09:03:56', NULL, NULL),
(193, 'when not login auth method call?', 'auth()', 'auth->id()', 'auth->check()', 'auth->guest()', '4', 'Laravel', '9', '2022-10-27 09:04:34', NULL, NULL),
(194, '. ________________ can be defined as a class of elements in which each element has a unique name to that associated class.', 'Routing', 'Cookie', 'Namespaces', 'Request', '3', 'Laravel', '12', '2022-10-27 09:04:39', NULL, NULL),
(195, 'Where you will find all folders served in Valet? ', '{all resource }', '{view} ', '{source } ', '{foldername}', '4', 'Laravel', '2', '2022-10-27 09:04:40', NULL, NULL),
(196, 'Which one of the Basic usage of request validation?', 'Route::get(\'recipes/create\', \'RecipesController@create\');', 'Route::post(\'recipes\', \'RecipesController@store\');', 'A and B', 'None', '3', 'Laravel', '6', '2022-10-27 09:04:43', NULL, NULL),
(197, 'If you’re using any of the cloud-based API drivers, you’ll need to----?', 'bring Guzzle in with Composer.', 'bring Guzzle in with Migration', 'bring composer require guzzle', 'composer require aws/aws-sdk', '1', 'Laravel', '15', '2022-10-27 09:04:47', NULL, NULL),
(198, 'You can create a new form request from the command line', 'php artisan make:request CreateComment', 'php artisan make:request CommentRequest', 'php artisan make request CreateCommentRequest', 'php artisan make:request CreateCommentRequest', '4', 'Laravel', '6', '2022-10-27 09:05:28', NULL, NULL),
(199, 'which method accepts the POST from the login form?', 'login()', 'auth()', 'user()', 'auth->login()', '1', 'Laravel', '9', '2022-10-27 09:05:48', NULL, NULL),
(200, 'If you use the SES driver, you’ll need to run the following    command:', 'composer show -s', 'composer show \'guzzlehttp/', 'composer require aws/aws-sdk-php:~3.0', 'None of theme', '3', 'Laravel', '15', '2022-10-27 09:06:14', NULL, NULL),
(201, 'How to create a new Laravel project? ', 'create laravel project -m ', 'composer create my project -r ', 'composer create-project laravel/laravel projectName ', 'none', '3', 'Laravel', '2', '2022-10-27 09:06:19', NULL, NULL),
(202, 'There are two ways to send a notification??', 'True', 'false', '', '', '1', 'Laravel', '15', '2022-10-27 09:06:56', NULL, NULL),
(203, 'Alias name for registering new middleware is used in  ---- list.', '$middleware ', '$middlewareGroups', '$routemiddleware ', '$middlewarePriority ', '3', 'Laravel', '12', '2022-10-27 09:07:02', NULL, NULL),
(204, 'Basically Auth::routes() includes the route for……', 'authentication', 'registration', 'password resets', 'all of the above.', '4', 'Laravel', '9', '2022-10-27 09:07:18', NULL, NULL),
(205, 'Most of the notification drivers need to send requests to send their notifications?', 'URL()', 'HTTP', 'WEB(/)', 'None', '2', 'Laravel', '15', '2022-10-27 09:08:06', NULL, NULL),
(206, 'whom correct method logout?', 'auth()->logout();', 'logout->auth();', 'auth->logout()', 'auth()->logout;', '1', 'Laravel', '9', '2022-10-27 09:08:19', NULL, NULL),
(207, 'If you want to modify the templates, publish them and edit to your heart’s content: whice command you should given?', 'php artisan vendor:publish --tag=laravel-notifications', 'php artisan make:command SendEmails', 'php artisan migrate --env=local', '(a+b) both', '1', 'Laravel', '15', '2022-10-27 09:09:36', NULL, NULL),
(208, 'How pices of guard combination?', '2', '3', '4', '5', '1', 'Laravel', '9', '2022-10-27 09:10:24', NULL, NULL),
(209, 'MailThief then makes it possible to make assertions against the senders, recipients,   CC and BCC values, and even content and attachments of your mail?', 'False', 'True', '', '', '2', 'Laravel', '15', '2022-10-27 09:11:19', NULL, NULL),
(210, 'How pices of guard combination?', '2', '3', '4', '5', '1', 'Laravel', '9', '2022-10-27 09:11:50', NULL, NULL),
(211, 'defined guards which file?', 'config/auth.php', 'config/log.php', 'app/Http/auth.php', 'vendor/auth.php', '1', 'Laravel', '8', '2022-10-27 09:12:56', NULL, NULL),
(212, 'What you will see first opening Laravel\'s directory structure? ', 'public/ ', 'storage/', 'app/ ', 'vendor/', '3', 'Laravel', '2', '2022-10-27 09:13:19', NULL, NULL),
(213, 'which methods for authorization?', 'authorize()', 'authorizeForUser()', 'authorizeResource()', 'all of the avobe.', '4', 'Laravel', '9', '2022-10-27 09:13:56', NULL, NULL),
(214, 'Atrisan allows you to run Artisan commands from the command line. ', 'True ', 'False ', '', '', '1', 'Laravel', '2', '2022-10-27 09:14:36', NULL, NULL),
(215, 'Method to determine if the user is authenticated?', 'Auth ::check ()', '	Auth::user ()', 'Auth :: authenticated ()', 'None of the these ', '1', 'Laravel', '12', '2022-10-27 09:15:42', NULL, NULL),
(216, 'Which Function you can use in your tests to make MailThief capture any calls to the Mail   facade or any mailer classes.', 'mailthife::hijack()', 'MailThief::hijack()', 'composer::require mailthief()', 'None', '2', 'Laravel', '15', '2022-10-27 09:16:00', NULL, NULL),
(217, 'Storage is where____ ', 'database migration, seeds and factories live ', 'where unit and integration tests live ', 'where caches, logs and compiled system files live ', 'where all the configuration files live ', '3', 'Laravel', '2', '2022-10-27 09:16:44', NULL, NULL),
(218, 'PHP can be run without composer. ', 'True', 'False ', '', '', '1', 'Laravel', '2', '2022-10-27 09:18:23', NULL, NULL),
(219, 'How many options for testing mail in Laravel?', 'Three Option', 'Four Options', 'Two Options', 'One Option', '3', 'Laravel', '15', '2022-10-27 09:24:15', NULL, NULL),
(220, 'Frameworks provide Conventions to -', 'reduce the amount of code ', 'consistency', 'flexibility', 'All', '4', 'Laravel', '1', '2022-10-27 09:25:17', NULL, NULL),
(221, 'Laravel focuses on _', 'Convention over configuration ', 'simplicity ', 'a & b', 'none ', '3', 'Laravel', '1', '2022-10-27 09:26:31', NULL, NULL),
(222, 'Laravel is a _ framework.', 'Javascript ', 'php', 'mogodb', 'none ', '2', 'Laravel', '1', '2022-10-27 09:27:43', NULL, NULL),
(223, 'The get() method pulls the value of the provided key out of the session.', 'True', 'False', '', '', '1', 'Laravel', '14', '2022-10-27 09:28:54', NULL, NULL),
(224, 'Two most strongly communicated values if the framework are to increase developer speech and developer happiness. ', 'True ', 'False ', '', '', '1', 'Laravel', '1', '2022-10-27 09:29:06', NULL, NULL),
(225, 'Which is the following check value set at the provided key?', 'put()', 'push()', 'hash()', 'A & B', '3', 'Laravel', '14', '2022-10-27 09:29:40', NULL, NULL),
(226, 'Which artisan command is used to remove the compiled class file.', 'clear-compiled', 'clear compiled', 'compiled:clear', 'clear:all', '1', 'Laravel', '1', '2022-10-27 09:30:21', NULL, NULL),
(227, 'What is different between forget() and flush()? Choose multiple', 'forget() removes a previously set session value.', 'flush() removes every session value.', 'flush() set by the framework.', 'forget() removes every session value.', '1,2,3', 'Laravel', '14', '2022-10-27 09:30:36', NULL, NULL),
(228, 'For what do the .env is used?', 'For setting environment variables', 'For running cron jobs', 'For tracking vendors', 'None of These', '1', 'Laravel', '1', '2022-10-27 09:31:19', NULL, NULL),
(229, 'If you need the previous page’s session data to stick around for one more request, what do you choose?', 'flash()', 'reflash()', 'foreach()', 'None of the above', '2', 'Laravel', '14', '2022-10-27 09:31:23', NULL, NULL),
(230, 'Who developed Laravel?', 'Rasmus Lerdorf', 'Taylor Otwell', 'James Gosling', 'Guido van Rossum', '2', 'Laravel', '1', '2022-10-27 09:32:08', NULL, NULL),
(231, 'Can laravel application support caching?', 'Yes', 'No', 'Can\'t Say', 'None of these', '1', 'Laravel', '1', '2022-10-27 09:32:59', NULL, NULL),
(232, 'What is laravel?', 'Framework', 'Programming Language', 'Code Editor', 'None of these', '1', 'Laravel', '1', '2022-10-27 09:34:04', NULL, NULL),
(233, 'Command to check the current version of the Laravel Framwork?', 'php artisan main --version', 'php artisan --version status', 'php artisan check –version', 'php artisan --version', '1', 'Laravel', '1', '2022-10-27 09:34:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `obtain_marks` varchar(255) NOT NULL,
  `total_marks` varchar(255) NOT NULL,
  `starttime` int(11) DEFAULT NULL,
  `finishtime` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `result_details`
--

CREATE TABLE `result_details` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `result_id` int(11) NOT NULL,
  `question_no` varchar(255) NOT NULL,
  `stu_ans` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_auth`
--

CREATE TABLE `tbl_auth` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_auth`
--

INSERT INTO `tbl_auth` (`id`, `name`, `photo`, `email_address`, `username`, `contact_no`, `password`, `status`, `role_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Nasim Ahmed', '16650439156843.jpg', 'nasim.cgovt333@gmail.com', 'nasim', '01857933015', '10470c3b4b1fed12c3baac014be15fac67c6e815', 1, 1, '2022-09-28 06:31:00', '2022-10-06 10:14:24', NULL),
(3, 'Mahadi Rahman', '16650671874165.jpg', 'mahadi@gmail.com', 'mahadi', '01347583942', '10470c3b4b1fed12c3baac014be15fac67c6e815', 1, 2, '2022-09-28 09:13:33', '2022-10-06 16:39:47', NULL),
(4, 'Rabib Hasan', '16654064329391.jpg', 'rabib@gmail.com', 'rabib', '01757933015', '10470c3b4b1fed12c3baac014be15fac67c6e815', 1, 2, '2022-10-06 16:15:03', '2022-10-10 14:53:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `role_name`, `role`) VALUES
(1, 'Super Admin', 'superadmin'),
(2, 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `photo`, `contact`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nasim Ahmed', '16654055407855.jpg', '01857933015', 'nasim@gmail.com', '10470c3b4b1fed12c3baac014be15fac67c6e815', '2022-09-28 08:20:51', '2022-10-10 14:42:04', '2022-09-28 08:20:51'),
(2, 'Rabib Hasan', '16650810421569.jpg', '01857933017', 'rabib@gmail.com', '10470c3b4b1fed12c3baac014be15fac67c6e815', '2022-09-28 08:20:51', '2022-10-06 20:31:21', '2022-09-28 08:20:51'),
(4, 'Ashab Uddin', '', '01840088189', 'ashab@gmail.com', '1db0df264bfa11c5323be88d30182ed841e4f5d2', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_details`
--
ALTER TABLE `result_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_auth`
--
ALTER TABLE `tbl_auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `result_details`
--
ALTER TABLE `result_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `tbl_auth`
--
ALTER TABLE `tbl_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
