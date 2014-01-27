<?php

class posts extends Controller{

	function index(){
		$this->posts = get_all("SELECT * FROM post");
	}

    function index_ajax(){
		echo "\$_POST:<br>";
        var_dump($_POST);
    }

	function index_post(){
		echo "\$_POST:<br>";
		var_dump($_POST);
	}
}