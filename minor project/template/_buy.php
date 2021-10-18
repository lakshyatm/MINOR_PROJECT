<?php
$product_shuffle=$product->getdata('user');
        
$prod_shuffle=$product->getdata();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['deleteall'])){
        // call method addToCart
        $cart->deleteallcart($_POST['user_id']);
    }
}
foreach($product_shuffle as $items){
    if($items['user_id']==$user_id){

               
           
?>

<div id="order" class="py-3 box">
                <div class="container-fluid w-100">
                <div class="container">
                    
                        <h3>Comfirm Order</h3>
                        <hr>

                        <h5>Hi</h5>
                        <h4><strong><?php echo $items['fname']?>&nbsp;<?php echo $items['lname']?></strong></h4>
                        <h5>You have  done a great choice.</h5>

                        <hr>
                        <div class="strip d-flex justify-content-between">
                            <div><h4>Your Order Item:</h4></div>
                            <div><h5><a href="cart.php">Edit Cart</a></h5></div>
                        </div>
                    
                </div>

                    <!--Owl Carousel For Odrer Items-->
                     <div class="container">
                        <div class="row">
                            <div class="owl-carousel owl-theme  bor  mb-2">

                                    <?php 
                                    if (isset($_SESSION['login'])) {
                
                                    foreach($product->getcartproduct($user_id) as $item){ 
                                        
                                        $result=$product->getproduct($item['item_id']);
                                        
                                    $total[] =  array_map(function($item){
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
                                                <span>Rs.<?php echo $item['item_price']?></span>
                                            </div>
                                        
                                            
                            
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    return $item['item_price'];
                                    },$result);
                                    }
                                    }
                                    
                                ?>
                                
                    
                            </div>
                        </div>
                     </div>
                    <!--/Owl Carousel For Top Sale-->

                    <div class="container">
                        <div class="row">
                            
                            <div class="sub-total col-lg-12 text-center bor  p-3">
                                <h6 class="text-success  py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                                <h5 class="border-top py-4">Total (<?php echo count($product->getcartproduct($user_id ?? 0));?> items):&nbsp; <span class="text-danger">Rs.<span class="text-danger" id="deal-price"><?php echo isset($total)?$cart->subtotal($total):0; ?></span> </span> </h5>
                                <hr>
                                <div class="text-secondary text-left font-size-20 py-3"><strong>Select Your Delivery Address:</strong> </div>
                                
                                <div class="font-size-18"><input type="radio" checked>&nbsp;&nbsp;<strong><?php echo $items['fname']?>&nbsp;<?php echo $items['lname']?></strong>&nbsp;&nbsp;,<?php echo $items['address']?></div>
                               
                                
                                <a href="#" class="btn btn-secondary mx-1 mt-3"> Edit Address</a>
                                <a href="#" class="btn btn-secondary mx-1 mt-3"> Add delivery instructions</a>
                                
                                

                                <button type="button" name="deleteall" class="btn btn-warning mt-3 mx-1" data-toggle="modal" data-target="#myModal"> Place Order & Deliver to this Address</button>
                                    
                                <div class="font-size-16 mt-2">*<strong>Note:</strong>Only Cash-On-Delivery(COD) is Available.</div>    
                               
                            </div>
                           
                        </div>
                        
                       
                        <!-- The Modal for Order Confirmation -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog modal-lg ">
                            <div class="modal-content modal-img">
                            
                                <!-- Modal Header -->
                                <div class="modal-header box2">
                                    <h4 class="modal-title"><strong>Confirmation</strong></h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                              
                                <!-- Modal body -->
                                <div class="modal-body box2 text-center border-top ">
                                    <div class="font-size-18"> Hurray! Your Order Is Successfully Placed with OrderId : <strong class="text-info" >ORR123***xyz</strong></div>
                                    <div class="font-size-16 mt-3">You will receive confirmation meassage on your register Mobile No. and Email address. <br>In a message there will be a link throung which you can track your order.</div>
                                    <div class="font-size-18 mt-2"> You will get your order within next 5-6 working days.</div>
                                    <div class="font-size-20 mt-2"> Until You</div>
                                    <div class="mt-2 text-secondary last"> <strong>Stay Safe and Happy</strong></div>
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer box2 border-top">
                                    <form action="" method="post">
                                        <input type="hidden" name="user_id" value="<?php echo $items['user_id']; ?>">
                                        <button type="submit" name="deleteall" class="btn bor text-danger">Close</button>
                                    </form>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                    </div>









<?php  }}?>

</div>