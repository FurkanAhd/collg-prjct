<?php
 include 'dbconnection.php'

 if($_SERVER['REQUEST_METHOD']=="POST")
 {
     
   // echo $num; 
    $username =$_POST['username'];
    $pasword =$_POST['password'];
    $q ="INSERT INTO signtab(username,password)  VALIUES('$username','$password')";
    
    if($mysqli->query($q) == true)
 {
     echo "acccount created successfully";
 }
 else{
     echo "account could not be created".$mysqli->error;
 }
 }





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <div class="registration">
           <form method="POST">
               <h1>Sign Up<h1>
               <input type="text" name="username" placeholder="Username" required>
               <input type=" text" name="password" placeholder="Password" required>
                 <button  type="submit">Submit</button>  
               
 

           </form>
      





</div>
  

</body>
</html>
