<?php

$server="localhost";
$user="root";
$password="";
$dbname="skill";

$conn= mysqli_connect($server,$user,$password,$dbname);

if(!$conn)
{
    die("Connection failed :". mysqli_connect_error());
}

else {
    echo "Sucessfully connected";
}
echo "<br>";

$sql = "INSERT INTO users (name,email,password) VALUES ('Rahib','rahib@','1234')";

if (mysqli_query ($conn,$sql)) {
    echo "New Record has been inserted";
}
else {
  echo mysqli_error();
}

?>