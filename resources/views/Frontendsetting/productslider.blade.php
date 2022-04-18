  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List Slider</title>
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
              <h1>List Slider</h1>
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
                  <h3 class="card-title">Banner Information</h3>
            <button class="btn" title="Add Coupon"  onclick="location.href='addproductslider'" style="float: right;"><i class="fa fa-plus"></i></button>
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
                      <th>Name</th>
                      <th>Description</th>
                      <th>Category name</th>
                      <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    
                   @foreach($sliders as $slider)
                    <tr>
                    <td>{{$slider->id}}</td>
                    <td>{{$slider->name}}</td>
                    <td>{{$slider->description}}</td>
                    <td>
                    @foreach($categories as $category)
                    @if($slider->category_id == $category->cat_id)
                    {{$category->name}}
                    @endif
                    @endforeach
                    </td>
                     <td><div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="collapse"data-target="#supplier{{$slider->id}}">
                      Action
                    </button>
                    <div class="dropdown-menu dropdown-menu-right collapse" role="menu" id="supplier{{$slider->id}}">
                    <a data-toggle="modal" href="#myEdit" data-target="#myEdit{{$slider->id}}" class="dropdown-item"><i class="fas fa-edit mr-1"></i>Edit</a>   
                      <a data-toggle="modal" href="#myDelete{{$slider->id}}" data-target="#myDelete{{$slider->id}}" class="dropdown-item"><i class="fas fa-trash mr-1"></i>Delete</a>
                   
                    </div>
                  </div>
                </td>
                </tr>
                
                
                
                
<!-- Modal Delete-->
<div class="modal fade" id="myDelete{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Are you sure you want to delete ?
      </div>
      <div class="modal-footer">
        <form action="{{route('productslider.destroy',$slider->id)}}" method="post">
          @csrf
          @method('DELETE')
        <button type="submit" class="btn btn-primary">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit-->
<div class="modal fade" id="myEdit{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('productslider.update',$slider->id)}}" method="post">
          @csrf
          @method('PUT')
          
      <div class="modal-body">
       <div class="card-body">
                    
                  
                  <div class="form-group">
                    <label>Name<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Category Name" required="required" value="{{$slider->name}}">
                  </div>
                  <div class="form-group">
                    <label >Description<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="description" placeholder="Enter Description" value="{{$slider->description}}">
                  </div>
                  <div class="form-group">
                      <label>Category<span style="color: red;"> *</span></label>
                      <select  class="form-control" id='selUser' name="category_id" required="required">
                             @foreach($categories as $category)
                        <option value="{{$category->cat_id}}"{{ $category->cat_id == $slider->category_id ? 'selected="selected"' : '' }}>{{$category->name}} || {{$category->slug}}</option>
                        @endforeach                 
                      </select>
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

@foreach($sliders as $slider)

@endforeach