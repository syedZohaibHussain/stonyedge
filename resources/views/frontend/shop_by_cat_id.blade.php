<!DOCTYPE html>
<html lang="en">

<head>
  <title>StonyEdge - Shop</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- bb5  -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- fontawesome  -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <!-- css link  -->
    <link rel="stylesheet" href="../asset/css/style.css" />
    <link rel="stylesheet" href="../asset/css/preheader.css" />
    <link rel="stylesheet" href="../asset/css/responsiveMedia.css" />
    <link rel="stylesheet" href="../asset/css/productslider.css" />
    <link rel="stylesheet" href="../asset/css/contact.css" />
   <!-- owl carosel links  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet"
       href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

   <!-- aos lib -->
   <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
   
    <!-- app js  -->

    <script src="../asset/js/app.js"></script>

    <!-- bb5 js  -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

</head>

<body>
<!-- Modal -->
    <div
      class="modal fade"
      id="staticBackdrop"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center" id="staticBackdropLabel"></h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <h1 class="mb-0 text-center modalPreTtile ptFontfamly">
              Select the country you are shipping to
            </h1>
            <p class="mb-0 text-center modalPrePara">
              You'll see the product catalog specific to your country and be
              able to shop in the local currency.
            </p>

            <div class="modalPreLangSlectorDIv mt-5">
              <a class="nav-link" href="#"
                ><div class="d-flex">
                  <img
                    src="../  asset/img/US.svg"
                    height="20"
                    alt=""
                    class="me-1 usImg"
                  />
                  United states (USD)
                </div>
              </a>
            </div>
            <div class="modalPreLangSlectorDIv mb-5">
              <a class="nav-link" href="#"
                ><div class="d-flex">
                  <img
                    src="../asset/img/US.svg"
                    height="20"
                    alt=""
                    class="me-1 usImg"
                  />
                  Canada (CAD)
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="preheader">
      <div
        class="container d-lg-flex justify-content-lg-between align-items-lg-center d-flex justify-content-center"
      >
        <div>
          <p class="mb-0 prePara">
            NEW: ORGANIC BEDDING & BATH 
            <!-- <a href="#" class="text-underline prePara"
              >SHOP THE ORGANIC COLLECTION
            </a> -->
          </p>
        </div>
        <div class="noneOnmobile">
          <ul class="preUl mx-auto mb-2 mb-lg-0 d-flex">
            <!-- <li class="nav-itemPre me-4 mt-sm-0">
              <a class="nav-link" href="about.php">About Us</a>
            </li> -->
            <!--<li class="nav-itemPre me-4 mt-sm-0">-->
            <!--  <a class="nav-link" href="../sign-in-user">Sign In</a>-->
            <!--</li>-->
            <!--<li class="nav-itemPre me-4 mt-sm-0">-->
            <!--  <a class="nav-link" href="../sign-up-user">Sign Up</a>-->
            <!--</li>-->
            <!-- <li class="nav-itemPre me-4 mt-sm-0">
              <a class="nav-link" href="#"> Stores</a>
            </li> -->
            <li class="nav-itemPre me-4 mt-sm-0">
              <a class="nav-link" href="../blogs">Blog</a>
            </li>

            <li class="nav-itemPre me-4 mt-sm-0">
              <a class="nav-link" href="#"
                ><div
                  class="d-flex"
                  data-bs-toggle="modal"
                  data-bs-target="#staticBackdrop"
                >
                  <img
                    src="../asset/img/US.svg"
                    height="20"
                    alt=""
                    class="me-1 usImg"
                  />
                  Us
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>

  <section class="Navbar-Section d-none d-lg-block">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="../">
            <img src="../asset/img/cropped-logo.png" class="img-fluid"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item me-4 mt-sm-0">
                <a class="nav-link " aria-current="page" href="../"
                  >Home</a
                >
              </li>
              <li class="nav-item me-4 mt-sm-0">
                <a class="nav-link" href="../shop">Shop</a>
              </li>
              <li class="nav-item me-4 mt-sm-0">
                <a class="nav-link" href="../blogs">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../contact-us">Contact</a>
              </li>
            </ul>
            <div class="iconNav d-flex align-items-center">
              <div class="searchIcon me-4 mt-sm-0">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 25 25"
                  fill="currentColor"
                  class="fill-current"
                  height="28px"
                 
                >
                  <title>Search</title>
                  <path
                    d="M20.52 20.88a.7.7 0 01-.51-.2l-3.37-3.11a7.61 7.61 0 01-5.23 2.08 7.77 7.77 0 117.68-7.77 7.8 7.8 0 01-1.46 4.56L21 19.58a.74.74 0 01.05 1.06.75.75 0 01-.53.24zM11.41 5.62a6.27 6.27 0 106.18 6.26 6.23 6.23 0 00-6.18-6.26z"
                   
                  ></path>
                </svg>
              </div>
              <div class="userIcon me-4 mt-sm-0">
                <i class="fa fa-user-o" aria-hidden="true"></i>
              </div>
              <div class="cartIcon me-4 mt-sm-0">
                <a href="../cart" class="text-decoration-none">
              <span class="cartindexQTY">@if(session('cart'))
                    {{count(session('cart'))}}
                    @endif</span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 25 25"
                  class="fill-current"
                  height="28"
                 
                >
                  <title>Cart</title>
                  <path
                    d="M11.24 21.2a1.5 1.5 0 11-1.5-1.5 1.5 1.5 0 011.5 1.5zM17 19.7a1.5 1.5 0 101.5 1.5 1.5 1.5 0 00-1.5-1.5zm3.47-1.54L22 7.66a.76.76 0 00-.17-.6.78.78 0 00-.57-.26H6.33L6 4.44a.75.75 0 00-.74-.64h-2a.75.75 0 000 1.5h1.33L6.5 18.16a.74.74 0 00.74.64h12.5a.74.74 0 00.74-.64zM6.55 8.3h13.82l-1.28 9H7.89z"
                   
                  ></path>
                </svg>
                </a>
              </div>
            </div>
            <!-- <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
          </div>
        </div>
      </nav>
    </section>
       <!-- mobileheader  -->
    <section class="Navbar-Section d-block d-lg-none">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
        <div class="iconNav d-flex align-items-center">
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="modal" data-bs-target="#exampleModalcheck11"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
              <div class="searchIcon me-4 mt-sm-0">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 25 25"
                  fill="currentColor"
                  class="fill-current"
                  height="28px"
                 
                >
                  <title>Search</title>
                  <path
                    d="M20.52 20.88a.7.7 0 01-.51-.2l-3.37-3.11a7.61 7.61 0 01-5.23 2.08 7.77 7.77 0 117.68-7.77 7.8 7.8 0 01-1.46 4.56L21 19.58a.74.74 0 01.05 1.06.75.75 0 01-.53.24zM11.41 5.62a6.27 6.27 0 106.18 6.26 6.23 6.23 0 00-6.18-6.26z"
                   
                  ></path>
                </svg>
              </div>
              <div class="userIcon me-4 mt-sm-0">
                <i class="fa fa-user-o" aria-hidden="true"></i>
              </div>
            
          </div>
        
          <a class="navbar-brand" href="../">
            <img src="../asset/img/cropped-logo.png" class="img-fluid"
          /></a>

          <div class="cartIcon me-4 mt-sm-0 ms-5">
                <a href="../cart" class="text-decoration-none">
                 <span class="cartindexQTY">@if(session('cart'))
                    {{count(session('cart'))}}
                    @endif</span> 
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 25 25"
                  class="fill-current"
                  height="28"
                 
                 >
                  <title>Cart</title>
                  <path
                    d="M11.24 21.2a1.5 1.5 0 11-1.5-1.5 1.5 1.5 0 011.5 1.5zM17 19.7a1.5 1.5 0 101.5 1.5 1.5 1.5 0 00-1.5-1.5zm3.47-1.54L22 7.66a.76.76 0 00-.17-.6.78.78 0 00-.57-.26H6.33L6 4.44a.75.75 0 00-.74-.64h-2a.75.75 0 000 1.5h1.33L6.5 18.16a.74.74 0 00.74.64h12.5a.74.74 0 00.74-.64zM6.55 8.3h13.82l-1.28 9H7.89z"
                   
                  ></path>
                </svg>
                </a>
              </div>
        
        
        </div>
      </nav>
    </section>
      <!-- modal navbar  -->
          <div class="modal fade " id="exampleModalcheck11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none; z-index:9999999999!important;">
            <div class="modal-dialog ms-auto m-0">
              <div class="modal-content  navbarModal">
                <div class="modal-header">
                  <h5 class="modal-title ptFontfamly mb-0 heading20" id="exampleModalLabel">
                  <form class="d-flex">
                  <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
                  <div class="searchIcon me-4 mt-3" style=" margin-left: -5rem;">
                          <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 25 25"
                  fill="currentColor"
                  class="fill-current"
                  height="20px"
                 
                >
                  <title>Search</title>
                  <path
                    d="M20.52 20.88a.7.7 0 01-.51-.2l-3.37-3.11a7.61 7.61 0 01-5.23 2.08 7.77 7.77 0 117.68-7.77 7.8 7.8 0 01-1.46 4.56L21 19.58a.74.74 0 01.05 1.06.75.75 0 01-.53.24zM11.41 5.62a6.27 6.27 0 106.18 6.26 6.23 6.23 0 00-6.18-6.26z"
                   
                  ></path>
                </svg>
              </div>
              </form>
                  </h5>
                  <p data-bs-dismiss="modal" aria-label="Close" class="cursorPointer para16 fw-bold mb-0">
                  <i class="fa fa-times" aria-hidden="true" style="font-size: 2.2rem;"></i>
                  </p>
                </div>
                <div class="modal-body navModalbody d-flex flex-column justify-content-between" style="padding: 0 !important;">
                  <div class="container pt-5">
                    <div class="row mt-2">
                   
                    <div class=" " id="">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item px-3 mt-5 border-bottom d-flex align-items-center justify-content-between  ">
                <a class="nav-link heading20 " href="../"
                  >Home</a
                >
                <i class="fa fa-chevron-right" aria-hidden="true" style="font-size:2.2rem"></i>
              </li>
              <li class="nav-item px-3 mt-5 border-bottom d-flex align-items-center justify-content-between ">
                <a class="nav-link heading20" href="../shop">Shop</a>
                <i class="fa fa-chevron-right" aria-hidden="true" style="font-size:2.2rem"></i>
              </li>
              <li class="nav-item px-3 mt-5 border-bottom d-flex align-items-center justify-content-between ">
                <a class="nav-link heading20" href="../blogs">Blog</a>
                <i class="fa fa-chevron-right" aria-hidden="true" style="font-size:2.2rem"></i>
              </li>
              <li class="nav-item px-3 mt-5 border-bottom d-flex align-items-center justify-content-between " >
                <a class="nav-link heading20" href="../contact-us">Contact</a>
                <i class="fa fa-chevron-right" aria-hidden="true" style="font-size:2.2rem"></i>
              </li>
            </ul>
             
           
          </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
  <section class="navSectionSection mt-4">
    <div class="container">
      <!-- <p class="para12 textBlack">
        Home / All Bedding / Sheeting + Top of Bed / Sheets
      </p> -->
    </div>
  </section>

  <section class="productSLiderSection mb-5">
    <div class="container">
      <h1 class="ptFontfamly heading60 textBlack text-center my-5">{{$categories->name}}</h1>
      <p class="para16 textBlack text-center my-5">
        {{$categories->head_content}}
      </p>

     <!--  <div class="row">
          <div class="col-12 my-4 d-flex">
            <p class="filterbtn ms-0 ms-lg-4" >
              Filter
              <svg
                width="18"
                height="0.55rem"
                viewBox="0 0 18 12"
                xmlns="http://www.w3.org/2000/svg"
                class="ml-1 lg:ml-2.5"
                style="user-select: auto"
              >
                <path
                  d="M8 12h2c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1s.45 1 1 1zM0 1c0 .55.45 1 1 1h16c.55 0 1-.45 1-1s-.45-1-1-1H1C.45 0 0 .45 0 1zm4 6h10c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1z"
                  fill="currentColor"
                  fill-rule="evenodd"
                  style="user-select: auto"
                ></path>
              </svg>
