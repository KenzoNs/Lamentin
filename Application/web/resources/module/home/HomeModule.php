<?php
include_once ("./resources/module/home/HomeController.php");
include_once ("./resources/include/Module.php");
include_once ("./resources/include/Utils.php");
include_once ("./resources/include/ModuleManager.php");

class HomeModule extends Module {

    public function __construct() {

        $actions = array (
            "home", "chooseAction"
        );

        parent::__construct("user", new HomeController, $actions);
        $action = Utils::get('action', 'home');
        parent::initPage($action);
    }
}