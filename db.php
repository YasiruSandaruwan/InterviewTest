<?php
class db{
	var $con;
	
	function db(){
		$this->con = mysqli_connect("localhost","root","","omobio");
		return $this->con;
	}
}
?>