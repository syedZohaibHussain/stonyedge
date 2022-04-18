  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List Voucher</title>
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

/*.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 12px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}*/

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
              <h1>List Voucher</h1>
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
                  <h3 class="card-title">Redeem Voucher Information</h3>
            <button class="btn btn-primary btn-sm " title="Add Coupon"  onclick="location.href='addredeemvoucher'" style="float: right;"><i class="fa fa-plus"></i></button>
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
                      <th>Code</th>
                      <th>Description</th>
                      
                      <th>Redeem amount</th>
                      <th>Expiry date</th>

                      
                      
                      <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    
                   @foreach($voucher as $vouchers)
                    <tr>
                      <td>{{$vouchers->id}}</td>
                      
                     <td>{{$vouchers->code}}</td>
                     <td>{{$vouchers->description}}</td>
                     <td>{{$vouchers->redeem_amount}}</td>
                     <td>{{$vouchers->expiry_date}}</td>

                   
                     <td><div class="btn-group">
                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="collapse"data-target="#supplier{{$vouchers->id}}">
                      <!-- <i class="fas fa-wrench"></i> -->
                      Action
                    </button>
                    <div class="dropdown-menu dropdown-menu-right collapse" role="menu" id="supplier{{$vouchers->id}}">
                      
                      <a data-toggle="modal" href="#myEdit" data-target="#myEdit{{$vouchers->id}}" class="dropdown-item"><i class="fas fa-edit mr-1"></i>Edit</a>
                 

                      
                      <a data-toggle="modal" href="#myDelete" data-target="#myDelete{{$vouchers->id}}" class="dropdown-item"><i class="fas fa-trash mr-1"></i>Delete</a>
                   
                    </div>
                  </div>
                </td>
                  </tr>
                  <!-- Modal -->
<div class="modal fade" id="myDelete{{$vouchers->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <form action="{{route('listvoucher.destroy',$vouchers->id)}}" method="post">
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
<div class="modal fade" id="myEdit{{$vouchers->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('listvoucher.update',$vouchers->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
      <div class="modal-body">
     <div class="card-body">
                    
                  <div class="form-group">
                    <label>Redeem Voucher Code<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="redeem_code" placeholder="Enter Redeem Voucher Code" required="required" value="{{$vouchers->code}}" >
                  </div>
                  
                    <div class="form-group">
                      <label>Amount<span style="color: red;"> *</span></label>
                      <input type="number" class="form-control" name="amount" placeholder="Enter Amount" required="required" value="{{$vouchers->redeem_amount}}">
                      
                    </div>

                        <div class="form-group">
                      <label>Expiry Date<span style="color: red;"> *</span></label>
                      <input type="date" class="form-control" name="expiry_date" placeholder="Enter Expiry Date" required="required" value="{{$vouchers->expiry_date}}" >
                      
                    </div>

                    <div class="form-group">
                    <label>Description<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="description" placeholder="Enter Description" required="required" value="{{$vouchers->description}}" >
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


