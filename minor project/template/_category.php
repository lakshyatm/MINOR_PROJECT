 <!--Category-->


 
<?php
 
 $product_shuffle=$product->getdata();

 if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['category'])){
        // call method addToCart
        $cart->addtocart($_POST['user_id'], $_POST['item_id']);
    }
}

?>

 <section id="category" class="box py-3">
                <div class="container">
                    <h3>Filter Your Products</h3>
                    <hr>
                    <div id="filters" class="button-group text-left">
                        <button class="btn is-checked" data-filter="*">All Brands</button>
                        <button class="btn " data-filter=".Samsung">Samsung</button>
                        <button class="btn " data-filter=".Apple">Apple</button>
                        <button class="btn " data-filter=".Redmi">Redmi</button>
                    </div>
                    <div class="grid">
                    <?php foreach($product_shuffle as $item){?>
                        <div class="grid-item <?php echo $item['item_brand']?> ">
                            <div class="item py-2 size">
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
                                            if (in_array($item['item_id'], $cart->getcartid($product->getcartproduct($user_id ?? 0)) ?? [])){
                                                echo '<button type="submit" disabled class="btn btn-success ">In the Cart</button>';
                                            }else{
                                                echo '<button type="submit" name="category" data-toggle="tooltip" title="To add product in Cart then You must be logged-in !" class="btn btn-warning">Add to Cart</button>';
                                            }
                                        ?>
                                        </form>
                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </section>
          <!--/Category-->