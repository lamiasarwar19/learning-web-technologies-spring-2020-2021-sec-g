<?php
     
     session_start();
     if(isset($_POST['submit']))
     {
     	$name = $_POST['name'];
     	$email = $_POST['email'];
     	$username = $_POST['username'];
     	$password = $_POST['name'];
     	$repass = $_POST['repass'];
     	//$gender = $_POST['gender'];
     	//$dob = $_POST['dob'];

     	if($name == "" || $email == "" || $username == "" ||$password == "")
     	{
     		echo "null submission..";
     	}else{
     		if($password == $repass)
     		{
                $user=['name'=> $name, 'username'=>$username,'email'=>$email,'password'=>$password];
     			$_SESSION['current_user']= $user;
     			header('location:login.html');
     			
     		}
     		else
     		{
     			echo "password mismatched!!";
     		}
     	}
     }
     


?>     



