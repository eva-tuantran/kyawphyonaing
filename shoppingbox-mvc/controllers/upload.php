<?php

class Upload extends Controller {
	
	function __construct(){
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false){
			Session::destroy();
			header('location: ../upload');
			exit;
		}
		print_r($_SESSION);
	}
	function index(){
		$this->view->render('upload/index');
	}
	function imgInsert()
	{
		$TARGET_PATH ="public/images/";
		
		$cat_name = $_POST['cat_name'];
		$cat_type = $_POST['cat_type'];
		$cat_prize = $_POST['cat_prize'];
		$cat_description = $_POST['cat_description'];
		$image = $_FILES['image'];
	
		$TARGET_PATH .= $image['name'];
	
		if ( $cat_name == "" || $cat_description == "" || $image['name'] == "" )
		{
			$_SESSION['error'] = "All fields are required";
			header('location: ' . URL . 'upload');
			exit;
		}
		$valid_types = array("image/jpg", "image/jpeg", "image/png", "image/bmp", "image/gif");
		if(!in_array($image['type'], $valid_types)){
			$_SESSION['error'] = "You must upload a jpeg, gif, or bmp";
			header('location: ' . URL . 'upload');
			exit;
		}
		if (file_exists($TARGET_PATH))
		{
			$_SESSION['error'] = "A file with that name already exists";
			header('location: ' . URL . 'upload');
			exit;
		}
			
		$data['cat_name'] = $_POST['cat_name'];
		$data['cat_type'] = $_POST['cat_type'];
		$data['cat_prize'] = $_POST['cat_prize'];
		$data['cat_description'] = $_POST['cat_description'];
		$data['image'] = $image['name'];
		
		if (move_uploaded_file($image['tmp_name'], $TARGET_PATH))
		{
			$this->model->imgInsert($data);
			header('location: ' . URL . 'index');
			exit;
		}
		else
		{
			header('location: ' . URL . 'upload');
			exit;
		}			
	}
}