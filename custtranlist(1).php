<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<style type="text/css">
td{
font-size:18px;
color:white;
}
a{
color:#00006f;
text-decoration:none;
}
a:hover{
color:blue;
text-decoration:none;
}
#m{
font-size:18px;
color:white;
background-color:#00006f;
font-weight:bold;
}
#n{
font-size:32px;
color:white;
background-color:#00002f;
font-weight:bold;
text-align:center;
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
<div class="row" style="color:white;font-weight:bold;font-size:72px;text-align:center;"><img src="bankname.png" class="img-responsive  fill"  style="width:100%;object-fit:fill;" ></div></div></div>

</div>
<div class=" col-xs-2 col-md-offset-10" ><a href="mainpage.php"><img src="home1.jpg" class="img-responsive img-circle"   align="right"></a></div></div>
<br><br>

<table class=" table  table-bordered table-responsive table-condensed center" align="center" style="border-style:solid;border-width:10px;background-color:black;width:60%;align:center;">

<?php
include("connection.php");
session_start();
$v1=$_SESSION['acno'];

?>
<tr><td colspan=6 id='n'><marquee behavior="alternate"> Transaction List of  "  <?php  echo($v1); ?> " </marquee></td></tr>
<tr ><td id="m">Trans No</td><td id="m"> Date</td><td id="m"> To Acc No</td><td id="m">Db Amt</td><td id="m">Cr Amt</td><td id="m"> Details</td></tr>

<?php
$sqlvar="select * from transaction where acno=$v1 order by tranNo desc";
$result=$conn->query($sqlvar);
while($row=$result->fetch_row()){
echo("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td></tr>");
}
?>

<tr ><td colspan=7 style="font-size:32px;color:white;background-color:gray;"><a href="custmainpage.php" align="center" style="font-weight:bold;text-align:center;">Back</a></td></tr>

 
</table><br><br><br><br><br><br><br><br>
 <div class="row">
<div class="col-xs-12" >
<p>&copy 2021, Made by <b>ANJALI PRIYA</b><br>For the project of <b>The Spark Foundation</b></p>
</div>
</div></div>
</body>
</html>