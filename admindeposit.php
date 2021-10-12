<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<style type="text/css">
a{
color:#00006f;
text-decoration:none;
}
a:hover{
color:blue;
text-decoration:none;
}
p{
background-color:#00003f;
color:white;
font-size:24px;
text-align:center;
margin:0px;
padding:0px;
}
body{

height:auto;
width:100%;
background-repeat:no-repeat;
background-size:100% 100%;
}
</style>
</head>
<body background="Bank_pic.jpg">


<div class="container-fluid">

<div class="row" style="background-color:#00003f;">
<div class="col-xs-3" ><img src="bank.jfif" class="img-responsive img-circle"  style="width:100%;" ></div>
<div class=" col-xs-9" >
<div class="row" style="color:white;font-weight:bold;font-size:72px;text-align:center;"><img src="bankname.png" class="img-responsive  fill"  style="width:100%;object-fit:fill;" ></div><div class="row">     </div></div>

</div>
<div class=" col-xs-2 col-md-offset-10" ><a href="mainpage.php"><img src="home1.jpg" class="img-responsive img-circle"   align="right"></a></div></div>
<?php
include("connection.php");
session_start();
$res= " ";
echo("<p style='text-align:left;background-color:#87cefa;font-weight:bold;
font-size:24px;'> <marquee behavior='alternate'>Date :".date('Y/m/d')."</marquee></p>");

if($_SERVER['REQUEST_METHOD']=='POST'){
//echo("Working");

$v1=$_POST['text1'];
$v2=$_POST['text2'];
$v3=$_POST['text3'];

//echo $v1." ".$v2;
$nvar=1001;
$sqlvar="select max(tranno)+1 from transaction";
$result=$conn->query($sqlvar);

if($row=$result->fetch_row()){
$nvar=$row[0];
}
if($nvar==null){
$nvar=1001;
}

$d1=date('Y/m/d');


$sqlvar="insert into transaction values ($nvar,'$d1',$v1,'By Bank',$v2,0,'$v3')";
$result=$conn->query($sqlvar);

if($result){
$res="1";
}
else{
$res="2";
}
}

?>
<form name="form1" method="post" action="admindeposit.php">
<br><br>
<table class=" table  table-bordered table-responsive table-condensed center" align="center" style="border-style:solid;border-width:10px;background-color:black;width:60%;align:center;">

<tr ><td colspan=2 style="font-size:48px;text-align:center;color:white;background-color:#00006f;font-weight:bold;">Deposit Entry</td></tr>
<tr ><td style="font-size:32px;color:white;">Account Number </td><td><input  type="text1" name="text1" style="font-size:32px;width:100%;height:100%"></td></tr>
<tr><td style="font-size:32px;color:white;">Amount</td><td><input  type="text" name="text2" style="font-size:32px;width:100%;height:100%"></td></tr>
<tr ><td style="font-size:32px;color:white;">Ac Details</td><td><input  type="text" name="text3" style="font-size:32px;width:100%;height:100%"></td></tr>
<tr ><td style="font-size:32px;color:white;background-color:gray;"><a href="adminmainpage.php" align="center" style="font-weight:bold;text-align:center;">Back</a></td><td style="font-size:32px; background-color:green;"><input  align="center" type="submit" name="login" value="Deposit"  style="padding-right:10px;  padding-left:10px ;font-weight:bold;background-color:green;text-align:center;"></td></tr>

<?php
if($res=="1")
echo("<tr ><td colspan=2 align='center'  style='font-size:32px;color:green;'>Deposit Sucessfully</td></tr>");
else if($res=="2")
echo("<tr ><td colspan=2 align='center'  style='font-size:32px;color:red;'>Not Successfully deposit,Some Problem</td></tr>");


?>
</table>
</form><br><br><br><br>
<div class="row">
<div class="col-xs-12" >
<p>&copy 2021, Made by <b>ANJALI PRIYA</b><br>For the project of <b>The Spark Foundation</b></p>
</div>
</div></div>
</body>
</html>