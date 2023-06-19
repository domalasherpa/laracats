<?php

require "functions.php";
$folder = '/laracats';

$uri = $_SERVER['REQUEST_URI'];

switch($uri){
    case $folder.'/':
        require 'Controllers/i.php';
        break;
    
    case $folder.'/about':
        require 'Controllers/about.php';
        break;
 
    case $folder.'/contact':
        require 'Controllers/contact.php';
        break;
}


