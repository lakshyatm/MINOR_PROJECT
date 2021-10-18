        <?php

            if (isset($_SESSION['login'])) {
                $user_id = $_SESSION['login'];
                $fname = $_SESSION['fname'];
                $lname = $_SESSION['lname'];
            }
            $product_shuffle=$product->getdata();
            

            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if (isset($_POST['product'])){
                    // call method addToCart
                    $cart->addtocart($_POST['user_id'], $_POST['item_id']);
                }
            }
            

               
           
        ?>
          <!--Product-->
            <div id="product" class="py-3 box">
                <div class="container">
                    <h3>Product Details</h3>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <?php 
                            $item_id=$_GET['item_id']??1;
                            foreach($product_shuffle as $items){
                            if($items['item_id']==$item_id){
                            ?>
                            <img src="<?php echo $items['item_image']?>" alt="" class="img-fluid">
                            <div class="form-row pt-4">
                                <div class="col"><button type="submit" class="btn btn-danger form-control ">Proceed To Buy</button></div>
                                <div class="col">
                                    <form action="" method="post">
                                        <input type="hidden" name="item_id" value="<?php echo $items['item_id'] ?? 1; ?>">
                                        <input type="hidden" name="user_id" value="<?php $user_id ?? 1;  ?>">
                                        <?php
                                        if (in_array($items['item_id'], $cart->getcartid($product->getcartproduct($user_id ?? 0)) ?? [])){
                                                echo '<button type="submit" disabled class="btn btn-success  form-control">In the Cart</button>';
                                            }else{
                                                echo '<button type="submit" name="product" data-toggle="tooltip" title="To add product in Cart then You must be logged-in !" class="btn btn-warning  form-control">Add to Cart</button>';
                                            }
                                        ?>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-6 py-5">
                            <h4><strong><?php echo $items['item_name']?></strong></h4>
                            <small>By&nbsp; &nbsp;<?php echo $items['item_brand']?></small>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <hr class="p-0 m-0">
                            <table class="my-3"> 
                                <tr>
                                    <td>M.R.P :</td>
                                    <td><strike><?php echo $items['item_oriprice']?></strike></td>
                                </tr>
                                <tr>
                                    <td>Deal Price :</td>
                                    <td class="text-danger"><?php echo $items['item_price']?><span class="text-dark"><small>&nbsp; Inc of all taxes</small></span></td>
                                </tr>
                                <tr>
                                    <td>You Save:</td>
                                    <td class="text-dark"><?php echo $items['item_save']?></td>
                                </tr>
                            </table>

                            <!--    #policy -->
                                <div id="policy">
                                    <div class="d-flex">
                                        <div class="return text-center mr-3">
                                            <div class=" my-2 color-second">
                                                <span class="fas fa-retweet bor p-3 rounded-pill"></span>
                                            </div>
                                            <a href="#">10 Days <br> Replacement</a>
                                        </div>
                                        <div class="return text-center mr-3">
                                            <div class="my-2 color-second">
                                                <span class="fas fa-truck  bor p-3 rounded-pill"></span>
                                            </div>
                                            <a href="#" >Sold By<br>Brother Electronics</a>
                                        </div>
                                        <div class="return text-center mr-3">
                                            <div class="my-2 color-second">
                                                <span class="fas fa-check-double bor p-3 rounded-pill"></span>
                                            </div>
                                            <a href="#" >1 Year <br>Warranty</a>
                                        </div>
                                    </div>
                                </div>
                              <!--    !policy -->
                              <hr>
                              <!-- size -->
                              <div class="size my-3">
                                    <h6><strong>Size :</strong></h6>
                                    <div class="d-flex justify-content-between w-75">
                                        <div class=" bor m-2">
                                            <button class="btn btn-sm "><small>4GB RAM</small></button>
                                        </div>
                                        <div class="bor  m-2">
                                            <button class="btn btn-sm"><small>6GB RAM</small></button>
                                        </div>
                                        <div class="bor m-2">
                                            <button class="btn btn-sm"><small>8GB RAM</small></button>
                                        </div>
                                    </div>
                                </div>
                            <!-- !size -->

                            <div class="row">
                                 <div class="col-4">
                                   <!-- product qty section -->  
                                   <div class="qty py-1">
                                         <div class="px-0 d-flex mb-1">
                                             <button ><i class="fas fa-angle-up"></i></button>
                                             <input type="text" class=" w-25 px-2 bor text-dark" disabled value="1" placeholder="1">
                                             <button ><i class="fas fa-angle-down"></i></button>
                                         </div>
                                    </div>
                                    <!-- !product qty section -->  
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 py-4">
                        <h4>Product Description</h4>
                        <hr>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                    </div>
                </div>
            </div>

          <!--/Product-->  

          <?php  }} ?>