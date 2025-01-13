<?php

namespace Core;

class App
{
    protected $controller = 'HomeController'; // Contrôleur par défaut
    protected $method = 'index';              // Méthode par défaut
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // Rechercher et charger le contrôleur
        if (file_exists('../app/controllers/' . ucfirst($url[0]) . 'Controller.php')) {
            $this->controller = ucfirst($url[0]) . 'Controller';
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Rechercher et charger la méthode
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        // Récupérer les paramètres restants
        $this->params = $url ? array_values($url) : [];

        // Appeler la méthode avec les paramètres
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    // Méthode pour analyser l'URL
    public function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }

    public function run() {
        $this->__construct();
    }
}