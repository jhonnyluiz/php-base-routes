<?php
namespace app\controllers;


class HomeController {

    public function index($params) {
        echo $params->name;
        Controller::view('home');
    }
}