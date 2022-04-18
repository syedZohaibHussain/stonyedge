<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Product Details</title>
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
              <span class="cartindexQTY"> @if(session('cart'))
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

    <section class="productSection">
      <div class="productMainDIv">

        <div id="carouselExampleIndicators" class="carousel slide d-lg-none d-md-block d-sm-block" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
             <div class="carousel-item active">
              <img src="../{{$products->v_thumbnail_url}}" class="d-block w-100" alt="...">
            </div>
            @foreach($productImages as $productImage)
            <div class="carousel-item">
              <img src="../{{$productImage->v_image_url}}" class="d-block w-100" alt="...">
            </div>
            @endforeach
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <div class="productImgDIv d-none d-lg-block">
          <div class="imgBox">
            <img
              src="../{{$products->v_thumbnail_url}}"
              class="img-fluid"
            />
          </div>
          @foreach($productImages as $productImage)
          <div class="imgBox">
            <img
              src="../{{$productImage->v_image_url}}"
              class="img-fluid"
            />
          </div>
          @endforeach
          
        </div>
        <div class="productDetailsDIv px-4 px-lg-0 ps-lg-5 ps-2 mt-5 mt-lg-0">
            <div class="container" >
            <div class="row">
                <div class="col-12 col-xl-10 col-xxl-7">
                     <h1 class="heading20 ptFontfamly ">{{$products->v_name}}</h1>
          <p class="heading20">${{$products->v_new_price}}</p>
          <!--<p class="para12">-->
          <!--  As low as $14 every 2 weeks with Affirm.-->
          <!--  <a href="#" class="text-decoration-none"> Learn more </a>-->
          <!--</p>-->
          <div class="starDIv para12">
            <a href="#" class="text-decoration-none">
              <i class="fas fa-star" style="color:orange;"></i>
              <i class="fas fa-star" style="color:orange;"></i>
              <i class="fas fa-star" style="color:orange;"></i>
              <i class="fas fa-star" style="color:orange;"></i>
              <i class="fas fa-star" style="color:orange;"></i>
              <span class="text-decoration-underline"> Read  Reviews </span></a
            >
          </div>
          <div class="containerTabs mt-5">
    
    <input type="radio" id="tab1" name="tab" checked>
    <label for="tab1"> Details</label>
    <input type="radio" id="tab2" name="tab">
    <label for="tab2"> Materials + Care</label>
    <!--<input type="radio" id="tab3" name="tab">-->
    <!--<label for="tab3"> Reviews</label>-->
    <!--<input type="radio" id="tab4" name="tab">-->
    <!--<label for="tab4"> Share</label>-->
   
    <div class="line"></div>
    <div class="content-container" style="border-top:.1rem solid grey">
      <div class="content" id="c1">
        <h1 class="para12  linheightNormal">
                    <?php echo $products->v_description;?>
                  </h1>
      </div>
      <div class="content" id="c2">
        <ul class="list-unstyled para12 linheightNormal" style="">
                     <?php echo $categories->materials_care;?>
                  </ul>
      </div>
      <div class="content" id="c3">
       <h1 class="para12  linheightNormal">
                    <?php echo $categories->materials_care;?>
                  </h1>
      </div>
      <div class="content" id="c4">
        <h3>Share</h3>
        <p>This product is currently not shareable.</p>
      </div>
    </div>
  </div>

         

          <div class="btndiV ps-3">
            <p class="para12">Variation</p>
            <!-- <div>
              <button class="btn btn-outline-dark btn-lg">Large</button>
              <button class="btn btn-outline-dark btn-lg">Medium</button>
              <button class="btn btn-outline-dark btn-lg">Small</button>
              <button class="btn btn-outline-dark btn-lg">Extra large</button>
              <button class="btn btn-outline-dark btn-lg">XX-large</button>
            </div> -->
          </div>
          <div class="sizeGuid mt-4 ps-3">
            <!--<p-->
            <!--  class="para12"-->
            <!--  data-bs-toggle="modal"-->
            <!--  data-bs-target="#exampleModal"-->
            <!-->
            <!--  <svg-->
            <!--    width="15"-->
            <!--    height="16"-->
            <!--    viewBox="0 0 15 10"-->
            <!--    xmlns="http://www.w3.org/2000/svg"-->
            <!--    class="mr-1 inline"-->
            <!--    style="user-select: auto"-->
            <!--  >-->
            <!--    <g-->
            <!--      stroke="currentColor"-->
            <!--      fill="none"-->
            <!--      fill-rule="evenodd"-->
            <!--      style="user-select: auto"-->
            <!--    >-->
            <!--      <rect-->
            <!--        x="0.5"-->
            <!--        y="0.5"-->
            <!--        width="14"-->
            <!--        height="9"-->
            <!--        rx="1"-->
            <!--        style="user-select: auto"-->
            <!--      ></rect>-->
            <!--      <path-->
            <!--        d="M7.5 1v4.758M4.5 1v2.864M10.5 1v2.864"-->
            <!--        stroke-linecap="round"-->
            <!--        style="user-select: auto"-->
            <!--      ></path>-->
            <!--    </g>-->
            <!--  </svg>-->
            <!--  &nbsp; Size Guide-->
            <!--</p>-->

             <!--Modal -->
            <div
              class="modal fade"
              id="exampleModal"
              tabindex="-1"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body">
                    <h1 class="heading20 text-center">Size Guide</h1>
                    <div
                      class="modal-dialog px-6 py-6 md:px-12 md:pb-12 lg:px-6 lg:pb-6"
                      id="headlessui-description-23"
                      style="user-select: auto"
                    >
                      <div
                        class="space-y-small desktop:space-y-base flex flex-col items-stretch justify-start"
                        style="user-select: auto"
                      >
                        <div class="overflow-auto" style="user-select: auto">
                          <div
                            class="grid grid-cols-12 w-max min-w-full"
                            style="user-select: auto"
                          >
                            <div class="col-span-12" style="user-select: auto">
                              <table
                                class="w-full text-center bg-white-50 text-xs"
                                style="user-select: auto"
                              >
                                <thead style="user-select: auto">
                                  <tr
                                    class="border border-solid border-tan-400"
                                    style="user-select: auto"
                                  >
                                    <th
                                      class="p-4 bg-tan-400 font-sansBold"
                                      style="user-select: auto"
                                    >
                                      MEN'S SIZE
                                    </th>
                                    <th
                                      class="p-4 bg-tan-400 font-sansBold"
                                      style="user-select: auto"
                                    >
                                      S
                                    </th>
                                    <th
                                      class="p-4 bg-tan-400 font-sansBold"
                                      style="user-select: auto"
                                    >
                                      M
                                    </th>
                                    <th
                                      class="p-4 bg-tan-400 font-sansBold"
                                      style="user-select: auto"
                                    >
                                      L
                                    </th>
                                    <th
                                      class="p-4 bg-tan-400 font-sansBold"
                                      style="user-select: auto"
                                    >
                                      XL
                                    </th>
                                    <th
                                      class="p-4 bg-tan-400 font-sansBold"
                                      style="user-select: auto"
                                    >
                                      XXL
                                    </th>
                                  </tr>
                                </thead>
                                <tbody style="user-select: auto">
                                  <tr
                                    class="border border-solid border-tan-400"
                                    style="user-select: auto"
                                  >
                                    <td
                                      class="font-sans p-4"
                                      style="user-select: auto"
                                    >
                                      CHEST
                                    </td>
                                    <td
                                      class="font-sans p-4"
                                      style="user-select: auto"
                                    >
                                      37" - 39"
                                    </td>
                                    <td
                                      class="font-sans p-4"
                                      style="user-select: auto"
                                    >
                                      39" - 42"
                                    </td>
                                    <td
                                      class="font-sans p-4"
                                      style="user-select: auto"
                                    >
                                      42" - 45"
                                    </td>
                                    <td
                                      class="font-sans p-4"
                                      style="user-select: auto"
                                    >
                                      45" - 48"
                                    </td>
                                    <td
                                      class="font-sans p-4"
                                      style="user-select: auto"
                                    >
                                      48" - 51"
                                    </td>
                                  </tr>
                                  <tr
                                    class="border border-solid border-tan-400"
                                    style="user-select: auto"
                                  >
                                    <td
                                      class="font-sans p-4"
                                      style="user-select: auto"
                                    >
                                      WAIST
                                    </td>
                                    <td
                                      class="font-sans p-4"
                                      style="user-select: auto"
                                    >
                                      29" - 32"
                                    </td>
                                    <td
                                      class="font-sans p-4"
                                      style="user-select: auto"
                                    >
                                      32" - 35"
                                    </td>
                                    <td
                                      class="font-sans p-4"
                                      style="user-select: auto"
                                    >
                                      35" - 38"
                                    </td>
                                    <td
                                      class="font-sans p-4"
                                      style="user-select: auto"
                                    >
                                      38" - 41"
                                    </td>
                                    <td
                                      class="font-sans p-4"
                                      style="user-select: auto"
                                    >
                                      41" - 44"
                                    </td>
                                  </tr>
                                  <tr
                                    class="border border-solid border-tan-400"
                                    style="user-select: auto"
                                  >
                                    <td
                                      class="font-sans p-4"
                                      style="user-select: auto"
                                    >
                                      INSEAM (PANT)
                                    </td>
                                    <td
                                      class="font-sans p-4"
                                      style="user-select: auto"
                                    >
                                      31"
                                    </td>
                                    <td
                                      class="font-sans p-4"
                                      style="user-select: auto"
                                    >
                                      31"
                                    </td>
                                    <td
                                      class="font-sans p-4"
                                      style="user-select: auto"
                                    >
                                      31"
                                    </td>
                                    <td
                                      class="font-sans p-4"
                                      style="user-select: auto"
                                    >
                                      31"
                                    </td>
                                    <td
                                      class="font-sans p-4"
                                      style="user-select: auto"
                                    >
                                      31"
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

           <!-- <div class="sizeGuid mt-4 ps-3">
            <p class="para12">Color : <span>Coal</span></p>
          </div> -->
          
            <div class="colorsDIv d-flex">
            @foreach($variations as $variation)
            
            <div class="colorsOuter me-4">
                <a href="../product-details/{{$variation->v_slug}}">
             
                <div style="width: 3rem;height: 3rem;background-color:{{$variation->v_color_code}};border-radius: 50%;">
                  <div class=""></div>
                
              </div>
              </a>
            </div>
           
            @endforeach
          </div>
                  </div>
            </div>
            </div>
         
         
          
          <div class="container btnaddtocart mt-4">
               <form action="{{route('carts.store')}}" method="post">
                  @csrf
            <div class="row align-items-center">
             
              <div class="col-2 col-xl-2 col-xxl-1">
                <select
                  class="form-select para16 p-3"
                  aria-label="Default select example" name="qty"
                >
                  <option value="1" selected>1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>
              <div class="col-10 col-xl-8 col-xxl-6">
                
                  <input type="hidden" name="product_id" value="{{$products->variation_id}}">
                  <input type="hidden" name="price" value="{{$products->v_new_price}}">
                  <input type="hidden" name="status" value="variation">
                
                <button type="submit" 
                  class="btn w-100 btn-dark py-3 para16">
                  Add to cart
                </button>
                
              </div>
              
            </div>
            </form>
              <div class="row">
                <div class="col-12 col-xl-10 col-xxl-7">
              <button
                class="shippingTag w-100 d-flex align-items-center justify-content-center para16 px-5  mb-4 mt-5"
              >
                <div class="pe-3 me-3 border-end">
                  <svg
                    width="80"
                    height="45"
                    viewBox="4 2 20 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    stroke-width="0.4"
                    style="user-select: auto"
                  >
                    <path
                      d="M9.79542 16.4549H7.81348V7.15H18.9794V16.4549H12.4886"
                      stroke="#3B3B3B"
                      style="user-select: auto"
                    ></path>
                    <path
                      d="M13.7711 9.1H12.3496V13.65H13.1693V12.0497H13.7941C14.7513 12.0497 15.5996 11.7672 15.5996 10.6062C15.5996 9.2318 14.6252 9.1 13.7711 9.1ZM13.1693 9.8029H13.7883C14.2354 9.8029 14.757 9.86566 14.757 10.6125C14.757 11.215 14.3558 11.353 13.8456 11.353H13.1693V9.8029Z"
                      fill="#3B3B3B"
                      style="user-select: auto"
                    ></path>
                    <path
                      d="M20.5255 15.9897H19.2896"
                      stroke="#3B3B3B"
                      style="user-select: auto"
                    ></path>
                    <path
                      d="M19.2896 9.48574H21.9044L24.5623 12.9276V15.689H23.0097"
                      stroke="#3B3B3B"
                      style="user-select: auto"
                    ></path>
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.4657 16.3094C12.4657 16.9946 11.9103 17.55 11.2251 17.55C10.5399 17.55 9.98438 16.9946 9.98438 16.3094C9.98438 15.6241 10.5399 15.0687 11.2251 15.0687C11.9103 15.0687 12.4657 15.6241 12.4657 16.3094Z"
                      stroke="#3B3B3B"
                      style="user-select: auto"
                    ></path>
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M23.0111 16.3094C23.0111 16.9946 22.4557 17.55 21.7705 17.55C21.0852 17.55 20.5298 16.9946 20.5298 16.3094C20.5298 15.6241 21.0852 15.0687 21.7705 15.0687C22.4557 15.0687 23.0111 15.6241 23.0111 16.3094Z"
                      stroke="#3B3B3B"
                      style="user-select: auto"
                    ></path>
                    <path
                      d="M1.2998 9.95098H5.64211"
                      stroke="#3B3B3B"
                      style="user-select: auto"
                    ></path>
                    <path
                      d="M2.23047 11.9576H5.95244"
                      stroke="#3B3B3B"
                      style="user-select: auto"
                    ></path>
                    <path
                      d="M4.40137 13.8185H5.95219"
                      stroke="#3B3B3B"
                      style="user-select: auto"
                    ></path>
                    <path
                      d="M19.2896 13.0526H24.5623"
                      stroke="#3B3B3B"
                      style="user-select: auto"
                    ></path>
                  </svg>
                </div>
                Free Ground Shipping + Returns
               </button>
            </div>
            </div>

              <!-- modal checkout  -->
             @if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)
            <div
              class="modal fade show"
              id="exampleModalcheckjd"
              tabindex="-1"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
              style="display: block;"
            >
              <div class="modal-dialog ms-auto m-0">
                <div class="modal-content checkoutmodalconten">
                  <div class="modal-header">
                    <h5
                      class="modal-title ptFontfamly mb-0 heading20"
                      id="exampleModalLabel"
                    >
                      My Cart ( @if(session('cart'))
                    {{count(session('cart'))}}
                    @endif )
                    </h5>
                    <p
                      data-bs-dismiss="modal"
                      aria-label="Close"
                      class="cursorPointer close para16 fw-bold mb-0"
                    >
                      Close
                    </p>
                  </div>
                  <div
                    class="modal-body d-flex flex-column justify-content-between"
                  >
                  @php 
