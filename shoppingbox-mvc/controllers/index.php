<?php

class Index extends Controller {
	
	function __construct(){
		parent::__construct();
		require 'models/category_model.php';
		$this->model = new Category_Model();
	}
	function index(){
		//echo "INDEX INDEX INDEX";
		
		$this->view->test = $this->model->test();
		
		$this->view->getcategories = $this->model->getCategories();
		
		$this->view->userlist = $this->model->userList();
		
		$this->view->render('index/index');
		
	}
	public function delete($id)
	{
		$this->model->delete($id);
		header('location: ' . URL . 'index');
	}
	
	public function edit()
	{
	//	$this->view->user = $this->model->userSingleList($id);
	//	$this->model->edit($id);
//echo 'edit';
		//$this->view->render('index/edit');
		header('location: ' . URL . 'edit');
	}
	
	function detail(){
		echo 'detail';
		$this->view->render('index/index');
	}
}