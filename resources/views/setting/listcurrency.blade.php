  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List Currency</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    @include('externallinks')
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
              <h1>List Currency</h1>
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
                  <h3 class="card-title">List Currency Information</h3>
            <button class="btn" title="Add Coupon"  onclick="location.href='addcurrency'" style="float: right;"><i class="fa fa-plus"></i></button>
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
                      <th>Currency Code</th>
                      <th>Currency Symbol</th>
                      
                      <th>Currency Rate</th>
                      
                      
                      <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    
                   @foreach($currency as $currencies)
                    <tr>
                      <td>{{$currencies->id}}</td>
                      
                     <td>{{$currencies->currency_code}}</td>
                     <td>{{$currencies->currency_symbol}}</td>
                     <td>{{$currencies->currency_rate}}</td>
                   
                     <td><div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="collapse"data-target="#supplier{{$currencies->id}}">
                      <!-- <i class="fas fa-wrench"></i> -->
                      Action
                    </button>
                    <div class="dropdown-menu dropdown-menu-right collapse" role="menu" id="supplier{{$currencies->id}}">
                      
                      <a data-toggle="modal" href="#myEdit" data-target="#myEdit{{$currencies->id}}" class="dropdown-item"><i class="fas fa-edit mr-1"></i>Edit</a>
                 

                      
                      <a data-toggle="modal" href="#myDelete" data-target="#myDelete{{$currencies->id}}" class="dropdown-item"><i class="fas fa-trash mr-1"></i>Delete</a>
                   
                    </div>
                  </div>
                </td>
                  </tr>
                  <!-- Modal -->
<div class="modal fade" id="myDelete{{$currencies->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <form action="{{route('listcurrency.destroy',$currencies->id)}}" method="post">
          @csrf
          @method('DELETE')
        <button type="submit" class="btn btn-primary">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myEdit{{$currencies->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('listcurrency.update',$currencies->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
      <div class="modal-body">
     <div class="card-body">
                    
                   <div class="form-group">
                    <label>Currency Code<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="currency_code" placeholder="Enter Currency Name" required="required" value="{{$currencies->currency_code}}" >
                  </div>
                  
                    <div class="form-group">
                      <label>Currency Symbol<span style="color: red;"> *</span></label>
                      <input type="text" class="form-control" name="currency_symbol" placeholder="Enter Currency Symbol" required="required" value="{{$currencies->currency_symbol}}">
                      
                    </div>

                        <div class="form-group">
                      <label>Currency Rate<span style="color: red;"> *</span></label>
                      <input type="text" class="form-control" name="currency_rate" placeholder="Enter Currency Rate" required="required" value="{{$currencies->currency_rate}}">
                      
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

  <!-- ./wrapper -->

  @include('links')

  
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


