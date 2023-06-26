<?php

$folder = '/laracats';

require "functions.php";
// require "router.php";
require "Database.php";

//connect to mysql database 

$config = require('config.php');
$db = new Database($config['database']);
$posts =  $db->query('select * from post')->fetchAll();

foreach ($posts as $post){
    echo "<li>" . $post['title'] . "</li>";
}
