  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List Coupon</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
      <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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

.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}

  </style>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">


    <!-- Navbar -->
    @include('nav')
    <!-- /.navbar -->
      

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

       <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Coupons List</h1>
            </div>
         
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Coupon Information</h3>
            <button class="btn" title="Add Coupon"  onclick="location.href='addcoupon'" style="float: right;"><i class="fa fa-plus"></i></button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  @if (session('msg'))
                          <div class="alert alert-success" role="alert">
                              {{ session('msg') }}
                          </div>
                      @endif
                  <table id="example1" class="table table-bordered table-striped text-center">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Coupon Code</th>
                      <th>Discount Type</th>
                      <th>Amount</th>
                      <th>Minimum Amount</th>
                      <th>Expiry Date</th>
                      <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    
                   @foreach($coupons as $coupon)
                    <tr>
                      <td>{{$coupon->id}}</td>
                      <td>{{$coupon->code}}</td>
                     @if($coupon->discount_type == 1)
                     <td>Fixed Cart Discount</td>
                     @else
                     <td>Percentage Discount</td>
                     @endif
                     <td>{{$coupon->coupon_amount}}</td>
                     <td>{{$coupon->min_spend}}</td>
                      <td>{{$coupon->expiry_date}}</td>
                      
                      <td><div class="btn-group">
                    <button type="button" class="btn btn-primary btn-
                    xs dropdown-toggle" data-toggle="collapse"data-target="#supplier{{$coupon->id}}">
                      <!-- <i class="fas fa-wrench"></i> -->
                      Action
                    </button>
                    <div class="dropdown-menu dropdown-menu-right collapse" role="menu" id="supplier{{$coupon->id}}">
                      <a data-toggle="modal" href="#myEdit" data-target="#myEdit{{$coupon->id}}" class="dropdown-item"><i class="fas fa-edit mr-1"></i>Edit</a>
                 

                      
                      <a data-toggle="modal" href="#myDelete" data-target="#myDelete{{$coupon->id}}" class="dropdown-item"><i class="fas fa-trash mr-1"></i>Delete</a>
                   
                    </div>
                  </div>
                </td>
                  </tr>
@endforeach
 
                     
                      
                  </td>
                    </tr>
                   
                  
                     
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->

      </div>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

  </div>
  
@foreach($coupons as $coupon)       
<!-- Modal Delete-->
<div class="modal fade" id="myDelete{{$coupon->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Are you sure you want to delete ?
      </div>
      <div class="modal-footer">
        <form action="{{route('listcoupon.destroy',$coupon->id)}}" method="post">
          @csrf
          @method('DELETE')
        <button type="submit" class="btn btn-primary">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </form>
      </div>
    </div>
  </div>
</div>
<!--modal-->
<!-- Modal Edit-->
<div class="modal fade" id="myEdit{{$coupon->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('listcoupon.update',$coupon->id)}}" method="post">
          @csrf
          @method('PUT')
      <div class="modal-body">
     <div class="card-body">
                    
                    
                  
                  <div class="form-group">
                    <label>Coupon Code<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="code" placeholder="Enter Coupon Code" required="required" value="{{$coupon->code}}" >
                  </div>
                  
                    <div class="form-group">
                      <label>Discount Type<span style="color: red;"> *</span></label>
                      <select  class="form-control" id='selUser' name="discount_type" required="required">

                     
                       @if($coupon->discount_type == 0)
                        <option value="0" selected>Fixed Cart Discount</option>
                        <option value="1">Percentage Discount</option>
                        @else
                        <option value="0">Fixed Cart Discount</option>
                        <option value="1"selected>Percentage Discount</option>
                        @endif
                                             
                      </select>
                    </div>

                    <div class="form-group">
                    <label>Coupon Amount or Discount %<span style="color: red;"> *</span></label>
                    <input type="number" class="form-control" name="coupon_amount" placeholder="Enter amount or percentage" required="required" value="{{$coupon->coupon_amount}}">
                  </div>
                  <div class="form-group">
                    <label>Minimum Shopping Amount<span style="color: red;"> *</span></label>
                    <input type="number" class="form-control" name="min_spend" required="required" value="{{$coupon->min_spend}}">
                  </div>

                   <div class="form-group">
                    <label>Enter Expiry date<span style="color: red;"> *</span></label>
                    <input type="date" class="form-control" name="expiry_date"  required="required" value="{{$coupon->expiry_date}}">
                       
                  </div>

                   <div class="form-group">
                      <label>Select Category<span style="color: red;"> *</span></label>
                      <select  class="form-control" id='selUser' name="coupon_category[]" multiple>
                            @foreach($categories as $category)
                          <option value="{{$category->cat_id}}">{{$category->name}}</option>
                          @endforeach                    
                      </select>
                    </div>

                     <div class="form-group">
                      <label>Select Product<span style="color: red;"> *</span></label>
                      <select  class="form-control" id='selUser' name="coupon_product[]" multiple>
                          @foreach($products as $product)
                          <option value="{{$product->id}}">{{$product->product_name}}</option>
                          @endforeach
                      </select>
                    </div>
                  
                 
                 
                </div>
      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </form>
      </div>
    </div>
  </div>
</div>
@endforeach
  <!-- ./wrapper -->

  <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<!-- <script src="plugins/jquery-ui/jquery-ui.min.js"></script> -->

<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="assets/jquery/jquery.validate.min.js"></script>
<script src="assets/js/select2.min.js"></script>

  
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>

  
   
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

  
  
 
  
  
  </body>
  </html>
  <!-- add payment -->


