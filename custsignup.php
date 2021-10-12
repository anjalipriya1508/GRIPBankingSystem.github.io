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
input{
color:black;
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
textarea{
color:black;
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
$status= " ";
if($_SERVER['REQUEST_METHOD']=='POST'){
//echo("Working");

$v1=$_POST['text1'];
$v2=$_POST['text2'];
$v3=$_POST['text4'];
$v4=$_POST['text5'];
$v5=$_POST['text6'];
$v6=$_POST['text7'];
$v8=$_POST['text3'];
$v7=$_SESSION['actype'];
//echo $v1." ".$v2;
$sqlvar="insert into custactab values ($v1,'$v2','$v3','$v4',$v5,'$v6','$v7','N')";
if($v2==$v8){
$result=$conn->query($sqlvar);
$status="1";
if($result){
$res="1";
}
else{
$res="2";
}
}
else{
$status="2";

}
}
else{

$_SESSION['actype']=$_GET['actype'];
}


?>
<form name="form1" method="post" action="custsignup.php">
<br>
<table class=" table  table-bordered table-responsive table-condensed center" align="center" style="border-style:solid;border-width:10px;background-color:black;width:60%;align:center;color:white;">

<tr><td colspan=2 style="font-size:48px;text-align:center;font-weight:bold;">Customer Sign Up</td></tr>
<tr><td style="font-size:18px;">Account Number :</td><td><input  type="text" name="text1" style="font-size:18px;width:100%;height:100%"></td></tr>
<tr><td style="font-size:18px;">Password</td><td><input  type="password" name="text2" style="font-size:18px;width:100%;height:100%"></td></tr>
<tr><td style="font-size:18px;">RetypePassword</td><td><input  type="password" name="text3" style="font-size:18px;width:100%;height:100%"></td></tr>
<tr><td style="font-size:18px;">Person name</td><td><input  type="text" name="text4" style="font-size:18px;width:100%;height:100%"></td></tr>
<tr><td style="font-size:18px;" style="font-size:18px;width:100%;height:100%">Address</td><td ><textarea  rows=4 name="text5" style="font-size:18px;width:100%;height:100%"></textarea></td></tr>
<tr><td style="font-size:18px;">Mobile No. </td><td><input  type="text" name="text6" style="font-size:18px;width:100%;height:100%"></td></tr>
<tr><td style="font-size:18px;">Email</td><td><input  type="text" name="text7" style="font-size:18px;width:100%;height:100%"></td></tr>
<tr ><td style="font-size:24px;color:white;background-color:gray;"><a href="custacdetlist.php" align="center" style="font-weight:bold;text-align:center;">Back</a></td><td style="font-size:24px; background-color:green;"><input  align="center" type="submit" name="login" value="Deposit"  style="padding-right:10px;  padding-left:10px ;font-weight:bold;background-color:green;text-align:center;"></td></tr>
<?php
if($res=="1")
echo("<tr ><td colspan=2 align='center'  style='font-size:24px;color:green;font-weight:bold;'>Record inserted Sucessfully</td></tr>");
else if($res=="2")
echo("<tr ><td colspan=2 align='center'  style='font-size:24px;color:red;font-weight:bold;'>Not Successfully inserted record,Some Problem</td></tr>");
if($status=="2")
echo("<tr ><td colspan=2 align='center'  style='font-size:24px;color:red;font-weight:bold;'>Password not match</td></tr>");



?>
</table>
</form>
<div class="row">
<div class="col-xs-12" >
<p>&copy 2021, Made by <b>ANJALI PRIYA</b><br>For the project of <b>The Spark Foundation</b></p>
</div>
</div></div>
</body>
</html>