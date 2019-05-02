<?php
/*
$last  = (int)file_get_contents('timestamp.txt');
file_put_contents('timestamp.txt', time());
$files = glob('*');
$files = array_filter($files, function ($file) { return filemtime($file) > $last; });

if ($files)
{
	//echo files;
   // there are new files! $files is an array with their names
}
*/
function getDirContents($dir, &$results = array()){
    $files = scandir($dir);

    foreach($files as $key => $value){
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
        if(!is_dir($path)) {
            $results[] = $path;
        } else if($value != "." && $value != "..") {
          //  getDirContents($path, $results);
            $results[] = $path;
        }
    }

    return $results;
}
$res=getDirContents($_SERVER["DOCUMENT_ROOT"]);//F:\\xamp\\htdocs\\
//file_put_contents("array.json",json_encode($res));

$orig = json_decode(file_get_contents('array.json'), true);
foreach($res as $i)
{
	$flag=0;
	foreach($orig as $o)
	{
		if($o==$i)
		{
			$flag=1;
			break;
		}
	}
	
	if($flag==0)
	{
		echo $i."<br>";
		
 $dir=$i;
 $path=$i;
// Assigning files inside the directory 
if(is_Dir($dir))
{
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
rmdir($path); //"F:\\xamp\\htdocs\\".
}
else
{
	unlink($path);
}

}

}


?>