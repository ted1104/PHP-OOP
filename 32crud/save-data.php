<?php 
     include 'database.php';
    $obj = new Database();
//    $arr = ['nom'=>'Titien', 'prenom'=>'Walter','age'=>29];
//    echo '<pre>';
//    print_r($_POST);
//    echo '<pre>';
//    print_r($arr);
     $data = $_POST;
     $dt = $obj->insert('test',$data);
     if($dt){
         echo "Successfully Added";
         echo "<a href='show-data.php'>List</a>";
     }
?>