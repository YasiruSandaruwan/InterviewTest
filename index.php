<?php
session_start();


?>





<html>

<body>


	<h1>welcome:<?php if(isset($_SESSION["email"])){
		
		echo $_SESSION["email"];
		
		}else{
			echo "email";
			
			}?></h1>
	
	
	




</form>






</body>
