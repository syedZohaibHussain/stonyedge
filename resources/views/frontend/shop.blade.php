<!DOCTYPE html>
<html lang="en">

<head>
  <title>StonyEdge - Shop</title>
@include('frontend.links')
<?php $page='shop'?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>

<body>
@include('frontend.header')
  <section class="navSectionSection mt-4">
    <div class="container">
      <!-- <p class="para12 textBlack">
        Home / All Bedding / Sheeting + Top of Bed / Sheets
      </p> -->
    </div>
  </section>

  <section class="productSLiderSection mb-5">
    <div class="container">
      <h1 class="ptFontfamly heading60 textBlack text-center my-5">Products</h1>
      <p class="para16 textBlack text-center my-5">
        <!--Experience deep, restorative slumber with our premium quality sheets.-->
        <!--Made in Europe <br />-->
        <!--using only the finest fabrics, they’re Oeko-Tex certified for healthy-->
        <!--sleep.-->
      </p>
      <div class="row">
          <div class="col-12 col-md-2">
              <select class="form-select para16 shadow-none p-3" aria-label="Default select example"name="category"id="category">
  <option selected disabled>Categories</option>
  @foreach($categories as $category)
  <option value="{{$category->cat_id}}">{{$category->name}}</option>
  @endforeach
</select>
           
              
          </div>
      </div>

      <div class="row">
          
       
       @foreach($products as $product)
        <div class="col-6 col-lg-3 mt-4 all-product {{$product->category_id}}">
          
          <div class="card">
          <i class="bi bi-heart-fill" style="position: absolute;
        top: 3px;
        right: 9px;
        font-size: 27px;
        color: gray;    z-index: 9999;    opacity: 0.25;" id="icon_h"></i>
            <div id="cardCOLOR">
                <a href="../product-details/{{$product->slug}}" class="text-decoration-none">
                    @foreach($variations as $var)
                    @if($product->id == $var->product_id)
                    <img class="card-img image{{$var->variation_id}} hideimg" src="{{$var->v_thumbnail_url}}" alt="Vans" />
                    @endif
                    @endforeach
              <img class="card-img img" src="{{$product->thumbnail_url}}" alt="Vans" />
                    
              </a>
           <button class="btnmodal" data-bs-toggle="modal" data-bs-target="#ModalView{{$product->id}}">
                Quick View
              </button>
            </div>

            <div class="card-img-overlay d-flex">
              <a href="#" class="card-link text-danger like text-decoration-none">
                <span class="circleHeart">
                  <i class="fas fa-heart"></i>
                </span>
              </a>
            </div>
            <div class="card-body">
              <h4 class="card-title">{{$product->product_name}}</h4>
              <h6 class="card-subtitle mb-2 text-muted">${{$product->new_price}}</h6>

              <div class="mt-4">
                <div class="colorCirleDotMain">
                     @foreach($variations as $var)
                    @if($product->id == $var->product_id)
                  <div class="me-3" onclick='zaibi("image{{$var->variation_id}}");' style="height: 1.2rem;width: 1.2rem;border-radius: 50%;background-color:{{ $var->v_color_code}};"></div>
                  @endif
                    @endforeach
                </div>
              </div>
            </div>
          </div>
        
        </div>
        
        <!-- MOdal -->
