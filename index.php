<?php

$query = require 'bootstrap.php';
require 'User.php';


// select all
$data = $query->all('users', 'User');


die(var_dump($data));


foreach ($data as $item) {
   echo "<li>$item->name</li>";
}



// find one

// $data = $query->find('users', 'id', 2);

// $data_json= json_encode($data);

// // die(var_dump($data_json));

// echo $data_json;

?>
