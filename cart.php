<?php require "header.php"; ?>

    <main>

        <!-- breadcrumb-area-start -->
        <div class="tp-breadcrumb__area p-relative fix tp-breadcrumb-height" data-background="assets/img/breadcrumb/breadcrumb-bg.png">
            <div class="tp-breadcrumb__shape-1 z-index-5">
                <img src="assets/img/breadcrumb/breadcrumb-shape-1.png" alt="">
            </div>
            <div class="tp-breadcrumb__shape-2 z-index-5">
                <img src="assets/img/breadcrumb/breadcrumb-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-breadcrumb__content z-index-5">
                            <div class="tp-breadcrumb__list">
                               <span><a href="index.php">home</a></span> 
                               <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                               <span>Cart Page</span>
                            </div>
                            <h3 class="tp-breadcrumb__title">Cart Page</h3>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->


      <!-- Cart Area Strat-->
      <section class="cart-area pt-120 pb-120">
        <div class="container">
           <div class="row">
              <div class="col-12">
                 <form action="#">
                    <div class="table-content table-responsive">
                       <table class="table">
                          <thead>
                             <tr>
                                <th class="product-thumbnail">Images</th>
                                <th class="cart-product-name">Product</th>
                                <th class="product-price">Unit Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-remove">Remove</th>
                             </tr>
                          </thead>
                          <tbody>
                             <tr>
                                <td class="product-thumbnail"><a href="product-details.php"><img
                                         src="assets/img/product/product-details-2.jpg" alt=""></a></td>
                                <td class="product-name"><a href="product-details.php">Ultra Powerful Router</a>
                                </td>
                                <td class="product-price"><span class="amount">$130.00</span></td>
                                <td class="product-quantity text-center">
                                   <div class="tp-shop-quantity">
                                      <div class="tp-quantity p-relative">
                                         <div class="qty_button cart-minus tp-cart-minus"><i class="fal fa-minus"></i></div>
                                         <input type="text" value="1" >
                                         <div class="qty_button cart-plus tp-cart-plus"><i class="fal fa-plus"></i></div>
                                      </div>
                                   </div>
                                </td>
                                <td class="product-subtotal"><span class="amount">$130.00</span></td>
                                <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                             </tr>
                             <tr>
                                <td class="product-thumbnail"><a href="product-details.php"><img
                                         src="assets/img/product/product-details-3.jpg" alt=""></a></td>
                                <td class="product-name"><a href="product-details.php">Ultra Powerful Router</a>
                                </td>
                                <td class="product-price"><span class="amount">$120.50</span></td>
                                <td class="product-quantity text-center">
                                   <div class="tp-shop-quantity">
                                      <div class="tp-quantity p-relative">
                                         <div class="qty_button cart-minus tp-cart-minus"><i class="fal fa-minus"></i></div>
                                         <input type="text" value="1" >
                                         <div class="qty_button cart-plus tp-cart-plus"><i class="fal fa-plus"></i></div>
                                      </div>
                                   </div>
                                </td>
                                <td class="product-subtotal"><span class="amount">$120.50</span></td>
                                <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                             </tr>
                          </tbody>
                       </table>
                    </div>
                    <div class="row">
                       <div class="col-12">
                          <div class="coupon-all">
                             <div class="coupon d-flex align-items-center">
                                <input type="text" class="#coupon-code" placeholder="coupon code">
                                <button class="tp-btn" name="apply_coupon" type="submit">Apply coupon</button>
                             </div>
                             <div class="coupon2">
                                <button class="tp-btn" name="update_cart" type="submit">Update cart</button>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="row justify-content-end">
                       <div class="col-md-5 ">
                          <div class="cart-page-total">
                             <h2>Cart totals</h2>
                             <ul class="mb-20">
                                <li>Subtotal <span>$250.00</span></li>
                                <li>Total <span>$250.00</span></li>
                             </ul>
                             <a class="tp-btn-lg text-center w-100" href="checkout.php">Proceed to checkout</a>
                          </div>
                       </div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
     </section>
     <!-- Cart Area End-->
    
    <!-- cta-area-start -->
    <div class="tp-cta__area">
        <div class="tp-cta__bg" data-background="assets/img/cta/cta-bg.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="tp-cta__content d-flex align-items-center">
                            <div class="tp-cta__icon d-none d-sm-block">
                                <span><i class="flaticon-volunteer"></i></span>
                            </div>
                            <h4 class="tp-cta__title-sm">Join your hand with us for a <br> better life and future
                            </h4>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <div class="tp-cta__button text-md-end text-start">
                            <a class="tp-btn-lg" href="about-us.php">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta-area-end -->

    </main>

    <?php require "footer.php"; ?>