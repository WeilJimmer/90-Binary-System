<?
set_time_limit(0);
if (@extension_loaded('gmp')){
}else{
die('<br><br><center><font color="red"><b>未安裝GMP函式庫。</b></font></center>');
}
?>
<html>
<head>
<title>各進位轉換</title>
<style type="text/css">
.style1 {
	border-collapse: collapse;
	border: 2px solid #FFFF00;
}
.style2 {
	color: #FF0000;
}
.style3 {
	color: #00FF00;
}
</style>
</head>
<body style="color: #FF00FF; background-color: #0B0037">
<textarea readonly name="password" style="height: 300px; width: 800px; color: <?

/****By Weil Jimmer****

****Code:PHP****

****僅支持GMP函式庫，否則無法使用。****

****版本:5.2.1.5****

****2~90進位互轉，運算長度達1024位****

*/
ob_flush();
flush();

$mtime1 = explode(" ", microtime());

$startTime = $mtime1[0] + $mtime1[1];

$a=$_POST['RSqfMdHSrHSlH'];
$timeb=(int)$_POST['RqfMdHSrHSlH'];

if ($timeb>4096){
$timeb=4096;
}else{
if ($timeb<16){
$timeb=256;
}else{

}
}

$rand=rand(1,3);
if ($rand==1){
echo '#00FF00';
}elseif($rand==2){
echo '#CC3300';
}else{
echo '#FDE662';
}

echo '; background-color: #000000; text-decoration: blink; font-family: \'Arial Narrow\'; font-size: medium;">';

$mod=$_GET['mod'];

