<?php
//todo: убрать в dev
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

use App\Controllers\SiteController;
use DI\Container;
use Slim\Factory\AppFactory;
use Source\Dump\InitCustomDumper;

require __DIR__ . '/../vendor/autoload.php';

//todo: Убрать в другое место.
new InitCustomDumper();

$container = new Container();

$app = AppFactory::createFromContainer($container);

//todo: убрать в dev
$app->addErrorMiddleware(true, true, true);

$app->get('/', SiteController::class . ':homepage');

$app->run();
