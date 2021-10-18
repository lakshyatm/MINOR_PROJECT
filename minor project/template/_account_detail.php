<?php
        $product_shuffle=$product->getdata('user');
        $user_id=$_GET['user_id'];


        foreach($product_shuffle as $items){
            if($items['user_id']==$user_id){

               
           
?>
          <!--Product-->
            <div id="product" class="py-3 box">
                <div class="container">
                    <h3>Account Details</h3>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <img src="assest/user.jpg" alt="" class="mt-3 bor img-fluid" style="width:40%;">
                        </div>
                        <div class="col-sm-12 py-3">
                            <h6>Name:</h6><br>
                            <h5><strong><?php echo $items['fname']?>&nbsp;<?php echo $items['lname']?></strong></h5>
                            <hr>
                            <h6>Email Address:</h6><br>
                            <h5><strong><?php echo $items['email']?></strong></h5>
                            <hr>
                            <h6>Mobile:</h6><br>
                            <div class="strip d-flex justify-content-between">
                                <div><h5><strong><?php echo $items['mobile']?></strong></h5></div>
                                <div><h5><a href="#">edit</a></h5></div>
                            </div>
                            
                            <hr>
                            <h6>Address:</h6><br>
                            <div class="strip d-flex justify-content-between">
                                <h5><strong><?php echo $items['address']?></strong></h5>
                                <div><h5><a href="#">edit</a></h5></div>
                            </div>
                            
                            <hr>
                            <h6>Registered Date & Time:</h6><br>
                            <h5><strong><?php echo $items['register_date']?></strong></h5>
                            <hr>

                            <h5>Customer Service</h5>
                            <div class="d-flex p-2">
                                <button class="btn btn-xl btn-info  px-2 mx-2">My Cart</button>
                                <button class="btn btn-xl btn-info  px-2 mx-2">My Order</button>
                                <button class="btn btn-xl btn-info  px-2 mx-2">MY Transaction</button>
                               
                            </div>
                            <hr>

                            <div class="form-row pt-4">
                                <div class="col-sm-9"></div>
                                <div class="col-sm-3">
                                    <button type="submit" name="product" class="btn btn-warning form-control">Reset Password</button>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                    
                </div>
            </div>

          <!--/Product-->  

          <?php  }} ?>