<?php

declare(strict_types=1);

return [
    'GET|/' => \Ratinggames\App\Controllers\GameController::class,
    'GET|/editar-game' =>  Ratinggames\App\Controllers\FormController::class,
    'POST|/editar-game' =>  Ratinggames\App\Controllers\EditGameController::class,
    'GET|/adicionar-game' => Ratinggames\App\Controllers\FormController::class,
    'POST|/adicionar-game' => Ratinggames\App\Controllers\NewGameController::class,
];  