<?php
use App\Models\User;
use App\Tools\Blade;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Pagination\Paginator;

require __DIR__ . '/vendor/autoload.php';

// SETUP ENVIRONMENT VARIABLES
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// SETUP ELOQUENT ORM
$db_driver = getenv('DB_DRIVER');
$db_host = getenv('DB_HOST');
$db_database = getenv('DB_DATABASE');
$db_username = getenv('DB_USERNAME');
$db_password = getenv('DB_PASSWORD');

$capsule = new Manager;
$capsule->addConnection([
    'driver'    => $db_driver,
    'host'      => $db_host,
    'database'  => $db_database,
    'username'  => $db_username,
    'password'  => $db_password,
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Set the event dispatcher used by Eloquent models... (optional)
$capsule->setEventDispatcher(new Dispatcher(new Container));

// Set the cache manager instance used by connections... (optional)
//$capsule->setCacheManager(...);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

// SETUP BLADE VIEW ENGINE
$blade = new Blade(
    [__DIR__ . '/App/Views'],
    __DIR__ . '/Cache'
);

