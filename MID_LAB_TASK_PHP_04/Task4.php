<?php
     
     function Largest($num1,$num2,$num3)
     {
          if($num1>$num2 && $num1>$num3)
          {
          	echo "$num1";
          }
          elseif ($num2>$num1 && $num2>$num3) {
          	echo "$num2";
          }
          else
          	echo "$num3";
          

     }
     Largest(30,40,50);
?>     