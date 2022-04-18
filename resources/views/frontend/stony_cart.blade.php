<!DOCTYPE html>
<html lang="en">

<head>
    <title>StonyEdge - Cart</title>
    @include('frontend.links')
<?php $page='';?>
</head>

<body>
    @include('frontend.header')
    <div class="container mt-5">
        <div class="row g-5 py-5">
            <div class="col-lg-6 col-md-12 ">
                <div class=" border-bottom d-flex justify-content-between align-items-center">
                    <h1>Cart</h1>

                    <h2 class="">(13 Item)</h2>


                </div>


                <div class="container mt-5 border-bottom">
                    <div class="row mt-2">
                        <div class="col-10">
                            <div class="d-flex">
                                <div class="modalImg pe-3">
                                    <img src="asset/img/211101_PH_Q1_22_Day1_Shot04_1185.jpeg" class="img-fluidOwn" />
                                </div>
                                <div>
                                    <p class="para12">Women's Organic Cotton Tee</p>
                                    <p class="para12">Large / Bisque</p>
                                    <select class="form-select para16" aria-label="Default select example">
                                        <option selected>1</option>
                                        <option value="1">2</option>
                                        <option value="2">3</option>
                                        <option value="3">4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 d-flex justify-content-end">
                            <div class="rightsidecheckoutmodal">
                                <p class="para12 fw-bold cursorPointer">&#9747;</p>
                            </div>
                        </div>
                        <div class="col-10"></div>
                        <div class="col-2 d-flex justify-content-end">
                            <div class="rightsidecheckoutmodal">
                                <p class="para12 fw-bold cursorPointer">$108</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="container mt-5 border-bottom">
                    <div class="row mt-2">
                        <div class="col-10">
                            <div class="d-flex">
                                <div class="modalImg pe-3">
                                    <img src="asset/img/211101_PH_Q1_22_Day1_Shot04_1185.jpeg" class="img-fluidOwn" />
                                </div>
                                <div>
                                    <p class="para12">Women's Organic Cotton Tee</p>
                                    <p class="para12">Large / Bisque</p>
                                    <select class="form-select para16" aria-label="Default select example">
                                        <option selected>1</option>
                                        <option value="1">2</option>
                                        <option value="2">3</option>
                                        <option value="3">4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 d-flex justify-content-end">
                            <div class="rightsidecheckoutmodal">
                                <p class="para12 fw-bold cursorPointer">&#9747;</p>
                            </div>
                        </div>
                        <div class="col-10"></div>
                        <div class="col-2 d-flex justify-content-end">
                            <div class="rightsidecheckoutmodal">
                                <p class="para12 fw-bold cursorPointer">$108</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-lg-6 col-md-12">
                <div class="">
                    <h3 class="heading36 ptFontfamly">Summary</h3>
                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <p class="para16">
                                Standard Shipping
                            </p>
                            <p class="para12">Tax</p>
                            <h2 class="heading20">SubTotal</h2>
                        </div>

                        <div>
                            <p class="para16 text-end">FREE</p>
                            <p class="para12">calculated at next step</p>
                            <p class="para16 text-end">$0</p>
                        </div>
                    </div>




                    <hr />

                   

                  

                    <p class="para16">
                        This order is not available for pickup at
                        <u>Parachute Williamsburg. Learn More</u>
                    </p>

                    <button class="cartbutton text-white">CHECKOUT</button>
                </div>

                <div class="frees text-center mt-4">
                    <div class="">
                        <h4 class="heading20">FREE STANDARD SHIPPING + RETURNS</h4>
                        <p class="para12 mt-3">
                            If you are unsatisfied with your purchase for any reason, we are
                            happy to accept returns within 60 days (excludes final sale
                            items).
                        </p>

                        <p class="para12">
                            White glove delivery fees, expedited and oversize shipping fees
                            cannot be refunded.
                        </p>
                        <p class="para12">Select furniture items are subject to restocking fees.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr />

    <div class="container text-center mt-5">
        <h1 class="ptFontfamly heading36">Your Favorites</h1>
        <br />
        <h3 class="para12"><a href="signin.php">Log in</a> to see your favorites</h3>
        <br />
        <h1 class="ptFontfamly heading20">Other Products You'll Love</h1>






    </div>
    <section class="productSLiderSection  mb-5">
    <!-- Item slider-->
    <div class="container">
     

      <div class="bbb_main_container">


        <div class="bbb_viewed_nav_container">
          <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i>
          </div>
          <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i>
          </div>
        </div>

        <div class="bbb_viewed_slider_container">

          <div class="owl-carousel owl-theme bbb_viewed_slider">

            <div class="owl-item">
              <a href="products.php" class="text-decoration-none" style="z-index: 99999 !important;">
                <div class="card">
                  <div id="cardCOLOR">
                    <img class="card-img" src="asset/img/organic-cotton-venice-set_white_lightbox.jpg" alt="Vans">
                  </div>

                  <div class="card-img-overlay d-flex ">
                    <a href="#" class="card-link text-danger like text-decoration-none">
                      <span class="circleHeart">
                        <i class="fas fa-heart"></i>
                      </span>
                    </a>
                  </div>

                  <div class="card-body">

                    <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                    <h6 class="card-subtitle mb-2 text-muted">$14 - $72</h6>

                    <div class="mt-4">
                      <div class="colorCirleDotMain">
                        <div class="colorCirleDot me-3"></div>
                        <div class="colorCirleDot2 me-3"></div>
                        <div class="colorCirleDot3 me-3"></div>
                      </div>

                    </div>

                  </div>
                </div>
              </a>
            </div>
            <div class="owl-item">
              <a href="products.php" class="text-decoration-none" style="z-index: 99999 !important;">
                <div class="card">
                  <div id="cardCOLOR">
                    <img class="card-img" src="asset/img/organic-cotton-venice-set_white_lightbox.jpg" alt="Vans">
                  </div>

                  <div class="card-img-overlay d-flex ">
                    <a href="#" class="card-link text-danger like text-decoration-none">
                      <span class="circleHeart">
                        <i class="fas fa-heart"></i>
                      </span>
                    </a>
                  </div>

                  <div class="card-body">

                    <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                    <h6 class="card-subtitle mb-2 text-muted">$14 - $72</h6>

                    <div class="mt-4">
                      <div class="colorCirleDotMain">
                        <div class="colorCirleDot me-3"></div>
                        <div class="colorCirleDot2 me-3"></div>
                        <div class="colorCirleDot3 me-3"></div>
                      </div>

                    </div>

                  </div>
                </div>
              </a>
            </div>
            <div class="owl-item">
              <a href="products.php" class="text-decoration-none" style="z-index: 99999 !important;">
                <div class="card">
                  <div id="cardCOLOR">
                    <img class="card-img" src="asset/img/organic-cotton-venice-set_white_lightbox.jpg" alt="Vans">
                  </div>

                  <div class="card-img-overlay d-flex ">
                    <a href="#" class="card-link text-danger like text-decoration-none">
                      <span class="circleHeart">
                        <i class="fas fa-heart"></i>
                      </span>
                    </a>
                  </div>

                  <div class="card-body">

                    <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                    <h6 class="card-subtitle mb-2 text-muted">$14 - $72</h6>

                    <div class="mt-4">
                      <div class="colorCirleDotMain">
                        <div class="colorCirleDot me-3"></div>
                        <div class="colorCirleDot2 me-3"></div>
                        <div class="colorCirleDot3 me-3"></div>
                      </div>

                    </div>

                  </div>
                </div>
              </a>
            </div>
            <div class="owl-item">
              <a href="products.php" class="text-decoration-none" style="z-index: 99999 !important;">
                <div class="card">
                  <div id="cardCOLOR">
                    <img class="card-img" src="asset/img/organic-cotton-venice-set_white_lightbox.jpg" alt="Vans">
                  </div>

                  <div class="card-img-overlay d-flex ">
                    <a href="#" class="card-link text-danger like text-decoration-none">
                      <span class="circleHeart">
                        <i class="fas fa-heart"></i>
                      </span>
                    </a>
                  </div>

                  <div class="card-body">

                    <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                    <h6 class="card-subtitle mb-2 text-muted">$14 - $72</h6>

                    <div class="mt-4">
                      <div class="colorCirleDotMain">
                        <div class="colorCirleDot me-3"></div>
                        <div class="colorCirleDot2 me-3"></div>
                        <div class="colorCirleDot3 me-3"></div>
                      </div>

                    </div>

                  </div>
                </div>
              </a>
            </div>
            <div class="owl-item">
              <a href="products.php" class="text-decoration-none" style="z-index: 99999 !important;">
                <div class="card">
                  <div id="cardCOLOR">
                    <img class="card-img" src="asset/img/organic-cotton-venice-set_white_lightbox.jpg" alt="Vans">
                  </div>

                  <div class="card-img-overlay d-flex ">
                    <a href="#" class="card-link text-danger like text-decoration-none">
                      <span class="circleHeart">
                        <i class="fas fa-heart"></i>
                      </span>
                    </a>
                  </div>

                  <div class="card-body">

                    <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                    <h6 class="card-subtitle mb-2 text-muted">$14 - $72</h6>

                    <div class="mt-4">
                      <div class="colorCirleDotMain">
                        <div class="colorCirleDot me-3"></div>
                        <div class="colorCirleDot2 me-3"></div>
                        <div class="colorCirleDot3 me-3"></div>
                      </div>

                    </div>

                  </div>
                </div>
              </a>
            </div>




          </div>

        </div>
      </div>

    </div>
    <!-- Item slider end-->
  </section>

    @include('frontend.footer')
    <script>
    // slider

    // product card slider js
    $(document).ready(function() {
      if ($(".bbb_viewed_slider").length) {
        var viewedSlider = $(".bbb_viewed_slider");

        viewedSlider.owlCarousel({
          loop: false,
          stagePadding: 10,
          center: false,
          //   items: 3,
          margin: 20,
          autoplay: false,
          autoplayTimeout: 6000,
          nav: false,
          dots: false,

          responsive: {
            0: {
              items: 1
            },
            575: {
              items: 2
            },
            768: {
              items: 3
            },
            991: {
              items: 4
            },
            1199: {
              items: 4
            },
          },
        });

        if ($(".bbb_viewed_prev").length) {
          var prev = $(".bbb_viewed_prev");
          prev.on("click", function() {
            viewedSlider.trigger("prev.owl.carousel");
          });
        }

        if ($(".bbb_viewed_next").length) {
          var next = $(".bbb_viewed_next");
          next.on("click", function() {
            viewedSlider.trigger("next.owl.carousel");
          });
        }
      }
    });
  </script>
</body>

</html>