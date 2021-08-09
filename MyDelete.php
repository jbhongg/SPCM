<html>
	<meta charset="utf-8" />
<?php
$conn = mysqli_connect("localhost:3306", "root", "4321", "smartphonecase");

session_start();
 
 $sql = "delete from user where U_ID='".$_SESSION['userid']."'";                 
 $result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
 
 $result = session_destroy();
 
$conn->close();
?>

<script type="text/javascript">alert('Secession Complete');</script>
<meta http-equiv="refresh" content="0 url=login.php">
</html>