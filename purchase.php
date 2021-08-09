<html>
	<meta charset="utf-8" />
<?php
$conn = mysqli_connect("localhost:3306", "root", "4321", "smartphonecase");
    session_start();
    $today = date("Ymd");
    $id=$_SESSION['userid'];
    $picture=$_SESSION['picture'];
    $kind=$_POST['kind'];
    $qantity=$_POST['amount'];
    $point=$_POST['amount2'];
    $payment=$_POST['payment'];
    $total=$_POST['sum'];
    $shipid = mt_rand(1,5);  //random
    $expect_date = date("Y-m-d", strtotime($today." +7 day"));


    $sql1 = "select P_ID from product where Picture = '$picture'";
    $result = mysqli_query($conn,$sql1);
    $row = $result->fetch_array();

    $sql = "insert into purchase(U_ID, P_ID, Payment_Method, Purchase_Date,Purchase_Qantity, Use_Point, Kind, Total_Price) 
    values('$id','$row[0]','$payment','$today','$qantity','$point','$kind','$total')"; 
    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn)); // sql에 던져줌

    $sql2 = "insert into Ship(U_ID, P_ID, Ship_ID,Expected_Arrival_Date)
    values('$id','$row[0]','$shipid','$expect_date')";
    $result2 = mysqli_query($conn,$sql2) or die(mysqli_error($conn)); // sql에 던져줌



    $conn->close();
?>

<script type="text/javascript">alert('Purchase complete!');</script>
<meta http-equiv="refresh" content="0 url=order_list.php">
</html>
