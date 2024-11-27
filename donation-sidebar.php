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
                               <span>Donations</span>
                            </div>
                            <h3 class="tp-breadcrumb__title">Donate Now</h3>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- event-area-atart -->
        <div class="tp-event-details__area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="tp-event-details__left-side">
                            <div class="tp-event-details__thumb p-relative ">
                                <img src="assets/img/event/event-details-1-6.jpg" alt="">
                                <div class="tp-event-details__thumb-text">
                                    <span>HEALTH</span>
                                </div>
                            </div>
                            <div class="tp-donation-details__progress-box grey-bg mb-50">
                                <div class="tp-donation-details__progress w-100">
                                    <div class="tp-donation-details__progress-item fix">
                                        <span class="progress-count">80%</span>
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" data-wow-duration="1s"
                                                data-wow-delay=".3s" role="progressbar" data-width="80%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 80%; visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: slideInLeft;">
                                            </div>
                                        </div>
                                        <div class="progress-goals">
                                            <span>Raised <b> $4,407</b></span>
                                            <span>Goal <b> $10.000</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="tp-event-details__title mb-45">Donation Form</h4>
                            <div class="tp-donation-details__notice-box grey-bg">
                                <div class="tp-donation-details__notice-shape d-none d-md-block">
                                    <img src="assets/img/donate/notic.png" alt="">
                                </div>
                                <span><b>Notice:</b>Test mode is enabled. While in test mode no live donation is processed.</span>
                            </div>
                            <h4 class="tp-donation-details__form-title pb-45">Sylect Payment Method</h4>
                            <div class="tp-donate__method">
                                <span>
                                    <input id="flat_rate" type="radio" name="shipping">
                                    <label for="flat_rate">Flat rate: <span>$20.00</span></label>
                                 </span>
                                 <span>
                                    <input id="local_pickup" type="radio" name="shipping">
                                    <label for="local_pickup">Local pickup: <span>$25.00</span></label>
                                 </span>
                                 <span>
                                    <input id="free_shipping" type="radio" name="shipping">
                                    <label for="free_shipping">Free shipping</label>
                                 </span>
                            </div>
                            <div class="tp-donate__button-box">
                                <button class="active">$30</button>
                                <button>$30</button>
                                <button>$180</button>
                                <button>$500</button>
                                <button>$1000</button>
                            </div>
                            <div class="tp-donation-details__input-box pb-25">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                                        <div class="tp-donation-details__text-box">
                                            <span>Custom amount</span>
                                         </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                                        <div class="tp-donation-details__input">
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-donation-details__form-box">
                                <h4 class="tp-donation-details__form-title pb-45">Personal Information</h4>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                                            <div class="tp-donation-details__input">
                                                <label>First Name</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                                            <div class="tp-donation-details__input">
                                                <label>Last Name</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                                            <div class="tp-donation-details__input">
                                                <label>City</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                                            <div class="tp-donation-details__input">
                                                <label>State</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                                            <div class="tp-donation-details__input">
                                                <label>Country</label>
                                                <select style="display: none;">
                                                    <option>New York US</option>
                                                    <option>Berlin Germany</option>
                                                    <option>Paris France</option>
                                                    <option>Tokiyo Japan</option>
                                                </select>
                                                <div class="nice-select"><span class="current">New York
                                                        US</span>
                                                    <ul class="list">
                                                        <li data-value="New York US" class="option selected focus">New
                                                            York US</li>
                                                        <li data-value="Berlin Germany" class="option">Berlin Germany
                                                        </li>
                                                        <li data-value="Paris France" class="option">Paris France</li>
                                                        <li data-value="Tokiyo Japan" class="option">Tokiyo Japan</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                                            <div class="tp-donation-details__input">
                                                <label>Phone Number</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 mb-30">
                                            <div class="tp-donation-details__input">
                                                <label>Enter Your Mail</label>
                                                <input type="email">
                                            </div>
                                        </div>
                                        <div class="postbox__comment-agree-2 pb-50">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label text-theme" for="flexCheckDefault">
                                                    You are agree to terms
                                                </label>
                                            </div>
                                        </div>
                                        <h4 class="tp-donation-details__form-title pb-20">Totall Donation: <span>$430.00</span></h4>
                                        <div class="tp-donation-details__button">
                                            <button class="tp-btn">Donate Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="tp-event-details__right-box">
                            <div class="tp-event-details__author-info mb-30 grey-bg text-center">
                                <div class="tp-event-details__author-thumb pr pb-20">
                                    <img src="assets/img/donate/author-1-4.png" alt="">
                                </div>
                                <div class="tp-event-details__author-text">
                                    <a href="#">
                                        <h5>Kaira Beasley</h5>
                                    </a>
                                    <span>Host & Speaker</span>
                                </div>
                                <div class="tp-event-details__social-box">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                            <div class="tp-event-details__item-2 text-center mb-30"
                                data-background="assets/img/event/event-details-1-2.jpg">
                                <div class="tp-event-details__item-2-logo pb-25">
                                    <img src="assets/img/event/event-details-logo.png" alt="">
                                </div>
                                <div class="tp-event-details__item-2-text">
                                    <h4 class="tp-event-details__item-2-title">Healthy People <br>Better in The World
                                    </h4>
                                    <span>$6,790 of $10,000 raised</span>
                                </div>
                                <div class="tp-event-details__button">
                                    <a class="tp-border-btn" href="#">Donate Now</a>
                                </div>
                            </div>
                            <div class="sidebar__widget mb-30">
                                <h3 class="sidebar__widget-title">Our Latest Post</h3>
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__post">
                                        <div class="rc__post mb-10 d-flex align-items-center">
                                            <div class="rc__post-thumb mr-20">
                                                <a href="blog-details.php"><img
                                                        src="assets/img/blog/blog-details-sm-1-2.jpg" alt=""></a>
                                            </div>
                                            <div class="rc__post-content">
                                                <div class="rc__meta">
                                                    <span><i class="flaticon-comment"></i>
                                                        02 Comments</span>
                                                </div>
                                                <h3 class="rc__post-title">
                                                    <a href="blog-details.php">We Should Donate <br>For Indian’s
                                                        Poor</a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="rc__post mb-10 d-flex align-items-center">
                                            <div class="rc__post-thumb mr-20">
                                                <a href="blog-details.php"><img
                                                        src="assets/img/blog/blog-details-sm-1-1.jpg" alt=""></a>
                                            </div>
                                            <div class="rc__post-content">
                                                <div class="rc__meta">
                                                    <span><i class="flaticon-comment"></i>
                                                        02 Comments</span>
                                                </div>
                                                <h3 class="rc__post-title">
                                                    <a href="blog-details.php">Quick Fundraising For <br>African
                                                        Child</a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="rc__post d-flex align-items-center">
                                            <div class="rc__post-thumb mr-20">
                                                <a href="blog-details.php"><img
                                                        src="assets/img/blog/blog-details-sm-1-3.jpg" alt=""></a>
                                            </div>
                                            <div class="rc__post-content">
                                                <div class="rc__meta">
                                                    <span><i class="flaticon-comment"></i>
                                                        02 Comments</span>
                                                </div>
                                                <h3 class="rc__post-title">
                                                    <a href="blog-details.php">Bring The People For <br>Raise Hands</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget mb-30">
                                <h3 class="sidebar__widget-title">Tags</h3>
                                <div class="sidebar__widget-content">
                                    <div class="tagcloud">
                                        <a href="#">Fundraising</a>
                                        <a href="#">kids</a>
                                        <a href="#">Food</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- event-area-end -->




    </main>

    <?php require "footer.php"; ?>