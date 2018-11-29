<?php
date_default_timezone_set('Asia/Islamabad');
$yx = opendir('myToken');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;

$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=01&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ 
$x=$stat[data][$i-1][id].'~'; 
$y= fopen('komen.txt','a');
fwrite($y,$x); fclose($y);
$name= json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=name&access_token='.$token),true);
$nam=$name[name]; $ama= explode(' ',$nam); $nama=$ama[0]; $mr=''.$nama;
$me= json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
$me= json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
$half ='@['.$stat[data][$i-1][from][id].':'.$exp_nam[0].']';
$me = ' '.$me[name].' ';
$me= json_decode(auto('https://graph.facebook.com/me?fields=id,name&access_token='.$token),true);
$nam=$me[name]; $ama= explode(' ',$nam); $nama=$ama[0];
$user ='@['.$me[id].':'.$ama[0].']';
$tags = explode(' ',$stat[data][$i-1][from][id]);
$tagged_name = ' @['.$tags[0].':1] ';
$kata= array(
'motto.php',
'cinta.php',
'motivasi.php',
'bijak.php',
);

$jam = array(
'01',
'02',
'03',
'04',
'05',
'06',
'07',
'08',
'09',
'10',
'11',
'12',
'13',
'14',
'15',
'16',
'17',
'18',
'19',
'20',
'21',
'22',
'23',
'24',
'00',
);

$hari=gmdate("D", time()+60*60*5);
if((gmdate("D", time()+60*60*5))=="Sun"){ $hari="Sunday"; }
if((gmdate("D", time()+60*60*5))=="Mon"){ $hari="Monday"; }
if((gmdate("D", time()+60*60*5))=="Tue"){ $hari="Tuesday"; }
if((gmdate("D", time()+60*60*5))=="Wed"){ $hari="Wednesday"; }
if((gmdate("D", time()+60*60*5))=="Thu"){ $hari="Thursday"; }
if((gmdate("D", time()+60*60*5))=="Fri"){ $hari="Friday"; }
if((gmdate("D", time()+60*60*5))=="Sat"){ $hari="Saturday"; }
$time=" ".gmdate("g:i A", time()+60*60*5.5);
$tg=" ".gmdate("j /m/Y", time()+60*60*5.5);

$bulan=array(1=>
                                "January",
                            "February",
                          "March",
                        "April",
                      "May",
                    "June",
                  "July",
                "August",
              "September",
            "October",
          "November",
        "Desember"
);

$hr = $hari[gmdate('N',time()+60*60*7)];
$tgl = gmdate('j',time()+60*60*7);
$bln = 
$bulan[gmdate('n',time()+60*60*7)];
$thn = gmdate('Y',time()+60*60*7);
$jam = str_replace($rpc,$sapa,gmdate('H',time()+60*60*7));
$TimeZone="+05:00";
	$hour=gmdate("H", time() + ($TimeZone * 60 * 60));
	if ($hour > 20) $greetings = "gσσ∂ иιgнт ⭐";
	else if ($hour > 16) $greetings = "gσσ∂ єνєиιиg 🌅";
	elseif ($hour > 11) $greetings = "gσσ∂ αfтєяиσσи ☀";
	elseif ($hour < 12) $greetings = "gσσ∂ мσяиιиg 🌇";

$tas=array('👈😍👉','👈💖👉','👈😺👉','','👈💝👉','👈💛👉','👈💙👉','👈💜👉','👈💚👉','👈👀👉','👈😂👉','👈💘👉','👈💖👉','👈🍸👉','👈😔👉','👈😒👉','👈😲👉','👈😷👉','👈😼👉','👈❤👉','👈💔👉','👈💗👉','👈💓👉','👈💘👉','👈🎉👉','👈💑👉','👈👀👉','👈💃👉','👈💀👉','👈⚡👉','👈📣👉','👈💐👉','👈🍁👉','👈☔👉','👈⛄👉' ,);
$zrilta= $tas[rand(0,count($tas) - 1)];

$tas=array('👈🐺👉','👈👄👉','👈🐒👉','👈🎍👉','👈🎁👉','👈💛👉','👈👀👉','👈🐠👉','👈💙👉','👈🍁👉','👈☀👉','👈🐬👉','👈🌾👉','👈🎄👉','👈📀👉','👈🍃👉','👈💾👉','👈📺👉','👈📻👉','👈🔈👉','👈🎶👉','👈🎵👉','👈🎺👉','👈🎷👉','👈🀄👉','👈🎾👉','👈⚽👉','👈🏀👉','👈🏈👉' ,);
$hamza= $tas[rand(0,count($tas) - 1)];

$tas=array('😍','💖','😺','😋','💝','💛','💙','💜','💚','👀','😂','💘','💖','🍸','😔','😒','😲','😷','😼','❤','💔','💗','💓','💘','🌹','☀','💐','⚡','🍁','🌙','☔','🎁','🎉','🎈','💝','📣','🎭','🎭','🎭','📺','📞','📱','💩','🌟','👮','🌾','⛄','🍎','🍉','🍓','🍺','🎶','💽','📀','🍅','🍔','🍟','🚲','🐠','🐒','🐟','🌹' ,);
$hamzaemo = $tas[rand(0,count($tas) - 1)];

$emo=array ('🕊','🦅','🦆','🦉','🐸','🐊','🐢','🦎','🐍','🐲','🐉','🐬','🐟','🐠','🦈','🐌','🦋','🐛','🏵','🌹','🥀','🌺','🌻','🌼','🌷','🌲','🌳','🌴','🌵','✅','✔','☑','🇵🇰',);
$emoticon=$emo[rand(0,count($emo)-1)];

$text = array('',);
$comments = $text[rand(0,count($text)-1)];

$stickers= array('184570198827302', '488524034594375', '488524317927680','399318427251730', '155887105126297', '893308157455556', '155884458459895', '155886988459642', '441817896307209', '184570198827302',);
$mess=$stickers[rand(0,count($stickers)-1)];

auto('');
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/reactions?type=LOVE&method=POST&access_token='.$token.'');
echo '<center><hr>Done To => '.$stat[data][$i-1][from][name].' </hr></center>';
}
}

function auto($url) {
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl); 
return $ch;
}

?>