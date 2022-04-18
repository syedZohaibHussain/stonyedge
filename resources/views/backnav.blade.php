<!--navbar-->
<div class="wrapper">
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Dashboard</a>
      </li>
    
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
  
      <!-- admin profile dropdown -->

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user text-capitalize"></i> Admin
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <div class="dropdown-divider"></div>
         
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
      </form>
          <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>
        
        </div>
     
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Maqaami</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <!-- <div class="info">
          <a href="#" class="nav-link"><i class="far fa-user"></i><span class="ml-3">name</span></a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item ">
            <a href="/" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Dashboard
               
              </p>
            </a>
   
          </li>
           </li>
  
 
      
      
                 <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Product Management
              
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../productList" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product List</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="../category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../brandList" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Brand List</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="../specification-list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Specifications list</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="../variation" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Variation List</p>
                </a>
              </li>
             
               
         
            </ul>
          </li>
          
          

              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Order
                
                
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="../order" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Order List</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="../addOrder" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Order</p>
                </a>
              </li>
      
            </ul>
          </li> 
               
      <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Return & Exchange
               
                
              </p>
            </a>
            <ul class="nav nav-treeview">
             
           <li class="nav-item">
                <a href="return" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Return Reason</p>
                </a>
              </li>
                  <li class="nav-item">
                <a href="addReturn" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Reason</p>
                </a>
              </li>

          <li class="nav-item">
                <a href="returnOrder" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Return Order</p>
                </a>
              </li>
             <li class="nav-item">
                <a href="allExchange" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Exchange Reason</p>
                </a>
              </li>
            </ul>
          </li>
          
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Coupons
              
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../listcoupon" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Coupons List</p>
                </a>
              </li>
              
             
         
         
            </ul>
          </li>
          
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
             Front-End Setting
              
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../listbanner" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner List</p>
                </a>
              </li>
              
             
         
         
            </ul>
          </li>

                          
           
          

        </ul>
      </nav>
  </div>
  </aside>




<!--navbar-->