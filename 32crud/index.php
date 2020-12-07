<?php 
    include 'database.php';
    $obj = new Database();
  //  $obj->insert('test',['nom'=>'Titien', 'prenom'=>'Walter','age'=>29]);
//    $obj->update(
//        'test',
//        ['nom'=>'Queen', 'prenom'=>'Wal','age'=>39],['id'=>7,'nom'=>'Papa']
//    );
//    $obj->update(
//        'test',
//        ['nom'=>'Queen', 'prenom'=>'Walt','age'=>39],['id'=>2]
//    );
//    $obj->delete('test',['id'=>2]);

//    $obj->sqlSelect('SELECT * FROM test');
    $obj->select('test','id, nom');
    echo "Selected result is :";
    echo '<pre>';
    print_r($obj->getResult());
    echo '</pre>';

?>