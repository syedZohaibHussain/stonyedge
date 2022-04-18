

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
            <!--  <a class="nav-link" href="sign-in-user">Sign In</a>-->
            <!--</li>-->
            <!--<li class="nav-itemPre me-4 mt-sm-0">-->
            <!--  <a class="nav-link" href="sign-up-user">Sign Up</a>-->
            <!--</li>-->
            <!-- <li class="nav-itemPre me-4 mt-sm-0">
              <a class="nav-link" href="#"> Stores</a>
            </li> -->
            <li class="nav-itemPre me-4 mt-sm-0">
              <a class="nav-link" href="blogs">Blog</a>
            </li>

            <li class="nav-itemPre me-4 mt-sm-0">
              <a class="nav-link" href="#"
                ><div
                  class="d-flex"
                  data-bs-toggle="modal"
                  data-bs-target="#staticBackdrop"
                >
                  <img
                    src="asset/img/US.svg"
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
          <a class="navbar-brand" href="/">
            <img src="asset/img/cropped-logo.png" class="img-fluid"
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
                <a class="nav-link <?php if($page == 'home'){ echo 'active';}?>" aria-current="page" href="/"
                  >Home</a
                >
              </li>
              <li class="nav-item me-4 mt-sm-0">
                <a class="nav-link <?php if($page == 'shop'){ echo 'active';}?>" href="shop">Shop</a>
              </li>
              <li class="nav-item me-4 mt-sm-0">
                <a class="nav-link <?php if($page == 'blog'){ echo 'active';}?>" href="blogs">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($page == 'contact'){ echo 'active';}?>" href="contact-us">Contact</a>
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
                <a href="cart" class="text-decoration-none">
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
            data-bs-toggle="modal" data-bs-target="#exampleModalcheck"
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
        
          <a class="navbar-brand" href="/">
            <img src="asset/img/cropped-logo.png" class="img-fluid"
          /></a>

          <div class="cartIcon me-4 mt-sm-0 ms-5">
                <a href="cart" class="text-decoration-none">
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
          <div class="modal fade " id="exampleModalcheck" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none; z-index:9999999999!important;">
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
                <a class="nav-link heading20 " href="index.php"
                  >Home</a
                >
                <i class="fa fa-chevron-right" aria-hidden="true" style="font-size:2.2rem"></i>
              </li>
              <li class="nav-item px-3 mt-5 border-bottom d-flex align-items-center justify-content-between ">
                <a class="nav-link heading20" href="shop">Shop</a>
                <i class="fa fa-chevron-right" aria-hidden="true" style="font-size:2.2rem"></i>
              </li>
              <li class="nav-item px-3 mt-5 border-bottom d-flex align-items-center justify-content-between ">
                <a class="nav-link heading20" href="blogs">Blog</a>
                <i class="fa fa-chevron-right" aria-hidden="true" style="font-size:2.2rem"></i>
              </li>
              <li class="nav-item px-3 mt-5 border-bottom d-flex align-items-center justify-content-between " >
                <a class="nav-link heading20" href="contact-us">Contact</a>
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
          
          <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-224915156-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-224915156-1');
</script>

<!-- Global site tag (gtag.js) - Google Ads: 980310007 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-980310007"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-980310007');
</script>
