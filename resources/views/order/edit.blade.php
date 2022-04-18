<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Order | Order Management</title>
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
            <!-- <h1>Category List</h1> -->
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
                <h3 class="card-title">Edit Order</h3>
              </div>


              <!-- /.card-header -->
              <!-- form start -->
     @foreach($orders as $order)
              <form action="{{route('order.update',$order->order_payment_id)}}" method="post" enctype="multipart/form-data" id="purchaseform">    
   @csrf
  @method('PUT')
                <div class="card-body">
                    
                    @if (session('msg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('msg') }}
                        </div>
                    @endif
                  <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
                  
                    <label class="control-label ">Date</label>
                  
                     <input type="date"placeholder="09/11/2020"value="{{$order->sale_date}}"  class="form-control placeholder-css" max="2050-12-30" name="date">
              
                  </div>
                    </div>
                      <div class="col-md-4">
                  <div class="form-group">
                      <label>Customer<span style="color: red;"> *</span></label>

                      <select  class="form-control select" id='customer-dropdown' name="customer">
                        <option value=""required disabled selected>Select Customer</option>
                                    @foreach($users as $user)
                        <option value="{{$user->id}}"{{ $order->user_id == $user->id ? 'selected="selected"' : '' }}>{{$user->first_name}} {{$user->last_name}}</option>
                        @endforeach        
                      </select>
                        
                    </div>
              
                    </div>
                    <div class="col-md-2">
                 <button type="button" class="btn btn-primary btn-sm"style="float: right;" data-toggle="modal" data-target="#addCustomer"><i class="fa fa-plus"></i></button> 
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                      <label>Status<span style="color: red;"> *</span></label>
                      <select  class="form-control select" name="status">
                        <option value=""required disabled selected>Select Status</option>
                      
                           @foreach($statuss as $stat)
                        <option value="{{$stat->status}}"{{$order->order_status == $stat->status ? 'selected="selected"' : ''}}>{{$stat->status}}</option>
                        @endforeach  
                                        
                      </select>
                    </div>
                    </div>
                      <div class="col-md-6">
                     
                 <div class="form-group">
                      <label>Address<span style="color: red;"> *</span></label>
                      <select  class="form-control select" id='address-dropdown' name="address">
                        <option value=""required disabled selected>Select Address</option>
                      
                        
                                        
                      </select>


                    </div>
                    </div>
                  </div>
                        <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                      <label>Shipping Method<span style="color: red;"> *</span></label>
                      <select  class="form-control select" id="shipping"name="shipping">
                        <option value=""required disabled selected>Select method</option>
                       @foreach($shippings as $ship)
                        <option value="{{$ship->id}}"data-cost="{{$ship->cost}}"{{$order->shipping_id == $ship->id ? 'selected="selected"' : ''}}>{{$ship->title}}</option>
                        @endforeach  
                                        
                      </select>
                    </div>
                    </div>
                      <div class="col-md-6">
                     <div class="row">
                       <div class="col-md-6">
                          <div class="form-group">
                    <label>First Name</label>
                    <input type="text"id="f_name" class="form-control"name="first_name"value="{{$order->first_name}}"placeholder="Enter First Name" required="required">
                  </div>
                       </div>
                        <div class="col-md-6">
                         <div class="form-group">
                    <label>Last Name</label>
                    <input type="text"id="l_name" class="form-control"name="last_name"value="{{$order->last_name}}"placeholder="Enter Last Name" required="required">
                  </div>
                       </div>
                     </div>
                    </div>
                  </div>
                      <div class="row">
                    <div class="col-md-6">
                           <div class="form-group">
                      <label>Payment Method<span style="color: red;"> *</span></label>
                      <select  class="form-control select"name="payment">
                        <option value=""required disabled selected>Select method</option>
                       @foreach($payments as $pay)
                        <option value="{{$pay->id}}"{{$order->payment_id == $pay->id ? 'selected="selected"' : ''}}>{{$pay->title}}</option>
                        @endforeach  
                                        
                      </select>
                    </div>
                   <!--    <div class="form-group">
                      <label>Partial Payment<span style="color: red;"> *</span></label>
                      <select  class="form-control"  name="partial">
                        <option value=""required disabled selected>No</option>
                        <option value="">t</option>          
                      </select>
                    </div> -->
                    </div>
                      <div class="col-md-6">
                       <div class="form-group">
                    <label>Phone</label>
                    <input type="text" id="phone"class="form-control"name="phone"value="{{$order->phone}}"placeholder="+9999999" required="required">
                  </div>
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                    <label>Discount Coupon</label>
                    <input type="text"id="discount-code" class="form-control"name="discount_coupon"placeholder="code" required="required">
                  </div>
                    </div>
                      <div class="col-md-6">
                    <label>Address Detail</label>
                       <textarea class="form-control" id="detail"name="address_details" placeholder="Address Detail">{{$order->address_details}}</textarea>
                    </div>
                  </div>
  <div class="row">
                    <div class="col-md-6">
                
                    </div>
                      <div class="col-md-6">
                     <div class="row">
                       <div class="col-md-6">
                          <div class="form-group">
                    <label>Longitude</label>
                    <input type="text"id="longitude" class="form-control"name="longitude"value="{{$order->longitude}}"placeholder="example 43.334343" required="required">
                  </div>
                       </div>
                        <div class="col-md-6">
                         <div class="form-group">
                    <label>Latitude</label>
                    <input type="text"id="latitude" class="form-control"name="latitude" value="{{$order->latitude}}"placeholder="example 43.334343" required="required">
                  </div>
                       </div>
                     </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-4">
                             <div class="form-group">
                    <label >Product Name<span style="color: red;"> *</span></label>
               
                    <select  class="form-control select" id="product"name="product">
                        <option value="" disabled selected>Select  Product</option>
                        @foreach($products as $product)
                        <option value="{{$product->product_name}}" data-id="{{$product->id}}"data-name='{{$product->product_name}}'data-cost='{{$product->new_price}}'data-img='{{$product->thumbnail_url}}' >{{$product->product_name}}</option>

                        @endforeach                       
                      </select>
                    <span class="error" style="color: red; font-size: 14px;" >This field is required.</span>
                  </div>
                  <button type="button"name="add"id="add" class="form-group btn btn-info add-row btn-sm px-3">Add</button>
                    </div>

                 

                  </div>
                           


<div class="form-group" id="all_product">
            <div class="row margin-form">
                    <table  id="orders" class="table" align="center">

                    <thead class="product-head">
                      <tr>
                <th>Product Name</th>
                 <th>Image</th>
                <th>Cost</th>
                <th>Quantity</th>
                <!-- <th>Tax(%)</th> -->
                
                 <th>Discount(%)</th> 
              
                <th>Total</th>

                <th>Remove</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($items as $item)
    <tr>
       <input class='form-control product_name' type='hidden'data-type='product_name' name='prodId[]' value='{{$item->product_id}}'/>

                <td><input class='form-control product_name' type='text'data-type='product_name' name='product_name[]'id='product_name_1' value='{{$item->product_name}}'readonly/></td> 
                <td><img class='form-control product_name' src='{{url("$item->thumbnail_url")}}'name='product_image[] 'id='product_image_1'readonly style="width: 5rem; height: 5rem;" /></td> 
                <td><input value='{{$item->new_price}}' type='number'data-cost='product_cost' id='product_price_1' name='product_cost[]' class='form-control product_price' readonly/></td>
                <td><input type='number' name='quantity[]'value='{{$item->sale_quantity}}' class='form-control quantity'id='quantity_1' /></td>
                <td><input type='number'name='discount[]' class='form-control discount'id='discount_1'readonly/></td>
 <td><input type='text' class='total_cost form-control'id='total_cost_1'  name='total_cost[]'value='{{$item->sub_total}}' readonly/></td>

    <!-- <td id="removeBtn"></td> -->
<td><div class='col-lg-12 remove-btn'><a class='form-group btn btn-danger add-row btn-sm px-3 delete-row'>Remove</a></div></td>
    </tr>
    @endforeach
           
                    </tbody>
                    <tfoot>
            
</tfoot>
                  </table>
                  

                </div>
</div>
<div class="line line-dashed line-lg pull-in" style="clear: both;"></div>
        
       <!--  <div class="col-md-12 nopadding"id="subTotal">
          <div class="col-md-4 col-md-offset-4 pull-right nopadding">
            <div class="col-md-8 pull-right nopadding">
            </div>
          
          </div>
        </div> -->
<div class="row">
  <div class="col-4">
                  <div class="form-group">

                <label>Subtotal</label>
          
                <input class="form-control subtotal" type='text' id='subtotal' name='subtotal'value="{{$order->order_total-$order->cost}}" readonly/>
              </div>

  </div>
  <div class="col-4">
        <div class="form-group">

                <label>Shipping Cost</label>
   
          <input class="form-control shippingCost" type='text' id='shippingCost' name='shippingCost'value="{{$order->cost}}" readonly />
    
              </div>
  </div>
   
</div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              @endforeach
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
  $(document).ready(function(){
    var today = new Date().toISOString().split('T')[0];
document.getElementsByName("date")[0].setAttribute('min', today);
    $('.error').hide();
     $('#create').hide();
     $('#subTotal').hide();
    var rowCount = 1;
    // $("#orders").hide();
   // $('#product').on('change', function() {
    $('#shipping').on('change', function() {
    var shipping=$('#shipping').find(':selected').data('cost');
$('#shippingCost').val(shipping);
});
      $('.add-row').click(function() {
  var product_name=$('#product').find(':selected').data('name');
  var product_cost=$('#product').find(':selected').data('cost');
  var product_img=$('#product').find(':selected').data('img');
  var product_id=$('#product').find(':selected').data('id');
alert(product_img);

  
  if(product_name.length == 0){
    $('.error').show()
  }
   

    
else{
    $('.error').hide()
    $("#orders").show();
     $('#subTotal').show();
    $('#create').show();
      rowCount++;
             var markup = "<tr id='row" + rowCount + "'><td><input class='form-control product_name' type='text'data-type='product_name' name='product_name[]'id='product_name_" + rowCount + "'for='"+rowCount+"' value='" + product_name + "'readonly/><input type='hidden' name='prodId[]'value='"+product_id+"'/></td><td><img class='form-control product_name' src='{{url("+product_name+")}}'name='product_image[] ' ' style='width: 5rem; height: 5rem;'id='product_image_" + rowCount + "'for='"+rowCount+"' value='" + product_name + "'readonly/></td><td><input value='"+product_cost+"' type='number'data-cost='product_cost' id='product_price_"+ rowCount + "' name='product_cost[]' for='"+rowCount+"' class='form-control product_price' readonly/></td><td><input type='number' name='quantity[]' class='form-control quantity'id='quantity_"+ rowCount + "' for='"+rowCount+"'/></td><td><input type='number'name='discount[]' class='form-control discount'id='discount_"+ rowCount + "' for='"+rowCount+"'readonly/></td><td><input type='text' class='total_cost form-control'id='total_cost_"+ rowCount + "'  name='total_cost[]' for='"+rowCount+"'readonly/></td><td><div class='col-lg-12 remove-btn'><a class='form-group btn btn-danger add-row btn-sm px-3 delete-row'>Remove</a></div></td></tr>";
            $("#orders").append(markup);
            // after adding product clear it from field
            $("#product").val('');

    }     
     // <td><input type='text' class='shipping_cost form-control'id='shipping_cost_"+ rowCount + "'  name='shipping_cost[]' for='"+rowCount+"'readonly/></td>

});

//discount coupon
 $('#discount-code').on('blur', function() {
    var code=this.value;
    $('#product').on('change', function() {
       var product_id=$('#product').find(':selected').data('id');
  $(".discount").html('');
  $.ajax({
url:"{{url('get-discount-by-code')}}",
type: "POST",
data: {
code: code,
product_id: product_id,
_token: '{{csrf_token()}}'
},
dataType : 'json',
success: function(result){
  // $("#productss").append('<option value="" selected disabled>Select Product </option>');
alert(result.product);
$.each(result.discount,function(key,value){
// $("#productss").append('<option data-price="'+value.total+'" data-qty="'+value.sale_quantity+'" data-sale="'+value.sale_id+'" value="'+value.product_id+'" >'+value.product_name+'</option>');
  $('.discount').val(value.coupon_amount);

});

    
// $('#product').on('change', function() {
//   var product_id=$('#product').find(':selected').data('id');
//   $.ajax({
// url:"{{url('get-discount-by-code')}}",
// type: "POST",
// data: {
// code: code,
// _token: '{{csrf_token()}}'
// },
// dataType : 'json',
// success: function(result){
// }

// });

// });
if(result.cat_coupon.length == 1){
  var id=result.cat_coupon;
 
  $.each(result.cat_coupon,function(key,value){
// $("#productss").append('<option data-price="'+value.total+'" data-qty="'+value.sale_quantity+'" data-sale="'+value.sale_id+'" value="'+value.product_id+'" >'+value.product_name+'</option>');

  alert('product id');

});
}
if(result.cat_id){
  $.each(result.cat_id,function(key,value){
// $("#productss").append('<option data-price="'+value.total+'" data-qty="'+value.sale_quantity+'" data-sale="'+value.sale_id+'" value="'+value.product_id+'" >'+value.product_name+'</option>');
  $('.cat_id').val(value.coupon_amount);
  alert('cat id');
});
}
}
});
});
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

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script>
$(document).ready(function() {
$('#customer-dropdown').on('change', function() {
var user_id = this.value;
$("#address-dropdown").html('');
$.ajax({
url:"{{url('get-address-by-user')}}",
type: "POST",
data: {
user_id: user_id,
_token: '{{csrf_token()}}'
},
dataType : 'json',
success: function(result){
  $("#address-dropdown").append('<option value="" selected disabled>Select Address </option>');
$.each(result.addresses,function(key,value){
$("#address-dropdown").append('<option value="'+value.id+'">'+value.address_details+'</option>');
});
}
});
});    
});
</script>
<script>
$(document).ready(function() {
$('#address-dropdown').on('change', function() {
var address_id = this.value;
// $("#address-dropdown").html('');
// alert(address_id);
$.ajax({
url:"{{url('get-details-by-address')}}",
type: "POST",
data: {
address_id: address_id,
_token: '{{csrf_token()}}'
},
dataType : 'json',
success: function(result){
$.each(result.details,function(key,value){
$("#f_name").val(value.first_name);
$("#l_name").val(value.last_name);
$("#phone").val(value.phone);
$("#detail").val(value.address_details);
$("#longitude").val(value.longitude);
$("#latitude").val(value.latitude);

});
}
});
});    
});
</script>
<script>
  $(document).ready(function(){
 
  // Initialize select2
  $(".select").select2();
 

  // Read selected option
  
});


</script>

<script>
  $("#StreamUrl").keydown(function (e) {
     if (e.keyCode == 32) { 
       $(this).val($(this).val() + "-"); // append '-' to input
       return false; // return false to prevent space from being added
     }
});
</script>

<script>



$(document).ready(function () {

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


// Add a generic event listener for any change on quantity or price classed inputs
$("#orders").on('input', 'input.quantity,input.product_price,input.discount', function() {
  getTotalCost($(this).attr("for"));
});


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

 
}


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


                 <!-- Modal -->
<div class="modal fade" id="addCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <form action="{{route('registerCustomer')}}" method="post">
          @csrf
        <div class="form-group row">
          <input id="first_name" placeholder="First Name" type="text" class="form-control " name="first_name" value="" required autocomplete="first_name" autofocus>

                             
        </div>
         <div class="form-group row">
          <input id="last_name" placeholder="Last Name" type="text" class="form-control" name="last_name" value="" required autocomplete="last_name" autofocus>

                              
        </div>
         <div class="form-group row">
          <input id="email"placeholder="Email" type="email" class="form-control " name="email" value="" required autocomplete="email">

                            
        </div>
          <div class="form-group row">
                           
                                <input id="password" placeholder="Password" type="password" class="form-control " name="password" required autocomplete="new-password">

                            
                        </div>

                        <div class="form-group row">
                            
                                <input id="password-confirm" placeholder="Confirm Password"type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        
                        </div>

                          
      </div>
      <div class="modal-footer">
  <button type="submit" class="btn btn-primary">
                                Add
                                </button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </form>
      </div>
    </div>
  </div>
</div>