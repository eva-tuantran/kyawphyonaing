<?php

class Login extends Controller {
	
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->view->render('login/index');
	}
	function run(){
		$this->model->run();
	}
	function signup(){
		$data = array();
		$data['login'] = $_POST['name'];
		$data['password'] = md5($_POST['password']);
		$data['email'] = $_POST['email'];
		
		// @TODO: Do your error checking!
		
		$this->model->signup($data);
		header('location: ' . URL . 'login');
	}
}