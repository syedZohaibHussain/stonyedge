  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Address</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css')}}" rel="stylesheet" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
   <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
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
              <h1>Address List</h1>
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
                  <h3 class="card-title">Address Information</h3>
            <button class="btn" title=""  onclick="location.href='{{route('addressCreate',$id)}}'" style="float: right;"><i class="fa fa-plus"></i></button>
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
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Phone</th>
                      <th>Address Detail</th>
                      <th>Address Label</th>
                      <th>Default</th>
                      <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    
                   @foreach($addresses as $address)
                    <tr>
                      <td>{{$address->first_name}}</td>
                      <td>{{$address->last_name}}</td>
                     <td>{{$address->phone}}</td>
                     <td>{{$address->address_details}}</td> 
                     <td>{{$address->label}}</td> 
                     
                     <td>@if($address->default ==1)
                     Active
                     @else
                     Not Active
                     @endif
                   </td> 
                     
                      <td><div class="btn-group">
                    <button type="button" class="btn btn-primary btn-
                    xs dropdown-toggle" data-toggle="collapse"data-target="#supplier{{$address->id}}">
                      <!-- <i class="fas fa-wrench"></i> -->
                      Action
                    </button>
                    <div class="dropdown-menu dropdown-menu-right collapse" role="menu" id="supplier{{$address->id}}">
                      <a data-toggle="modal" href="#myEdit" data-target="#myEdit{{$address->id}}" class="dropdown-item"><i class="fas fa-edit mr-1"></i>Edit</a>
                      <a data-toggle="modal" href="#myDelete" data-target="#myDelete{{$address->id}}" class="dropdown-item"><i class="fas fa-trash mr-1"></i>Delete</a>
                      
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
  
@foreach($addresses as $address)       
<!-- Modal Delete-->
<div class="modal fade" id="myDelete{{$address->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <form action="{{route('dashboard-address.destroy',$address->id)}}" method="post">
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
<div class="modal fade" id="myEdit{{$address->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('dashboard-address.update',$address->id)}}" method="post">
          @csrf
          @method('PUT')
      <div class="modal-body">
     <div class="card-body">
                    
                    
                  
                  <div class="form-group">
                    <label>First Name<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="first_name" placeholder="Enter first name" required="required" value="{{$address->first_name}}" >
                  </div>
                  <div class="form-group">
                    <label>Last Name<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="last_name" placeholder="Enter last name" required="required" value="{{$address->last_name}}" >
                  </div>
                   <div class="form-group">
                    <label>Phone<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter phone" required="required" value="{{$address->phone}}" >
                  </div>
                <div class="form-group">
                    <label>Address Detail<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="address_details" placeholder="Enter address details" required="required" value="{{$address->address_details}}" >
                  </div>
                  
   <div class="form-group">
            
                   
                   <label>Address Label<span style="color: red;"> *</span></label><br>
                 <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="label" id="inlineRadio1" value="home"{{($address->label == 'home' ? 'checked' : '') }} >
  <label class="form-check-label" for="inlineRadio1">Home</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="label" id="inlineRadio2" value="work"{{($address->label == 'work' ? 'checked' : '') }}>
  <label class="form-check-label" for="inlineRadio2">Work</label>
</div>
                            </div>

                   <div class="form-group">
                    
                  <!--   <input type="text" class="form-control" name="default" placeholder="Enter default" required="required" value="" > -->
                    <label>Default<span style="color: red;"> *</span></label><br>
                    <div class="form-check ">
                    
                    <input class="form-check-input default" name="default"type="checkbox" value="active" id="flexCheckChecked"{{($address->default == 1 ? 'checked' : '') }} />
                      <label class="form-check-label" for="flexCheckChecked">
                        Set as default address

                    </label>
                </div>
                  </div>

                  <input type="hidden" name="user_id" value="{{$id}}">
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
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<!-- <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script> -->

<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- DataTables -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script> 
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js')}}"></script>
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
  
   
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


