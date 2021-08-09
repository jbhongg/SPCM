<!DOCTYPE html>
<html>

<head>
    <title>Change_info</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/page_style.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Signika:300,400,600,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <style>

    </style>
</head>

<body>
    <div id="results"></div>
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
 
        if(isset($_SESSION['userid'])) {
?>
        <script>
				document.write("<li><a href='order_list.php'><img src='cart.png' width='17px' height='17px'></a></li>");
				document.write("<li><a href='check_pw.php'><img src='user.png' width='17px' height='17px'></a></li>");
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
	
        <section class="join_form">
            <h2 style="text-align: center; font-size:50px; ">Changing information </h2>
            <br><br>
            <form method="Post" action="change_user.php">
                <div class="form-group">
                    <label for="exampleInputPassword" class="label_font">Password</label>
                    <input type="password" class="form-control" name="pw" id="pw" placeholder="Password" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="label_font">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                </div>
                <br>
                <div class="form-group">
                    <label class="label_font">Phone Number</label>
                    <input type="tel" class="form-control" name="phone" id="phone" pattern="[0-1]{3}-[0-9]{4}-[0-9]{4}"
                        required placeholder="Enter Phone Number">
                </div>
				<div class="form-group">
                    <label for="exampleInputAddress" class="label_font" >address</label><br>

                    <select class="form-control" style = "width:110px; " name="region" id="region" required> 
                        <option value="Seoul" selected="selected">Seoul</option> 
                        <option value="Gyungki" >Gyungki</option> 
                        <option value="Incheon">Incheon</option> 
                        <option value="Busan">Busan</option> 
                        <option value="Daegu">Daegu</option> 
                        <option value="Gwangju">Gwangju</option> 
                        <option value="Daejeon">Daejeon</option> 
                        <option value="Ulsan">Daejeon</option> 

                        <option value="Gangwon">Gangwon</option> 
                        <option value="Chungbuk">Chungbuk</option> 
                        <option value="Chungnam">Chungnam</option> 
                        <option value="Jeonbuk">Jeonbuk</option> 
                        <option value="Jeonnam">Jeonnam</option> 
                        <option value="Gyungbuk">Gyungbuk</option> 
                        <option value="Gyungnam">Gyungnam</option> 
                        <option value="Jeju">Jeju</option> 
                    </select><br>
                    <input type="text" class="form-control" style = "width:110px ; float : left" name="si" id="si" placeholder="Enter si" required>
                    <input type="text" class="form-control" style = "width:110px; float : left" name="gu" id="gu" placeholder="Enter gu" required>
                    <input type="text" class="form-control" style = "width:110px; float : left" name="dong" id="dong" placeholder="Enter dong" required>

                </div>
                <br><br>
                <div class="col-12" style="text-align: center">
                    <ul class="actions">
                        <li><button type="submit" class="btn btn-primary">SUBMIT</button></li>
                        <li><button type="reset" class="btn btn-primary">RESET</button></li>
						<li><button type="button" class="btn btn-primary" onclick="location.href='MyDelete.php';">Secession</button>
                    </ul>
                </div>
            </form>

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