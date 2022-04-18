<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Product</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Select2 CSS --> 
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" /> 
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/3.20.3/tagify.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagify/3.20.3/tagify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://cdn.tiny.cloud/1/txtwqnpdsplitgxy7t9wx0dmgxqvxoiy5ul4fa36q3a5bnjg/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script>
  <style type="text/css">
.error{
  color: red;
  font-size: 14px;
  /*border-color:red;*/
} 

  #progress-bar {
  height: 550px;
  /*width: 100%;*/
  overflow-y:auto;
}

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Navbar -->
  
<div class="wrapper">
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../" class="nav-link">Dashboard</a>
      </li>
    
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      <!-- Notifications Dropdown Menu -->
    <!--   <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
         
        </div>
      </li> -->
      <!-- admin profile dropdown -->

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user text-capitalize"></i> Admin
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
       <!--    <span class="dropdown-item dropdown-header">15 Notifications</span>
 -->          <div class="dropdown-divider"></div>
         
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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="../" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Dashboard
               
              </p>
            </a>
    <!--  -->
          </li>
           </li>
  
         
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
             Category
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../addCategory" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Category</p>
                </a>
              </li>
            </ul>
          </li>

         <!--  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Sub Category
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="subCategory" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub-Category List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="addSubCategory" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Sub-Category</p>
                </a>
              </li>
         
            </ul>
          </li> -->

                    <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Sub Child Category
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="subChildCategory" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub-Child-Category List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="addSubChildCategory" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Sub-Child-Category</p>
                </a>
              </li>
         
            </ul>
          </li> -->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
             Brands
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../brandList" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Brand List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../addBrand" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Brand</p>
                </a>
              </li>
         
            </ul>
          </li>
      
      
                 <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Product Management
                <i class="fas fa-angle-left right"></i>
                
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
                <a href="../addProduct" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
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
               specifications
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
             <!--  <li class="nav-item">
                <a href="productList" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product List</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="../addspecifications" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add specifications</p>
                </a>
              </li>
         
            </ul>
          </li>
           
          

        </ul>
      </nav>
  </div>
  </aside>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

     <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product List</h1>
          </div>
       
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <!-- <div class="col-3">
          </div> -->
          <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Product Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form action="{{route('variation.store')}}" method="post" enctype="multipart/form-data" id="Supplierform">    
  @csrf
                <div class="card-body">
                    
                    @if (session('msg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('msg') }}
                        </div>
                    @endif
                  
                  <div class="form-group">
                    <label>Product Name<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="product_name" placeholder="Enter Product Name" required="required" value="{{$products->product_name}}">
                    <input type="hidden" name="id" value="{{$products->id}}">
                  </div>
                  <!--  <div class="form-group">-->
                  <!--  <label>Sort<span style="color: red;"> *</span></label>-->
                  <!--  <input type="number" class="form-control" placeholder="Sort" name="sort" value="{{$products->sort}}" required="required">-->
                  <!--</div>-->
                  <div class="form-group">
                    <label>Description<span style="color: red;"> *</span></label>
                    <textarea class="form-control" id="mytextarea" name="description" required="required">
                      {{$products->description}}
                      
                    </textarea>
                  </div>
                   

                    
                    
<!-- <div class="row" id="spec">
</div>
<div class="row">
<div class="col-6">
    <div class="form-group">
                    <label>Specification Type<span style="color: red;"> *</span></label>
        <input type="text" class="form-control" name="spec_type[]" placeholder="Enter specification type">&nbsp;
                    <a href="javascript:void(0);" class="addCF">Add</a>
                  </div>
</div>
<div class="col-6">
    <div class="form-group">
                    <label>Specification Value<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="spec_value[]" placeholder="Enter specification value">
                  </div>
</div>
</div>
<div class="spec-body"></div> -->
                   <div class="form-group">
                    <label>Product Image Alt-Name<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="alt_name" placeholder="Enter Alt Name" required="required" maxlength="70">
                  </div>
                      <div class="form-group">
                    <label>Product thumbnail Image<span style="color: red;"> *</span></label>
                    <input type="file" class="form-control"name="thumbnail_url" accept="image/png, image/jpeg" required="required">
                  </div>
                  <div class="form-group">
                    <label>Product Image<span style="color: red;"> *</span></label>
                    <input type="file" class="form-control"name="image_url[]" accept="image/png, image/jpeg" required="required" multiple>
                  </div>
                  <!--<div class="form-group">-->
                  <!--  <label>Product banner Image<span style="color: red;"> *</span></label>-->
                  <!--  <input type="file" class="form-control" name="banner_url" accept="image/png, image/jpeg">-->
                  <!--</div>-->
                  <!-- <div class="form-group">-->
                  <!--  <label>Tag<span style="color: red;"> *</span></label>-->
                  <!--  <input type="text" class="form-control" name="tag" placeholder="Enter Tag" required>-->
                  <!--</div>-->
                  <!-- <div class="form-group">-->
                  <!--  <label>Slug<span style="color: red;"> *</span></label>-->
                  <!--  <input type="text" class="form-control" name="slug" placeholder="" readonly="" value="will be auto generated">-->
                  <!--</div>-->
               <div class="form-group">
                    <label>Sku<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="sku" placeholder="Enter Sku">
                  </div>
  <div class="form-group">
                    <label>Quantity<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="quantity" placeholder="Enter Quantity" required="required">
                  </div>
                  <div class="row">
                    <div class="col-6">
                  <div class=" form-group">
                          <label>Color Name</label>
                          <input type="text" class="form-control" name="color_name" aria-invalid="false">
                          </div>
                          </div>
                          <div class="col-6">
                  <div class=" form-group">
                          <label>Color Code</label>
                          <input type="color" class="form-control valid" name="color_code" aria-invalid="false">
                          
                        </div>
                        </div></div>
<div class="row">
<div class="col-6">
    <div class="form-group">
                    <label>Old Price<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control old_price" name="old_price" placeholder="Enter Old Price" value="{{$products->old_price}}" required="required">
                  </div>
</div>
<div class="col-6">
    <div class="form-group">
                    <label>New Price<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control new_price" name="new_price" value="{{$products->old_price}}" placeholder="Enter New Price">
                  </div>
</div>
</div>
 <div class="form-group">
                    <label>Youtube Url<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="youtube_url" placeholder="Enter Youtube Url">
                  </div>
                     <div class="form-group">
                      <label>New Arrival<span style="color: red;"> *</span></label>
                      <select  class="form-control"  name="new_arrival" required="required">
                      <option value="No option selected" selected>No option selected</option>
                      <option value="Last 7 days">Last 7 days</option>
                      <option value="Last 30 days">Last 30 days</option>
                      <option value="Last 60 days">Last 60 days</option>
                    </select>
                    </div>
                        
        
       <label>Returnable<span style="color: red;"> *</span></label>
      <div class="form-group">
<label class="switch">
  <input type="checkbox" class="form-control" name="is_returnable" value="1">
  <span class="slider round"></span>
</label>
</div>  
        
       <label>Show product<span style="color: red;"> *</span></label>
      <div class="form-group">
<label class="switch">
  <input type="checkbox" checked class="form-control" name="is_active" value="1">
  <span class="slider round"></span>
</label>
</div>          

                  <!--     <div class="form-group">-->
                  <!--  <label>Warranty Duration<span style="color: red;"> *</span></label>-->
                  <!--  <input type="text" class="form-control" name="Warranty" placeholder="Warranty Duration">-->
                  <!--</div>-->
                  


                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
           
            <!-- /.card -->

            <!-- /.card -->

            
            <!-- /.card -->
          
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
          
          
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>
<script>

$(document).on('keyup','.new_price',function(){

   if(parseFloat($('.new_price').val()) > parseFloat($('.old_price').val())){
  $('.new_price').val('');
}

});
    
</script>
<script>
    $(document).ready(function(){
        $(".addCF").click(function(){
            
            var markup = '<div class="row"><div class="col-6"><div class="form-group"><label>Specification Type<span style="color: red;"> *</span></label><input type="text" class="form-control" name="spec_type[]" placeholder="Enter specification type" required="required">&nbsp;<a href="javascript:void(0);" class="remCF">Remove</a></div></div><div class="col-6"><div class="form-group"><label>Specification Value<span style="color: red;"> *</span></label><input type="text" class="form-control" name="spec_value[]" placeholder="Enter specification value" required="required"></div></div></div>';
            $(".spec-body").append(markup);
        });
        
        // Find and remove selected table rows
        
    });

  $(document).on("click",'.remCF',function(){

   $(this).closest('.row').remove(); 
});

</script>

<script>
$(document).ready(function() {
$('#selUser').on('change', function() {
var category_id = this.value;
$("#selUser1").html('');
$.ajax({
url:"{{url('get-subcategories-by-category')}}",
type: "POST",
data: {
category_id: category_id,
_token: '{{csrf_token()}}'
},
dataType : 'json',
success: function(result){
$("#selUser1").append('<option value="" required disabled selected>Select Brand</option>'); 
$.each(result.subcategories,function(key,value){
$("#selUser1").append('<option value="'+value.brand_id+'">'+value.brand_name+'</option>');
});
}
});
});    
});


$(document).ready(function() {
$('#selUser').on('change', function() {
var category_id = this.value;
$("#spec").html('');
$.ajax({
url:"{{url('get-subchildcategories-by-category')}}",
type: "POST",
data: {
category_id: category_id,
_token: '{{csrf_token()}}'
},
dataType : 'json',
success: function(result){
$.each(result.subchildcategories,function(key,value){
$("#spec").append('<div class="col-6"><div class="form-group"><label>Specification Type<span style="color: red;"> *</span></label><input type="text" class="form-control" name="type[]" value="'+value.field+'" readonly></div></div><div class="col-6"><div class="form-group"><label>Specification Value<span style="color: red;"> *</span></label><input type="text" class="form-control" name="value[]" placeholder="Enter specification value" required="required"></div></div>');

});
}
});
});    
});
</script>

<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<!-- <script src="plugins/jquery-ui/jquery-ui.min.js"></script> -->

<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- DataTables -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<!-- Select2 JS --> 
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
  $(document).ready(function(){
 
  // Initialize select2
  $("#selUser").select2();
  $("#selUser1").select2();

});
</script>
<script type="text/javascript">
	// The DOM element you wish to replace with Tagify
var input = document.querySelector('input[name=tag]');

// initialize Tagify on the above input node reference
new Tagify(input)
s3
</script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>



$(document).ready(function () {
$('#form4').validate({ // initialize the plugin
  ignore: false,
    rules: {

        date: {

            required: true,
        
      },
       supplier_id: {

            required: true,
         
      },
       payment_type: {

            required: true,
         
      },
        payment_type_method: {

            required: true,
         
      },
      //   payment_process: {

      //       required: true,
         
      // },
    }
});


$('#Outletform').validate({ // initialize the plugin
  ignore: false,
    rules: {

        outlet_name: {

            required: true,
            noHTMLtags:true,
      },
       outlet_address: {

            required: true,
            noHTMLtags:true,
      },
    }
});
$('#form3').validate({ // initialize the plugin
  ignore: false,
    rules: {
        date: {
            required: true,
      },
      payment_type_method: {

            required: true,
         
      },
        amount_pad: {
            required: true,
            digits:true,
            noHTMLtags:true,
            // balance_greater_amountPaid:true,
      },
      attachment: {
            noHTML:true,
      },
       note: {
            noHTML:true,
      },
    }
});
$('#Supplierform').validate({ // initialize the plugin
  ignore: false,
    rules: {
  supplier_name: {

            required: true,
            noHTMLtags:true,
      },
       supplier_address: {
            required: true,
            noHTMLtags:true,
      },
  
        payment_type_method: {

            required: true,
         
      },    supplier_contact: {
           required: true,
            digits:true,
            minlength: 11,
             maxlength: 16,
noHTMLtags: true, 
      },
       company_name: {
            required: true,
            noHTMLtags:true,
      },
      opening_balance:{
            required: true,
            digits:true,
            noHTMLtags:true,
      },
      brand:{
            noHTML:true,
      },
       product:{
            noHTML:true,
      },
       bank_name:{
            noHTML:true,
      },
branch_code:{
            noHTML:true,
      },
       account_title:{
            noHTML:true,
      },
       account_number:{
            noHTML:true,
      },

    }
});
$('#purchaseform').validate({ // initialize the plugin
  ignore: false,
    rules: {

        date: {
            required: true,
      },
       challan_no: {
            required: true,
            noHTMLtags:true,
      },
       
      supplier_id: {
            required: true,
      },
       outlet_id: {
            required: true,
      },
       bill_no: {
            required: true,
       
             noHTMLtags:true,
      },
       payment_type_method: {
          required: true,
      },
      // payment_method: {
      //     required: true,
      // }
  
    }
});

$('#form2').validate({ // initialize the plugin
  ignore: false,
    rules: {

        date: {
            required: true,
      },
       reference_no: {
            required: true,
            noHTMLtags:true,
      },
        payment_method: {
            required: true,
      },
       note: {
            noHTML:true,
      },
        payment_type_method: {
          required: true,
      }


    }
});
$.validator.addMethod(
        "regex",
        function(value, element, regexp) {
            var re = new RegExp(regexp);
            return this.optional(element) || re.test(value);
        },
        "Please enter a valid email address."
);
jQuery.validator.addMethod("noHTMLtags", function(value, element){
    if(this.optional(element) || /<\/?[^>]+(>|$)/g.test(value)){
        return false;
    } else {
        return true;
    }
}, "HTML tags are Not allowed.");
 $.validator.addMethod("noHTML", function(value, element) {
        return this.optional(element) || /^([a-z0-9]+)$/.test(value);
    }, "No HTML tags are allowed!");

//  $.validator.addMethod("balance_greater_amountPaid", function(value, element) {
//   if($('#amountPaid').val() >= $('#openBlnc').val() || $('#amountPaid').val()  >= $('#remBlnc').val()) 
//   return false;
// else{
//   return true;
// }
// }, "Amount paid should be less than balance");
});
  </script>
 
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<!-- add purchase -->
<!-- add purchase -->
<script>
$(function() {
  $('.payment_partial').hide();
        $('#payment').change(function(){
          console.log( $(this).val());
          if($(this).val()=='partial'){
            $('.payment_partial').show();
          }
          else{
            $('.payment_partial').hide();

          }
          // $('.payment_partial').hide();
          //   $('#' + $(this).val()).show();
          //   $('.' + $(this).val()).show();
        });
    });
</script>
<script>
$(function() {
  $('.Bill').hide();
        $('#payment_type').change(function(){
          console.log( $(this).val());
          if($(this).val()=='Bill'){
            $('.Bill').show();
              $('.amount_payment').hide();
          }
          else{
            $('.Bill').hide();
  $('.payment_type_partial').hide();
  $('.amount_payment').show();
          }
          // $('.payment_partial').hide();
          //   $('#' + $(this).val()).show();
          //   $('.' + $(this).val()).show();
        });
    });
</script>
<script>
$(function() {
  $('.payment_type_partiall').hide();
          

        $('#payment_processl').change(function(){
          console.log( $(this).val());
          if($(this).val()=='partial'){
            $('.payment_type_partiall').show();
          }
        
          else{
            $('.payment_type_partiall').hide();
            

          }
          // $('.payment_partial').hide();
          //   $('#' + $(this).val()).show();
          //   $('.' + $(this).val()).show();
        });
    });
</script>
<script>
$(function() {
  $('.payment_type_partial').hide();
          

        $('#payment_process').change(function(){
          console.log( $(this).val());
          if($(this).val()=='partial'){
            $('.payment_type_partial').show();
          }
        
          else{
            $('.payment_type_partial').hide();
            

          }
          // $('.payment_partial').hide();
          //   $('#' + $(this).val()).show();
          //   $('.' + $(this).val()).show();
        });
    });
</script>
<script>
$(function() {
  $('.payment_type_methoddd').hide();
        $('#payment_methoddd').change(function(){
          console.log( $(this).val());
          if($(this).val()=='cheque'){
            $('.payment_type_methoddd').show();
          }
          else{
            $('.payment_type_methoddd').hide();

          }
          // $('.payment_partial').hide();
          //   $('#' + $(this).val()).show();
          //   $('.' + $(this).val()).show();
        });
    });
</script>
<script>
$(function() {
  $('.payment_type_methodd').hide();
        $('#payment_methodd').change(function(){
          console.log( $(this).val());
          if($(this).val()=='cheque'){
            $('.payment_type_methodd').show();
          }
          else{
            $('.payment_type_methodd').hide();

          }
          // $('.payment_partial').hide();
          //   $('#' + $(this).val()).show();
          //   $('.' + $(this).val()).show();
        });
    });
</script>
<script>
$(function() {
  $('.payment_type_method').hide();
        $('#payment_method').change(function(){
          console.log( $(this).val());
          if($(this).val()=='cheque'){
            $('.payment_type_method').show();
          }
          else{
            $('.payment_type_method').hide();

          }
          // $('.payment_partial').hide();
          //   $('#' + $(this).val()).show();
          //   $('.' + $(this).val()).show();
        });
    });
</script>
<script>
  $("#editSupplier").on('input', '.supplier_contact', function (e) { // get event
    // get number of row this event is occurring in:
    var row = $(e.target).closest('tr').index();
      console.log(row);
   
    // get both product_price and quantity from that row:
    var supplier_contact =parseFloat($('.supplier_contact').eq(row).val()); 
      console.log(supplier_contact);
  $('.Qerror').eq(row).hide();
    if(supplier_contact.length == 0){
       // parseFloat($(this).val());
 $('.Qerror').eq(row).show();


    }
    else{
 $('.Qerror').eq(row).hide();

    }    
  
});

</script>
<script>
  $(document).ready(function(){
    $('.error').hide();
     $('#create').hide();
     $('#subTotal').hide();

    // $(".add-row").click(function(){
          
            // var product = $("#product").val();
            // var unit = $("#unit").val();
            // var prdt = $("#prdt").val();
            // var quantity = $("#quantity").val();
            // var p_price = $("#p_price").val();
            // var p_total = $("#p_total").val();
            // if( quantity.length == 0 || prdt.length == 0 || unit.length == 0 || p_price.length == 0){
    var rowCount = 1;
    $("#orders").hide();
   // $('#product').on('change', function() {
      $('.add-row').click(function() {
  var product_name=$('#product').val();
   // console.log(product_name);
  if(product_name.length == 0){
    $('.error').show()
  }
   

    
else{
    $('.error').hide()
    $("#orders").show();
     $('#subTotal').show();
    $('#create').show();
      rowCount++;
          var markup = "<tr id='row" + rowCount + "'><td><input class='form-control product_name' type='text'data-type='product_name' name='product_name[]'id='product_name_" + rowCount + "'for='"+rowCount+"' value='" + product_name + "'readonly/></td><td><input type='number'data-type='product_price' id='product_price_"+ rowCount + "' name='product_price[]' for='"+rowCount+"' class='form-control product_price'/></td><td><input type='number' name='quantity[]' class='form-control quantity'id='quantity_"+ rowCount + "' for='"+rowCount+"'/></td><td><input type='number' name='discount[]' class='form-control discount'id='discount_"+ rowCount + "' for='"+rowCount+"'/></td><td><input type='text' class='total_cost form-control'id='total_cost_"+ rowCount + "'  name='total_cost[]' for='"+rowCount+"'readonly/></td><td><div class='col-lg-12 remove-btn'><aclass='form-group btn btn-danger add-row btn-sm px-3 delete-row'>Remove</a></div></td></tr>";
            $("#orders").append(markup);
            // after adding product clear it from field
            $("#product").val('');

    }       // <td><input type='number' class='form-control discount' name='discount[]' id='discount_1'/></td
});





      });
    // $(".add-row").click(function(){
    //         var product = $("#product").val('');
    //         var prdt = $("#product_name_1").val('');
    //         var quantity = $("#product_price_1").val('');
    //         var p_price = $("#quantity_1").val('');
    //         var p_total = $("#total_cost_1").val('');
    //         // var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + product + "</td><td>" + unit +"</td><td>" + quantity + "</td><td>" + p_price +"</td><td>" + p_total +"</td></tr>";
    //         // $("table tbody").append(markup);
    //     });
   // });
      // });
</script>

<script>
    // $(document).click('.add-row',function(){
//      var ajaxResult=[];
//  console.log(document.getElementsByName("product_name"));
//   var $tblrows=$('#exampleT tbody tr');
//   $tblrows.each(function (index) {
//   var $tblrows= $("#exampleT").find('#newP').val();


// });


// var rowCount = 1;
   // $("#orders").hide();
   // $('#product').on('change', function() {

   //  var product_name=$('#product').val();
   // var p= $('#orders tbody tr').find('#product_name_1').val();
   // console.log(p);
   // $("#orders").show();});
//   $('#add').click(function() {

//     rowCount++;
//     $('#orders').append('<tr id="row'+rowCount+'"><td><input class="form-control product_name" type="text" data-type="product_name" id="product_name_'+rowCount+'" name="product_name[]" for="'+rowCount+'"value="'+'s'+'"readonly/></td><td><input class="form-control product_price" type="number" data-type="product_price" id="product_price_'+rowCount+'" name="product_price[]" for="'+rowCount+'"/></td><input class="form-control" type="hidden" data-type="product_id" id="product_id_'+rowCount+'" name="product_id[]" for="'+rowCount+'"/><td><input class="form-control quantity" type="number" class="quantity" id="quantity_'+rowCount+'" name="quantity[]" for="'+rowCount+'"/> </td><td><input class="form-control total_cost" type="text" id="total_cost_'+rowCount+'" name="total_cost[]"  for="'+rowCount+'" readonly/> </td><td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger btn_remove cicle">-</button></td></tr>');
// });

// Add a generic event listener for any change on quantity or price classed inputs
$("#orders").on('input', 'input.quantity,input.product_price,input.discount', function() {
  getTotalCost($(this).attr("for"));
});

// $(document).on('input', '.quantity, .product_price', function (e) { // get event
//     // get number of row this event is occurring in:
//     var row = $(e.target).closest('tr').index();
//     // get both product_price and quantity from that row:
//     var product_priceVal = $('.product_price').eq(row).val(); 
//     var quantityVal = $('.quantity').eq(row).val(); 
//     // update the amount in that row:
//     $('.amount').eq(row).val(product_priceVal * quantityVal);
//     // adapt total (no change to your code)
//     fnAlltotal();
// });


// $(document).on('click', '.btn_remove', function() {
//   var button_id = $(this).attr('id');
//   $('#row'+button_id+'').remove();

// });

// Using a new index rather than your global variable i
function getTotalCost(ind) {
 var dis= $('#discount_'+ind).val();
    var discount = 0;
    var total=0;
  var qty = $('#quantity_'+ind).val();
  var price = $('#product_price_'+ind).val();
   if(dis == ''){
    dis =0;
  }
  
total=price-(price*(dis/100));
  var totNumber = (qty * total);
  var tot = totNumber.toFixed(2);
  $('#total_cost_'+ind).val(tot);
  calculateSubTotal();
}

function calculateSubTotal() {
  var subtotal = 0;
  var sub=0;
  $('.total_cost').each(function() {
     sub = parseFloat($(this).val());

      subtotal += isNaN(sub) ? 0 : sub;
      // console.log(subtotal);
  });
  $('#subtotal').val(subtotal);



    // var grandTotal = 0;
 
    // $(".subtot").each(function () {
    //     var stval = parseFloat($(this).val());
    //     grandTotal += isNaN(stval) ? 0 : stval;
    // });
 
    // $('.grdtot').val(grandTotal);
    

 
}






// $tblrows.each(function (index) {
    // var $tblrow = $(this);
 
    // $tblrow.find('.subtot').val();
// });
</script>
<script>
  $(document).on("click",'.remove-btn',function(){

   $(this).closest('tr').remove(); 
  calculateSubTotal();

});
</script>
</body>
</html>
<!-- add payment -->


