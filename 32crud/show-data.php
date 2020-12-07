<?php
    include 'database.php';
    $obj = new Database();

    $obj->select('test');
    $result = $obj->getResult(); 
    
    echo "<table border='1' width='500px'>
    <tr>
        <th>#</th>        
        <th>nom</th>        
        <th>prenom</th>
        <th>age</th>
    </tr>";
    foreach($result as list("id"=>$id, "nom"=>$nom, "age"=>$age,'prenom'=>$prenom)){
        echo "<tr>
        <td>$id</td>        
        <td>$nom</td>
        <td>$prenom</td>
        <td>$age</td>
        </tr>";
        
    }
    echo "</table>";

    
    
//    print_r($data);
    
?>