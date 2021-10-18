
<?php
 
 $product_shuffle=$product->getdata();

 if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['delete'])){
        // call method addToCart
        $cart->deletewish($_POST['item_id']);
    }
    if (isset($_POST['add-wish'])){
        // call method addToCart
        $cart->addtocart($_POST['user_id'], $_POST['item_id']);
    }
}
?>

 
<!--Shopping Cart-->
<div id="cart" class="py-3 box">
                <div class="container-fluid w-75">
                    <h3>Wishlist</h3>
                    <hr>
                    <!--Items-->
                    <div class="row">
                    <!--Item -->
                        <div class="col-sm-1"></div>
                        <div class="col-sm-6">

                            
                            <?php 
                            if (isset($_SESSION['login'])) {
           
                            foreach($product->getwishproduct($user_id) as $item){ 
                                
                                $result=$product->getproduct($item['item_id']);
                                
                              $total[] =  array_map(function($item){
                            ?>
                            <div class="row bor py-3 mt-3">
                                <div class="col-sm-5"><a href="product.php?item_id=<?php echo $item['item_id']?>"><img src="<?php echo $item['item_image']?>"  alt="" class="img-fluid cart-img"></a></div>
                                <div class="col-sm-5">
                                    <h5 class="mb-0"><strong><?php echo $item['item_name']?></strong></h5>
                                    <small>By&nbsp; &nbsp;<?php echo $item['item_brand']?></small>
                                    <!-- product rating -->
                                     <div class="d-flex">
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                                     </div>
                                    <!--  !product rating-->

                                    <!--Price-->
                                    <div><p class="mt-2">Price:<span class="text-danger " >Rs.<?php echo $item['item_price']?></span></p></div>
                                    
                                    

                                    <!-- button section --> 
                                    <div class="py-1 pr-3 d-flex">
                                        <form action="" method="post">
                                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                            <button type="submit" name="delete" class="btn bor text-danger">Delete</button>
                                            <button type="submit" name="add-wish" data-toggle="tooltip" title="To add product in Cart then You must be logged-in !" class="btn btn-warning ml-1">Add to Cart</button>
                                        </form>
                                         
                                        
                                    </div>
                                    <!-- ! button section --> 
                                </div>

                                
                            </div>

                            <?php
                             return $item['item_price'];
                             },$result);
                            }
                             }
                             
                             ?>
                        </div>
                    <!--/Item -->

                       
                        
                    </div>
                </div>
            </div>

          <!--/Shopping Cart-->  