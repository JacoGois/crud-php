<?php

use App\Controller\{
    HomeController,
    ErrorController,
    RoomController
};

return [
    '/' => [HomeController::class, 'index'],
    '/rooms' => [RoomController::class, 'index'],
    '/rooms/create' => [RoomController::class, 'create'],
    '/rooms/edit' => [RoomController::class, 'edit'],
    '/rooms/delete' => [RoomController::class, 'delete'],
    '/erro-404' => [ErrorController::class, 'notFound'],
];