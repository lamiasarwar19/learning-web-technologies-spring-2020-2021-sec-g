<?php
    require_once "formvalidator.php";
    $show_form=true;
    if(isset($_POST['submit'])){
      $validator=new FormValidator();
    
 
?>
<!DOCTYPE html>
<html>
<head>
   <title>Name input field</title>
</head>
<body>
   <form method="POST" action="login.php">
      <fieldset>
         <legend>Login</legend>
         User Name: <input type="text" name="username" value=""><br>
         Password: <input type="password" name="password" value=""><br>
         <input type="submit" name="submit" value="Submit">
      </fieldset>
   </form>  

</body>
</html>