</p>
          </div>
        </div> -->
      <div class="row">
        <!-- <div class="col-12 col-lg-2">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header para16" id="flush-headingOne">
                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Product Type
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="para16">
                    <label class="d-flex align-items-center ">
                      <input type="checkbox"  class="me-2">
                      <span class="checkmark"></span>
                      Loungewear
                    </label>
                  </div>
                  <div class="para16">
                    <label class="d-flex align-items-center ">
                      <input type="checkbox"  class="me-2">
                      <span class="checkmark"></span>
                      Robes + Slippers
                    </label>
                  </div>
                  <div class="para16">
                    <label class="d-flex align-items-center ">
                      <input type="checkbox"  class="me-2">
                      <span class="checkmark"></span>
                      Slippers
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Size
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="para16">
                    <label class="d-flex align-items-center ">
                      <input type="checkbox"  class="me-2">
                      <span class="checkmark"></span>
                      Extra Small
                    </label>
                  </div>
                  <div class="para16">
                    <label class="d-flex align-items-center ">
                      <input type="checkbox"  class="me-2">
                      <span class="checkmark"></span>
                      Small
                    </label>
                  </div>
                  <div class="para16">
                    <label class="d-flex align-items-center ">
                      <input type="checkbox"  class="me-2">
                      <span class="checkmark"></span>
                      Medium
                    </label>
                  </div>
                  <div class="para16">
                    <label class="d-flex align-items-center ">
                      <input type="checkbox"  class="me-2">
                      <span class="checkmark"></span>
                      Large
                    </label>
                  </div>
                  <div class="para16">
                    <label class="d-flex align-items-center ">
                      <input type="checkbox"  class="me-2">
                      <span class="checkmark"></span>
                      Extra Large
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Color
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <div class="para16">
                    <label class="d-flex align-items-center ">
                      <input type="checkbox"  class="me-2">
                      <span class="checkmark"></span>
                      Tan
                    </label>
                  </div>
                  <div class="para16">
                    <label class="d-flex align-items-center ">
                      <input type="checkbox"  class="me-2">
                      <span class="checkmark"></span>
                      Grey
                    </label>
                  </div>
                  <div class="para16">
                    <label class="d-flex align-items-center ">
                      <input type="checkbox"  class="me-2">
                      <span class="checkmark"></span>
                      Black
                    </label>
                  </div>
              </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree4" aria-expanded="false" aria-controls="flush-collapseThree">
                Material
                </button>
              </h2>
              <div id="flush-collapseThree4" class="accordion-collapse collapse" aria-labelledby="flush-headingThree4" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <div class="para16">
                    <label class="d-flex align-items-center ">
                      <input type="checkbox"  class="me-2">
                      <span class="checkmark"></span>
                      Tan
                    </label>
                  </div>
                  <div class="para16">
                    <label class="d-flex align-items-center ">
                      <input type="checkbox"  class="me-2">
                      <span class="checkmark"></span>
                      Grey
                    </label>
                  </div>
                  <div class="para16">
                    <label class="d-flex align-items-center ">
                      <input type="checkbox"  class="me-2">
                      <span class="checkmark"></span>
                      Black
                    </label>
                  </div>
              </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree5" aria-expanded="false" aria-controls="flush-collapseThree">
                Price Range
                </button>
              </h2>
              <div id="flush-collapseThree5" class="accordion-collapse collapse" aria-labelledby="flush-headingThree5" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <div class="para16">
                    <label class="d-flex align-items-center ">
                      <input type="checkbox"  class="me-2">
                      <span class="checkmark"></span>
                      Tan
                    </label>
                  </div>
                  <div class="para16">
                    <label class="d-flex align-items-center ">
                      <input type="checkbox"  class="me-2">
                      <span class="checkmark"></span>
                      Grey
                    </label>
                  </div>
                  <div class="para16">
                    <label class="d-flex align-items-center ">
                      <input type="checkbox"  class="me-2">
                      <span class="checkmark"></span>
                      Black
                    </label>
                  </div>
              </div>
              </div>
            </div>
          </div>
        </div> -->
       @foreach($products as $product)
        <div class="col-6 col-lg-3 mt-4">
         
          <div class="card">
            <div id="cardCOLOR">
                 <a href="../product-details/{{$product->slug}}" class="text-decoration-none" >
                     @foreach($variations as $var)
                    @if($product->id == $var->product_id)
                    <img class="card-img image{{$var->variation_id}} hideimg" src="../{{$var->v_thumbnail_url}}" alt="Vans" />
                    @endif
                    @endforeach
              <img class="card-img" src="../{{$product->thumbnail_url}}" alt="Vans" />
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
                                                                            <img src="../{{$product->thumbnail_url}}"
                                                                                class="img-fluidOwn">
                                                                        </div>
                                                                    </div>
                            @foreach($productImages as $productImage)
                            @if($product->id == $productImage->product_id)
                                                                    <div class="owl-item2">
                                                                        <div class="aboutussliderBox2">
                <img src="../{{$productImage->image_url}}" class="img-fluidOwn">
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


