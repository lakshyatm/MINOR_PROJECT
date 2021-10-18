<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Brother Electronics</title>

    <!--Required Script Files-->
    <?php require_once 'template/required-script.php'; ?>
    <!--/Required Script File-->
    
</head>
<body>
    <!--Start Header-->
       
        <header id ="header" >  
            <!--Header-->
            <?php require_once 'template/header.php'; ?>
            <!--/Header-->

       </header>
    <!--/Start Header-->

    <!--Main Site-->
        <main id="main-site">

          <!-- Owl-carousel For Banner -->
            <section id="banner-area" class="pb-3 box">
              <div class="owl-carousel owl-theme">
                  <div class="item">
                    <img src="./assest/Banner1.png" alt="Banner1">
                  </div>
                  <div class="item">
                    <img src="./assest/Banner2.png" alt="Banner2">
                  </div>
                  <div class="item">
                    <img src="./assest/Banner1.png" alt="Banner3">
                  </div>
              </div>
            </section>
          <!-- /Owl-carousel -->

          <!--Top Sale-->
          
          <?php require_once 'template/topsale.php'; ?> 
          <!--!Top Sale-->

         

          <!--Banner-Ads-->
            <div id="banner-ads" class="box">
                <div class="container py-4 px-3 text-center">
                    <img src="./assest/banner1-ad.jpg" class="img-fluid m-1" alt="">
                    <img src="./assest/banner2-ad.jpg" class="img-fluid m-1" alt="">
                </div>
            </div>
          <!--/Banner-Ads-->

          <!--Coming Soon-->
          
          <?php require_once 'template/comingsoon.php'; ?>
          <!--!Coming-soon-->
          
        </main>
    <!--/Main Site-->

    <!--Footer-->
    <?php require_once 'template/footer.php'; ?>
    <!---/Footer-->

    
</body>
</html>