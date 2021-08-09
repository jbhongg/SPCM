<html>
	<meta charset="utf-8" />
<?php
$conn = mysqli_connect("localhost:3306", "root", "4321", "smartphonecase");
 
 $name=$_POST['name'];
 $id=$_POST['id'];
 $password=$_POST['pw'];
 $email=$_POST['email'];
 $tel=$_POST['phone'];
 $region=$_POST['region'];
 $si=$_POST['si'];
 $gu=$_POST['gu'];
 $dong=$_POST['dong'];
 $gender=$_POST['gender'];
 $birth=$_POST['birth'];
 
 $sql = "insert into user (U_ID, U_PW, U_Name, U_Tel, U_Email, Birth, U_Region, U_City, U_Gu, U_Dong, Gender)";             
 $sql = $sql. "values('$id','$password','$name', '$tel', '$email', '$birth', '$region', '$si', '$gu', '$dong', '$gender')";        
 $result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
 
$conn->close();
?>

<script type="text/javascript">alert('Join Complete');</script>
<meta http-equiv="refresh" content="0 url=login.php">
</html>