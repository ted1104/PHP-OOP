<?php
    //MYSQLI procedural
    //Mysqli Object oriented
    //MYSQLI METHOD
    //CONNECTION 
//    $connect = new mysqli("serverName","UserName","Password","DatabaseName");
//$connect->fetch_assoc();    
//$connect->fetch_array();
//$connect->fetch_row();
//$connect->fetch_all();
//$connect->fetch_field();
//
//AFFECTED ROW
//$conect->affected_row();

//  ERROR
//$conect->connect_error();
//$conect->connect_errno();
//$conect->error();
//$connect->error_list();


$serverName = "localhost";
$username = "root";
$password = 1234;
$dbname = "db_exo_ci4";

$conn = new mysqli($serverName,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection Failed : ".$conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if($result->num_rows > 0){
    //print_r($result->fetch_all());
    while($row= $result->fetch_assoc()){
        echo "Id :{$row["id"]} - Name : {$row["username"]} - email {$row["email"]} <br>";
    }
}else{
    echo " No Data!!";
}
$conn->close();




?>