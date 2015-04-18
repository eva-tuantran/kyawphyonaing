<?php
class Category_Model extends Model{
	public function __construct(){
		parent::__construct();
		//$category = 'This is category';
		//echo 'good';
	}
	public function test(){
		$category = 'This is category';
		return $category;
	}
	public function userList()
	{
		$sth = $this->db->prepare('SELECT id, login, role FROM users');
		$sth->execute();
		return $sth->fetchAll();
	}
	
	public function getCategories()
	{
		$sth = $this->db->prepare("SELECT * FROM categories ORDER BY cat_id DESC");
		$sth->execute();
		return $sth->fetchAll();
	}
	
	public function delete($id)
	{
		$sth = $this->db->prepare('DELETE FROM categories WHERE cat_id = :id');
		$sth->execute(array(
				':id' => $id
		));
	}
}
