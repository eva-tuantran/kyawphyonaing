<?php

class View {
	function __construct() {
	//	echo 'this is a view';
	}
	public function render($name, $noInclude = FALSE){
		if($noInclude == true){
			require 'views/' . $name . '.php';
		}else{
			require 'views/header.php';
			require 'views/' . $name . '.php';
			require 'views/footer.php';
		}	
	}
}