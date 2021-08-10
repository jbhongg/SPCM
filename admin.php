<!DOCTYPE html>
<html>

<head>
    <title>Card</title>
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
    <div class="bodydiv_admin">
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
        <section class="admin_form">
            <h2 style="text-align: center; font-size:50px">Register product</h2>
            <br><br>
                
            <form method = "POST" action = "register.php" >
                <div class="form-group">
                    <label class="label_font" >Product Name</label><br>
                    <input type="text" class="form-control"  name="Pname" id="Pname" placeholder="Product Name" required>
                </div>
                <div class="form-group">
                    <label class="label_font" >file</label><br>
                    <input type="file" name="picture" id="picture" required>
                </div><br>
                <div class="form-group">
                    <label class="label_font" >Product Type</label><br>
                    <select class="form-control" style = "width:140px; " name="type" id="type" required> 
                        <option value="hard" >hard</option> 
                        <option value="clear" >Jelly</option> 
                        <option value="Tough" >tough</option> 
                    </select>
                </div>
                <div class="form-group">
                    <label class="label_font"style="width:150px; float:left" >Product Price</label>
                    <label class="label_font" >Product Point</label><br>
                    <input type="text" class="form-control"  style="width:150px; float:left"name="price" id="price" placeholder="Product price" required>
                    <input type="text" class="form-control"  style="width:150px; float:left" name="point" id="point" placeholder="Product point" required>
                </div><br><br>
                <div class="form-group">
                    <label for="exampleInputArea" class="label_font" >Shipping area</label><br>
                           <input type="checkbox" value="Seoul" name="region[]" id="region" /> Seoul
                        <input type="checkbox" value="Gyungki" name="region[]" id="region" />Gyungki
                        <input type="checkbox" value="Incheon" name="region[]" id="region" />Incheon
                        <input type="checkbox" value="Busan" name="region[]" id="region" />Busan
                        <input type="checkbox" value="Daegu" name="region[]" id="region" />Daegu
                        <br>
                        <input type="checkbox" value="Gwangju" name="region[]" id="region" />Gwangju
                        <input type="checkbox" value="Daejeon" name="region[]" id="region" />Daejeon
                        <input type="checkbox" value="Ulsan" name="region[]" id="region" />Ulsan
                        <input type="checkbox" value="Gangwon" name="region[]" id="region" />Gangwon
                        <input type="checkbox" value="Chungbuk" name="region[]" id="region" />Chungbuk
                        <br>
                        <input type="checkbox" value="Chungnam" name="region[]" id="region" />Chungnam
                        <input type="checkbox" value="Jeonbuk" name="region[]" id="region" />Jeonbuk
                        <input type="checkbox" value="Jeonnam" name="region[]" id="region" />Jeonnam
                        <input type="checkbox" value="Gyungbuk" name="region[]" id="region" />Gyungbuk
                        <Br>
                        <input type="checkbox" value="Gyungnam" name="region[]" id="region" />Gyungnam
                        <input type="checkbox" value="Jeju" name="region[]" id="region" />Jeju

                </div><br>
				 <div class="form-group" >
                    <label class="label_font"style="width:150px; float:left" >Admin ID</label><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <label class="label_font" >Supplier</label><br> 
                    <input type="text" class="form-control" style="width:150px; float:left"  name="AName" id="AName" >

                <select class="form-control" style = "width:180px; float:left" name="sup" id="sup" required  > 
                    <option value="1" selected="selected">SW</option> 
                    <option value="2" >FLEX</option> 
                    <option value="3">KAKAO</option> 
                    <option value="4">AZU</option> 
                    <option value="5">SPC</option> 
                    <option value="6">NAU</option> 
                    <option value="7">RKHM</option> 
                    <option value="8">LKT</option> 
                    <option value="9">SEMSOONG</option> 
                    <option value="10">BLKJJ</option> 

                </select><br>
                </div><br> 
                <div class="form-group">
                    <label class="label_font" >Register Date</label><br>
                    <input type="date" class="form-control"  name="Rdate" id="Rdate" value="2019-08-28" readonly >
                    <script>
                        document.getElementById('Rdate').value = new Date().toISOString().substring(0, 10);;
                      </script>
                </div><br><br>
                <div class="col-12" style="text-align: center">
                    <ul class="actions">
                        <li><button type="submit" class="btn btn-primary" id="submit">SUBMIT</button></li>
                        <li><button type="reset" class="btn btn-primary">RESET</button></li>

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
        src="https://maps.googleapis.com/maps/api/js?key=API_KEY&callback=myMap"></script>
    <!--
    To use this code on your website, get a free API key from Google.
    Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
    -->

</body>

</html>