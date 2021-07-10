<html>
<body>
<h2>Registration Form</h2>
<form  method="post">
Name: <input type="text" name="name" required><br>
E-mail: <input type="text" name="email" required><br>
Password: <input type="password" name="password" required><br>
Number: <input type="number" name="number" required><br>
<input type="submit">
</form>





<?php
$servername="localhost";
$username="root";
$password="";
$db="assignment";
 if ($_SERVER["REQUEST_METHOD"]=="POST"){
    //connect to db 
    $conn=new mysqli($servername,$username,$password,$db) or die("connection falied");
    echo("conneced to db sucessfully");
    echo "<br />";
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $number=$_POST["number"];
    $sql="INSERT INTO RegistrationForm (Name,password,phone,email)
     VALUES('$name','$password','$number','$email')";
    
    if($conn->query($sql)==TRUE){
        echo "Data Inserted Sucessfully".""."<br />";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
       
    }
    echo "$name" ." | ". "$email"." | "."$password"." | "."$number";
    
 }
 
?>
</body>
</html>
