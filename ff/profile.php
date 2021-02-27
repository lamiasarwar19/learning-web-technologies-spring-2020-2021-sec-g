<?php
     
     session_start();
     if(isset($_SESSION['flag']))
     {
     	$user = $_SESSION['current_user'];
     }
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
</head>
<body>
	<table border="1" width="80%" align="center">
		<tr>
			<td colspan="3" width="50%" height="50%" align="left">
				<img src="logo.png" width="100px" height="50" align="left"></td>

				<td align="right">Logged in as <?php echo "$username";?>|
				<a href="logout.php">Logout</a>
								
               </td>
		    </tr>
		</table>    
        <table border="1" width="80%" align="center">
            <tr align="left" height="300px">
            	<td width="200px">
            	<p>
            	Account <br>
            	<ul>
            	<li><a href="dashboard.php">Dashboard</a></li>
            	<li><a href="profile.php">View Profile</a></li>
            	<li><a href="eprofile.php">Edit Profile</a></li>
            	<li><a href="changepp.php">Change Profile Picture</a></li>
            	<li><a href="changepass.php">Change Password</a></li>
            	<li><a href="logout.php">Logout</a></li></ul></p>
            </td></tr></table>
            <table>
            <td align="center">
            	<fieldset>
            		<legend>Profile</legend>
            		<table>
            			<tr>
            				<td>Name</td>
            				<td>:<?php echo $user['username'];?></td>
            				<td rowspan="3">
            					<img src="user.png" width="100" height="100"></td>
            				<tr>
            				<td>Email</td>
            				<td>:<?php echo $user['email'];?></td></tr>
            				<tr>
            					<td>Gender</td>
            					<td>:<?php echo $user['gender'];?></td></tr>
            				<tr>
            					<td>Date of Birth</td>
            					<td>:<?php echo $user['dob'];?></td>
            					<td><a href="user.png">Change</a></td>
            					</tr>
            				<tr>
            				<td><a href="eprofile.html">Edit Profile</a></td></tr>	
 
            		</table>
            	</fieldset>
            </table>	
            <table>
            <tr align="center">
            <td colspan="3" height="50px">Copyright 2017
            </td>
            </tr>   	

	</table>
</body>
</html>
<?php 
     }
     else
     {
     	header('location:home.html');
     }
?>     