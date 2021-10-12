<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<style type="text/css">
a{
color:#00cccc;
text-decoration:none;
font-size:24px;
}
a:hover{
color:#00ffff;
text-decoration:none;
font-size:24px;
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
<div class="row" style=""><img src="bankname.png" class="img-responsive  fill"  style="width:100%;object-fit:fill;" ></div><div class="row">     </div></div>

</div>
<div class=" col-xs-2 col-md-offset-10" ><a href="mainpage.php"><img src="home1.jpg" class="img-responsive img-circle"   align="right"></a></div></div>
<br><br>


<?php
include("connection.php");
$status="";
session_start();
$_SESSION['acno']=00;
if($_SERVER['REQUEST_METHOD']=='POST'){
//echo("Working");
$v1=$_POST['text1'];
$v2=$_POST['text2'];
//echo $v1." ".$v2;
$sqlvar="select *from custactab where acno=$v1 and pWord='$v2'and custapp='Y'";
$result=$conn->query($sqlvar);
if($result->num_rows>0){
$_SESSION['acno']=$v1;
$status="2";
header("location:custmainpage.php");
}
else{
$status="1";
}
}

?>
<form name="form1" method="post" action="custlogin.php">


<table class=" table  table-bordered table-responsive table-condensed center" align="center" style="border-style:solid;border-width:10px;background-color:black;width:60%;align:center;">

<tr  style="padding-top:50px;  padding-bottom:50px ;"><td colspan=2 style="font-size:48px;text-align:center;color:white;background-color:#00006f;font-weight:bold;">Customer Login</td></tr>
<tr ><td style="font-size:32px;color:white;">Account number</td><td><input  type="text1" name="text1" style="font-size:32px;width:100%;height:100%"></td></tr>
<tr><td style="font-size:32px;color:white;">Password</td><td><input  type="password" name="text2" style="font-size:32px;width:100%;height:100%"></td></tr>

<tr ><td style="color:white;background-color:gray;"><a href="mainpage.php" align="center" style="font-weight:bold;text-align:center;font-size:32px;">Back</a></td><td style="font-size:32px; "><input  type="submit" name="login" value="LogIn"  style="width:100%;background-color:green;font-weight:bold;"></td></tr>
<?php
if($status=="1")
echo("<tr ><td colspan=2 align='center'  style='font-size:32px;color:red;'>User Id and Password is incorrect</td></tr>");
?>
</table>


</form>
<br><br><br><br><br>
<div class="row">
<div class="col-xs-12" >
<p>&copy 2021, Made by <b>ANJALI PRIYA</b><br>For the project of <b>The Spark Foundation</b></p>
</div>
</div></div>
</body>
</html>