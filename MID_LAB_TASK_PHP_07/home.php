<?php
     session_start();
     if (isset(
     	$_SESSION['flag'])) {
     
?>     
<!DOCTYPE html>
<html>
<head>
	<title>Public Home</title>
</head>
<body>
	<table border="1" width="80%" align="center">
		<tr align="center">
			<td colspan="3" width="50%" height="50%" align="right">
				<img src="logo.png" width="100px" height="50" align="left">
				<a href="home.php">Home |</a>
				<a href="login.html">Login |</a>
				<a href="reg.html">Registration</a>
				

				
           </td>
		</tr>
        <tr colspan="3" width="80px" height="200px">
             <td colspan="3" width="50%" height="50%" align="left">
             	<h1> Welcome to xCompany</h1>
             </td>
          </tr>
          <tr align="center">
            <td colspan="3" height="50px">Copyright 2017
            </td>
            </tr>   	

	</table>

</body>
</html>
<?php
	    }else{
		header('location: login.html');
	}
?>
