<?php 
session_start();
if(isset($_SESSION['flag'])){
    $user = $_SESSION['current_user'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page2</title>
</head>
<body>
    <table border="1" width="100%" align="center"'>
        <tr>
            <td colspan="3" height="80px" align="left">
            <img src="logo.png" height="50px">
            </td>           
            <td align="Right">
                <h3>
                logged in as <?php echo"$username" ; ?> | 
                <a href="logout.php" >Logout</a> |
                </h3>
            </td>                        
        </tr>
    <table border="1" width="100%" align="center">
        <tr align="left" height="300px">
            <td width="200px">
            <p>
                <h3>Account</h3>
                <ul>
                <li><a href="dashboard.php"> Dashboard</a></li>
                <li><a href="viewprofile.php"> View Profile</a></li>
                <li><a href="editprofile.php"> Edit Profile</a></li>        
                <li><a href="changephoto.php"> Change Profile Picture</a></li>    
                <li><a href="changepass.php"> Change Passowrd</a></li>
                <li><a href="logout.php"> Logout </a></li>           
                </ul>      
            </p>
            </td>
            <td align="center" >
                <fieldset style="width:70%">
                <legend>PROFILE </legend>
                <table>
                    <tr>
                        <td>Name<br></td>
                        <td>:<?php echo $user['username']; ?></td>
                        <td rowspan="3" ><img src="user.png" width="100" height="100"></td>
                        <tr>
                            <td>Email<br></td>
                                <td>:<?php echo $user['email']; ?></td>
                            </tr>    
                            <tr>
                                <td>Gender<br></td>
                                <td>:<?php echo $user['gender']; ?></td>
                            </tr>
                            <tr>
                                <td>Dob<br></td>
                                <td>:<?php echo $user['dob']; ?></td>
                                <td> <a href="user.php" >Change</a> </td>
                             </tr>  
                        </table>
                        <a href="editprofile.html"> Edit Profile</a>    
                    </fieldset>
                <p></p>
            </td>
        </tr>
    </table>
    <table border="1" width="100%" height="50px">
        <td colspan="3"><center>Copyright@2017</center></td> 
    </table> 
    
</body>
</html>
© 2021 GitHub, Inc.