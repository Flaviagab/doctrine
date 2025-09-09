<?php

namespace App\Controller;

class NotFoundController implements Controller
{
    public function __construct()
    {}

    public function render(): void
    {
        echo "Página não encontrada";
    }
}