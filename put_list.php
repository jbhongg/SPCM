<html>
<?php
    //include_once('admin.php');
    $conn = mysqli_connect("localhost", "root", "4321", "smartphonecase");

    session_start();
    
    
    //$p_id=$_POST['p_id'];
    $picture=$_SESSION['picture'];
    $id=$_SESSION['userid'];

    $sql1 = "select P_ID from product where Picture = '$picture'";
    $result = mysqli_query($conn,$sql1);
    $row = $result->fetch_array();

    //$result = mysqli_query($conn,$sql2) or die(mysqli_error($conn)); // sql에 던져줌
    $sql = "insert into put(U_ID, P_ID, Put_Qantity) values('$id','$row[0]','1')"; 
    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn)); // sql에 던져줌
    $conn->close();
?>
   <script type="text/javascript">alert('Put Complete!');</script>
   <meta http-equiv="refresh" content="0 url=basket.php">
</html>