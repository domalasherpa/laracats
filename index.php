<?php

require "functions.php";
$folder = '/laracats';

$uri = $_SERVER['REQUEST_URI'];

switch($uri){
    case $folder.'/':
        require 'controllers/i.php';
        break;
    
    case $folder.'/about':
        require 'controllers/about.php';
        break;
 
    case $folder.'/contact':
        require 'controllers/contact.php';
        break;
}


