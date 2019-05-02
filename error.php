
<?php
if(isset($_COOKIE["url"])) {
  $url=  $_COOKIE["url"].$_SERVER['REQUEST_URI'] ;
 
 $opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n")); 
//Basically adding headers to the request
$context = stream_context_create($opts);

//$url=$_COOKIE["url"].urlencode($_SERVER['REQUEST_URI']);
 //$url=urlencode($url); 
if (strpos($url, '.png') !== false) {
 //echo "true";
$flag=0;
$isimage=1; 
//echo '<img  src='.$url.' />';

$page = file_get_contents($url);
header("Content-type: image/svg-xml"); 

$pathToFile = 'test1/test2/test3/test4/test.txt';
$pathToFile = $_SERVER["DOCUMENT_ROOT"].$_SERVER['REQUEST_URI'];
$fileName = basename($pathToFile);
$folders = explode('/', str_replace('/' . $fileName, '', $pathToFile));

$currentFolder = '';
foreach ($folders as $folder) {
    $currentFolder .= $folder . DIRECTORY_SEPARATOR;
    if (!file_exists($currentFolder)) {
        mkdir($currentFolder, 0755);
    }
}
file_put_contents($pathToFile, $page);


exit;

}

if (strpos($url, '.svg') !== false) {
 //echo "true";
$flag=0;
$isimage=1; 
//echo '<img src='.$url.' />';
$page = file_get_contents($url);
//$page='<img src='.$url.' />'.$page;
$pathToFile = 'test1/test2/test3/test4/test.txt';
$pathToFile = $_SERVER["DOCUMENT_ROOT"].$_SERVER['REQUEST_URI'];
$fileName = basename($pathToFile);
$folders = explode('/', str_replace('/' . $fileName, '', $pathToFile));

$currentFolder = '';
foreach ($folders as $folder) {
    $currentFolder .= $folder . DIRECTORY_SEPARATOR;
    if (!file_exists($currentFolder)) {
        mkdir($currentFolder, 0755);
    }
}
file_put_contents($pathToFile, $page);

exit;
}
if (strpos($url, '.jpg') !== false) {
 ///echo "true";
$flag=0; 
$isimage=1;
echo '<img src='.$url.' />';
exit;
}

if (strpos($url, '.jpeg') !== false) {
 //echo "true";
$flag=0; 
$isimage=1;
echo '<img  src='.$url.' />';
exit;

}
if (strpos($url, '.js') !== false) {
 //echo "true";
$flag=0; 
 header('Content-type: application/javascript');
 $page = file_get_contents($url);
echo '<script type="text/javascript" defer>'.$page.'</script>' . "\n";
//mkdir($_SERVER['REQUEST_URI']);

$pathToFile = 'test1/test2/test3/test4/test.txt';
$pathToFile = $_SERVER["DOCUMENT_ROOT"].$_SERVER['REQUEST_URI'];
$fileName = basename($pathToFile);
$folders = explode('/', str_replace('/' . $fileName, '', $pathToFile));

$currentFolder = '';
foreach ($folders as $folder) {
    $currentFolder .= $folder . DIRECTORY_SEPARATOR;
    if (!file_exists($currentFolder)) {
        mkdir($currentFolder, 0755);
    }
}
file_put_contents($pathToFile, $page);


exit;
}
if (strpos($url, '.css') !== false) {
 //echo "true";
$flag=0; 
 header('Content-type: application/javascript');
 $page = file_get_contents($url);
echo '<script type="text/css" defer>'.$page.'</script>' . "\n";
//mkdir($_SERVER['REQUEST_URI']);

$pathToFile = 'test1/test2/test3/test4/test.txt';
$pathToFile = $_SERVER["DOCUMENT_ROOT"].$_SERVER['REQUEST_URI'];
$fileName = basename($pathToFile);
$folders = explode('/', str_replace('/' . $fileName, '', $pathToFile));

$currentFolder = '';
foreach ($folders as $folder) {
    $currentFolder .= $folder . DIRECTORY_SEPARATOR;
    if (!file_exists($currentFolder)) {
        mkdir($currentFolder, 0755);
    }
}
file_put_contents($pathToFile, $page);


exit;
}


if (strpos($url, '.json') !== false) {
 //echo "true";
$flag=0; 
 header('Content-type: application/json');
 exit;

}
$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,$url);
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_USERAGENT, 'MOBILE');
$page = curl_exec($curl_handle);
curl_close($curl_handle);
//$page = file_get_contents($url);
echo $page;
}
//echo $_SERVER['REQUEST_URI'];
?>
<!--
