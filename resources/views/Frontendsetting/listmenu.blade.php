  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List Menu</title>
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
              <h1>List Menu</h1>
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
                  <h3 class="card-title">Menu Information</h3>
            <button class="btn" title="Add Menu"  onclick="location.href='addmenu'" style="float: right;"><i class="fa fa-plus"></i></button>
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
                      <th>Menu Name</th>
                      <th>Menu Url</th>
                      
                      <th>Sort No</th>
                      <th>Brand</th>
                        <th>Category</th>
                              <th>Status</th>
                          <th>Banner Image</th>
                           <th>Banner Url</th>
                             <th>Banner Image2</th>
                           <th>Banner Url</th>
                
                      <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    
                   @foreach($menu as $menus)
                    <tr>
                      <td>{{$menus->id}}</td>
                      
                     <td>{{$menus->menu_name}}</td>
                     <td>{{$menus->menu_url}}</td>
                     <td>{{$menus->sort_no}}</td>
                     @foreach($brands as $brand)
                     @if($menus->brand_id == $brand->brand_id )
                     <td>{{$brand->name}}</td>
                     @endif
                     @endforeach

                    @foreach($categories as $category)
                     @if($menus->category_id == $category->cat_id)
                     <td>{{$category->name}}</td>
                     @endif
                        @endforeach
               

                  <td>@if($menus->is_active === 0)
                    <button type="button" class="btn btn-status btn-sm " data-toggle="modal" data-target="#myModalblock{{$menus->id}}">Inactive</button>
                    @elseif($menus->is_active === 1)
                    <button type="button" class="btn btn-status-red btn-sm " data-toggle="modal" data-target="#myModalunblock{{$menus->id}}">Active</button>
                    @endif</td>

                       @if($menus->banner_image1 != null)
                   <td><img src="{{url($menus->banner_image1)}}" height="100px" width="200px" /></td>
                    @else
                    <td>no logo</td>
                    @endif
                   
                     <td>{{$menus->banner1_url}}</td>
                      @if($menus->banner_image2 != null)
                   <td><img src="{{url($menus->banner_image2)}}" height="100px" width="200px" /></td>
                    @else
                    <td>no logo</td>
                    @endif
                     <td>{{$menus->banner2_url}}</td>

                    
                     <td><div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="collapse"data-target="#supplier{{$menus->id}}">
                      <!-- <i class="fas fa-wrench"></i> -->
                      Action
                    </button>
                    <div class="dropdown-menu dropdown-menu-right collapse" role="menu" id="supplier{{$menus->id}}">
                      
                      <a data-toggle="modal" href="#myEdit" data-target="#myEdit{{$menus->id}}" class="dropdown-item"><i class="fas fa-edit mr-1"></i>Edit</a>
                 

                      
                      <a data-toggle="modal" href="#myDelete" data-target="#myDelete{{$menus->id}}" class="dropdown-item"><i class="fas fa-trash mr-1"></i>Delete</a>
                   
                    </div>
                  </div>
                </td>
                  </tr>
                  <!-- Modal -->
<div class="modal fade" id="myDelete{{$menus->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <form action="{{route('listmenu.destroy',$menus->id)}}" method="post">
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
<div class="modal fade" id="myEdit{{$menus->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('listmenu.update',$menus->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
      <div class="modal-body">
     <div class="card-body">
                    
                  <div class="form-group">
                    <label>Menu Name<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="menu_name" placeholder="Enter Slider Name" required="required" value="{{$menus->menu_name}}">
                  </div>
                      <div class="form-group">
                    <label>Url<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="menu_url" placeholder="Enter Menu Url" required="required" value="{{$menus->menu_url}}" >
                  </div>
                  
                    <div class="form-group">
                      <label>Sort Number<span style="color: red;"> *</span></label>
                      <input type="number" class="form-control" name="sort_no" placeholder="Enter Sort Number" required="required" value="{{$menus->sort_no}}" >
                      
                    </div>

                      <div class="form-group">
                      <label>Brand<span style="color: red;"> *</span></label>
                      <select  class="form-control" id="selUser1" name="brand_id" required="required">
                        <option value="" disabled selected>Select Brand</option>
                        @foreach($brands as $brand)
                        @if($menus->brand_id == $brand->brand_id)
                        <option value="{{$brand->brand_id}}" selected="">{{$brand->name}}</option>
                          @endif
                        <option value="{{$brand->brand_id}}">{{$brand->name}}</option>
                        @endforeach
                        
                      </select>
                    </div>

                       <div class="form-group">
                      <label>Parent Category<span style="color: red;"> *</span></label>
                      <select  class="form-control" id='selUser' name="category_id" required="required">
                          <option value="" disabled selected>Select Category</option>
                           @foreach($categories as $category)
                            @if($menus->category_id == $category->cat_id)
                          <option value="{{$category->cat_id}}" selected="">{{$category->name}} || {{$category->slug}}</option>
                          @endif
                        <option value="{{$category->cat_id}}">{{$category->name}} || {{$category->slug}}</option>

                        @endforeach
                                           
                      </select>
                    </div>

                    <div class="form-group">
                    <label>Banner 1 Image <span style="color: red;"> *</span></label>
                    <input type="file" class="form-control" name="banner_image1">
                    <br>
                    <div><img src="{{url($menus->banner_image1)}}" height="100px" width="200px" /></div>
                    <input type="hidden" name="old_banner_image1" value="{{$menus->banner_image1}}">
                  </div>

                    <div class="form-group">
                    <label>Banner 1 Url<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="banner1_url" placeholder="Enter Menu Url" required="required" value="{{$menus->banner1_url}}" >
                  </div>

                 <div class="form-group">
                    <label>Banner 2 Image <span style="color: red;"> *</span></label>
                    <input type="file" class="form-control" name="banner_image2">
                    <br>
                    <div><img src="{{url($menus->banner_image2)}}" height="100px" width="200px" /></div>
                    <input type="hidden" name="old_banner_image2" value="{{$menus->banner_image2}}">
                  </div>

                    <div class="form-group">
                    <label>Banner 2 Url<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="banner2_url" placeholder="Enter Menu Url" required="required" value="{{$menus->banner2_url}}" >
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

<div class="modal fade" style="margin-top:15%" id="myModalunblock{{$menus->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 15px !important">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menu Inactive</h5>
        <button type="button" class="close mt-2 mr-3" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     

<form action="{{route('menu-block',$menus->id)}}" method="post">
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

<div class="modal fade" style="margin-top:15%" id="myModalblock{{$menus->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 15px !important">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menu Active</h5>
        <button type="button" class="close mt-2 mr-3" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     

<form action="{{route('menu-block',$menus->id)}}" method="post">
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

  
  <script type="text/javascript">
  
    $("input:checkbox").change(function() {
                    var ischecked= $(this).is(':checked');
                    if(ischecked)
                      alert("nizam");
                }); 
        

</script>
 
  
  
  </body>
  </html>
  <!-- add payment -->


