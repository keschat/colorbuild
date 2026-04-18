<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\PageController;
use App\Controllers\ComponentController;

// Pages routes
$app->get('/api/pages', [PageController::class, 'getAll']);
$app->get('/api/pages/{id}', [PageController::class, 'getById']);
$app->post('/api/pages', [PageController::class, 'create']);
$app->put('/api/pages/{id}', [PageController::class, 'update']);
$app->delete('/api/pages/{id}', [PageController::class, 'delete']);

// Components routes
$app->get('/api/pages/{pageId}/components', [ComponentController::class, 'getByPage']);
$app->post('/api/components', [ComponentController::class, 'create']);
$app->put('/api/components/{id}', [ComponentController::class, 'update']);
$app->delete('/api/components/{id}', [ComponentController::class, 'delete']);

// Export routes
$app->get('/api/pages/{id}/export', [PageController::class, 'export']);