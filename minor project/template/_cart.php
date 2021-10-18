
<?php
 
 $product_shuffle=$product->getdata();

 if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['delete'])){
        // call method addToCart
        $cart->deletecart($_POST['item_id']);
    }
    if (isset($_POST['wish'])){
        // call method addToCart
        $cart->addtowish($_POST['user_id'], $_POST['item_id']);
    }
}
?>

 
<!--Shopping Cart-->
<div id="cart" class="py-3 box">
                <div class="container-fluid w-75">
                    <h3>Shopping Cart</h3>
                    <hr>
                    <!--Items-->
                    <div class="row">
                    <!--Item -->
                        <div class="col-sm-8">

                            
                            <?php 
                            if (isset($_SESSION['login'])) {
           
                            foreach($product->getcartproduct($user_id) as $item){ 
                                
                                $result=$product->getproduct($item['item_id']);
                                
                              $total[] =  array_map(function($item){
                            ?>
                            <div class="row bor py-3 mt-3">
                                <div class="col-sm-5"><a href="product.php?item_id=<?php echo $item['item_id']?>"><img src="<?php echo $item['item_image']?>"  alt="" class="img-fluid cart-img"></a></div>
                                <div class="col-sm-7">
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
                                    
                                    <!-- product qty section -->  
                                    <div class="qty py-1">
                                         <div class="px-0 d-flex mb-1">
                                             <button><i class="fas fa-angle-up"></i></button>
                                             <input type="text"  disabled value="1" placeholder="1">
                                             <button ><i class="fas fa-angle-down"></i></button>
                                         </div>
                                    </div>
                                    <!-- !product qty section --> 

                                    <!-- button section --> 
                                    <div class="py-1 d-flex">
                                        <form action="" method="post">
                                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                            <button type="submit" name="delete" class="btn bor text-danger">Delete</button>
                                        </form>
                                         
                                         <button type="submit" class="btn bor text-danger ml-1">Save to later<i class="fas fa-heart pl-1"></i></button>
                                    </div>
                                    <!-- ! button section --> 
                                </div>

                                <!--Subtotal-->
                                <div class="col-sm-12 text-right">
                                    <p class="mt-2">Subtotal:<span class="text-danger">Rs.</span><span class="text-danger product-price" data-id="<?php echo $item['item_id']?>" ><?php echo $item['item_price']?></span></p>
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

                     <!-- subtotal section-->    
                        <div class="col-sm-4 mt-3">                           
                            <div class="sub-total bor text-center p-3">
                                <h6 class="text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                                <hr>
                                <div class="border-top py-4">
                                    <h5 class="">Total (<?php echo count($product->getcartproduct($user_id ?? 0));?> items):&nbsp; <span class="text-danger">Rs.<span class="text-danger" id="deal-price"><?php echo isset($total)?$cart->subtotal($total):0; ?></span> </span> </h5>
                                    <a href="buy.php" class="btn btn-warning mt-3"> Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          <!--/Shopping Cart-->  