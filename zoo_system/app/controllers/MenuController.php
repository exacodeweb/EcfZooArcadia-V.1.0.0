<?php
class MenuController {
    protected $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function displayMenu() {
        $user = $this->userModel->getLoggedUser();
        require_once __DIR__ . '/../views/menu.php';
    }
}
?>