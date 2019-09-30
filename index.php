<?php

// require connection class

require './database/index.php';

// connect to db

$pdo = Connection::connect();

$query = new QueryBuilder($pdo);

// select all
// $data = $query->all('users');

/*
die(var_dump($data));


foreach ($data as $dat) {
   echo "<li>$dat->name</li>";
}

*/

// find one

$data = $query->find('users', 'id', 2);

// die(var_dump($data));

echo $data[0]->name;

?>
