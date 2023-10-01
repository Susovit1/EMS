<?php
$connt = mysqli_connect("localhost", "prahlad1", "", "employees management");
if(!connt){
    die("connection not found".mysqli_connect_error());
} 
else
echo "connnection found";
$sql="insert into customer (Name, Contact,Address, City )
values('prahlad', '984048174', 'Bairiya', 'Birgunj') ";
if (mysqli_query($connt, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
echo " <br>";
echo "Hello";
?>