<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/ico.png">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <title>Adulis</title>
</head>
<body>
    <!-- ===========nav========== -->
    <section class="nav">
          <div class="nav_container">
                 <div class="nav_logo">
                     <img src="images/ico.png" height="150px" width="150px" placeholder="search..">
                 </div>
                 <div class="nav_info">
                     <form action="" method="POST">
                        <i class="fas fa-search"></i>
                        <input type="search" name="serach" id="serach">
                     </form>
                     <a href="#home">HOME</a>
                     <a href="#categories">CATEGORIES</a>
                     <a href="#"><?php
                           session_start();
                           $n =  $_SESSION["username"];
                          echo $n; 
                      ?></a>
                     <a href="index.php">LOGOUT</a>

                 </div>
          </div>
    </section>

    <!-- ==========home page ========= -->
    <section  >
        <div class="home_container"id="home" >
        <div class="home_info" >
                 <h1>Adulis</h1>
                 <p>a simple onlineshopping website<br> project</p>
                 <a href="">Buy</a>
        </div>
        <div class="home_image">
            <img src="images/m.png" alt="">
        </div>
    </div>
    </section>
    <!-- ====================categories================ -->
    <section class="categories" id="categories">
            <div class="categories_container">
                  <h1>Categories</h1>
                  <div class="line"></div>
                <div class="catcontainer">
                    <a href="soap.html">
                    <div class="soap" id="l"> 
                         <img src="images/so.jpg" class="io" width="150px" height="100px" >
                         <p>soap</p>
                    </div></a>
                    <a href="snacks.html">
                    <div class="snacks" id="l">
                        <img src="images/Sn.jpg"  class="io" width="150px" height="100px" alt="">
                        <p>snacks</p>
                    </div>
                </a>
                   <a href="beverage.html">
                    <div class="beverage" id="l">
                        <img src="images/bev.jpg"  class="io" width="150px" height="100px" alt="">
                        <p>beverage</p>
                    </div>
                </a>
                  <a href="electronics.html">
                    <div class="electronics" id="l">
                        <img src="images/el.jpeg"  class="io" width="100px" height="100px" alt="">
                        <p>electronics</p>
                    </div>
                </a>
                  <a href="laptops.html">
                    <div class="laptops" id="l">
                         <img src="images/lap.jpg"  class="io"width="100px" height="100px" alt="">
                         <p>laptops</p>
                    </div>
                </a>
                 <a href="phones.html">
                    <div class="phones" id="l">
                          <img src="images/p.jpg"  class="io" width="100px" height="100px"alt="">
                          <p>phones</p>
                    </div>
                </a>
                </div>
            </div>
    </section>
    <section class="footer">
        <footer>
              <div class="f_top">
                     <h1>Adulis</h1>
              </div>
              <div class="f_bot">
                    <p>copyright©2021 adulis</p>
              </div>
        </footer>
    </section>
</body>
</html>