<!DOCTYPE html>
<html lang="en">

<head>
  <title>StonyEdge - Home</title>
  @include('frontend.links')
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-224915156-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-224915156-1');
</script>

</head>
<?php $page='home'?>
<body>

@include('frontend.header')
  <section class="heroSecionMain">
    <div class="heroSecion">
      <!-- <video autoplay muted loop id="myVideo">
          <source src="asset/img/video.mp4" type="video/mp4" />
          Your browser does not support HTML5 video.
        </video> -->
      <div class="container content">
        <div class="">
          <h1 class="ptFontfamly heading60 text-center  mt-lg-0 mt-5" style="color:#000;">
            An Exquisite Experience
          </h1>
          <!-- class text-white -->
          <p class="para16  text-center"  style="color:#000;">
           <b> For ‘You’ and ‘Yours’.<b>
          </p>
          <!-- <button id="myBtn" onclick="myFunction()">Pause</button> -->
          <div class="text-center mt-lg-5 mt-3">
            <a href="shop" class="text-decoration-none">
              <button class="btn btn-light para16 fw-bold ptFontfamly px-5 py-3">
                Shop now
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="featuresSection" style="margin-top: 5rem;">
    <div class="container">
      <h1 class="mb-5  fw-bold heading36 textBlack text-center ptFontfamly">
        Shop By Category
      </h1>
      <div class="row ">
      @foreach($categories as $category)
        <div class="col-6 mx-auto mt-5 col-lg-4">
          <a href="shop/{{$category->c_slug}}" class="text-decoration-none">
          
            <div class="cardHover" style="background-image: url(./{{$category->image_url}});">
              <div class="card-bg">
                <div class="card-block">

                  <p class="heading36 ">{{$category->name}}<i class="fa fa-arrow-right heading36" aria-hidden="true"></i></p>
                 
                </div>
              </div>
                <div class="cardhoverNonePara">
            <p class="mb-0 para16  text-center ">
            {{$category->name}} 
            </p>
            </div>
            </div>
          
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="bannerSection">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-lg-5">
          <div>
            <!-- <h1 class="ptFontfamly heading20 textBlack">
                FOR PEOPLE + PLANET
              </h1> -->
            <h1 class="ptFontfamly heading36 textBlack">
              The Art of Buying The Right Home Article!
            </h1>
            <p class="para16 textBlack">
              Home is your happy haven. Where everything is built with love and dreams. From furniture to your bedsheets, from towels to your tables. Everything in your home tells your story. Let your home talk about you.
            </p>
            <a href="blogs" class="text-uppercase para16 ptFontfamly">
              Read Post
            </a>
          </div>
        </div>
        <div class="col-12 col-lg-7 mt-5">
          <div>
            <img src="asset/img/SusHp.jpg" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="productSLiderSection  mb-5">
    <!-- Item slider-->
    <div class="container">
      <h1 class="ptFontfamly heading36 textBlack text-center my-5">
        New Arrivals
      </h1>

      <div class="bbb_main_container">


        <div class="bbb_viewed_nav_container">
          <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i>
          </div>
          <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i>
          </div>
        </div>

        <div class="bbb_viewed_slider_container">

          <div class="owl-carousel owl-theme bbb_viewed_slider">
          @foreach($products as $product)
            <div class="owl-item">
              <a href="product-details/{{$product->slug}}" class="text-decoration-none" style="z-index: 99999 !important;">
                <div class="card">
                  <div id="cardCOLOR">
                    <img class="card-img" src="{{$product->thumbnail_url}}" alt="Vans">
                  </div>

                  <div class="card-img-overlay d-flex ">
                    <a href="#" class="card-link text-danger like text-decoration-none">
                      <span class="circleHeart">
                        <i class="fas fa-heart"></i>
                      </span>
                    </a>
                  </div>

                  <div class="card-body">

                    <h4 class="card-title">{{$product->product_name}}</h4>
                    <h6 class="card-subtitle mb-2 text-muted">${{$product->new_price}}</h6>

                    <!-- <div class="mt-4">
                      <div class="colorCirleDotMain">
                        <div class="colorCirleDot me-3"></div>
                        <div class="colorCirleDot2 me-3"></div>
                        <div class="colorCirleDot3 me-3"></div>
                      </div>

                    </div> -->

                  </div>
                </div>
              </a>
            </div>
            @endforeach
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
          dots: true,

          responsive: {
            0: {
              items: 2
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