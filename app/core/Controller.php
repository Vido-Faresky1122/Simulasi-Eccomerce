<?php

namespace App\Core;

class Controller
{
    protected function auth()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }
    }

    public function view(string $view, array $data = [])
    {
        extract($data);

        $view = str_replace(
            '.',
            '/',
            $view
        );

        $content = "../app/views/{$view}.php";
        require_once "../app/views/layouts/app.php";
    }
}

?>