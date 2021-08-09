<html>
	<meta charset="utf-8" />
<?php
$conn = mysqli_connect("localhost:3306", "root", "4321", "smartphonecase");

session_start();
 
 $id=$_POST['UID'];
 $date=$_POST['Rdate'];
 $validity= date("Y-m-d", strtotime($date." +4 year"));
 if($_SESSION['userid'] == $id){ 
	$sql = "SELECT U_ID FROM membership_card where U_ID='{$id}'";
	$result = $conn-> query($sql);
	if($result->num_rows > 0){
?>
		 <script type="text/javascript">alert('Card is Exist!');</script>
<?php
	}
	else{
		$sql = "insert into membership_card (U_ID, Issued_Date, Validity)";             
		$sql = $sql. "values('$id','$date','$validity')";        
		$result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
?>
	<script type="text/javascript">alert('Card Regist Complete!');</script>
<?php
    }
 }
 else{
?> 
	 <script type="text/javascript">alert('Incorrect ID');</script>
<?php
 }
 
$conn->close();
?>
<meta http-equiv="refresh" content="0 url=card.php">
</html>