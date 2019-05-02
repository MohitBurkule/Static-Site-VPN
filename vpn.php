
<?php
$adr=$_GET["adr"];
$url = "http://www.brothersoft.com/publisher/xtracomponents.html";
$url=$adr;
$myurl="https://results-unipune-ac-in.000webhostapp.com/pccoe/vpn.php?adr=";
$myurl="http://localhost/vpn.php?adr=";
$url2= dirname($url, 1);
//echo $url2;
$page = file_get_contents($url);
$flag=1;
$isimage=0;

if (strpos($url, '.png') !== false) {
 //echo "true";
$flag=0;
$isimage=1; 
echo '<img src='.$url.' />';
exit;
}

if (strpos($url, '.svg') !== false) {
 //echo "true";
$flag=0;
$isimage=1; 
echo '<img src='.$url.' />';
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
echo '<img src='.$url.' />';
exit;

}
if (strpos($url, '.js') !== false) {
 //echo "true";
$flag=0; 
}
if (strpos($url, '.json') !== false) {
 //echo "true";
$flag=0; 
}


if($flag==1)
{
$page=str_replace("</html>"," ",$page); // for removing 000webhostapp banner 
//$page=str_replace("<html>"," ",$page);

$page=str_replace('href="/','href="'.$myurl.$url.'/',$page);
$page=str_replace("href='/","href='".$myurl.$url."/",$page);





$page=str_replace('action="/','action="'.$url.'/',$page);
$page=str_replace("action='/","action='".$url."/",$page);

$page=str_replace("href='https","href='".$url.'',$page);

$page= str_replace("</body>"," ",$page);
$page=str_replace('src="/','src="'.$myurl.$url.'/',$page);
$page=str_replace("src='/","src='".$myurl.$url."/",$page);
}

echo $page;

//echo "<script type='text/javascript'>alert('HYPERLINKS AND IMAGES WONT WORK');</script>";
/*
echo "<script type='text/javascript'>
var arr = [], l = document.links;
for(var i=0; i<l.length; i++) {
  arr.push(l[i].href);
}

alert(arr);
(function() {
    function redirectLink(evt) {
        var matches = /^https?:\/\/([^\/]+)\//i.exec(this.href);
        alert(this.href)
        alert(matches)
        alert(evt.target)
        var str=this.href;
        var res = str.replace('https://results-unipune-ac-in.000webhostapp.com', 'https://results-unipune-ac-in.000webhostapp.com/pccoe/vpn.php?adr=$url2');
        
        alert(res)
        
        if (matches && matches[1] != 'www.yourdomain.com') {
            window.location.href = 'https://results-unipune-ac-in.000webhostapp.com/pccoe/vpn.php?adr=$url2';
            evt.preventDefault();
            return false;
        }
    }

    var links = document.getElementsByTagName('a'), i;
    for (i = 0; i < links.length; i++)
        links[i].addEventListener('click', redirectLink, false);
})();
alert('hi');
</script>
<script type='text/javascript'>
var anchors = document.getElementsByTagName('a');

for (var i = 0; i < anchors.length; i++) {
    anchors[i].href = 'https://results-unipune-ac-in.000webhostapp.com/pccoe/vpn.php?adr='+$url + anchors[i].href
}

</script>";
//echo $page;
*/


?>
<!--
