<?php

/********* Get exact folder name *********/
// $path = substr($_SERVER['PHP_SELF'], 1);
// $findSlash = strpos($path, '/');
// $link = substr($path, $findSlash);

// $findNextSlash = strpos(substr($link, 1), '/');
// $folder = substr($link, 1, $findNextSlash);

// Get the page name that's including this pages
$current_page = $_SERVER['PHP_SELF'];

// Check if the path contains projects
if(strpos($current_page, 'projects') !== false){
    $path = '../';
} else {
    $path = '';
}
?>