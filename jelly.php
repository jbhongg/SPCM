<!DOCTYPE html>
<html>

<head>
    <title>Design Templates</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/page_style.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- <link href="https://fonts.googleapis.com/css?family=Signika:300,400,600,700&display=swap&subset=latin-ext"
        rel="stylesheet">-->
    <style>
        #caseimg :hover{
            border: 1.5px solid purple;

        }
    </style>
</head>

<body>
    <div class="bodydiv_case">
        <div class="login">

            <div id="header">

                <!-- Nav -->
                <nav id="nav">
                    <ul>
        <li><a href="main.php">Home</a></li>
        <li><a href="#accordion">View</a></li>
        <li><a href="jelly.php">Design Templates</a></li>
<?php
        $conn = mysqli_connect("localhost:3306", "root", "4321", "smartphonecase");
 
        session_start();
 
        if(isset($_SESSION['userid'])) {
?>
        <script>
            document.write("<li><a href='order_list.php'><img src='cart.png' width='17px' height='17px'></a></li>");
            document.write("<li><a href='check_pw.php'><img src='user.png' width='17px' height='17px'></a></li>");
            document.write("<li id='logout' style='cursor: pointer;'><a href='logout.php'>LogOut</a></li>");
      </script>
<?php            
         }
      else if(isset($_SESSION['mid'])){
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
               <li><a href="jelly.php">jelly</a></li>
               <li><a href="hard.php">hard</a></li>
               <li><a href="tough.php">tough</a></li>
            </ul>
       </nav>

        <br>
        <br><!-- smart phone template -->
        <section class="case_form">
            <h2 style="text-align: center; font-size:50px ">Jelly Case</h2>
            <br><br>
            <div class="table-responsive">
                <table class="table">
                <?php

            $currentPage = 1;
            if (isset($_GET["currentPage"])) {
                $currentPage = $_GET["currentPage"];
            }
 
            //mysqli_connect()????????? ????????? ?????? ??????
            $conn = mysqli_connect("localhost", "root", "4321","smartphonecase");
            //????????? ?????? ?????? ??????
            if($conn) {

            } else {
                die("?????? ?????? : " .mysqli_error());
            }
            
            //????????? ????????? ?????? ????????? ??? ?????? ??? ?????? ?????? ??????
            $sqlCount = "SELECT count(*) FROM product where Type='jelly'";
            $resultCount = mysqli_query($conn,$sqlCount);
            if($rowCount = mysqli_fetch_array($resultCount)){
                $totalRowNum = $rowCount["count(*)"];   //php??? ?????? ????????? ????????? ?????? ??????.
            }
            //??? ?????? ?????? ????????? ?????? ????????? ??????
            if($resultCount) {
            } else {
                echo "?????? ??????: ".mysqli_error($conn);
            }
                        
            $rowPerPage = 9;   //???????????? ????????? ????????? ?????? ???
            $begin = ($currentPage -1) * $rowPerPage;
            //board ???????????? ???????????? board_no, board_title, board_user, board_date ?????? ?????? ?????????????????? ???????????? ?????? ?????? ?????? ??????
            //????????? begin?????? rowPerPage ?????? ?????? ???????????? ?????? ????????? ????????? ???????????? ??????
            $sql = "SELECT * FROM product where Type='jelly' limit ".$begin.",".$rowPerPage."";
            $result = mysqli_query($conn,$sql);
            //?????? ?????? ????????? ????????? ??????
            if($result) {

            } else {
                echo "?????? ??????: ".mysqli_error($conn);
            }


        ?>

  <section >
      

            <?php


                //???????????? ???????????? result ????????? ?????? ?????? row????????? ?????? ????????? row????????? ?????? ???????????? ????????????.
                while($row = mysqli_fetch_array($result)){ 

                    echo "<div id = 'caseimg' style='float : left ; ' >";
                  //  echo "&nbsp;&nbsp;&nbsp;&nbsp;";

                    echo "<span><b style='font-size : large'>";
                 //   echo $row["P_Name"];                    
                    echo "</b></span>";
                    
                //    echo "&nbsp;&nbsp;&nbsp;&nbsp;";

                    echo "<span style='font-size : large; color : purple'><i>";
                   // echo $row["Price"];
                    echo "</i></span>";
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";


                    echo "<a href='information.php?picture=".$row['Picture']."'><img  style = 'width:425px; height:425px' src='".$row['Picture']."'/></a><br>";
                    echo "&nbsp;&nbsp;&nbsp;";

                    echo "</div>";

/*

                    echo"<thead>";
                    echo"<tr>";
                    echo"<td class='col-sm-4' style = 'text-align : center'>";
                    echo $row["P_Name"];
                    echo "</td>";
                    echo"</tr>";
                    echo"</thead>";
                    
                    echo"<tr>";
                    echo"<th class='col-sm-4' style='text-align: center'>";
                    echo "<img  style = 'width:250px; height:250px' src='".$row['Picture']."'/><br>";
                    echo "</th>";
                    echo"</tr>";*/

                    ?>


            <?php
                }
            ?>

                <br style="clear:both"><br>
        &nbsp;&nbsp;&nbsp;&nbsp;

       <?php
       
            echo"<div class='col-12' style='text-align: center'>";
            echo"<ul class='actions'>";

            //currentPage ????????? 1?????? ????????? ?????? ????????? ????????? ????????? ???
            if($currentPage > 1 ) { 
                //?????? ????????? ???????????? GET???????????? currentPage?????? ?????? 1??? ??? ?????? ??????????????? ???
                    echo "<a class='btn btn-primary' href ='/jelly.php?currentPage=1'>&lt;&lt;</a>&nbsp;&nbsp;&nbsp;&nbsp;";

                      echo "<a class='btn btn-primary' href ='/jelly.php?currentPage=".($currentPage-1)."'>&lt;</a>&nbsp;&nbsp;&nbsp;&nbsp;";
            }
            

        
            $lastPage = ceil(($totalRowNum) / $rowPerPage);


            if($currentPage >= 1){
                echo "<a href ='/jelly.php?currentPage=".($currentPage)."'>$currentPage</a>&nbsp;&nbsp;&nbsp;&nbsp;";
                echo "<span>/<span>";
                $real_lastPage = ceil($lastPage);
                echo "<a href ='/jelly.php?currentPage=".($real_lastPage)."'>$real_lastPage</a>&nbsp;&nbsp;&nbsp;&nbsp;";

            }



            if (($totalRowNum-1) % $rowPerPage !=0) { 
                $lastPage += 1;
            }
            //lastPage????????? currentPage ???????????? ????????? ?????? ????????? ????????? ????????? ???
            if($currentPage < $lastPage) { 
                //?????? ????????? ???????????? GET???????????? currentPage?????? ?????? 1??? ?????? ?????? ??????????????? ???
                echo "<a class='btn btn-primary' href='/jelly.php?currentPage=".($currentPage+1)."'>&gt;</a>&nbsp;&nbsp;&nbsp;&nbsp;";

                echo "<a class='btn btn-primary' href ='/jelly.php?currentPage=".($real_lastPage)."'>&gt;&gt;</a>";

            }


            echo"</ul>";
            echo"</div>";
            mysqli_close($conn);
        ?>
                </table>
            </div>
        </section>


    </div>

    <!--footer-->
    <footer class="footer1 text-center">
        <br>
        <a href=""><img src="images/up.png"></a><br><br>

        <br>
        <p>1, Chungdae-ro, Seowon-gu, Cheongju-si, Chungcheongbuk-do, Republic of Korea</p>

        <div id="map" class="map_style"></div><!-- google map -->

        <br><br>
        <div class="row" style="clear:both;">
            <div class="col-sm-2">
                <p class="text-center" style="font-size: 30px;"><strong>S P C M</strong></p><br>
                <i>Smart Phone Case Mall</i>

            </div>
            <div class="col-sm-3">
                <p class="text-center"><strong style="font-size: 18px;">Contact</strong></p><br>
                <p>H.P : 010-9139-6956</p>
                <p>E-MAIL : jbhongg@naver.com</p>
                <p>H.P : 010-4102-0249</p>
                <p>E-MAIL : mkjang0905@naver.com</p>
                <p>H.P : 010-6763-8757</p>
                <p>E-MAIL : for94vi@naver.com</p>
            </div>
            <div class="col-sm-3">
                <p class="text-center"><strong style="font-size: 18px;">developer</strong></p><br>
                <p>2015041077 YuHeon Song</p>
                <p>2015041051 JunSu Heo </p>
                <p>2015041063 HaeJi Ahn </p>

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



    <script>//google map
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
        src="https://maps.googleapis.com/maps/api/js?key=API_KEY&callback=myMap"></script>
    <!--
    To use this code on your website, get a free API key from Google.
    Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
    -->

</body>

</html>