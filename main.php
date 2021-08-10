<!DOCTYPE html>
<html lang="en">

<head>
  <title>Main</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <link rel="stylesheet" href="./css/lightslider.css" />
  <link rel="stylesheet" href="./css/main_style.css" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Signika:300,400,600,700&display=swap&subset=latin-ext"
    rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.11/c3.min.css" />
  <!-- javascript -->
  <script src="https://d3js.org/d3.v3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.11/c3.min.js"></script>
  <style>
    #header {
      position: relative;
      background-image: url("ii.jpg");
      background-size: cover;
      height: 900px;
      background-position: center center;
      background-attachment: fixed;
      color: #fff;
      text-align: center;
      padding: 7.5em 0 2em 0;
      cursor: default;
    }
  </style>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="./js/lightslider.js"></script>
  <script>
    $(document).ready(function () {
      $("#content-slider").lightSlider({
        loop: true,
        keyPress: true,
        slideMargin: 2,
        speed: 1000,
        auto: true,
      });

    });


  </script>

</head>

<body>
  <div id="header">

    <!-- Inner -->
    <div class="inner">
      <header>
        <a href="" id="logo"><img src="images/t.jpg"></a>
        <hr />
        <p style="font-weight:bold; color :#4d364a">Smart Phone Case Mall</p>
      </header>
      <footer>
        <a href="#banner"><button type="button" class="button_start">Start</button></a>
      </footer>
    </div>

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
    </nav>
  </div>

  <div id="banner" class="container text-center">
    <header>
      <h2>Create your own special <strong style="color:#4d364a">Phone Case!</strong></h2>
      <p>
        You can add photos, text, and add background colors.<br />
        Cases designed by others are also available for purchase.
      </p>
    </header>
  </div>

  <!--case ex-->
  <div class="container2 text-center">
    <div class="item">
      <ul id="content-slider" class="content-slider">
        <li>
          <article>
            <a href="#"><img src="images/c2.jpg" alt="" /></a>

            <br>
            <p>Add my photos as background<br></p>
            <br>
          </article>
        </li>
        <li>
          <article>
            <a href="#"><img src="images/c7.jpg" alt="" /></a>
            <br>
            <p>You can also record a special day.</p>
            <br>
          </article>

        </li>
        <li>
          <article>
            <a href="#"><img src="images/c4.jpg" alt="" /></a>

            <br>
            <p>You can add text with pictures.</p>
            <br>
          </article>

        </li>
        <li>
          <article>
            <a href="#"><img src="images/c1.jpg" alt="" /></a>
            <br>
            <p>Make a background with your favorite celebrity photos!</p>
            <br>
          </article>
        </li>
        <li>
          <article>
            <a href="#"><img src="images/c3.jpg" alt="" /></a>

            <br>
            <p>Add a picture of your precious pet</p>
            <br>
          </article>
        </li>
        <li>
          <article>
            <a href="#"><img src="images/c5.jpg" alt="" /></a>
            <br>
            <p>Write your thoughts or good words</p>
            <br>
          </article>
        </li>
        <li>
          <article>
            <a href="#"><img src="images/c6.jpg" alt="" /></a>
            <br>
            <p>Write your name!</p>
            <br>
          </article>

        </li>
      </ul>
      <br><br>

    </div>
  </div>


  <div class="text-center">
    <div class="button-8">
      <div class="eff-8"></div>
      <a href="#accordion" style="text-decoration: none;">Let's make it! </a>
    </div>

  </div>
  <br><br><br><br>
  <!--case model-->


   <div class="panel-group text-center" id="accordion">
                    <div class="panel panel-default">
                     
                   <?php
                   /*
						          $conn = mysqli_connect("localhost", "root", "4321","smartphonecase");
						         	$sql = "select purchase.P_ID, count(purchase.P_ID) as cnt, product.Picture
                              from user,purchase,product
                              where user.Birth>='1991-01-01' && user.Birth<='2000-12-31' and user.U_ID = purchase.U_ID and purchase.P_ID = product.P_ID
                              group by purchase.P_ID
                              order by cnt desc limit 9;";
						         	$result = mysqli_query($conn,$sql);
						        	if($result) {

                       } else {
                      echo "결과 없음: ".mysqli_error($conn);
                       }

                      */ 
                    ?>
                    
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">20's best products</a>
                        </h4>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                                <div class="row text-center" style="clear:both;">
                                <?php
                                  //while ($row = $result->fetch_array()) {
                                ?>
                                        <div class="col-sm-4">
                                        <?php //echo $row["Picture"]; ?>
                                <script>
                                var info=sessionStorage.getItem('logininfo');
                                 if(info>0){
                                    document.write('<a href="jelly.php"><img src="t9.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                 }
                                 else{
                                    document.write('<a href="jelly.php"><img src="t9.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                 }   
                                </script>
                                        </div>
                                        <?php
                                         // }
                                        ?>
                                        <div class="col-sm-4">
                                <script>
                                var info=sessionStorage.getItem('logininfo');
                                 if(info>0){
                                    document.write('<a href="jelly.php"><img src="j50.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                 }
                                 else{
                                    document.write('<a href="jelly.php"><img src="j50.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                 }   
                                </script>
                                        </div>
                                        <div class="col-sm-4">
                                <script>
                                var info=sessionStorage.getItem('logininfo');
                                 if(info>0){
                                    document.write('<a href="jelly.php"><img src="h1.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                 }
                                 else{
                                    document.write('<a href="jelly.php"><img src="h1.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                 }   
                                </script>                                          
                                        </div>
                                        <div class="col-sm-4">
                                    <script>
                                      var info=sessionStorage.getItem('logininfo');
                                       if(info>0){
                                          document.write('<a href="jelly.php"><img src="h8.jpg" class="case" alt="Random Name"width="240px" height="240px"></a>');
                                       }
                                       else{
                                          document.write('<a href="jelly.php"><img src="h8.jpg" class="case" alt="Random Name"width="240px" height="240px"></a>');
                                       }   
                                     </script>   
                                                
                                              </div>
                                              <div class="col-sm-4">
                                    <script>
                                      var info=sessionStorage.getItem('logininfo');
                                       if(info>0){
                                          document.write('<a href="jelly.php"><img src="j18.jpg" class="case" alt="Random Name"width="240px" height="240px"></a>');
                                       }
                                       else{
                                          document.write('<a href="jelly.php"><img src="j18.jpg" class="case" alt="Random Name"width="240px" height="240px"></a>');
                                       }   
                                     </script>                                                
                                              </div>
                                              <div class="col-sm-4">
                                    <script>
                                      var info=sessionStorage.getItem('logininfo');
                                       if(info>0){
                                          document.write('<a href="jelly.php"><img src="j36.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                       }
                                       else{
                                          document.write('<a href="jelly.php"><img src="j36.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                       }   
                                     </script> 
                                                
                                              </div>
                                              <div class="col-sm-4">
                                       <script>
                                      var info=sessionStorage.getItem('logininfo');
                                       if(info>0){
                                          document.write('<a href="jelly.php"><img src="t36.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                       }
                                       else{
                                          document.write('<a href="jelly.php"><img src="t36.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                       }   
                                     </script> 
                                                    
                                                  </div>
                                                  <div class="col-sm-4">
                                       <script>
                                      var info=sessionStorage.getItem('logininfo');
                                       if(info>0){
                                          document.write('<a href="jelly.php"><img src="t86.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                       }
                                       else{
                                          document.write('<a href="jelly.php"><img src="t86.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                       }   
                                     </script>                                                    
                                                  </div>
                                                  <div class="col-sm-4">
                                       <script>
                                      var info=sessionStorage.getItem('logininfo');
                                       if(info>0){
                                          document.write('<a href="jelly.php"><img src="h86.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                       }
                                       else{
                                          document.write('<a href="jelly.php"><img src="h86.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                       }   
                                     </script>   
                                                    
                                                  </div>  
                         
                                      </div>
                        

                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                    <?php
                   /*
						          $conn = mysqli_connect("localhost", "root", "4321","smartphonecase");
						         	$sql = "select purchase.P_ID, count(purchase.P_ID) as cnt, product.Picture
                              from user,purchase,product
                              where user.Birth>='1981-01-01' && user.Birth<='1990-12-31' and user.U_ID = purchase.U_ID and purchase.P_ID = product.P_ID
                              group by purchase.P_ID
                              order by cnt desc limit 9;";
						         	$result = mysqli_query($conn,$sql);
						        	if($result) {

                       } else {
                      echo "결과 없음: ".mysqli_error($conn);
                       }

                      */ 
                    ?>
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">30's best product</a>
                        </h4>
                      </div>
                      <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                                <div class="row text-center" style="clear:both;">
                                        <div class="col-sm-4">
                                 <script>
                                   var info=sessionStorage.getItem('logininfo');
                                 if(info>0){
                                    document.write('<a href="jelly.php"><img src="j66.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                    }
                                 else{
                                    document.write('<a href="jelly.php"><img src="j66.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                    }   
                                 </script>   
                                          
                                        </div>
                                        <div class="col-sm-4">
                                    <script>
                                   var info=sessionStorage.getItem('logininfo');
                                 if(info>0){
                                    document.write('<a href="jelly.php"><img src="j45.jpg" class="case" alt="Random Name"  width="240px" height="240px"></a>');
                                    }
                                 else{
                                    document.write('<a href="jelly.php"><img src="j45.jpg" class="case" alt="Random Name"  width="240px" height="240px"></a>');
                                    }   
                                 </script>
                                                
                                        </div>
                                        <div class="col-sm-4">
                                <script>
                                   var info=sessionStorage.getItem('logininfo');
                                 if(info>0){
                                    document.write('<a href="jelly.php"><img src="h45.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                    }
                                 else{
                                    document.write('<a href="jelly.php"><img src="h45.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                    }   
                                 </script>
                                          
                                        </div>
                                     
                                              <div class="col-sm-4">
                                          <script>
                                               var info=sessionStorage.getItem('logininfo');
                                             if(info>0){
                                                document.write('<a href="jelly.php"><img src="t55.jpg" class="case" alt="Random Name"  width="240px" height="240px"></a>');
                                                }
                                             else{
                                                document.write('<a href="jelly.php"><img src="t55.jpg" class="case" alt="Random Name"  width="240px" height="240px"></a>');
                                                }   
                                          </script>
                                                      
                                              </div>
                                              <div class="col-sm-4">
                                    <script>
                                               var info=sessionStorage.getItem('logininfo');
                                             if(info>0){
                                                document.write('<a href="jelly.php"><img src="h99.jpg" class="case" alt="Random Name"  width="240px" height="240px"></a>');
                                                }
                                             else{
                                                document.write('<a href="jelly.php"><img src="h99.jpg" class="case" alt="Random Name"  width="240px" height="240px"></a>');
                                                }   
                                          </script>
                                                
                                              </div>
                                              <div class="col-sm-4">
                                       <script>
                                               var info=sessionStorage.getItem('logininfo');
                                             if(info>0){
                                                document.write('<a href="jelly.php"><img src="h63.jpg" class="case" alt="Random Name"  width="240px" height="240px"></a>');
                                                }
                                             else{
                                                document.write('<a href="jelly.php"><img src="h63.jpg" class="case" alt="Random Name"  width="240px" height="240px"></a>');
                                                }   
                                          </script>
                                                    
                                                  </div>
                                                  <div class="col-sm-4">
                                            <script>
                                               var info=sessionStorage.getItem('logininfo');
                                             if(info>0){
                                                document.write('<a href="jelly.php"><img src="h2.jpg" class="case" alt="Random Name"  width="240px" height="240px"></a>');
                                                }
                                             else{
                                                document.write('<a href="jelly.php"><img src="h2.jpg" class="case" alt="Random Name"  width="240px" height="240px"></a>');
                                                }   
                                          </script>
                                                          
                                                  </div>
                                                  <div class="col-sm-4">
                                       <script>
                                               var info=sessionStorage.getItem('logininfo');
                                             if(info>0){
                                                document.write('<a href="jelly.php"><img src="j77.jpg" class="case" alt="Random Name"  width="240px" height="240px"></a>');
                                                }
                                             else{
                                                document.write('<a href="jelly.php"><img src="j77.jpg" class="case" alt="Random Name"  width="240px" height="240px"></a>');
                                                }   
                                          </script>
                                                    
                                                  </div>
                                              
                                                <div class="col-sm-4">
                                      <script>
                                               var info=sessionStorage.getItem('logininfo');
                                             if(info>0){
                                                document.write('<a href="jelly.php"><img src="h92.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                                }
                                             else{
                                                document.write('<a href="jelly.php"><img src="h92.jpg" class="case" alt="Random Name" width="240px" height="240px"></a>');
                                                }   
                                          </script>
                                                </div>
                                      </div>
                        </div>
                      </div>
                    </div>

                  </div>
                


  <br><br><br>
  <div style="padding-left : 10%; padding-right : 8%;">
                     <?php
  
						          $conn = mysqli_connect("localhost", "root", "4321","smartphonecase");
						         	$sql = "select product.Type, count(product.Type) as cnt
                      from user,purchase,product
                      where user.Birth>='1991-01-01' && user.Birth<='2000-12-31' && user.Gender = 'F' and 
                      user.U_ID = purchase.U_ID and purchase.P_ID = product.P_ID
                      group by product.Type
                      order by cnt;";
						         	$result = mysqli_query($conn,$sql);
						        	if($result) {

                       } else {
                      echo "결과 없음: ".mysqli_error($conn);
                       }

                      
                    ?>
  <table >
  <tr><td colspan="8" style="font-size:30px; text-align:center;">Sales rate by age and gender</td></tr>

  <tr>
  <td style="width : 300px">
  <div >
  <h3 style="text-align: center; font-family: 'Signika', sans-serif;">20's Female </h3><br><br>
  <div id="chart"  ></div>
  <script>
    var chart=c3.generate({
      bindto: '#chart',

      data:{
        json:{
          sale:['1','2','3','4','5','6'],
          hard:[140,50,60,160,50,90],
          jelly:[80,70,60,20,100,90],
          tough:[150,20,20,30,40,100]
        },
        x:'sale',
        type:'pie',
        colors: {
          hard: '#f8b500',
             tough: '#74b49b',
            jelly: '#f9989f'

        }
      }
    })
  </script>
</div>
</td>
<td style="width:100px;"></td>
                    
                    <?php
                    /*
						          $conn = mysqli_connect("localhost", "root", "4321","smartphonecase");
						         	$sql = "select purchase.P_ID, count(purchase.P_ID) as cnt, product.Picture
                              from user,purchase,product
                              where user.Birth>='1981-01-01' && user.Birth<='1990-12-31' and user.U_ID = purchase.U_ID 
                              and purchase.P_ID = product.P_ID
                              group by purchase.P_ID
                              order by cnt desc limit 9;";
						         	$result = mysqli_query($conn,$sql);
						        	if($result) {

                       } else {
                      echo "결과 없음: ".mysqli_error($conn);
                       }
                       */
                    ?>
                    
<td style="width : 300px">
  <div >
  <h3 style="text-align: center; font-family: 'Signika', sans-serif;">20's Male</h3><br><br>
  <div id="chart2"  ></div>
  <script>
    var chart=c3.generate({
      bindto: '#chart2',

      data:{
        json:{
          sale:['1','2','3','4','5','6'],
          hard:[40,30,50,70,30,60],
          jelly:[100,70,60,120,140,120],
          tough:[50,120,20,10,40,190]
        },
        x:'sale',
        type:'pie',
        colors: {
          hard: '#f8b500',
             tough: '#74b49b',
            jelly: '#f9989f'

        }
      }
    })
  </script>
</div>
</td>
<td style="width:100px;"></td>

<td style="width : 300px">
  <div >
                    <?php
                    /*
						          $conn = mysqli_connect("localhost", "root", "4321","smartphonecase");
						         	$sql = "select product.Type, count(product.Type) as cnt
                              from user,purchase,product
                              where user.Birth>='1981-01-01' && user.Birth<='1990-12-31' && user.Gender = 'F' 
                              and user.U_ID = purchase.U_ID and purchase.P_ID = product.P_ID
                              group by product.Type
                              order by cnt;";
						         	$result = mysqli_query($conn,$sql);
						        	if($result) {

                       } else {
                      echo "결과 없음: ".mysqli_error($conn);
                       }
                       */
                    ?>
  <h3 style="text-align: center; font-family: 'Signika', sans-serif;">30's Female</h3><br><br>
  <div id="chart3"  ></div>
  <script>
    var chart=c3.generate({
      bindto: '#chart3',

      data:{
        json:{
          sale:['1','2','3','4','5','6'],
          hard:[80,30,60,150,130,60],
          jelly:[100,70,60,120,140,120],
          tough:[50,120,20,110,40,190]
        },
        x:'sale',
        type:'pie',
        colors: {
          hard: '#f8b500',
             tough: '#74b49b',
            jelly: '#f9989f'

        }
      }
    })
  </script>
</div>
</td>
<td style="width:100px;"></td>

<td style="width : 300px">
  <div >
                      <?php
                      /*
						          $conn = mysqli_connect("localhost", "root", "4321","smartphonecase");
						         	$sql = "select product.Type, count(product.Type) as cnt
                              from user,purchase,product
                              where user.Birth>='1981-01-01' && user.Birth<='1990-12-31' && user.Gender = 'M' 
                              and user.U_ID = purchase.U_ID and purchase.P_ID = product.P_ID
                              group by product.Type
                              order by cnt;";
						         	$result = mysqli_query($conn,$sql);
						        	if($result) {

                       } else {
                      echo "결과 없음: ".mysqli_error($conn);
                       }
                      */
                    ?>
  <h3 style="text-align: center; font-family: 'Signika', sans-serif;">30's Male</h3><br><br>
  <div id="chart4"  ></div>
  <script>
    var chart=c3.generate({
      bindto: '#chart4',

      data:{
        json:{
          sale:['1','2','3','4','5','6'],
          hard:[140,130,50,70,100,160],
          jelly:[100,70,60,120,140,120],
          tough:[150,150,120,110,140,190]
        },
        x:'sale',
        type:'pie',
        colors: {
          hard: '#f8b500',
             tough: '#74b49b',
            jelly: '#f9989f'

        }
      }
    })
  </script>
</div>
</td>
</tr>
</table>
</div>


<br><br><br>


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