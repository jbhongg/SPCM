<html>
	<meta charset="utf-8" />
<?php
    //include_once('admin.php');
    $conn = mysqli_connect("localhost", "root", "4321", "smartphonecase");
    
    //$p_id=$_POST['p_id'];
    $picture=$_POST['picture'];
    $p_name=$_POST['Pname'];
    $type=$_POST['type'];
    $price=$_POST['price'];
    $earn_point=$_POST['point'];
    $regist_date=$_POST['Rdate'];
    $sup_id=$_POST['sup'];
    $m_id=$_POST['AName'];
    $var = count($_POST['region']);
    //$var = (is_array($region)) ? count($region) : 0;

    $sql = "insert into product(Picture,P_Name,Type,Price,Earn_Point,Regist_Date,Sup_ID,M_ID) 
    values('$picture','$p_name', '$type', '$price', '$earn_point', '$regist_date', '$sup_id' ,'$m_id')";     
    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn)); // sql에 던져줌
    for($i=0;$i<$var;$i++){
        $position = $_POST['region'];
        $sql2 = "insert into delivery_area(P_ID,Area) values(last_insert_id(),'$position[$i]')";
        if($position[$i]){
            $result2 = mysqli_query($conn,$sql2) or die(mysqli_error($conn)); // sql에 던져줌
        }
        
    }
    
    
   
    $conn->close();
    ?>

   <script type="text/javascript">alert('Regist complete!');</script>
   <meta http-equiv="refresh" content="0 url=admin.php">
</html>