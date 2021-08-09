<html>
	<meta charset="utf-8" />
<?php	
	session_start();
	
    $conn = mysqli_connect("localhost:3306", "root", "4321", "smartphonecase");
	
	$id=$_POST['id'];
	$password=$_POST['pw'];
	//POST로 받아온 아이다와 비밀번호가 비었다면 알림창을 띄우고 전 페이지로 돌아갑니다.
	$sql = "select U_ID from user where U_ID = '$id'";
	$result = $conn-> query($sql);

	if($result->num_rows > 0)
	{     
		$sql = "select U_PW from user where U_PW = '$password'";
		$result = $conn-> query($sql);
		if($result->num_rows > 0){
			$_SESSION['userid'] = $id;
			$_SESSION['userpw'] = $password;
?>
			<script type="text/javascript">alert('Login Success!');</script>
			<meta http-equiv="refresh" content="0 url=./main.php"> 
<?php
		}
		else{
?>
			 <script type="text/javascript">alert('Incorrect ID or PW');</script>
			 <meta http-equiv="refresh" content="0 url=login.php"> 
<?php
		}
    }
    else{  
		 $sql = "select M_ID from manager where M_ID = '$id'";
		 $result = $conn-> query($sql);
		 if($result->num_rows > 0){
			 $sql = "select M_PW from manager where M_PW = '$password'";
			 $result = $conn-> query($sql);
			 if($result->num_rows > 0){
				$_SESSION['mid'] =$id;
?>
				<script type="text/javascript">alert('Manager Login Success');</script>
				<meta http-equiv="refresh" content="0 url=./main.php"> 
<?php			
			}
			else{
?>
				<script type="text/javascript">alert('Incorrect ID or PW);</script>
				<meta http-equiv="refresh" content="0 url=login.php">
<?php				
			}
		 }
		 else{
?>                                                 
         <script type="text/javascript">alert('Incorrect ID or PW');</script>
		 <meta http-equiv="refresh" content="0 url=login.php"> 
<?php			 
		}
	}
?>