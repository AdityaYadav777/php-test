<?php 
if(isset($_POST['name'])){


$server="localhost";
$username="root";
$password= "";

$connection=mysqli_connect($server,$username,$password);
if(!$connection){
    echo "Connection Failed";
}

    echo "connection Success";
  
    $name =$_POST['name'];
    $lastname=$_POST['lastname'];
    $gender=$_POST['gender'];
    $phone=$_POST['phno'];

    echo "<br>";

    $sql="INSERT INTO `Trip`.`trip` (`sno`, `name`, `lastname`, `gender`, `phone`, `dt`) VALUES ('', '$name', '$lastname', '$gender', '$phone', current_timestamp())";
echo $sql;

if($connection->query($sql)==true){
echo "Done";
}
else{
    echo $connection->error, "gya kharab";
}
$connection->close();
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <h3>Welcome to Travel World</h3>

        <p>Enter Your Details</p>

        <p id="msg">Thanks for Submiting</p>

  <form action="index.php" method="post">

    <input type="text" name="name" id="name" placeholder="Name">
    <input type="text" name="lastname" id="lastname" placeholder="Last Name">
    <input type="text" name="gender" id="gender" placeholder="Gender">
    <input type="phone" name="phno" id="phno" placeholder="Phone">
    <button class="btn">Set</button>
 
    

  </form>


    </div>

</body>
<script src="script.js"></script>


</html>