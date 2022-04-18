  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List Banner</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
     <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    @include('externallinks')
    
    <script type="text/javascript"     src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">window.jQuery || document.write('<script src="classes/commons/jquery/jquery-1.7.1.min.js"><\/script>')</script>
   
    <script src="http://malsup.github.com/jquery.form.js"></script> 
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

.tagify{    
  width: 100%;
  max-width: 700px;
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

.txt {
    text-transform:lowercase;
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
              <h1>List Banner</h1>
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
            <button class="btn" title="Add Coupon"  onclick="location.href='addbanner'" style="float: right;"><i class="fa fa-plus"></i></button>
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
                      <th>Banner Name</th>
                      <th>Sort Number</th>
                      <th>Banner Image</th>
                      <th>Status</th>
                      <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    
                   @foreach($banner as $bann)
                    <tr>
                      <td>{{$bann->id}}</td>
                      
                     <td>{{$bann->banner_name}}</td>

                      
                      <td>{{$bann->sort_no}}</td>
                       @if($bann->banner_image != null)
                   <td><img src="{{url($bann->banner_image)}}" height="100px" width="200px" /></td>
                    @else
                    <td>no logo</td>
                    @endif
                    <td>   
                     @if($bann->is_active === 0)
                    <button type="button" class="btn btn-status btn-sm " data-toggle="modal" data-target="#myModalblock{{$bann->id}}">Inactive</button>
                    @elseif($bann->is_active === 1)
                    <button type="button" class="btn btn-status-red btn-sm " data-toggle="modal" data-target="#myModalunblock{{$bann->id}}">Active</button>
                    @endif
<!--                    <div class="form-group">-->
<!--<label class="switch">-->
<!--    <form id="myForm" name="myForm" action="audio_alarm.php" method="post"> -->
   
<!--      <input type="checkbox" name="toggle" id="toggle" data-toggle="toggle" data-off="Disabled" data-on="Enabled" name="is_active" value="1" checked>-->
<!--       <span class="slider round"></span>-->
<!--        <br><br>-->
<!--    <div class="panel panel-default">-->
<!--    <div class="panel-heading" id="heading"></div>-->
<!--    <div class="panel-body" id="body"></div>-->
<!--  </div>-->
<!--    <div></div>-->
<!--    </form>-->
<!--    </label>-->
  <!--<input type="checkbox" class="form-control" name="is_active" value="1" checked>-->
 

<!--</div>-->
</td>
                     <td><div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="collapse"data-target="#supplier{{$bann->id}}">
                      <!-- <i class="fas fa-wrench"></i> -->
                      Action
                    </button>
                    <div class="dropdown-menu dropdown-menu-right collapse" role="menu" id="supplier{{$bann->id}}">
                      
                      <a data-toggle="modal" href="#myEdit" data-target="#myEdit{{$bann->id}}" class="dropdown-item"><i class="fas fa-edit mr-1"></i>Edit</a>
                 

                      
                      <a data-toggle="modal" href="#myDelete" data-target="#myDelete{{$bann->id}}" class="dropdown-item"><i class="fas fa-trash mr-1"></i>Delete</a>
                   
                    </div>
                  </div>
                </td>
                  </tr>
                  <!-- Modal -->
<div class="modal fade" id="myDelete{{$bann->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <form action="{{route('listbanner.destroy',$bann->id)}}" method="post">
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
<div class="modal fade" id="myEdit{{$bann->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('listbanner.update',$bann->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
      <div class="modal-body">
     <div class="card-body">
                    
                   <div class="form-group">
                    <label>Banner Name<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="banner_name" placeholder="Enter Slider Name" required="required" value="{{$bann->banner_name}}" >
                  </div>
                  
                    <div class="form-group">
                      <label>Sort Number<span style="color: red;"> *</span></label>
                      <input type="number" class="form-control" name="sort_no" placeholder="Enter Sort Number" required="required" value="{{$bann->sort_no}}" >
                      
                    </div>

                    <div class="form-group">
                      
                    <label>Banner Image<span style="color: red;"> *</span></label>
                    
                    <input type="file" class="form-control" name="banner_image">
                    <br>
                    <div><img src="{{url($bann->banner_image)}}" height="100px" width="200px" /></div>
                    <input type="hidden" name="old_banner_image" value="{{$bann->banner_image}}">
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

<div class="modal fade" style="margin-top:15%" id="myModalunblock{{$bann->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 15px !important">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Banner Inactive</h5>
        <button type="button" class="close mt-2 mr-3" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     

<form action="{{route('banner-block',$bann->id)}}" method="post">
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

<div class="modal fade" style="margin-top:15%" id="myModalblock{{$bann->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 15px !important">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Banner Active</h5>
        <button type="button" class="close mt-2 mr-3" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     

<form action="{{route('banner-block',$bann->id)}}" method="post">
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
      $('#toggle').change(function(){
        var mode= $(this).prop('checked');
        // // submit the form 
        // $(#myForm).ajaxSubmit(); 
        // // return false to prevent normal browser submit and page navigation 
        // return false; 
        $.ajax({
          type:'POST',
          dataType:'JSON',
          url:'{{url('ajaxBannerStatus')}}',
          data:'mode='+mode,
          success:function(data)
          {
            var data=eval(data);
            message=data.message;
            success=data.success;
            $("#heading").html(success);
            $("#body").html(message);
          }
        });
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

  
  
 
  
  
  </body>
  </html>
  <!-- add payment -->


