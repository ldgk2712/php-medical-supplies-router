<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Support\Response;

class HomeController
{
    public function index(): void
    {
        Response::view('home', [
            'title' => 'Mini Medical Supplies Routing App',
            'message' => 'A PHP routing application for managing medical supplies.'
        ]);
    }

    public function goHome(): void
    {
        Response::redirect('/');
    }
}