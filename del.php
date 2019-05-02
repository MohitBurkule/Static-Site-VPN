<?php

// Folder path to be flushed 
$path = "dduck";
$dir=$path.'/';
 
// Assigning files inside the directory 
$dir= new RecursiveDirectoryIterator( 
    $dir, FilesystemIterator::SKIP_DOTS); 
   
// Reducing file search to given root 
// directory only 
$dir = new RecursiveIteratorIterator( 
    $dir,RecursiveIteratorIterator::CHILD_FIRST); 
   
// Removing directories and files inside 
// the specified folder 
foreach ( $dir as $file ) {  
    $file->isDir() ?  rmdir($file) : unlink($file); 
} 
rmdir("F:\\xamp\\htdocs\\".$path);

?>