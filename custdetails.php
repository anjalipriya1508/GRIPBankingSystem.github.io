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
#m{
font-size:24px;
color:white;
background-color:black;
padding:10px;
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
#n{
font-size:32px;
color:white;
font-weight:bold;
background-color:#00006f;
padding:10px;
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
<div class=" col-xs-2 col-md-offset-10" ><a href="mainpage.php"><img src="home1.jpg" class="img-responsive img-circle"   align="right"></a></div></div><br><br>

<table class=" table  table-bordered table-responsive table-condensed center" align="center" style="border-style:solid;border-width:10px;width:50%">



<?php
include("connection.php");
session_start();
$v1=$_SESSION['acno'];
$sqlvar="select * from custactab where acno=$v1";
$result=$conn->query($sqlvar);
while($row=$result->fetch_row()){
echo("<tr><td colspan=2 id='n'><marquee behavior='alternate'>Welcome  ".$row[2]."</marquee></td></tr>
<tr><td id='m'>AC No</td><td  id='m'>".$row[0]."</td></tr>
<tr><td  id='m'>Name</td><td  id='m'>".$row[2]."</td></tr>
<tr><td  id='m'>Address</td><td  id='m'>".$row[3]."</td></tr>
<tr><td  id='m'>Mobile Number</td><td  id='m'>".$row[4]."</td></tr>
<tr><td  id='m'>E- Mail</td><td  id='m'>".$row[5]."</td></tr>
<tr><td  id='m'>AC Type</td><td  id='m'>".$row[6]."</td></tr>");
}
?>


<tr ><td colspan=2 style="font-size:32px;color:white;background-color:gray;"><a href="custmainpage.php" align="center" style="font-weight:bold;text-align:center;">Back</a></td></tr>
</table>
<div class="row">
<div class="col-xs-12" >
<p>&copy 2021, Made by <b>ANJALI PRIYA</b><br>For the project of <b>The Spark Foundation</b></p>
</div>
</div></div>
</body>
</html>