<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
    public function render(string $view, array $data = []): void
    {
        extract($data);
        
        include_once "../views/_partials/header.php";
        include_once "../views/{$view}.php";
        include_once "../views/_partials/footer.php";
    }

    public function redirect(string $url) : void
    {
        header("location: {$url}");
    }
}
