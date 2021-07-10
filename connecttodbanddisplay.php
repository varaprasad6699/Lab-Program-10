<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="assignment";

// Create connection
$conn = new mysqli($servername, $username, $password,$db) or die("connectin falied");
echo "Connected successfully";
echo "<br/>";
//create table  in data base assignmentwith name registration 
 $sql = "CREATE TABLE RegistrationForm (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    email VARCHAR(50) NOT NULL 
    
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table RegistrationForm created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }


// insert data to table 

$sql = "INSERT INTO RegistrationForm (Name,password,phone,email)
  VALUES ('madhav','mad123','7981532844','mad@gmail.com')";
  if ($conn->query($sql)==TRUE){
      echo "added sucedfbd";
  }
  else{
      echo "Error: " . $sql . "<br>" . $conn->error;
  } 
  

// extract data from database table registration to display them 
$sql= "SELECT * FROM RegistrationForm ";
$result = $conn->query($sql);

if($result->num_rows >0){
    while($row=$result->fetch_assoc()){
        echo "sid: " . $row["id"]. " |"." - Name: " . $row["name"]. "| " . $row["password"]." |"." Phone Number " . $row["phone"]." | "."email" . $row["email"].  "<br>";

    }
}
else{
  echo "The db is empty";
}


?>
