<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs-Brother Electronics</title>

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
                    <img src="assest/Banner1.png" alt="Banner1">
                  </div>
                  <div class="item">
                    <img src="assest/Banner2.png" alt="Banner2">
                  </div>
                  <div class="item">
                    <img src="assest/Banner1.png" alt="Banner3">
                  </div>
              </div>
            </section>
          <!-- /Owl-carousel -->
  
          <!-- Blogs-->
            <div id="blogs" class="box">
                <div class="container py-4">
                    <h3>Blogs</h3>
                    <hr>
                    <div class="owl-carousel owl-theme">
                        <div class="item m-3">
                            
                                <h4 class="">Upcoming Mobiles</h4>
                                <img src="assest/blog/blog1.jpg" class="img-fluid"  alt="">
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui quis nemo nulla consequatur! Nam, eum, error, fuga itaque maxime facilis beatae vel repudiandae mollitia soluta placeat illo nobis dolorem nulla.</p>
                                <button class="btn btn-dark"><a href="#" class="text-left">Read More</a></button>
                            
                        </div>
                        <div class="item m-3">
                           
                                <h4 class="">Upcoming Mobiles</h4>
                                <img src="assest/blog/blog2.jpg" class="img-fluid" alt="">
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui quis nemo nulla consequatur! Nam, eum, error, fuga itaque maxime facilis beatae vel repudiandae mollitia soluta placeat illo nobis dolorem nulla.</p>
                                <button class="btn btn-dark"><a href="#" class="text-left">Read More</a></button>
                            
                        </div>
                        <div class="item m-3">
                            
                                <h4 class="">Upcoming Mobiles</h4>
                                <img src="assest/blog/blog3.jpg" class="img-fluid" alt="">
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui quis nemo nulla consequatur! Nam, eum, error, fuga itaque maxime facilis beatae vel repudiandae mollitia soluta placeat illo nobis dolorem nulla.</p>
                                <button class="btn btn-dark"><a href="#" class="text-left">Read More</a></button>
                            
                        </div>
                    </div>
                </div>
            </div>
          <!-- /Blogs-->

          <!--Banner-Ads-->
            <div id="banner-ads" class="box">
                <div class="container py-4 px-3 text-center">
                    <img src="assest/banner-ad1.jpg" class="img-fluid" alt="">
                    <img src="assest/banner-ad2.jpg" class="img-fluid" alt="">
                </div>
            </div>
          <!--/Banner-Ads-->

        </main>
    <!--/Main Site-->

    <!--Footer-->
    <?php require_once 'template/footer.php'; ?>
    <!---/Footer-->

    
</body>
</html>