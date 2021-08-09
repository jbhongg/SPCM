<!DOCTYPE html>
<html>

<head>
    <title>profile</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/page_style.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Signika:300,400,600,700&display=swap&subset=latin-ext"
        rel="stylesheet">

    <style>

    </style>
</head>

<body>
    <div class="bodydiv2">
        <div class="login">

            <div id="header">

                <!-- Nav -->
                <nav id="nav">
                    <ul>
                  <li><a href="main.php">Home</a></li>
                  <li><a href="main.php#accordion">View</a></li>
                  <li><a href="jelly.php">Design Templates</a></li>
<?php
        $conn = mysqli_connect("localhost:3306", "root", "4321", "smartphonecase");
 
        session_start();

       if(isset($_SESSION['mid'])){
?>
      <script>
            document.write("<li id='admin' style='cursor: pointer;'><a href='admin.php'>Admin</a></li>");
            document.write("<li id='logout' style='cursor: pointer;'><a href='logout.php'>LogOut</a></li>");
      </script>
<?php            
         }
      else{
?>
         <script>   
            document.write("<li id='login'><a href='login.php'>Login</a></li>");
      </script>
<?php
      }                                
?>
                    </ul>
                    <a href="main.php" id="logo"><img src="images/t.jpg" style=""></a>

                </nav>
            </div>

        </div>

        <nav id="nav2">
             <ul>
                <li><a href="admin.php">Regist</a></li>
                <li><a href="profile.php">User Info</a></li>

             </ul>
        </nav>

        <section class="orderlist_form">
            <h2 style="text-align: center; font-size:50px">Customer Information List</h2>
            <br>

            <form name="join" method="post" action="search.php" >
                <div class="form-group" >
                    <label for="search" class="label_font"  >search</label><br>
                    <input type="text" class="form-control" style="width : 150px; float : left" name="search" id="search" placeholder="Enter search" required>
                    <input type="submit" class="btn btn-primary" id="submit" value="Search" />
                </div>             
            </form> 

            <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr style="background-color: rgb(192, 159, 192)">
                            <th class="col-sm-2">User ID</th>
                            <th class="col-sm-2">User Name</th>
                            <th class="col-sm-2">Gender</th>
                            <th class="col-sm-3">Tel</th>
                            <th class="col-sm-3">Email</th>
                        </tr>
                    </thead>
                    <?php
$conn = mysqli_connect("localhost:3306", "root", "4321", "smartphonecase");
 
 $search=$_POST['search'];


 $sql = "select * from user where U_Name = '{$search}'";             
 $result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
 
$conn->close();

if($result->num_rows>0){
    while($row=$result -> fetch_assoc()){
        echo "<tr><td class='col-sm-2'>";
        echo $row["U_ID"];
        echo "</td>";
        echo "<td class='col-sm-2'>";
        echo $row["U_Name"];
        echo "</td>";
        echo "<td class='col-sm-2'>";
        echo $row["Gender"];
        echo "</td>";
        echo "<td class='col-sm-3'>";
        echo $row["U_Tel"];
        echo "</td>";
        echo "<td class='col-sm-3'>";
        echo $row["U_Email"];
        echo "</td></tr>";
    }
}
?>              
                </table>
            </div>

        </section>
</div>
</div>
<!--영어로 바꿀 예정-->
<footer class="footer1 text-center">
        <br>
        <a href=""><img src="images/up.png"></a><br><br>

        <br>
        <p>1, Chungdae-ro, Seowon-gu, Cheongju-si, Chungcheongbuk-do, Republic of Korea</p>

        <div id="map" class="map_style"></div>

        <br><br>
        <div class="row" style="clear:both;">
            <div class="col-sm-2">
                <p class="text-center" style="font-size: 30px;"><strong>S P C M</strong></p><br>
                <i>Smart Phone Case Mall</i>

            </div>
            <div class="col-sm-3">
                <p class="text-center"><strong style="font-size: 18px;">Contact</strong></p><br>
                <p>H.P : 010-4102-0249</p>
                <p>E-MAIL : mkjang0905@naver.com</p>
                <p>H.P : 010-6763-8757</p>
                <p>E-MAIL : for94vi@naver.com</p>
                <p>H.P : 010-9139-6956</p>
                <p>E-MAIL : jbhong@naver.com</p>
            </div>
            <div class="col-sm-3">
                <p class="text-center"><strong style="font-size: 18px;">developer</strong></p><br>
                <p>2015041051 Jang Moonki</p>
                <p>2015041063 Ahn HaeJi </p>
                <p>2015041077  Hong Jinbin</p>

            </div>
            <div class="col-sm-2">
                <p class="text-center"><strong style="font-size: 18px;">IPHONE</strong></p><br>
                <a href="" class="footer_a">Iphone 6</a><br>
                <a href="" class="footer_a">Iphone 6 Plus</a><br>
                <a href="" class="footer_a">Iphone 6S</a><br>
                <a href="" class="footer_a">Iphone 6S Plus</a><br>
                <a href="" class="footer_a">Iphone 7</a><br>
                <a href="" class="footer_a">Iphone 7 Plus</a><br>
                <a href="" class="footer_a">Iphone 8</a><br>
                <a href="" class="footer_a">Iphone 8 Plus</a><br>
                <a href="" class="footer_a">Iphone X</a><br>
                <a href="" class="footer_a">Iphone XR</a><br>
                <a href="" class="footer_a">Iphone XS</a><br>
            </div>
            <div class="col-sm-2">
                <p class="text-center"><strong style="font-size: 18px;">GALAXY</strong></p><br>
                <a href="" class="footer_a">Galaxy S7</a><br>
                <a href="" class="footer_a">Galaxy S7 Edge</a><br>
                <a href="" class="footer_a">Galaxy S8</a><br>
                <a href="" class="footer_a">GALAXY S8 Plus</a><br>
                <a href="" class="footer_a">Galaxy S9</a><br>
                <a href="" class="footer_a">Galaxy S9 Plus</a><br>
                <a href="" class="footer_a">Galaxy S10</a><br>
                <a href="" class="footer_a">Galaxy S10E</a><br>
                <a href="" class="footer_a">Galaxy S10 Plus</a><br>
                <a href="" class="footer_a">Galaxy Note 8</a><br>
                <a href="" class="footer_a">Galaxy Note 9</a><br>

            </div>
        </div>

    </footer>



    <script>
        function myMap() {
            var mapCanvas = document.getElementById("map");
            var myCenter = new google.maps.LatLng(36.625638, 127.454392);
            var mapOptions = {
                center: myCenter,
                zoom: 15
            };
            var map = new google.maps.Map(mapCanvas, mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
                animation: google.maps.Animation.BOUNCE
            });
            marker.setMap(map);
        }
    </script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAlOjojzJqN5CEy7iGWtTTiWgCMiPUhXI&callback=myMap"></script>
    <!--
    To use this code on your website, get a free API key from Google.
    Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
    -->

</body>

</html>