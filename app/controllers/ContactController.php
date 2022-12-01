<?php 
namespace app\controllers;

class ContactController {

    public function index($params) {
        Controller::view('contact');
    }

    public function store($params) {
        var_dump($params);
        Controller::view('contact');
    }
}