$subtotal = 0;
@endphp
        @if(session('cart'))
       
            @foreach(session('cart') as $id => $details)
                @php $subtotal += $details['price'] * $details['item_quantity'] @endphp
                    <div class="container">
                      <div class="row mt-2">
                        <div class="col-10">
                          <div class="d-flex">
                            <div class="modalImg px-3 me-4">
                              <img
                                src="../{{$details['image']}}"
                                class="img-fluidOwn"
                              />
                            </div>
                            <div>
                              <p class="para12">{{ $details['name'] }}</p>
                             <p class="para12">{{$details['item_quantity']}}</p>
                             <!--  <select
                                class="form-select para16"
                                aria-label="Default select example"
                              >
                                <option selected>1</option>
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="3">4</option>
                              </select> -->
                            </div>
                          </div>
                        </div>
                        <div class="col-2 d-flex justify-content-end">

                          <form id="delete-form{{$details['product_id']}}" action="{{route('carts.destroy',$details['product_id'])}}" method="POST" style="display: none;">
                          @csrf
                          @method('DELETE')
                          </form>
                            <div class="rightsidecheckoutmodal">
                                <p class="para12 fw-bold cursorPointer" onclick="event.preventDefault();
              document.getElementById('delete-form{{$details['product_id']}}').submit();">&#9747;</p>
                            </div>
                            
                        </div>
                        <div class="col-10"></div>
                        <div class="col-2 d-flex justify-content-end">
                          <div class="rightsidecheckoutmodal">
                            <p class="para12 fw-bold cursorPointer">${{$details['price'] * $details['item_quantity']}}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
        @endif
                    <div class="container">
                      <div class="px-4 py-5 bgcolor">
                        <div class="flex flex-col">
                          <div class="d-flex justify-content-between">
                            <h4 class="h5 font-serifMedium mb-0 leading-none para16">
                              Subtotal
                            </h4>
                            <span class="text-xl para16">${{$subtotal}}</span>
                          </div>
                          <div class="mt-2 text-center">
                            <!-- <p
                              class="para16"
                            >
                              As low as $27 every 2 weeks with
                              <span class="">Affirm</span>.
                              <a class="affirm-modal-trigger">Learn more</a>
                            </p> -->
                          </div>
                          <div class="mt-2">
                            <a
                              class="text-decoration-none para16 hovernone w-100 btn btn-dark text-white"
                              href="../cart" >
                              Checkout</a
                            >
                          </div>
                          <h6 class="text-center para16 mt-3 mb-0">
                            60 Day Trial / Free Shipping + Returns
                          </h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
          </div>

         
        </div>
      </div>
    </section>

    <section class="WhyweareDIfferentSection  px-3 px-lg-0">
      <div class="container">
        <div class="row ">
          <div class=" col-lg-3 col-12 d-flex  align-items-center justify-content-center " style="border-right: 0.1rem solid #000;">
            <h1 class="heading36 ptFontfamly text-center text-lg-start mb-5 mb-lg-0">
              Why We're 
              Different
            </h1>
          </div>
          <div class="col-lg-6 col-12  text-center text-lg-start">
            <p class="para16 ps-lg-5">
              {{$categories->description}}
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="productSLiderSection py-5 bgcolor">
      <!-- Item slider-->
      <div class="container bg-white px-5 py-5">
        <h1 class="ptFontfamly heading36 textBlack text-center py-5">
          Recommended Products
        </h1>

        <div class="bbb_main_container">
          <div class="bbb_viewed_nav_container">
            <div class="bbb_viewed_nav bbb_viewed_prev">
              <i class="fas fa-chevron-left"></i>
            </div>
            <div class="bbb_viewed_nav bbb_viewed_next">
              <i class="fas fa-chevron-right"></i>
            </div>
          </div>

          <div class="bbb_viewed_slider_container">
            <div class="owl-carousel owl-theme bbb_viewed_slider">
              @foreach($recommended as $recommend)
              <div class="owl-item">
                <a href="../product-details/{{$recommend->slug}}" class="text-decoration-none" style="z-index: 99999 !important;">
                <div class="card">
                  <div id="cardCOLOR">
                    <img
                      class="card-img"
                      src="../{{$recommend->thumbnail_url}}"
                      alt="Vans"
                    />
                  </div>

                  <div class="card-img-overlay d-flex">
                    <a
                      href="#"
                      class="card-link text-danger like text-decoration-none"
                    >
                      <span class="circleHeart">
                        <i class="fas fa-heart"></i>
                      </span>
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">{{$recommend->product_name}}</h4>
                    <h6 class="card-subtitle mb-2 text-muted">${{$recommend->new_price}}</h6>

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
    <section class="reveiwSection">
    <div class="container text-center">
      <h1 class="heading36 ptFontfamly text-white">Reviews</h1>
      <div class="starDIv para12">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <div class="d-flex align-items-center justify-content-center">
        <!--<div class="me-4">-->
        <!--  <a href="#" class="text-decoration-underline text-white para12 mt-3 cursorPointer">-->
        <!--    Read 2376 Reviews-->

        <!--  </a>-->
        <!--</div>-->
        <div class="" id="writereviewbtn">

          <p class="text-decoration-underline text-white para12 mt-3 cursorPointer">
            Write A Review
          </p>
        </div>

      </div>

      <div class="reviewForm " style="display: none;" id="formReview">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-6 mx-auto ">
              <form>
                <div class="row mb-3 mt-5">
                  <h1 class="heading20 text-start  fw-normal d-flex align-items-center text-white">Score
                    <div class=" para12 ms-3">
                      <div class="star-rating">
                        <input id="star-5" type="radio" name="rating" value="star-5" />
                        <label for="star-5" title="5 stars">
                          <i class="active fa fa-star" aria-hidden="true"></i>
                        </label>
                        <input id="star-4" type="radio" name="rating" value="star-4" />
                        <label for="star-4" title="4 stars">
                          <i class="active fa fa-star" aria-hidden="true"></i>
                        </label>
                        <input id="star-3" type="radio" name="rating" value="star-3" />
                        <label for="star-3" title="3 stars">
                          <i class="active fa fa-star" aria-hidden="true"></i>
                        </label>
                        <input id="star-2" type="radio" name="rating" value="star-2" />
                        <label for="star-2" title="2 stars">
                          <i class="active fa fa-star" aria-hidden="true"></i>
                        </label>
                        <input id="star-1" type="radio" name="rating" value="star-1" />
                        <label for="star-1" title="1 star">
                          <i class="active fa fa-star" aria-hidden="true"></i>
                        </label>
                      </div>
                    </div>
                  </h1>
                  <div class="col-12 col-lg-6">
                    <input type="text" placeholder=" Name" class="form-control para16 fw-normal py-3 " id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="col-12 col-lg-6">
                    <input type="text" placeholder="Email " class="form-control para16 fw-normal py-3 " id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="col-12 ">
                    <input type="text" placeholder="Review Title" class="form-control para16 fw-normal py-3 " id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>




                  <div class="col-12 text-start ">
                    <textarea name="" id="" rows="10" placeholder="Review" style="width: 100%;"></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-light w-100 text-uppercase">Submit Review</button>


              </form>

            </div>
          </div>
        </div>

      </div>

    </div>


     <div class="container">
      <div class="bbb_main_container">
      <div class="bbb_viewed_nav_container2">
          <div class="bbb_viewed_nav bbb_viewed_prev2 ">
            <i class="fas fa-chevron-left"></i>
          </div>
          <div class="bbb_viewed_nav bbb_viewed_next2 ">
            <i class="fas fa-chevron-right"></i>
          </div>
        </div>
        

        <div class="bbb_viewed_slider_container">
          <div class="owl-carousel owl-theme bbb_viewed_slider2">
              @foreach($reviews as $review)
              @if($review->cat_id == $categories->cat_id)
            <div class="owl-item">
              <div class="row text-black bg-white reviewBox " style="padding: 4rem">
                <!--<p class="heading20 ptFontfamly">so far, this is a good product </p>-->
                <p class="para12">
                  <span class="fa fa-star checked" style="color:orange;"></span>
                  <span class="fa fa-star checked" style="color:orange;"></span>
                  <span class="fa fa-star checked" style="color:orange;"></span>
                  <span class="fa fa-star checked" style="color:orange;"></span>
                  <span class="fa fa-star checked" style="color:orange;"></span>
                </p>
                <p class="para12 comments" id="style-6">{{$review->comments}}</p>
                <!--<p class="para12">Bronwyn M. - <i>Verified Buyer</i> </p>-->
                <p class="para12">{{date_format($review->created_at,"Y/m/d")}}</p>
              </div>
            </div>
            @endif
            @if($review->product_id == $products->id)
            <div class="owl-item">
              <div class="row text-black bg-white reviewBox " style="padding: 4rem">
                <!--<p class="heading20 ptFontfamly">so far, this is a good product </p>-->
                <p class="para12">
                  <span class="fa fa-star checked" style="color:orange;"></span>
                  <span class="fa fa-star checked" style="color:orange;"></span>
                  <span class="fa fa-star checked" style="color:orange;"></span>
                  <span class="fa fa-star checked" style="color:orange;"></span>
                  <span class="fa fa-star checked" style="color:orange;"></span>
                </p>
                <p class="para12 comments" id="style-6">{{$review->comments}}</p>
                <!--<p class="para12">Bronwyn M. - <i>Verified Buyer</i> </p>-->
                <!--<p class="para12">{{date_format($review->created_at,"Y/m/d")}}</p>-->
                
                <!-- <div class="reviewlikes">-->


                    <!--<p class="para12">12/21/2021</p>-->


                <!--    <div class="likesss" style="display: flex; flex-direction: row; justify-content:center; ">-->
                <!--                        <p class="para12">{{date_format($review->created_at,"Y/m/d")}}</p>-->


                <!--        <div>-->
                <!--            <i class="fa fa-thumbs-up counter-plus ms-2" aria-hidden="true"></i>-->
                <!--        </div>-->


                <!--        <p class="dislike para12 ms-4">0</p>-->

                <!--        <i class="fa fa-thumbs-down counter-dislike ms-2" aria-hidden="true"></i>-->

                <!--    </div>-->


                <!--</div>-->
              </div>
            </div>
            @endif
            @endforeach

          </div>
        </div>
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

      // product card slider js
      $(document).ready(function () {
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
              0: { items: 2 },
              575: { items: 2 },
              768: { items: 2 },
              991: { items: 2 },
              1199: { items: 4 },
            },
          });

          if ($(".bbb_viewed_prev").length) {
            var prev = $(".bbb_viewed_prev");
            prev.on("click", function () {
              viewedSlider.trigger("prev.owl.carousel");
            });
          }

          if ($(".bbb_viewed_next").length) {
            var next = $(".bbb_viewed_next");
            next.on("click", function () {
              viewedSlider.trigger("next.owl.carousel");
            });
          }
        }
      });

      document.getElementById("writereviewbtn").addEventListener("click", filter1);

    let filterdiv2 = document.getElementById("formReview");

    function filter1() {
      if (filterdiv2.style.display === "none") {
        filterdiv2.style.display = "block";
      } else {
        filterdiv2.style.display = "none";
      }
    }
   // reveiw slider 

     $(document).ready(function() {
      if ($(".bbb_viewed_slider2").length) {
        var viewedSlider2 = $(".bbb_viewed_slider2");

        viewedSlider2.owlCarousel({
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
              items: 1
            },
            575: {
              items: 2
            },
            768: {
              items: 2
            },
            991: {
              items: 2
            },
            1199: {
              items: 3
            },
          },
        });

        if ($(".bbb_viewed_prev2").length) {
          var prev2 = $(".bbb_viewed_prev2");
          prev2.on("click", function() {
            viewedSlider2.trigger("prev.owl.carousel");
          });
        }

        if ($(".bbb_viewed_next2").length) {
          var next2 = $(".bbb_viewed_next2");
          next2.on("click", function() {
            viewedSlider2.trigger("next.owl.carousel");
          });
        }


      }
    });
      $('.close').click( function() {
    $("#exampleModalcheckjd").toggleClass("show");
    $("#exampleModalcheckjd").css("display", "none");
} );
    </script>
  </body>
</html>
