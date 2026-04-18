<?php
require_once __DIR__ . '/vendor/autoload.php';

use Slim\Factory\AppFactory;
use App\Middleware\CorsMiddleware;

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Create app
$app = AppFactory::create();

// Add middleware
$app->add(new CorsMiddleware());

// Add error handling middleware
$app->addBodyParsingMiddleware();

// Routes
require_once __DIR__ . '/routes/api.php';

return $app;