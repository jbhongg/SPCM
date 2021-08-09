<html>
   <meta charset="utf-8">
<?php
$conn = mysqli_connect("localhost:3306", "root", "4321", "smartphonecase");

 $id=$_GET["userid"];
 $sql = "SELECT U_ID FROM user where U_ID='{$id}'";
 $result = $conn-> query($sql);
	 if($result->num_rows > 0)
	 {
?>
	 <div style='font-family:"malgun gothic"; color:red;'><?php echo $id; ?> is Dupicate.</div>
<?php 
	 }else{
?>
	 <div style='font-family:"malgun gothic"';><?php echo $id; ?> is Available<div>
<?php
	 }
	 $conn->close();
?>
 <button value="close" onclick="window.close()">close</button>
 <script>
 </script>
 </html>