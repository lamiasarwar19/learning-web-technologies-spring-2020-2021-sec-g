<?php
      session_start();
     
     if(isset($_POST['submit']))
     {
     	$username =$_POST['username'];
     	$password =$_POST['password'];

     	if ($username == "" || $password == "") {
     		echo "null submission";
     		
     	}else{
     		$user =$_SESSION['current_user'];
     		if($user['username'] == $username && $user['password']== $password)
     		{
     			echo "Valid user..";
     		}
     		else
     		{
     			echo "invalid user";
     		}
     	

     	    }
     }
?>