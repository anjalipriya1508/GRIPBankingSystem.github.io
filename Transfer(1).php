<?php
include("connection.php");
session_start();
$res= " ";
//echo(date('Y/m/d'));

if($_SERVER['REQUEST_METHOD']=='POST'){
//echo("Working");

$v1=$_SESSION['acno'];
$v2=$_POST['text2'];
$v3=$_POST['text3'];
$v4=$_POST['text1'];

//echo $v1." ".$v2;
$nvar=1001;
$sqlvar="select max(tranno)+1 from transtab";
$result=$conn->query($sqlvar);

if($row=$result->fetch_row()){
$nvar=$row[0];

}

if($nvar==null){
$nvar=1001;
}

$d1=date('Y/m/d');


$sqlvar3="insert into transtab values ($nvar,'$d1',$v1,$v4,$v2,'$v3')";

$sqlvar1="insert into transaction values ($nvar,'$d1','$v1','$v4',0,$v2,'$v3')";

$sqlvar2="insert into transaction values ($nvar,'$d1','$v4','$v1',$v2,0,'$v3')";

$result=$conn->query($sqlvar3);
$result=$conn->query($sqlvar1);
$result=$conn->query($sqlvar2);
if($result){
$res="1";
}
else{
$res="2";
}
}

?>
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
<div class="row" style="color:white;font-weight:bold;font-size:72px;text-align:center;"><img src="bankname.png" class="img-responsive  fill"  style="width:100%;object-fit:fill;" ></div></div></div>

</div>
<div class=" col-xs-2 col-md-offset-10" ><a href="mainpage.php"><img src="home1.jpg" class="img-responsive img-circle"   align="right"></a></div></div>
<br>


<form name="form1" method="post" action="Transfer(1).php">
<br><br><br><br>
<table class=" table  table-bordered table-responsive table-condensed center" align="center" style="border-style:solid;border-width:10px;background-color:black;width:60%;align:center;">
<tr  style="padding-top:50px;  padding-bottom:50px ;"><td colspan=2 style="font-size:48px;text-align:center;color:white;background-color:#00006f;font-weight:bold;">Transfer Money</td></tr>
<tr ><td style="font-size:32px;color:white;">To Account Number :</td><td><input  type="text1" name="text1" style="font-size:32px;width:100%;height:100%"></td></tr>
<tr ><td style="font-size:32px;color:white;">Amount :</td><td><input  type="text" name="text2" style="font-size:32px;width:100%;height:100%"></td></tr>
<tr ><td style="font-size:32px;color:white;">Transfer Details</td><td><input  type="text" name="text3" style="font-size:32px;width:100%;height:100%"></td></tr>
<tr ><td style="font-size:32px;color:white;background-color:gray;"><a href="custmainpage.php" align="center" style="font-weight:bold;text-align:center;">Back</a></td><td style="font-size:32px; background-color:green;"><input  align="center" type="submit" name="login" value="Transfer"  style="padding-right:10px;  padding-left:10px ;font-weight:bold;background-color:green;text-align:center;"></td></tr>


<?php
if($res=="1")
echo("<tr ><td colspan=2 align='center'  style='font-size:32px;color:green;'>Transfered Sucessfully</td></tr>");
else if($res=="2")
echo("<tr ><td colspan=2 align='center'  style='font-size:32px;color:red;'>Not Successfully transfered,Some Problem</td></tr>");


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