<?php

$servername = "localhost";
$username = "root";
$pass = "";
$db_name = "curd_1";


$conn = new mysqli($servername , $username , $pass , $db_name );

if(!$conn)
{
    die("not connected");
}
else{
    echo "yes connected";
}
/*
$sql = "CREATE TABLE rubel_info (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    age int(55),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )" ;


*/
$sql = "INSERT INTO rubel_info (firstname, lastname, email,age)
VALUES ('Rubel', 'Hossain', 'rubelphp94@gmail.com',26)";
 



$result = $conn->query($sql);
echo "<br>" ;
if($result === true )
{
    echo "Table hasbeen created";
}
else{
    echo "Table not created ";
}



?>