if($mod==1){

$a=$_POST['RSqfMdHSrHSlH'];
$pw=$_POST['PaSSwOrD'];
$key=$_POST['VeRiALmjW'];
$start=$_POST['starten'];
$end=$_POST['enddc'];

if ($a!="" and $start<=36){
$a=strtolower($a);
}

if ($a==""){
echo "</textarea><script language=\"JavaScript\">
window.alert(\"未填欄位!!\");
window.history.back(-1);
</script>";
exit;
}

if ($start>10 and $start<63){

if (!preg_match('/^[0-9a-zA-Z ]+$/',$a)){
echo "</textarea><script language=\"JavaScript\">
window.alert(\"僅能是英數字!!\");
window.history.back(-1);
</script>";
exit;
}

}elseif ($start<=10){

if (!preg_match('/^[0-9 ]+$/',$a)){
echo "</textarea><script language=\"JavaScript\">
window.alert(\"僅能是數字!!\");
window.history.back(-1);
</script>";
exit;
}

}else{


}


function weil_zero($str) {

$str=$str.'|';
$strx=trim($str,'0');
$strx=substr($strx,0,-1);
return $strx;

}

function weil_array_show($str,$i) {

for ($i=$i;$str[$i]!="";$i++){
$xa=$xa.$str[$i];
}

return $xa;

}

function gmp_F_mul($str,$str2){

$x=explode('.',$str);
$zero_B=strlen($x['1']);
$str=str_replace('.','',$str);
$str=weil_zero($str);
$c=gmp_strval(gmp_mul($str,$str2));

if ($zero_B==strlen($c)){
$c='0.'.$c;
}elseif ($zero_B>strlen($c)){
$p=$zero_B-strlen($c);
$p=$p+strlen($c);
$c=str_pad($c,$p,'0',STR_PAD_LEFT);
$c='0.'.$c;
}elseif ($zero_B<strlen($c)){
$c=substr($c,0,(strlen($c)-$zero_B)) . '.' . substr($c,(strlen($c)-$zero_B));
}

return $c;

}

function weil90F_en($str,$v,$timeb) {

$a='0.'.$str;
$n=$v;

for ($i=0; $i<$timeb; $i++){

ob_flush();
flush();

$x=gmp_F_mul($a,$n);
$x=explode('.',$x);
$b[$i]=$x['0'];
$a='0.'.$x['1'];

if (weil_array_than($str_ver,$x['1'])==true){
$xp=array_search($x['1'],$str_ver);
break;
}

if ($a==0){
break;
}
$str_ver[]=$x['1'];
}

if (($a)!=0){
echo "位數不夠，請調整。\n\n";
}

$i=0;

for ($i=0; $b[$i]!=""; $i++){

$b[$i]=str_replace($figure,$sign,$b[$i]);
$x=$b[$i];
if ($x=="0"){$x="0";}elseif ($x=="1"){$x="1";}elseif ($x=="2"){$x="2";}elseif ($x=="3"){$x="3";}elseif ($x=="4"){$x="4";}elseif ($x=="5"){$x="5";}elseif ($x=="6"){$x="6";}elseif ($x=="7"){$x="7";}elseif ($x=="8"){$x="8";}elseif ($x=="9"){$x="9";}elseif ($x=="10"){$x="a";}elseif ($x=="11"){$x="b";}elseif ($x=="12"){$x="c";}elseif ($x=="13"){$x="d";}elseif ($x=="14"){$x="e";}elseif ($x=="15"){$x="f";}elseif ($x=="16"){$x="g";}elseif ($x=="17"){$x="h";}elseif ($x=="18"){$x="i";}elseif ($x=="19"){$x="j";}elseif ($x=="20"){$x="k";}elseif ($x=="21"){$x="l";}elseif ($x=="22"){$x="m";}elseif ($x=="23"){$x="n";}elseif ($x=="24"){$x="o";}elseif ($x=="25"){$x="p";}elseif ($x=="26"){$x="q";}elseif ($x=="27"){$x="r";}elseif ($x=="28"){$x="s";}elseif ($x=="29"){$x="t";}elseif ($x=="30"){$x="u";}elseif ($x=="31"){$x="v";}elseif ($x=="32"){$x="w";}elseif ($x=="33"){$x="x";}elseif ($x=="34"){$x="y";}elseif ($x=="35"){$x="z";}elseif ($x=="36"){$x="A";}elseif ($x=="37"){$x="B";}elseif ($x=="38"){$x="C";}elseif ($x=="39"){$x="D";}elseif ($x=="40"){$x="E";}elseif ($x=="41"){$x="F";}elseif ($x=="42"){$x="G";}elseif ($x=="43"){$x="H";}elseif ($x=="44"){$x="I";}elseif ($x=="45"){$x="J";}elseif ($x=="46"){$x="K";}elseif ($x=="47"){$x="L";}elseif ($x=="48"){$x="M";}elseif ($x=="49"){$x="N";}elseif ($x=="50"){$x="O";}elseif ($x=="51"){$x="P";}elseif ($x=="52"){$x="Q";}elseif ($x=="53"){$x="R";}elseif ($x=="54"){$x="S";}elseif ($x=="55"){$x="T";}elseif ($x=="56"){$x="U";}elseif ($x=="57"){$x="V";}elseif ($x=="58"){$x="W";}elseif ($x=="59"){$x="X";}elseif ($x=="60"){$x="Y";}elseif ($x=="61"){$x="Z";}elseif ($x=="62"){$x="+";}elseif ($x=="63"){$x="/";}elseif ($x=="64"){$x="=";}elseif ($x=="65"){$x="-";}elseif ($x=="66"){$x="*";}elseif ($x=="67"){$x="~";}elseif ($x=="68"){$x="!";}elseif ($x=="69"){$x="@";}elseif ($x=="70"){$x="#";}elseif ($x=="71"){$x="$";}elseif ($x=="72"){$x="%";}elseif ($x=="73"){$x="^";}elseif ($x=="74"){$x="&";}elseif ($x=="75"){$x="(";}elseif ($x=="76"){$x=")";}elseif ($x=="77"){$x="_";}elseif ($x=="78"){$x="{";}elseif ($x=="79"){$x="}";}elseif ($x=="80"){$x="<";}elseif ($x=="81"){$x=">";}elseif ($x=="82"){$x="[";}elseif ($x=="83"){$x="]";}elseif ($x=="84"){$x="'";}elseif ($x=="85"){$x="`";}elseif ($x=="86"){$x=",";}elseif ($x=="87"){$x=".";}elseif ($x=="88"){$x="?";}elseif ($x=="89"){$x="|";}
$b[$i]=$x;
}


for ($i=(count($b)-1); $b[$i]!=""; $i--){

ob_flush();
flush();

$c=$b[$i].$c;

}

if (isset($xp)){
$x=substr($c,0,$xp+1)."  ".substr($c,$xp+1);
$c1=substr($c,0,$xp+1);
$c2=substr($c,$xp+1);
$c1_l=strlen($c1);
$c2_m=substr($c2,(strlen($c2)-$c1_l));
if ($c1===$c2_m){
return '  '.$c1.substr($c2,0,(strlen($c2)-$c1_l));
}else{
return $x;
}
}else{
return $c;
}

}


function weil_array_than($str,$str2){

for ($i='0';$str[$i]!="";$i++){
if ($str[$i]===$str2){
return true;
}
}

return false;
}


function weil90F_de($str,$n) {

$ver_=strstr($str,'  ');

$ver='0';
$a=$str;
$b="";

if ($ver_!==false){
$s=explode('  ',$str);
$a=$s['0'];
$b=$s['1'];

if ($b==""){
$b='0';
}
$ver='1';
}

if ($ver=='1'){
$a_l=strlen($a);
$b_l=strlen($b);
$v0_=($n-1);
if ($a==""){
$a='0';
}
$m_=str_pad($m_,$b_l,weil90_en($v0_,$n,1),STR_PAD_LEFT);
$m_=str_pad($m_,($a_l+strlen($m_)),'0',STR_PAD_RIGHT);

$c_=gmp_strval(gmp_add(weil90_de(weil_zero($a.$b),$n),"-".weil90_de($a,$n)));

return gmp_F_div(($c_),weil90_de($m_,$n));
}else{
$strl=(strlen($a));
$x=gmp_strval(gmp_pow("$n",$strl));
return gmp_F_div(weil90_de($a,$n),$x);
}
}

function gmp_F_div($str,$str2){
$zero_B=1025;

$str=weil_zero($str);
$c=gmp_strval(gmp_div_q(("$str"."00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000"),"$str2",GMP_ROUND_MINUSINF));

if ($zero_B==strlen($c)){
$c='0.'.$c;
}elseif ($zero_B>strlen($c)){
$p=$zero_B-strlen($c);
$p=$p+strlen($c);
$c=str_pad($c,$p,'0',STR_PAD_LEFT);
$c='0.'.$c;
}elseif ($zero_B<strlen($c)){
$c=substr($c,0,(strlen($c)-$zero_B)) . '.' . substr($c,(strlen($c)-$zero_B));
}

return weil_last_zero($c);

}

function weil_last_zero($str) {

$str='|'.$str;
$strx=trim($str,'0');
$strx=substr($strx,1);
if ($strx=='0.'){
$strx='0';
}
if (substr($strx,-1)=='.'){
$strx=substr($strx,0,strlen($strx)-1);
}
return $strx;

}

function weil_math_code($str){

$figure=array("0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","60","61","62","63","64","65","66","67","68","69","70","71","72","73","74","75","76","77","78","79","80","81","82","83","84","85","86","87","88","89");
$sign=array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','+','/','=','-','*','~','!','@','#','$','%','^','&','(',')','_','{','}','<','>','[',']',"'",'`',',','.','?','|');

for($i=0;$i<strlen($str);$i++){
$b[$i]=str_replace($sign,$figure,$str[$i]);
}

for($i=0;$i<strlen($str);$i++){
if ($i==0){$ci=$b[$i];}else{$ci=$ci.','.$b[$i];}
}

return $ci;

}

function weil90_math_en($str,$v,$timeb) {

$a='0.'.$str;
$n=$v;

$xa="\n".'*****轉換過程：'."\n*****".$a." 轉 ${n}進位制：\n";

for ($i=0; $i<$timeb; $i++){

ob_flush();
flush();

$x=gmp_F_mul($a,$n);

$x_=explode('.',$x);
$xa=$xa.'第'.($i+1).'式：'.$a.' × '.$n.' = '.$x.'  =======＞'.$x_[0]."\n";
$x=explode('.',$x);
$b[$i]=$x['0'];
$a='0.'.$x['1'];

if (($a)==0){
break;
}

if (weil_array_than($str_ver,$x['1'])==true){
$xo=$i;
$xp=array_search($x['1'],$str_ver);
break;
}

$str_ver[]=$x['1'];

}

if (isset($xp)){
return $xa.'第'.($xo+1)."式 偵測到重複字串，造成循環小數。\n由第".(${xp}+2)."式開始循環字串。";
}else{
return $xa;
}
}


function weil90_en($str,$v,$timeb) {

$a=$str;
$n=$v;
$k=strlen($a);

for ($i=0; $i<$timeb; $i++){

ob_flush();
flush();

$b[$i]=gmp_strval(gmp_mod($a,$n));		//算餘數。
$a=gmp_strval(gmp_div_q($a,$n));		//算進位。

if ($a==0){
break;
}

}

if ($a!=0){
echo "位數不夠，請調整。\n\n";
}

$i=0;
//$figure=array("0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","60","61","62","63","64","65","66","67","68","69","70","71","72","73","74","75","76","77","78","79","80","81","82","83","84","85","86","87","88","89");
//$sign=array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','+','/','=','-','*','~','!','@','#','$','%','^','&','(',')','_','{','}','<','>','[',']',"'",'`',',','.','?','|');

for ($i=0; $i<$k; $i++){

//$b[$i]=str_replace($figure,$sign,$b[$i]);
$x=$b[$i];
if ($x=="0"){$x="0";}elseif ($x=="1"){$x="1";}elseif ($x=="2"){$x="2";}elseif ($x=="3"){$x="3";}elseif ($x=="4"){$x="4";}elseif ($x=="5"){$x="5";}elseif ($x=="6"){$x="6";}elseif ($x=="7"){$x="7";}elseif ($x=="8"){$x="8";}elseif ($x=="9"){$x="9";}elseif ($x=="10"){$x="a";}elseif ($x=="11"){$x="b";}elseif ($x=="12"){$x="c";}elseif ($x=="13"){$x="d";}elseif ($x=="14"){$x="e";}elseif ($x=="15"){$x="f";}elseif ($x=="16"){$x="g";}elseif ($x=="17"){$x="h";}elseif ($x=="18"){$x="i";}elseif ($x=="19"){$x="j";}elseif ($x=="20"){$x="k";}elseif ($x=="21"){$x="l";}elseif ($x=="22"){$x="m";}elseif ($x=="23"){$x="n";}elseif ($x=="24"){$x="o";}elseif ($x=="25"){$x="p";}elseif ($x=="26"){$x="q";}elseif ($x=="27"){$x="r";}elseif ($x=="28"){$x="s";}elseif ($x=="29"){$x="t";}elseif ($x=="30"){$x="u";}elseif ($x=="31"){$x="v";}elseif ($x=="32"){$x="w";}elseif ($x=="33"){$x="x";}elseif ($x=="34"){$x="y";}elseif ($x=="35"){$x="z";}elseif ($x=="36"){$x="A";}elseif ($x=="37"){$x="B";}elseif ($x=="38"){$x="C";}elseif ($x=="39"){$x="D";}elseif ($x=="40"){$x="E";}elseif ($x=="41"){$x="F";}elseif ($x=="42"){$x="G";}elseif ($x=="43"){$x="H";}elseif ($x=="44"){$x="I";}elseif ($x=="45"){$x="J";}elseif ($x=="46"){$x="K";}elseif ($x=="47"){$x="L";}elseif ($x=="48"){$x="M";}elseif ($x=="49"){$x="N";}elseif ($x=="50"){$x="O";}elseif ($x=="51"){$x="P";}elseif ($x=="52"){$x="Q";}elseif ($x=="53"){$x="R";}elseif ($x=="54"){$x="S";}elseif ($x=="55"){$x="T";}elseif ($x=="56"){$x="U";}elseif ($x=="57"){$x="V";}elseif ($x=="58"){$x="W";}elseif ($x=="59"){$x="X";}elseif ($x=="60"){$x="Y";}elseif ($x=="61"){$x="Z";}elseif ($x=="62"){$x="+";}elseif ($x=="63"){$x="/";}elseif ($x=="64"){$x="=";}elseif ($x=="65"){$x="-";}elseif ($x=="66"){$x="*";}elseif ($x=="67"){$x="~";}elseif ($x=="68"){$x="!";}elseif ($x=="69"){$x="@";}elseif ($x=="70"){$x="#";}elseif ($x=="71"){$x="$";}elseif ($x=="72"){$x="%";}elseif ($x=="73"){$x="^";}elseif ($x=="74"){$x="&";}elseif ($x=="75"){$x="(";}elseif ($x=="76"){$x=")";}elseif ($x=="77"){$x="_";}elseif ($x=="78"){$x="{";}elseif ($x=="79"){$x="}";}elseif ($x=="80"){$x="<";}elseif ($x=="81"){$x=">";}elseif ($x=="82"){$x="[";}elseif ($x=="83"){$x="]";}elseif ($x=="84"){$x="'";}elseif ($x=="85"){$x="`";}elseif ($x=="86"){$x=",";}elseif ($x=="87"){$x=".";}elseif ($x=="88"){$x="?";}elseif ($x=="89"){$x="|";}
$b[$i]=$x;
}

for ($i=0; $b[$i]!=""; $i++){

ob_flush();
flush();

$c=$b[$i].$c;

}

return $c;

}



function weil90_de($str,$n) {

$b=$str;
$g=-1;
$k=strlen($b);
$n=$n;

if ($k>1024){
$k=1024;
}

//$figure=array("0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","60","61","62","63","64","65","66","67","68","69","70","71","72","73","74","75","76","77","78","79","80","81","82","83","84","85","86","87","88","89");
//$sign=array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','+','/','=','-','*','~','!','@','#','$','%','^','&','(',')','_','{','}','<','>','[',']',"'",'`',',','.','?','|');

for ($i=0; $i<$k; $i++){

ob_flush();
flush();

//$m[$i]=str_replace($sign,$figure,$b[$i]);
$x=$b[$i];
if($x=="0"){$x="0";}elseif($x=="1"){$x="1";}elseif($x=="2"){$x="2";}elseif($x=="3"){$x="3";}elseif($x=="4"){$x="4";}elseif($x=="5"){$x="5";}elseif($x=="6"){$x="6";}elseif($x=="7"){$x="7";}elseif($x=="8"){$x="8";}elseif($x=="9"){$x="9";}elseif($x=="a"){$x="10";}elseif($x=="b"){$x="11";}elseif($x=="c"){$x="12";}elseif($x=="d"){$x="13";}elseif($x=="e"){$x="14";}elseif($x=="f"){$x="15";}elseif($x=="g"){$x="16";}elseif($x=="h"){$x="17";}elseif($x=="i"){$x="18";}elseif($x=="j"){$x="19";}elseif($x=="k"){$x="20";}elseif($x=="l"){$x="21";}elseif($x=="m"){$x="22";}elseif($x=="n"){$x="23";}elseif($x=="o"){$x="24";}elseif($x=="p"){$x="25";}elseif($x=="q"){$x="26";}elseif($x=="r"){$x="27";}elseif($x=="s"){$x="28";}elseif($x=="t"){$x="29";}elseif($x=="u"){$x="30";}elseif($x=="v"){$x="31";}elseif($x=="w"){$x="32";}elseif($x=="x"){$x="33";}elseif($x=="y"){$x="34";}elseif($x=="z"){$x="35";}elseif($x=="A"){$x="36";}elseif($x=="B"){$x="37";}elseif($x=="C"){$x="38";}elseif($x=="D"){$x="39";}elseif($x=="E"){$x="40";}elseif($x=="F"){$x="41";}elseif($x=="G"){$x="42";}elseif($x=="H"){$x="43";}elseif($x=="I"){$x="44";}elseif($x=="J"){$x="45";}elseif($x=="K"){$x="46";}elseif($x=="L"){$x="47";}elseif($x=="M"){$x="48";}elseif($x=="N"){$x="49";}elseif($x=="O"){$x="50";}elseif($x=="P"){$x="51";}elseif($x=="Q"){$x="52";}elseif($x=="R"){$x="53";}elseif($x=="S"){$x="54";}elseif($x=="T"){$x="55";}elseif($x=="U"){$x="56";}elseif($x=="V"){$x="57";}elseif($x=="W"){$x="58";}elseif($x=="X"){$x="59";}elseif($x=="Y"){$x="60";}elseif($x=="Z"){$x="61";}elseif($x=="+"){$x="62";}elseif($x=="/"){$x="63";}elseif($x=="="){$x="64";}elseif($x=="-"){$x="65";}elseif($x=="*"){$x="66";}elseif($x=="~"){$x="67";}elseif($x=="!"){$x="68";}elseif($x=="@"){$x="69";}elseif($x=="#"){$x="70";}elseif($x=="$"){$x="71";}elseif($x=="%"){$x="72";}elseif($x=="^"){$x="73";}elseif($x=="&"){$x="74";}elseif($x=="("){$x="75";}elseif($x==")"){$x="76";}elseif($x=="_"){$x="77";}elseif($x=="{"){$x="78";}elseif($x=="}"){$x="79";}elseif($x=="<"){$x="80";}elseif($x==">"){$x="81";}elseif($x=="["){$x="82";}elseif($x=="]"){$x="83";}elseif($x=="'"){$x="84";}elseif($x=="`"){$x="85";}elseif($x==","){$x="86";}elseif($x=="."){$x="87";}elseif($x=="?"){$x="88";}elseif($x=="|"){$x="89";}
$m[$i]=$x;

if (intval($m[$i])>=$n){
echo "</textarea><script language=\"JavaScript\">
window.alert(\"進位錯誤!!該數值不准大於等於 $n 進位。\\n錯誤紀錄：第" . (${i}+1) . "個字符轉換後為$m[$i]。\");
window.history.back(-1);
</script>";
$x='E';
return $x;
}

}

$v=$k-1;

for ($i=0; $i<$k; $i++){

ob_flush();
flush();

$o[$i]=gmp_strval(gmp_pow("$n","$v"));
$c[$i]=gmp_strval(gmp_mul($m[$i],$o[$i]));
$v--;
}

$t=0;

for ($i=0; $i<$k; $i++){

ob_flush();
flush();

$ci=$c[$i];
if ($ci==""){
$ci=0;
}else{
}

$t=gmp_strval(gmp_add($ci,$t));

}

return $t;

}
function weil90_math_de($str,$n) {

$b=$str;
$g=-1;
$k=strlen($b);
$n=$n;

if ($k>1024){
$k=1024;
}

$xa="\n*****${v}轉換過程：\n";

$figure=array("0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","60","61","62","63","64","65","66","67","68","69","70","71","72","73","74","75","76","77","78","79","80","81","82","83","84","85","86","87","88","89");
$sign=array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','+','/','=','-','*','~','!','@','#','$','%','^','&','(',')','_','{','}','<','>','[',']',"'",'`',',','.','?','|');

for ($i=0; $i<$k; $i++){

ob_flush();
flush();

$m[$i]=str_replace($sign,$figure,$b[$i]);

$xa=$xa."\n".$b[$i]."---轉回10進位：".$m[$i];

if (intval($m[$i])>=$n){
$xa=$xa." ----------錯誤---------- ";
$error="yes";
}

}

$v=$k-1;

$xa=$xa."\n";

if ($error=="yes"){

return $xa;

}

for ($i=0; $i<$k; $i++){

ob_flush();
flush();

if ($i==0){
$xa=$xa."\n    ".$m[$i]." × (${n}^${v})";
}else{
$xa=$xa."\n + ".$m[$i]." × (${n}^${v})";
}

$o[$i]=gmp_strval(gmp_pow("$n","$v"));
$c[$i]=gmp_strval(gmp_mul($m[$i],$o[$i]));

$v--;

}

$t=0;

for ($i=0; $i<$k; $i++){

ob_flush();
flush();

$ci=$c[$i];
if ($ci==""){
$ci=0;
}else{
}

$t=gmp_strval(gmp_add($ci,$t));

}

$xa=$xa."\n = ${t}\n";

return $xa;

}

if ($a!=""){

if ($start==$end){
$p=$a;
echo $p."\n\n*****${start}進位轉${end}進位"."\n*****${start}進位位數：".strlen($a)."\n*****${end}進位位數：".strlen($p)."\n*****${start}進位制表：".weil_math_code($a)."\n*****${end}進位制表：".weil_math_code($p);
}else{
$ax=weil90F_de($a,$start);
if ($ax==='1'){
$p='+1';
echo $p."\n\n*****${start}進位轉${end}進位"."\n*****${start}進位位數：".strlen($a)."\n*****${end}進位位數：".strlen($p)."\n*****${start}進位制表：".weil_math_code($a)."\n*****${end}進位制表：".weil_math_code($p)."\n";
}else{
$ax=substr($ax,2);
$p='0.'.weil90F_en($ax,$end,$timeb);
echo $p."\n\n*****${start}進位轉${end}進位"."\n*****${start}進位位數：".strlen($a)."\n*****${end}進位位數：".strlen($p)."\n*****${start}進位制表：".weil_math_code($a)."\n*****${end}進位制表：".weil_math_code($p).weil90_math_en($ax,$end,$timeb)."\n";

}


}

}else{


}

echo '</textarea>';


}



if ($mod!=1){
echo '</textarea>';
}

?>
<br><br>
<form method="post" action="90Fcode.php?mod=1">
	<table style="width: 800px; float: left;" align="left" border="1" cellpadding="2" cellspacing="2" class="style1">
		<tr>
			<td style="width: 60px">&nbsp;</td>
			<td style="width: 740px" class="style2">特殊進位互轉2~90：請輸入數字及轉換類別。本程式僅支持GMP函式庫，運算長度最長達1024位。</td>
		</tr>
		<tr>
			<td style="width: 60px">&nbsp;</td>
			<td style="width: 740px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width: 60px" class="style3">進位：</td>
			<td style="width: 740px">
			<input name="RSqfMdHSrHSlH" type="text" style="height: 25px; width: 450px; color: #00FF00; background-color: #000000; text-decoration: blink; font-family: 'Arial Narrow'; font-size: medium;" value="<?
			
			if ($a!=""){
			echo $a;
			}else{
			}
			
			?>">
			<select name="starten" id="starten"><?
			
			if($start==""){
			echo '<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option selected="selected">10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
			<option>20</option>
			<option>21</option>
			<option>22</option>
			<option>23</option>
			<option>24</option>
			<option>25</option>
			<option>26</option>
			<option>27</option>
			<option>28</option>
			<option>29</option>
			<option>30</option>
			<option>31</option>
			<option>32</option>
			<option>33</option>
			<option>34</option>
			<option>35</option>
			<option>36</option>
			<option>37</option>
			<option>38</option>
			<option>39</option>
			<option>40</option>
			<option>41</option>
			<option>42</option>
			<option>43</option>
			<option>44</option>
			<option>45</option>
			<option>46</option>
			<option>47</option>
			<option>48</option>
			<option>49</option>
			<option>50</option>
			<option>51</option>
			<option>52</option>
			<option>53</option>
			<option>54</option>
			<option>55</option>
			<option>56</option>
			<option>57</option>
			<option>58</option>
			<option>59</option>
			<option>60</option>
			<option>61</option>
			<option>62</option>
			<option>63</option>
			<option>64</option>
			<option>65</option>
			<option>66</option>
			<option>67</option>
			<option>68</option>
			<option>69</option>
			<option>70</option>
			<option>71</option>
			<option>72</option>
			<option>73</option>
			<option>74</option>
			<option>75</option>
			<option>76</option>
			<option>77</option>
			<option>78</option>
			<option>79</option>
			<option>80</option>
			<option>81</option>
			<option>82</option>
			<option>83</option>
			<option>84</option>
			<option>85</option>
			<option>86</option>
			<option>87</option>
			<option>88</option>
			<option>89</option>
			<option>90</option>';
			}else{
			for ($i=2; $i<91; $i++){
			if ($start!=$i){
			echo "<option>$i</option>";
			}else{
			echo "<option selected=\"selected\">$i</option>";
			}
			}
			}
			
			
			?>
			</select>轉成<select name="enddc" id="enddc">
			<?
			
			if($end==""){
			echo '<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option selected="selected">16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
			<option>20</option>
			<option>21</option>
			<option>22</option>
			<option>23</option>
			<option>24</option>
			<option>25</option>
			<option>26</option>
			<option>27</option>
			<option>28</option>
			<option>29</option>
			<option>30</option>
			<option>31</option>
			<option>32</option>
			<option>33</option>
			<option>34</option>
			<option>35</option>
			<option>36</option>
			<option>37</option>
			<option>38</option>
			<option>39</option>
			<option>40</option>
			<option>41</option>
			<option>42</option>
			<option>43</option>
			<option>44</option>
			<option>45</option>
			<option>46</option>
			<option>47</option>
			<option>48</option>
			<option>49</option>
			<option>50</option>
			<option>51</option>
			<option>52</option>
			<option>53</option>
			<option>54</option>
			<option>55</option>
			<option>56</option>
			<option>57</option>
			<option>58</option>
			<option>59</option>
			<option>60</option>
			<option>61</option>
			<option>62</option>
			<option>63</option>
			<option>64</option>
			<option>65</option>
			<option>66</option>
			<option>67</option>
			<option>68</option>
			<option>69</option>
			<option>70</option>
			<option>71</option>
			<option>72</option>
			<option>73</option>
			<option>74</option>
			<option>75</option>
			<option>76</option>
			<option>77</option>
			<option>78</option>
			<option>79</option>
			<option>80</option>
			<option>81</option>
			<option>82</option>
			<option>83</option>
			<option>84</option>
			<option>85</option>
			<option>86</option>
			<option>87</option>
			<option>88</option>
			<option>89</option>
			<option>90</option>';
			}else{
			for ($i=2; $i<91; $i++){
			if ($end!=$i){
			echo "<option>$i</option>";
			}else{
			echo "<option selected=\"selected\">$i</option>";
			}
			}
			}
			
			?>
			</select>&nbsp;&nbsp;&nbsp;
			位數：<input name="RqfMdHSrHSlH" type="text" maxlength="4" style="height: 25px; width: 50px; color: #00FFFF; background-color: #000000; text-decoration: blink; font-family: 'Arial Narrow'; font-size: medium;" value="<?=$timeb?>">
			<br>
			<font color="red" size="-1"><b>未經過轉換後的字符串.字串越長轉換的時間將會越久。</b></font></td>
		</tr>
		<tr>
			<td style="width: 60px">&nbsp;</td>
			<td style="width: 740px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width: 60px">&nbsp;&nbsp;&nbsp; </td>
			<td style="width: 740px">
			<input name="VeRiALmjW" type="submit" value="轉換進位" style="width: 80px; height: 25px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input name="Reset1" type="reset" value="重設欄位" style="width: 80px; height: 25px"></td>
		</tr>
		<tr>
			<td style="width: 60px">&nbsp;</td>
			<td style="width: 740px">&nbsp;<?


$mtime1 = explode(" ", microtime());

$endTime = $mtime1[0] + $mtime1[1];

printf ("運算耗時：%.6fs.",$endTime-$startTime);

ob_end_flush();

?></td>
		</tr>
	</table>
</form><br><br><br><br><br><br><br><br><br>
<table style="width: 800px; float:" border="1" cellpadding="2" cellspacing="2" style="border-collapse: collapse;border: 2px solid #FFFF00;">
<tr><td>數字：</td><td>符號：</td><td>數字：</td><td>符號：</td><td>數字：</td><td>符號：</td><td>數字：</td><td>符號：</td>
<td>數字：</td><td>符號：</td><td>數字：</td><td>符號：</td><td>數字：</td><td>符號：</td><td>數字：</td><td>符號：</td></tr>
<tr><td>0</td><td>0</td><td>1</td><td>1</td><td>2</td><td>2</td><td>3</td><td>3</td>
<td>4</td><td>4</td><td>5</td><td>5</td><td>6</td><td>6</td><td>7</td><td>7</td></tr><tr><td>8</td><td>8</td><td>9</td><td>9</td><td>10</td><td>a</td><td>11</td><td>b</td>
<td>12</td><td>c</td><td>13</td><td>d</td><td>14</td><td>e</td><td>15</td><td>f</td></tr><tr><td>16</td><td>g</td><td>17</td><td>h</td><td>18</td><td>i</td><td>19</td><td>j</td>
<td>20</td><td>k</td><td>21</td><td>l</td><td>22</td><td>m</td><td>23</td><td>n</td></tr><tr><td>24</td><td>o</td><td>25</td><td>p</td><td>26</td><td>q</td><td>27</td><td>r</td>
<td>28</td><td>s</td><td>29</td><td>t</td><td>30</td><td>u</td><td>31</td><td>v</td></tr><tr><td>32</td><td>w</td><td>33</td><td>x</td><td>34</td><td>y</td><td>35</td><td>z</td>
<td>36</td><td>A</td><td>37</td><td>B</td><td>38</td><td>C</td><td>39</td><td>D</td></tr><tr><td>40</td><td>E</td><td>41</td><td>F</td><td>42</td><td>G</td><td>43</td><td>H</td>
<td>44</td><td>I</td><td>45</td><td>J</td><td>46</td><td>K</td><td>47</td><td>L</td></tr><tr><td>48</td><td>M</td><td>49</td><td>N</td><td>50</td><td>O</td><td>51</td><td>P</td>
<td>52</td><td>Q</td><td>53</td><td>R</td><td>54</td><td>S</td><td>55</td><td>T</td></tr><tr><td>56</td><td>U</td><td>57</td><td>V</td><td>58</td><td>W</td><td>59</td><td>X</td>
<td>60</td><td>Y</td><td>61</td><td>Z</td><td>62</td><td>+</td><td>63</td><td>/</td></tr><tr><td>64</td><td>=</td><td>65</td><td>-</td><td>66</td><td>*</td><td>67</td><td>~</td>
<td>68</td><td>!</td><td>69</td><td>@</td><td>70</td><td>#</td><td>71</td><td>$</td></tr><tr><td>72</td><td>%</td><td>73</td><td>^</td><td>74</td><td>&</td><td>75</td><td>(</td>
<td>76</td><td>)</td><td>77</td><td>_</td><td>78</td><td>{</td><td>79</td><td>}</td></tr><tr><td>80</td><td><</td><td>81</td><td>></td><td>82</td><td>[</td><td>83</td><td>]</td>
<td>84</td><td>'</td><td>85</td><td>`</td><td>86</td><td>,</td><td>87</td><td>.</td></tr><tr><td>88</td><td>?</td><td>89</td><td>|</td><td></td><td></td><td></td><td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</body>
</html>