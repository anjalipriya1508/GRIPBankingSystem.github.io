
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

<div class="row" style="background-color:#44103c;">
<div class="col-xs-3" ><img src="bank.jfif" class="img-responsive img-circle"  style="width:100%;" ></div>
<div class=" col-xs-9" >
<div class="row" style="color:white;font-weight:bold;font-size:72px;text-align:center;"><img src="bankname.png" class="img-responsive  fill"  style="width:100%;object-fit:fill;" ></div>
</div>
</div>
<div class=" col-xs-2 col-md-offset-10" ><a href="mainpage.php"><img src="home1.jpg" class="img-responsive img-circle"   align="right"></a></div></div>

<?php
include("connection.php");
session_start();
$res= "";
if($_SERVER['REQUEST_METHOD']=='POST'){
//echo("Working");

$v1=$_POST['text1'];
$v2=$_POST['text2'];
$v3=$_POST['text3'];
$v4=$_POST['text4'];
//echo $v1." ".$v2;
$sqlvar="insert into actypetab values ('$v1','$v2','$v3','$v4')";
$result=$conn->query($sqlvar);

if($result){
$res="1";
}
else{
$res="2";
}
}

?>
<form name="form1" method="post" action="adminacdet.php">
<br><br><br><br>
<table class=" table  table-bordered table-responsive table-condensed center" align="center" style="border-style:solid;border-width:10px;background-color:black;width:60%;align:center;">

<tr ><td colspan=2 style="font-size:48px;text-align:center;color:white;background-color:#00006f;font-weight:bold;">AC Type Entry</td></tr>
<tr ><td style="font-size:32px;color:white;">Bank Name :</td><td><input  type="text1" name="text1" style="font-size:32px;width:100%;height:100%"></td></tr>

<tr><td style="font-size:32px;color:white;">Branch Name</td><td><input  type="text" name="text2" style="font-size:32px;width:100%;height:100%"></td></tr>

<tr ><td style="font-size:32px;color:white;">Facilities</td><td><input  type="text1" name="text3" style="font-size:32px;width:100%;height:100%"></td></tr>
<tr ><td style="font-size:32px;color:white;">Minimum Balance</td><td><input  type="text1" name="text4" style="font-size:32px;width:100%;height:100%"></td></tr>
<tr ><td style="font-size:32px;color:white;background-color:gray;"><a href="adminmainpage.php" align="center" style="font-weight:bold;text-align:center;">Back</a></td><td style="font-size:32px; background-color:green;"><input  align="center" type="submit" name="login" value="LogIn"  style="padding-right:10px;  padding-left:10px ;font-weight:bold;background-color:green;text-align:center;"></td></tr>


<?php
if($res=="1")
echo("<tr ><td colspan=2 align='center'  style='font-size:32px;color:green;'>Record Inserted</td></tr>");
else if($res=="2")
echo("<tr ><td colspan=2 align='center'  style='font-size:32px;color:red;'>Record not Inserted,Some Problem</td></tr>");


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