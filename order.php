<?php
 include("db.php"); 

 if(isset($_POST['submit']))


{
   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $foodname = $_POST['foodname'];
    $address = $_POST['address'];
 if(!empty($name) && !empty($email) && !empty($number) && !empty($foodname)  && !empty($address)) {
 
  $sql = "INSERT INTO `order`( name, email,  number, foodname, address) VALUES ('$name','$email','$number','$foodname','$address')";

  $qry = mysqli_query($con, $sql);

if($qry){
  echo "inserted successfully";
}
 else { 
  echo "all fields must be filled";
}
}
}
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>
 		
 	</title>
 </head>
 <body>
 <table>
 	<tr>
      
       <form action="" method="POST">
    
        NAME :  <input type="text" name="name"><br><br>
        EMAIL : <input type="text" name="email"><br><br>
         NUMBER : <input type="text" name="number"><br><br>
         FOODS NAME : <input type="text" name="foodname"><br><br>
        ADDRESS : <input type="text" name="address"><br><br>
       
         <input type="submit" name="submit"Value="INSERT">

         </form>
 		
 	</tr>
 </table>
 </body>

 </html>