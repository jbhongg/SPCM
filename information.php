<!DOCTYPE html>
<html>

<head>
    <title>Custom</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/page_style.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Signika:300,400,600,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <script src="custom.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/fabric.js"></script>
    <script src="jquery.minicolors.js"></script>
    <link rel="stylesheet" href="jquery.minicolors.css">
    <link
        href="https://fonts.googleapis.com/css?family=Amatic+SC|Anton|Lobster|Pacifico|Shadows+Into+Light|Teko&display=swap"
        rel="stylesheet">
    <style>

    </style>

    <script>
        $(document).ready(function () {

            $('.demo').each(function () {
                //
                // Dear reader, it's actually very easy to initialize MiniColors. For example:
                //
                //  $(selector).minicolors();
                //
                // The way I've done it below is just for the demo, so don't get confused
                // by it. Also, data- attributes aren't supported at this time. Again,
                // they're only used for the purposes of this demo.
                //
                $(this).minicolors({
                    control: $(this).attr('data-control') || 'hue',
                    defaultValue: $(this).attr('data-defaultValue') || '',
                    format: $(this).attr('data-format') || 'hex',
                    keywords: $(this).attr('data-keywords') || '',
                    inline: $(this).attr('data-inline') === 'true',
                    letterCase: $(this).attr('data-letterCase') || 'lowercase',
                    opacity: $(this).attr('data-opacity'),
                    position: $(this).attr('data-position') || 'bottom',
                    swatches: $(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : [],
                    change: function (hex, opacity) {
                        var log;
                        try {
                            log = hex ? hex : 'transparent';
                            if (opacity) log += ', ' + opacity;
                            console.log(log);
                        } catch (e) { }
                    },
                    theme: 'default'
                });

            });

        });
    </script>
    <script>
        function logout() {
            sessionStorage.setItem('logininfo', 0);
            window.location.href("main.html");
        }
    </script>
</head>

<body>
    <div class="bodydiv4">
        <div class="login">

            <div id="header">

                <!-- Nav -->
                <nav id="nav">
                    <ul>
        <li><a href="main.php">Home</a></li>
        <li><a href="#accordion">Custom</a></li>
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

        <div>
            <!--Custom section-->
             <div style= "margin-top: 7%; margin-right: 20%;  float:right;">
            <?php
            $conn = mysqli_connect("localhost:3306", "root", "4321", "smartphonecase");

            $picture=$_GET["picture"];
 
            //$sql = "SELECT * FROM product where Picture ='{$picture}'";
            $sql = "SELECT Pro.Type, Pro.Earn_Point, Pro.Price, S.Sup_Name, group_concat(D.Area)
                  From product as Pro, supplier as S, delivery_area as D
                  where Pro.Picture = '{$picture}' AND Pro.P_ID = D.P_ID AND Pro.Sup_ID = S.Sup_ID";
                     $result = mysqli_query($conn,$sql);
                     if($result) {

            } else {
                echo "결과 없음: ".mysqli_error($conn);
            }

             while ($row = $result->fetch_array()){
                    echo "<span style='font-size:25px; color:purple'>Delivery Area :</span>";
               echo "<p style = 'font-size:15px'>".$row['group_concat(D.Area)']."</p>";
               echo "<span style='font-size:25px;color:purple'>State :</span>";
               echo "<span style='font-size:25px;'>".$row['Type']."</span>";
               echo "<br>";
               echo "<span style='font-size:25px;color:purple'>Earn Point :</span>";
               echo "<span style='font-size:25px;'>".$row['Earn_Point']."</span>";
               echo "<br>";
               echo "<span style='font-size:25px;color:purple'>Supplier : </span>";
               echo "<span style='font-size:25px;'>".$row['Sup_Name']."</span>";
               echo "<br>";
               echo "<span style='font-size:25px;color:purple'>Price :</span>";
               echo "<span style='font-size:25px;'>".$row['Price']."</span>";
               $var = $row['Price'];
               $_SESSION['picture'] = $picture;
               echo "<br>";
            }
            ?>
                <form name="form" method="post" action="purchase.php">
                              <hr>
                <label for="exampleInputAddress" class="label_font" >Kind</label><br>

                    <select class="form-control" name="kind" id="kind" required> 
                        <optgroup label="IPHONE">
                        <option value="IPHONE6" selected="selected">IPHONE6</option> 
                        <option value="IPHONE6PLUS" >IPHONE6PLUS</option> 
                        <option value="IPHONE6S">IPHONE6S</option> 
                        <option value="IPHONE7">IPHONE7</option> 
                        <option value="IPHONE7PLUS">IPHONE7PLUS</option> 
                        <option value="IPHONE8">IPHONE8</option> 
                        <option value="IPHONE8PLUS">IPHONE8PLUS</option> 
                        <option value="IPHONEX">IPHONEX</option> 
                        <option value="IPHONEX">IPHONEXR</option> 
                        <option value="IPHONEX">IPHONEXS</option> 
                            </optgroup>

                            <optgroup label="GALAXY">

                        <option value="GALAXY S7">GALAXY S7</option> 
                        <option value="GALAXY S7Edge">GALAXY S7Edge</option> 
                        <option value="GALAXY S8">GALAXY S8</option> 
                        <option value="GALAXY S8PLUS">GALAXY S8PLUS</option> 
                        <option value="GALAXY S9">GALAXY S9</option> 
                        <option value="GALAXY S9PLUS">GALAXY S9PLUS</option> 
                        <option value="GALAXY S10">GALAXY S10</option> 
                        <option value="GALAXY S10E">GALAXY S10E</option> 
                        <option value="GALAXY S10PLUS">GALAXY S10PLUS</option> 
                        <option value="GALAXY NOTE8">GALAXY NOTE8</option> 
                        <option value="GALAXY NOTE9">GALAXY NOTE9</option> 
                        
                    </optgroup>

                    </select><br>
                <hr>
                    <label for="exampleInputQantity" class="label_font" >Qantity</label><br>

                    <input class="form-control"type="text" name="amount" value="0" id="qantity" size="3" onchange="change();">
                    <input class="form-control" style="width: 50px;float:left" type= "button" value=" + " onclick="add();">
                    <input class="form-control" style="width: 50px" type="button" value=" - " onclick="del();"><br>
                  
                    <label for="exampleInputPrice" class="label_font" > Use Point</label><br>
                    <input class="form-control"type="text" name="amount2" value="0" id = "point" size="3" onchange="change2();">
                    <input class="form-control" style="width: 50px;float:left" type= "button" value=" + " onclick="add2();">
                    <input class="form-control" style="width: 50px" type="button" value=" - " onclick="del2();"><br><br>

                    <label for="exampleInputPrice" class="label_font" > Total Price</label><br>

                    <input class="form-control"type="text" name="sum" id = "total" value="" style="width: 100px;float:left" readonly>원
               <br><br>
                    <label for="exampleInputMethod" class="label_font" >Payment Method</label><br>
                    <select class="form-control" style = "width:110px; " name="payment" id="payment" required> 
                        <option value="transfer" >Transfer</option> 
                        <option value="Creditcard" >Credit card</option> 
                    </select>
                    <br>
                    <div>
                        <input type="submit" class="btn btn-primary" style="width: 100px"; id="submit" value="Buy" />
                  <button type="button" class="btn btn-primary" style="width: 100px"; onclick="location.href='put_list.php';">Put</button>
                    </div>
  
                </form><br>
                    <script>
                        var sell_price='<?php echo $var;?>';
                        var amount;
                  var amount2;

                        function add() {
                            hm = document.form.amount;
                     hm2 = document.form.amount2;
                            sum = document.form.sum;
                            hm.value++;

                            sum.value = parseInt(hm.value) * '<?php echo $var;?>' - parseInt(hm2.value);
                        }
                  
                  function add2() {
                            hm = document.form.amount2;
                            sum = document.form.sum;
                     if (hm.value >=0) {
                        hm.value= parseInt(hm.value)+ parseInt(100);
                        sum.value = parseInt(sum.value) - parseInt(100);
                     }
                        }

                        function del() {
                            hm = document.form.amount;
                     hm2 = document.form.amount2;
                            sum = document.form.sum;
                            if (hm.value >= 1) {
                                hm.value--;
                                sum.value = parseInt(hm.value) * '<?php echo $var;?>' + parseInt(hm2.value);
                            }
                        }
                  
                      function del2() {
                            hm = document.form.amount2;
                            sum = document.form.sum;
                            if (hm.value > 1) {
                                hm.value=parseInt(hm.value) - parseInt(100);
                                sum.value = parseInt(sum.value) + parseInt(100);
                            }
                        }

                        function change() {
                            hm = document.form.amount;
                            sum = document.form.sum;

                            if (hm.value < 0) {
                                hm.value = 0;
                            }
                            sum.value = parseInt(hm.value) * '<?php echo $var;?>';
                        }
                     function change2() {
                            hm = document.form.amount;
                            sum = document.form.sum;

                            if (hm.value < 0) {
                                hm.value = 0;
                            }
                            sum.value = parseInt(hm.value) * '<?php echo $var;?>';
                        }                    
                    </script>
                    <script>
                        $('#buy').click(function () {
                            var check = confirm('Are you sure BUY this design?');
                            if (check) {
                                array = {};
                                array['product'] = $("#product").html();
                                array['price'] = $("#price").html();
                                sessionStorage.setItem("prodinfo", JSON.stringify(array));
                                alert('Thank you :)')
                                window.location.href = 'order.html';
                            }
                        });
                    </script>
                    <script>
                        $('#wishlist').click(function () {
                            var check = confirm('The item is in your cart.');
                            if (check) {
                                array = {};
                                array['product'] = $("#product").html();
                                array['price'] = $("#price").html();
                                sessionStorage.setItem("prodinfo", JSON.stringify(array));
                                alert('Thank you :)')
                                window.location.href = 'basket.html';
                            }
                        });
                    </script>
                    <script>
                        function formsubmit() {
                            var info = sessionStorage.getItem('logininfo');
                            var obj1 = sessionStorage.getItem('user' + info);

                            var obj = JSON.parse(obj1);

                            var x = $("form").serializeArray();
                            var array = {};

                            $.map(x, function (n, i) {
                                array[n['name']] = n['value'];
                            });

                            var pinfo1 = sessionStorage.getItem('prodinfo');
                            var pinfo = JSON.parse(pinfo1);

                            array['product'] = pinfo.product;
                            array['price'] = pinfo.price;


                            var order = sessionStorage.getItem("ordernum" + info);
                            order++;
                            sessionStorage.setItem("ordernum" + info, order);

                            sessionStorage.setItem(obj.id + info + "order" + order, JSON.stringify(array));
                            window.parent.location.href = "main.html";
                            return false;
                        }
                    </script>
                    </script>
            </div>
             <div style=" margin-top: 7%; width: 40%; height: 80%; padding-left:20%; float:left;">

                <div >
                <?php
            $conn = mysqli_connect("localhost:3306", "root", "4321", "smartphonecase");

            $picture=$_GET["picture"];
 
            echo "<img src='".$picture."' width='800px' heigth='1400px' />";

             ?>
                </div>

            </div>
   
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