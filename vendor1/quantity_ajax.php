<?php 
include 'config.php';
$admin=new Admin();
$u_id=$_SESSION['u_id'];
$stmt1=$admin->ret("SELECT COUNT(*) FROM `cart` WHERE `u_id`='$u_id' ");
$row1=$stmt1->fetch(PDO::FETCH_ASSOC);
$quantity=implode($row1);

if(isset($_GET['cart_id_increment'])){
    $cart_id=$_GET['cart_id_increment'];
    $stmt=$admin->ret("SELECT * FROM `cart` INNER JOIN `product` ON product.p_id=cart.p_id WHERE  `cr_id`='$cart_id' AND cart.`u_id`='$u_id'");
   while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    $item_price = $row['p_price'];
    $old_quantity = $row['cr_qty'];
    $new_quantity = $old_quantity + 1;
    $total = $item_price * $new_quantity;

    $stmt1=$admin->cud("UPDATE `cart` SET `cr_qty`='$new_quantity' WHERE  `cr_id`='$cart_id' AND `u_id`='$u_id'",'updated');
}
}
if(isset($_GET['cart_id_decrement'])){
    $cart_id=$_GET['cart_id_decrement'];
    $stmt=$admin->ret("SELECT * FROM `cart` INNER JOIN `product` ON product.p_id=cart.p_id WHERE  `cr_id`='$cart_id' AND cart.`u_id`='$u_id'");
    $row2=$stmt->fetch(PDO::FETCH_ASSOC);
    $item_price = $row2['p_price'];
    $old_quantity = $row2['cr_qty'];
    $new_quantity = $old_quantity -1;
    $total = $item_price * $new_quantity;

    $stmt1=$admin->cud("UPDATE `cart` SET `cr_qty`='$new_quantity' WHERE  `cr_id`='$cart_id' AND `u_id`='$u_id'",'updated');
}
?>

<div class="container" id="ajax_table">
                <div class="row"  >
                    <div class="col-18" style="width:810px;">
                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                  <tbody>
    <tr>
    <?php
                                    
                                  $total=0;
                                    $g_total=0;
                                    $shipping=100;
                                  
                                   
                                    $stmt=$admin->ret("SELECT * FROM `cart` inner join `product`on cart.p_id=product.p_id  where `u_id`='$u_id' ");
                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                        $price=$row['p_price'];
                                        $quantity=$row['cr_qty'];
                                        $total=$price*$quantity;
                                        $g_total=$g_total+$total;
                                    ?>
                                    <td class="cart_product_img d-flex align-items-center">
                                        <a href="#"><img src="admin/controller/<?php echo $row['p_image'] ?>" alt="Product"></a>
                                        <h6><?php echo $row['p_name']?></h6>
                                    </td>
                                    <td class="price"><span>₹<?php echo $row['p_price']; ?>/-</span></td>
                                    <td class="qty">
                                    <div class="">
                                                <?php if ($row['cr_qty'] > 1) { ?>
                                        <button onclick="decrement(<?php echo $row['cr_id']; ?>)" type="button"  class="minus"><i class="fa fa-minus" aria-hidden="true"></i>
                                        </button> <?php } ?>
                                    <?php echo $row['cr_qty'] ?>
                                <button onclick="increment(<?php echo $row['cr_id']; ?>)" type="button"  class="plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                </div>
                                    </td>
                                    <td class="total_price"><span>₹<?php echo  $g_total ?>/-</span></td>
                                    <td>                                    <div class="col">
                        <div class=""style="margin-left:-10px;"><a href="controller/delete_cat.php?cr_id=<?php echo $row['cr_id']?>"><i class="fa fa-times fa-2x"  aria-hidden="true"></i></a></div>
                        </div>
                        
                        </td>
                                    <?php } ?>
</tbody>
                            </table>
                        </div>
                       
                        <div class="cart-footer d-flex mt-30">
                            <div class="back-to-shop w-50">
                                <a href="shop.php">Continue shooping</a>
                            </div>
                            
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="coupon-code-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Cupon code</h5>
                                <p>Enter your cupone code</p>
                            </div>
                            <form action="#">
                                <input type="search" name="search" placeholder="#569ab15">
                                <button type="submit">Apply</button>
                            </form>
                        </div>
                    </div>
                  
                    <div class="col-12 col-lg-4">
                        <div class="cart-total-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Cart total</h5>
                                <p> <b>No Of Items:
                                        <?php echo $quantity ?>
                                    </b></p>
                            </div>

                            <ul class="cart-total-chart">
                                <li><span>Subtotal</span> <span>₹
                                        <?php 
                                        $amt=$_GET['amt'];
                                        echo $g_total;
                                      
                                        $final=0;

                                        $final = $g_total + $shipping;
                                        $total=  $final-$amt;
                                   
                                        ?>/-
                                    </span></li>
                                <li><span>Shipping</span> <span>
                                        <?php echo $shipping; ?>
                                    </span></li>
                                <li><span>Coupon Discount</span> <span id="value" >
                                        <?php echo $amt; ?>
                                    </span></li>
                                <li><span><strong>Total</strong></span><strong>₹
                                            <?php echo $total ?>.90
                                        </strong></span></li>
                            </ul>
                            <a href="checkout1.php?total=<?php echo $total; ?>" class="btn karl-checkout-btn">Proceed to
                                checkout</a>
                        </div>
                    </div>
                </div>
            </div>
              