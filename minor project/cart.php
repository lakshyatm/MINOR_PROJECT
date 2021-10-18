<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Details-Brother Electronics</title>

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
        <main id="main-site" class=''>

          <!--Shopping Cart-->
          <?php count($product->getcartproduct($user_id ?? 0)) ? include ('template/_cart.php') :  include ('template/emptycart.php'); ?>
          <!--/Shopping Cart-->  


          <!--Top Sale-->
          <?php require_once 'template/recommended.php'; ?>
          <!--!Top Sale-->

          
        </main>
    <!--/Main Site-->

    <!--Footer-->
    <?php require_once 'template/footer.php'; ?>
    <!---/Footer-->

    
</body>
</html>