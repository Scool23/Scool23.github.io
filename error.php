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
                               <span>Error</span>
                            </div>
                            <h3 class="tp-breadcrumb__title">404 Error</h3>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->


        <!-- error-area-start -->
        <div class="tp-error__area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-error__box text-center">
                            <div class="tp-error__thumb">
                                <img src="assets/img/error/error.png" alt="">
                            </div>
                            <div class="tp-error__text">
                                <h4 class="tp-error__title">Sorry We Can't Find That Page! </h4>
                            </div>
                            <div class="tp-error__form-box">
                                <form action="#">
                                    <input type="text" placeholder="Search here">
                                    <button class="tp-error__search-box"><i class="flaticon-loupe"></i></button>
                                </form>
                            </div>
                            <div class="tp-error__btn">                                
                                <a class="tp-btn" href="index.php">Back Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- error-area-end -->


    </main>

    <?php require "footer.php"; ?>