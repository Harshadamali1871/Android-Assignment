<?php
$con=mysqli_connect("localhost","root"," ","orphanages");
if(!$con)
{
echo"not connected to server";
}
$dname=$_POST['dn1'];
$dmail=$_POST['id'];
$daddr=$_POST['dn2'];
$mobno=$_POST['dn3'];
$cardno=$_POST['dn4'];
$cvv=$_POST['dn5'];
$exp=$_POST['dn6'];
$amt=$_POST['dn7'];
$amot=$_POST['dn8'];
$sql="insert into donarinfo(Donar_name,Email_Id,Address,Mobile_no,Card_No,CVV,Expiry_dt,Amt,Amount)
values('$dname','$dmail','$daddr','$mobno','$cardno','$cvv','$exp','$amt','$amot')";

if(!mysqli_query($con,$sql))
{
echo"not inserted";
}
else
{
echo"inserted";
}

mysqli_close($con);
?>