<div class="modal fade " id="ModalView{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true" style="display: none;">
                                <div class="modal-dialog ms-auto m-0">
                                    <div class="modal-content checkoutmodalconten">

                                        <div class="modal-body d-flex flex-column justify-content-between">

                                            <div class="container">
                                                <div>

                                                    <p data-bs-dismiss="modal" aria-label="Close"
                                                        class="cursorPointer para16 fw-bold mb-0">
                                                        Close
                                                    </p>
                                                </div>

                                                <div class="row mt-2">

                                                    <div class="col-12">


                                                        <!-- Slider -->
                                                        <div class="bbb_main_container">


                                                            <div class="bbb_viewed_nav_container">
                                                                <div class="bbb_viewed_nav bbb_viewed_prev"><i
                                                                        class="fas fa-chevron-left"></i>
                                                                </div>
                                                                <div class="bbb_viewed_nav bbb_viewed_next"><i
                                                                        class="fas fa-chevron-right"></i>
                                                                </div>
                                                            </div>

                                                            <div class="bbb_viewed_slider_container">
                                                                <div class="owl-carousel owl-theme bbb_viewed_slider2">
                                                                    <div class="owl-item2">
                                                                        <div class="aboutussliderBox2">
                                                                            <img src="{{$product->thumbnail_url}}"
                                                                                class="img-fluidOwn">
                                                                        </div>
                                                                    </div>
                            @foreach($productImages as $productImage)
                            @if($product->id == $productImage->product_id)
                                                                    <div class="owl-item2">
                                                                        <div class="aboutussliderBox2">
                <img src="{{$productImage->image_url}}" class="img-fluidOwn">
                                                                        </div>
                                                               </div>
                                        @endif
                                        @endforeach
                                    
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <h1 class="heading36">{{$product->product_name}}</h1>
                                                        <h2>${{$product->new_price}}</h2>
                                                        <!--<p class="para16"></p>-->

                                                        <!--<br>-->
                                                        <hr>
                                                        <!--<br>-->




                                                        <!-- Row Buttons -->
                                                        <div class="row">
                                                            <!--<div class="col-4">-->
                                                            <!--    <button class="para16" style="background: transparent">-->
                                                            <!--        Twin/Twin XL-->
                                                            <!--    </button>-->
                                                            <!--</div>-->

                                                            <!--<div class="col-4">-->
                                                            <!--    <button class="para16" style="background: transparent">-->
                                                            <!--        Full/Queen-->
                                                            <!--    </button>-->
                                                            <!--</div>-->

                                                            <!--<div class="col-4">-->
                                                            <!--    <button class="para16" style="background: transparent">-->
                                                            <!--        King/Cal King-->
                                                            <!--    </button>-->
                                                            <!--</div>-->
                                                        </div>
                                                        <br>

                                                        <!--<p class="para12">Color: Blue</p>-->

                                                        <!--<div class="row ">-->
                                                        <!--    <div class="crcl cursorPointer ">-->
                                                        <!--        <a href="#"></a>-->
                                                        <!--    </div>-->
                                                        <!--    <div class="crcl ms-2 cursorPointer"></div>-->
                                                        <!--    <div class="crcl ms-2 cursorPointer"></div>-->
                                                        <!--    <div class="crcl ms-2 cursorPointer"></div>-->
                                                        <!--</div>-->


                                                        <!--<br>-->
                                                        <!--<br>-->



                                                        <!-- Add to cart content -->
                                                        <form action="{{route('carts.store')}}" method="post">
                                                        <div class="row align-items-center">
                                                             
                  @csrf

                                                            <div class="col-3 col-md-2">
                                                                <select
                  class="form-select para16 p-3"
                  aria-label="Default select example" name="qty"
                >
                  <option value="1" selected>1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="5">5</option>
                   <option value="6">6</option>
                    <option value="7">7</option>
                     <option value="8">8</option>
                      <option value="9">9</option>
                       <option value="10">10</option>
                </select>
                                                            </div>
   
 <input type="hidden" name="product_id" value="{{$product->id}}">
                  <input type="hidden" name="price" value="{{$product->new_price}}">
                  <input type="hidden" name="status" value="product">
                  
                                                            <div class="col-8 col-lg-10">
                                                                <button type="submit " class="btn-dark w-100">
                                                                    Add to cart
                                                                </button>
                                                            </div>


                                                        </div>
                                                        </form>

                                                        <!--<br><br>-->
                                                        <!--<div class="fulldet para12">-->
                                                        <!--    <a href="#"> View Full Details</a>-->

                                                        <!--</div>-->



                                                    </div>



                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
              
        @endforeach
      </div>
    </div>
  </section>

  @include('frontend.footer')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script>
$(document).ready(function() {
    $('.hideimg').hide();
$('#category').on('change', function() {
var category_id = this.value;
// $("#selUser1").html('');
// ('.+ category_id').show();
jQuery('.all-product').hide();
jQuery('.'+category_id).show();
});    
});

</script>
<script>
    // slider
function zaibi(img){
    $('.hideimg').hide();
    $('.'+img).show();
}

    // product card slider 2 js
    $(document).ready(function() {
        if ($(".bbb_viewed_slider2").length) {
            var viewedSlider = $(".bbb_viewed_slider2");

            viewedSlider.owlCarousel({
                loop: true,
                stagePadding: 0,
                center: true,
                items: 1,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 6000,
                nav: false,
                dots: false,

                responsive: {
                    0: {
                        items: 1
                    },
                    575: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    991: {
                        items: 1
                    },
                    1199: {
                        items: 1
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