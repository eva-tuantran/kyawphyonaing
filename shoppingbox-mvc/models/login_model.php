<?php
class Login_Model extends Model{
	public function __construct(){
		parent::__construct();
		//echo md5(jesse);
	}
	public function run(){
		$sth = $this->db->prepare("SELECT id, role FROM users WHERE
				login = :login AND password = MD5(:password)");
		$sth->execute(array(
			':login' => $_POST['login'],
			':password' => $_POST['password']
		));
		
		$data = $sth->fetch();
		
		//echo $data["role"];die;
		$count = $sth->rowCount();
		if($count > 0){
			//login
	
			Session::init();
			Session::set('role', $data['role']);
			Session::set('loggedIn', true);
			header('location: ../index');
		}else{
			//show an error!
			header('location: ../login');
		}
	}
	public function signup($data)
	{
		$sth = $this->db->prepare('INSERT INTO users
			(`login`, `password`, `email`)
			VALUES (:login, :password, :email)
			');
	
		$sth->execute(array(
				':login' => $data['login'],
				':password' => $data['password'],
				':email' => $data['email']
		));
	}
}