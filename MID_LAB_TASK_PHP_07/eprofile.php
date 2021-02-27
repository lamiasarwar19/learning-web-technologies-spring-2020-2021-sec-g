<?php
     
     session_start();
     if(isset($_SESSION['flag']))
     {
     	$username= $_SESSION['current_user']['username'];

     }else
     {
     	header('location:home.php');
     }
?>
<html>
<head>
	<title>Edit Profile</title>
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
            </td>
           </tr>
          </table> 
          <form>
         <fieldset>
         <legend>EDIT PROFILE</legend>
         <table align="center" height="200px">
          <tr>
            <td>Name</td>           
            <td>:<input type="text" name="name" value=""></td>
          </tr>

            <tr>
            <td>Email</td>
            <td>:<input type="email" name="email" value=""></td>
          </tr>

          <tr>
          <td>Gender</td>         
          <td>:<input type="radio" name="gender" value="">Male 
          <input type="radio" name="gender" value="">Female 
          <input type="radio" name="gender" value="">Other
         </td></tr>

          <tr><td>Date of Birth</td> 
          <td>:<input type="date" name="dob" value=""></td></tr>                  
          
          <tr><td><input type="submit" name="submit" value="Submit">
          </td></tr>
          </table>
         </fieldset>
       </form>  
            <table>
            <tr align="center">
            <td colspan="3" height="50px">Copyright@2017
            </td>
            </tr>   	

	</table>

</body>
</html>