<!DOCTYPE html>
<html>

<head>
    <title>orderList</title>
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

                       <div>
        
                <table class="table ">
            

                <?php

            $currentPage = 1;
            if (isset($_GET["currentPage"])) {
                $currentPage = $_GET["currentPage"];
            }
 
            //mysqli_connect()함수로 커넥션 객체 생성
            $conn = mysqli_connect("localhost", "root", "4321","smartphonecase");
            //커넥션 객체 생성 확인
            if($conn) {

            } else {
                die("연결 실패 : " .mysqli_error());
            }
            
            //페이징 작업을 위한 테이블 내 전체 행 갯수 조회 쿼리
            $sqlCount = "SELECT count(*) FROM user";
            $resultCount = mysqli_query($conn,$sqlCount);
            if($rowCount = mysqli_fetch_array($resultCount)){
                $totalRowNum = $rowCount["count(*)"];   //php는 지역 변수를 밖에서 사용 가능.
            }
            //행 갯수 조회 쿼리가 실행 됐는지 여부
            if($resultCount) {
            } else {
                echo "결과 없음: ".mysqli_error($conn);
            }
                        
            $rowPerPage = 10;   //페이지당 보여줄 게시물 행의 수
            $begin = ($currentPage -1) * $rowPerPage;
            //board 테이블을 조회해서 board_no, board_title, board_user, board_date 필드 값을 내림차순으로 정렬하여 모두 가져 오는 쿼리
            //입력된 begin값과 rowPerPage 값에 따라 가져오는 행의 시작과 갯수가 달라지는 쿼리
            $sql = "SELECT U_ID,U_Name,Gender,U_Tel,U_Email FROM user  limit ".$begin.",".$rowPerPage."";
            $result = mysqli_query($conn,$sql);
            //쿼리 조회 결과가 있는지 확인
            if($result) {

            } else {
                echo "결과 없음: ".mysqli_error($conn);
            }
        ?>

  <section >
            <div >
            <table class="table ">

            <?php
                                    echo"<thead>";
                                    echo"<tr style='background-color: rgb(192, 159, 192)'>";
                                    echo"<th class='col-sm-2'>User ID</th>";
                                    echo"<th class='col-sm-2'>User Name</th>";
                                    echo"<th class='col-sm-2'>Gender</th>";
                                    echo"<th class='col-sm-3'>Tel</th>";
                                    echo"<th class='col-sm-3'>Email</th>";
                                    echo"</tr>";
                                    echo"</thead>";
                //반복문을 이용하여 result 변수에 담긴 값을 row변수에 계속 담아서 row변수의 값을 테이블에 출력한다.
                while($row = mysqli_fetch_array($result)){ 
            ?>
            
                <tr>
                    <td class='col-sm-2'>
                        <?php
                            echo $row["U_ID"];
                        ?>
                    </td>
                    <td class='col-sm-2'>
                        <?php
                            echo $row["U_Name"];
                        ?>
                    </td>
                    <td class='col-sm-2'>
                        <?php
                            echo $row["Gender"];
                        ?>
                    </td>
                    <td class='col-sm-3'>
                        <?php
                            echo $row["U_Tel"];
                        ?>
                    </td >
                    <td class='col-sm-3'>
                        <?php
                            echo $row["U_Email"];
                        ?>
                        </td>
                </tr>
            <?php
                }
            ?>
        </table>

       <?php
       
            echo"<div class='col-12' style='text-align: center'>";
            echo"<ul class='actions'>";

            //currentPage 변수가 1보다 클때만 이전 버튼이 활성화 되도록 함
            if($currentPage > 1 ) { 
                //이전 버튼이 클릭될때 GET방식으로 currentPage변수 값에 1을 뺀 값이 넘어가도록 함
                    echo "<a class='btn btn-primary' href ='/profile.php?currentPage=1'>&lt;&lt;</a>&nbsp;&nbsp;&nbsp;&nbsp;";

                      echo "<a class='btn btn-primary' href ='/profile.php?currentPage=".($currentPage-1)."'>&lt;</a>&nbsp;&nbsp;&nbsp;&nbsp;";
            }
            

        
            $lastPage = ceil(($totalRowNum-1) / $rowPerPage);


            if($currentPage >= 1){
                echo "<a href ='/profile.php?currentPage=".($currentPage)."'>$currentPage</a>&nbsp;&nbsp;&nbsp;&nbsp;";
                echo "<span>/<span>";
                $real_lastPage = $lastPage+1;
                echo "<a href ='/profile.php?currentPage=".($real_lastPage)."'>$real_lastPage</a>&nbsp;&nbsp;&nbsp;&nbsp;";

            }



            if (($totalRowNum-1) % $rowPerPage !=0) { 
                $lastPage += 1;
            }
            //lastPage변수가 currentPage 변수보다 클때만 다음 버튼이 활성화 되도록 함
            if($currentPage < $lastPage) { 
                //다음 버튼이 클릭될때 GET방식으로 currentPage변수 값에 1을 더한 값이 넘어가도록 함
                echo "<a class='btn btn-primary' href='/profile.php?currentPage=".($currentPage+1)."'>&gt;</a>&nbsp;&nbsp;&nbsp;&nbsp;";

                echo "<a class='btn btn-primary' href ='/profile.php?currentPage=".($real_lastPage)."'>&gt;&gt;</a>";

            }


            echo"</ul>";
            echo"</div>";
            mysqli_close($conn);
        ?>
        &nbsp;&nbsp;


                    <script>
                        var info = sessionStorage.getItem('logininfo');
                        var user = sessionStorage.getItem('user' + info);
                        var id = JSON.parse(user);
                        var n = sessionStorage.getItem('ordernum' + info);

                        for (var i = 1; i <= n; i++) {

                            var obj1 = sessionStorage.getItem(id.id + info + "order" + i);
                            var obj = JSON.parse(obj1);

                            document.write("<tbody>");
                            document.write("<tr>");
                            document.write("<td>" + i + "</td>");
                            document.write("<td>" + obj.product + "</td>");
                            document.write("<td>" + "Name : " + obj.name + "<br />H.P : " + obj.number + "<br />Addr : " + obj.addr + "</td>");
                            document.write("<td>Order Complete</td>");
                            document.write("</tr>");
                            document.write("</tbody>");
                        }
                    </script>
                </table>
            </div>
        </section>
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