<section class="footerSection">
  <!-- Footer -->
  <footer class="text-center text-lg-start text-muted">
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mb-4">
            <img src="../asset/img/cropped-logo.png" class="img-fluid footerlogo" width="200">
            <!-- Links -->
            <!-- <h6 class="text-uppercase fw-bold mb-4 footerTitle">
                  chutya
                </h6>
                <p>
                  <a href="#!" class="footerAnchor">Angular</a>
                </p>
                <p>
                  <a href="#!" class="footerAnchor">React</a>
                </p>
                <p>
                  <a href="#!" class="footerAnchor">Vue</a>
                </p>
                <p>
                  <a href="#!" class="footerAnchor">Laravel</a>
                </p> -->


          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

            <div class="accordion d-lg-none d-block" id="accordionExample">


              <div class="accordion-item accitem ">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button accorbtn collapsed d-flex fw-bold " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Help
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      <a href="https://www.ups.com/track?loc=en_US&requester=ST/" target="__blank" class="footerAnchor">Track your order</a>
                    </p>
                    <p>
                      <a href="contact-us" class="footerAnchor">Contact Us</a>
                    </p>
                    <p>
                      <a href="faq" class="footerAnchor">FAQ</a>
                    </p>
                    <p>
                      <a href="faq" class="footerAnchor">Returns</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Links -->
            <div class="d-none d-lg-block">
              <h6 class="text-uppercase fw-bold mb-4 footerTitle">
                Help
              </h6>
              <p>
                <a href="https://www.ups.com/track?loc=en_US&requester=ST/" target="__blank" class="footerAnchor">Track your order</a>
              </p>
              <p>
                <a href="contact-us" class="footerAnchor">Contact Us</a>
              </p>
              <p>
                <a href="faq" class="footerAnchor">FAQ</a>
              </p>
              <p>
                <a href="faq" class="footerAnchor">Returns</a>
              </p>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->

          <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mb-4  ">

            <div class="accordion-item accitem d-lg-none d-block ">
              <h2 class="accordion-header" id="headingThree2">
                <button class="accordion-button accorbtn collapsed d-flex  fw-bold " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree">
                  Company
                </button>
              </h2>
              <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>
                    <a href="blogs" class="footerAnchor">Blogs</a>
                  </p>
                  <p>
                    <a href="shop" class="footerAnchor">Shop</a>
                  </p>
                </div>
              </div>
            </div>
            <!-- Links -->
            <div class="d-none d-lg-block">
              <h6 class="text-uppercase fw-bold mb-4 footerTitle">
                Company
              </h6>
              <p>
                <a href="blogs" class="footerAnchor">Blogs</a>
              </p>
              <p>
                <a href="shop" class="footerAnchor">Shop</a>
              </p>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4 mt-lg-0 mt-5">
            <!-- Content -->
            <div>
              <h6 class="text-uppercase fw-bold mb-4 footerTitle">
                JOIN OUR MAILING LIST
              </h6>
              <p class="footerPara mt-4 mt-lg-0">
                Get first dibs on comfy – first access to new products,
                sales and exclusive collections.
              </p>
              <input type="email" class="inputemail mt-4 mt-lg-0" placeholder="Enter email" />
            </div>
            <div class="mt-5">
              <h6 class="text-uppercase fw-bold mb-4 footerTitle mt-4 mt-lg-0">
                FOLLOW US
              </h6>
              <p class="footerPara mt-4 mt-lg-0">@stonyedge</p>
              <div class="mt-4 mt-lg-0 d-lg-flex justify-content-lg-start d-flex justify-content-center mt-4">
                <div class="me-lg-4 me-4">
                  <a href="https://instagram.com/stony_edge?utm_medium=copy_link" class="text-decoration-none">
                    <img src="../asset/img/instagram-white.svg" alt="" />
                  </a>
                </div>

                <div class="me-lg-4 me-4">
                  <a href="https://pin.it/7uwYw60" class="text-decoration-none">
                    <img src="../asset/img/pinterest-white.svg" alt="" />
                  </a>
                </div>
                <div class="me-lg-4 me-4">
                  <a href=" https://www.facebook.com/Stony.Edge/" class="text-decoration-none">
                    <img src="../asset/img/facebook-white.svg" alt="" />
                  </a>
                </div>
                <div class="me-lg-4 me-4">
                  <a href="https://twitter.com/StonyEdge" class="text-decoration-none">
                    <img src="../asset/img/twitter-white.svg" alt="" />
                  </a>
                </div>
                <!-- <div class="me-lg-4 me-2">
                      <a href="#" class="text-decoration-none">
                        <img src="asset/img/youtube-white.svg" alt="" />
                      </a>
                    </div> -->
                <!-- <div class="me-lg-4 me-2">
                      <a href="#" class="text-decoration-none">
                        <img src="asset/img/tiktok-white.svg" alt="" />
                      </a>
                    </div> -->
                <!-- <div class="me-lg-4 me-2">
                      <a href="#" class="text-decoration-none">
                        <img src="asset/img/linkedin-white.svg" alt="" />
                      </a>
                    </div> -->
              </div>
            </div>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
        <div class="mt-5 ps-0 ps-lg-4 d-lg-flex justify-content-lg-center d-flex justify-content-center mb-4">
          <div class="me-lg-4 me-4">
            <a href="" class="text-decoration-none">
              <img src="../asset/img/mastercard-svgrepo-com.svg" width="30" alt="" />
            </a>
          </div>

          <div class="me-lg-4 me-4">
            <a href="" class="text-decoration-none">
              <img src="../asset/img/paypal-svgrepo-com.svg" width="30" alt="" />
            </a>
          </div>
          <div class="me-lg-4 me-4">
            <a href=" " class="text-decoration-none">
              <img src="../asset/img/visa-pay-logo-svgrepo-com.svg" width="30" alt="" />
            </a>
          </div>
          <div class="me-lg-4 me-4">
            <a href="" class="text-decoration-none">
              <img src="../asset/img/american-express-svgrepo-com.svg" width="30" alt="" />
            </a>
          </div>

        </div>
      </div>
    </section>
    <!-- Section: Links  -->

    <div class="d-lg-flex align-items-lg-center justify-content-lg-center flex-lg-row d-sm-flex flex-sm-column">

      <div class="me-4 mt-4 mt-lg-0">
        <p class="footerAnchor">
          <div class="d-lg-flex align-items-center justify-content-lg-start d-flex justify-content-center  footerPara">
            <img src="../asset/img/US.svg" height="20" alt="" class="me-1 usImg" />
           USA
          </div>
        </p>
      </div>
      <div class="me-4 mt-4 mt-lg-0">
        <p class="footerPara mb-0">© Stony-Edge 2022</p>
      </div>
      <div class="me-4 mt-4 mt-lg-0">
        <a href="#!" class="footerAnchor">Privacy Policy</a>
      </div>
      <div class="me-4 mt-4 mt-lg-0">
        <a href="#!" class="footerAnchor">Terms of Use</a>
      </div>
    </div>
  </footer>
  <!-- Footer -->
</section>
<script>
    // slider
function zaibi(img){
    $('.hideimg').hide();
    $('.'+img).show();
}

    // product card slider 2 js
    $(document).ready(function() {
        $('.hideimg').hide();
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