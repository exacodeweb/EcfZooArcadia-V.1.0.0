<?php

namespace Core;

class Controller
{
    // Charger une vue
    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }
}