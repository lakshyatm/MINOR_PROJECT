<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <!--Required Script Files-->
 <?php require_once 'template/required-script.php'; ?>
  <!--/Required Script File-->

<style>

.topnav {
  overflow: hidden;
  text-align:center;
  
}
.top {
  overflow: hidden;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 0px 16px;
  text-decoration: none;
  font-size: 1.25em;
}

.topnav a:hover {
  
  color: white;
  
}


.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {

  .topnav a:not(:first-child) {display: none;}
  
  .topnav a.icon {
    float: left;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: left;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<?php 
  $product_shuffle=$product->getdata('user');

?>


<div class="row justify-content-between my-3 px-3">
    <div id="myTopnav" class="topnav" >

        <a href="javascript:void(0);" class="icon " onclick="myFunction()">
            <i class="fa fa-bars"><span>&nbsp;Menu</span></i>
        </a>
      
        <<a class=" text-white" href="index.php">On Sale</a>
        <a class=" text-white" href="category.php">Category</a>
        <a class="text-white" href="blog.php">Blogs</a>
      

        <?php
          
            
          if (isset($_SESSION['login'])) {
           
        ?>
        <a href="account.php?user_id=<?php echo $user_id?>" class="text-white"><i class="fas fa-user pr-2"></i>Account</a>
        <?php } else {?>
        <a href="login.php?" class="text-white"><i class="fas fa-user pr-2"></i>Account</a>
        <?php } ?>
      
        
    </div>
    <div class="top" >
        
        <form action="#" class="font-size-16">
        <?php
            

            if (isset($_SESSION['login'])) {

            
            ?>
            <span class="border-left text-white"><a href="logout.php" data-toggle="tooltip" title="Hi <?php echo $fname; echo " "; echo $lname; ?> Click here to logout !" class="px-2 font-size-16 border-right text-white"><i class="fas fa-user"></i></a></span>
        <?php }else{ ?>
        
            <a href="register.php" class="px-1 border-right border-left text-white font-size-16">Login/Register</a>
          <?php }?>
          <span class="border-right px-2 text-white"><a class="text-white" href="wishlist.php"><i class="fas fa-heart "></i></a></span>
            <a href="cart.php" class="px-1 rounded-pill ">
                <span class=" text-white "><i class="fa fa-shopping-cart" aria-hidden="true"></i></i></span>
                <span class="px-3  rounded-pill text-dark bg-light text-dark"><?php echo count($product->getcartproduct($user_id ?? 0)) ?></span>
            </a>
        </form>
    </div>
</div>

<div class="row bg-info p-4"></div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
