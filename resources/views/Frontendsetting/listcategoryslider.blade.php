  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List Banner</title>
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
              <h1>List Category Slider</h1>
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
                  <h3 class="card-title">Category Slider Information</h3>
            <button class="btn" title="Add Coupon"  onclick="location.href='addcategoryslider'" style="float: right;"><i class="fa fa-plus"></i></button>
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
                      <th>Category Name</th>
                      <th>Category Description</th>
                      
                      <th>Category Url</th>
                      <th>Category Image</th>
                      <th>Status</th>
                      <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    
                   @foreach($categoryslider as $cs)
                    <tr>
                      <td>{{$cs->id}}</td>
                      
                     <td>{{$cs->category_name}}</td>
                     <td>{{$cs->description}}</td>
                     <td>{{$cs->category_url}}</td>
                       @if($cs->category_image != null)
                   <td><img src="{{url($cs->category_image)}}" height="100px" width="200px" /></td>
                    @else
                    <td>no logo</td>
                    @endif
                    <td>@if($cs->is_active === 0)
                    <button type="button" class="btn btn-status btn-sm " data-toggle="modal" data-target="#myModalblock{{$cs->id}}">Inactive</button>
                    @elseif($cs->is_active === 1)
                    <button type="button" class="btn btn-status-red btn-sm " data-toggle="modal" data-target="#myModalunblock{{$cs->id}}">Active</button>
                    @endif</td>
                     <td><div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="collapse"data-target="#supplier{{$cs->id}}">
                      <!-- <i class="fas fa-wrench"></i> -->
                      Action
                    </button>
                    <div class="dropdown-menu dropdown-menu-right collapse" role="menu" id="supplier{{$cs->id}}">
                      
                      <a data-toggle="modal" href="#myEdit" data-target="#myEdit{{$cs->id}}" class="dropdown-item"><i class="fas fa-edit mr-1"></i>Edit</a>
                 

                      
                      <a data-toggle="modal" href="#myDelete" data-target="#myDelete{{$cs->id}}" class="dropdown-item"><i class="fas fa-trash mr-1"></i>Delete</a>
                   
                    </div>
                  </div>
                </td>
                  </tr>
                  <!-- Modal -->
<div class="modal fade" id="myDelete{{$cs->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <form action="{{route('listcategoryslider.destroy',$cs->id)}}" method="post">
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
<div class="modal fade" id="myEdit{{$cs->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('listcategoryslider.update',$cs->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
      <div class="modal-body">
     <div class="card-body">
                    
                   <div class="form-group">
                    <label>Category Slider Name<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="category_name" placeholder="Enter Category Slider Name" value="{{$cs->category_name}}" required="required" >
                  </div>
                  
                    <div class="form-group">
                      <label>Description<span style="color: red;"> *</span></label>
                      <input type="text" class="form-control" name="description" placeholder="Enter Description" value="{{$cs->description}}" required="required" >
                      
                    </div>

                        <div class="form-group">
                      <label>Category Url<span style="color: red;"> *</span></label>
                      <input type="url" class="form-control" name="category_url" placeholder="Enter Url" value="{{$cs->category_url}}" required="required" >
                      
                    </div>

                    <div class="form-group">
                    <label>Category Image<span style="color: red;"> *</span></label>
                  <input type="file" class="form-control" name="category_image">
                    <br>
                    <div>
                      <img src="{{url($cs->category_image)}}" height="100px" width="200px" />
                    </div>
                    <input type="hidden" class="form-control" name="old_category_image" value="{{$cs->category_image}}">
                    
                      
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


<!-- unblock modal -->

<div class="modal fade" style="margin-top:15%" id="myModalunblock{{$cs->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 15px !important">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Category Inactive</h5>
        <button type="button" class="close mt-2 mr-3" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     

<form action="{{route('category-block',$cs->id)}}" method="post">
        @csrf
        @method('PUT')
      <div class="modal-body">
      <p>Are you really want to unblock?</p>
      
      </div>

      <div class="modal-footer">
        <input type="submit"  class="btn update-btn" value="Yes" />
        <button type="button" class="btn cncl" data-dismiss="modal">No</button>
      </div>
  </form>
    </div>
  </div>
</div>

<!-- Block modal -->

<div class="modal fade" style="margin-top:15%" id="myModalblock{{$cs->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 15px !important">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Category Active</h5>
        <button type="button" class="close mt-2 mr-3" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     

<form action="{{route('category-block',$cs->id)}}" method="post">
        @csrf
        @method('PUT')
      <div class="modal-body">
      <p>Are you really want to block?</p>
      
      </div>

      <div class="modal-footer">
        <input type="submit" name="block"  class="btn update-btn" value="Yes" />
        <button type="button" class="btn cncl" data-dismiss="modal">No</button>
      </div>
  </form>
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


