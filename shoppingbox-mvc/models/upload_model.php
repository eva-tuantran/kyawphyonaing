<?php

class Upload_Model extends Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function imgInsert($data) 
	{
		$sth = $this->db->prepare('INSERT INTO categories 
				(cat_name, cat_type, cat_prize, cat_description, cat_image) 
				VALUES (:cat_name, :cat_type, :cat_prize, :cat_description, :image)
				');
		$sth->execute(array(
				':cat_name' => $data['cat_name'],
				':cat_type' => $data['cat_type'],
				':cat_prize' => $data['cat_prize'],
				':cat_description' => $data['cat_description'],
				':image' => $data['image']
		));
	}
}