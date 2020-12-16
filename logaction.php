<?php
include("db.php");

class Login extends db{
	
	function retreve($table,$mail,$pswrd){
		
	$log = mysqli_query($this->db(),"select * from $table where email='$mail' and password='$pswrd'");
	
		$b=false;
 
 while($row=mysqli_fetch_array($log)){
	 $b=true;
	 
	 $_SESSION["email"]=$email;
	 
 }
	 if($b){
		 
		 header("location:index.php");
 }
 else{
	 
	 echo '<script>alert("Logged Error !")</script>'; 
 }
	}
}

$obj = new Login;
$email = $_POST[''];
$password = $_POST[''];

$obj->retreve('omotable','$email','$password');

?>