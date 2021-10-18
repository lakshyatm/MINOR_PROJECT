<!--Top Sale-->

<?php
 
 $product_shuffle=$product->getdata();
 

 if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['comingsoon'])){
        // call method addToCart
        $cart->addtocart($_POST['user_id'], $_POST['item_id']);
    }
    if (isset($_POST['coming-wish'])){
        // call method addToCart
        $cart->addtowish($_POST['user_id'], $_POST['item_id']);
    }
}
?>
<div id="coming-soon" class="box">
                <div class="container py-4">
                    <h3 class="">Coming Soon</h3>
                    <hr>
                    <!--Owl Carousel For Top Sale-->
                    <div class="owl-carousel owl-theme">

                        <?php
                        foreach($product_shuffle as $item){
                       
                        ?>
                        <div class="item py-2">
                            <div class="product">
                                <a href="product.php?item_id=<?php echo $item['item_id']?>"><img src="<?php echo $item['item_image']?>" class="img-fluid" alt=""></a>
                                <div class="text-center">
                                    <h6><?php echo $item['item_name']?></h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span><?php echo $item['item_price']?></span>
                                    </div>
                                   
                                    <form action="" method="post">
                                        <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                        
                                        <?php
                                        if (!isset($_SESSION['login'])) {
                                        ?>
                                        <a href="login.php" class="btn btn-danger mr-2"><i class="fas fa-heart "></i> </a>
                                        <a href="login.php" class="btn btn-warning px-2 border-right border-left text-white">Add to cart</a>
                                        <?php 
                                        } else{
                                            if (in_array($item['item_id'], $cart->getwishid($product->getwishproduct($user_id ?? 0)) ?? [])){
                                                echo '
                                                
                                                <a tabindex="0" class="btn btn-danger mr-2" role="button" data-toggle="popover" data-placement="top" data-trigger="focus" title="Alert" data-content="! Selected product is already in WISHLIST !"><i class="fas fa-heart "></i></a>';
                                            }
                                            else{
                                                echo '
                                                        <button type="submit" name="coming-wish" data-toggle="tooltip" title="Add product in Wishlist !" class="btn btn-danger mr-1"><i class="fas fa-heart "></i></button>'
                                                       
                                                    ;
                                             
                                            }

                                            if (in_array($item['item_id'], $cart->getcartid($product->getcartproduct($user_id ?? 0)) ?? [])){
                                               
                                                echo '<button type="submit" disabled class="btn btn-success ">In the Cart</button>';
                                            
                                            }

                                            else{
                                                echo '
                                                        
                                                        <button type="submit" name="comingsoon" data-toggle="tooltip" title="To add product in Cart then You must be logged-in !" class="btn btn-warning">Add to Cart</button>'
                                                    ;
                                             
                                            }
                                        }
                                        
                                        ?>
                                    </form>
                    
                                </div>
                            </div>
                        </div>
                        <?php  }?>
                        
            
                    </div>
                    <!--/Owl Carousel For Top Sale-->
                </div>
            </div>
          <!--!Top Sale-->