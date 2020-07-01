<?php
   $fname= $_POST["fn"];
   $lname= $_POST["ln"];
   $phone= $_POST["ph"];
   include("connection.php");
   
 if(mysqli_query($con,"insert into admin ( `fist_name`, `last_name`, `phone_number`) VALUES ('$fname', '$lname', '$phone')"))
   {
      echo "0";
   }
 else
   {
      echo "1";
   }
?>