<html>
	<meta charset="utf-8" />
<?php
$conn = mysqli_connect("localhost:3306", "root", "4321", "smartphonecase");

session_start();
 
 $password=$_POST['pw'];
 $email=$_POST['email'];
 $tel=$_POST['phone'];
 $region=$_POST['region'];
 $si=$_POST['si'];
 $gu=$_POST['gu'];
 $dong=$_POST['dong'];
 
 $sql = "UPDATE user SET U_PW = '".$password."', U_Tel = '".$tel."', U_Email = '".$email."', U_Region = '".$region."', U_City = '".$si."', U_Gu = '".$gu."', U_Dong = '".$dong."' where U_ID='".$_SESSION['userid']."'";                 
 $result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
 
 $result = session_destroy();
 
$conn->close();
?>

<script type="text/javascript">alert('Change Complete!');</script>
<meta http-equiv="refresh" content="0 url=login.php">
</html>