<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>All Exchange | Return & Exchange</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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

</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Navbar -->
  @include('nav')
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

     <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
   


        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Exchange Reason</h3>
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
                    <th>Name</th>
    
                    <th>Description</th>
                    <th>Status</th>
                    <th>Show on</th>
                  
                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>
                  
               
                  <tr>
                    <td>1</td>
                    <td>1</td>
                    <td><select  class="form-control" id='' name="status">
                        <option value="">Active</option>
                        <option value="">DeActive</option>         
                      </select></td>
                    <td><select  class="form-control" id='' name="show">
                        <option value="">Customer</option>
                        <option value="">Admin</option>         
                      </select></td>
                    
                    
                    <td><div class="btn-group">
                    <button type="button" class="btn  btn-success dropdown-toggle" data-toggle="collapse"data-target="#supplier1">
                      <!-- <i class="fas fa-wrench"></i> -->
                      Action
                    </button>
                    <div class="dropdown-menu dropdown-menu-right collapse" role="menu"id="supplier1">
                      <a data-toggle="modal" href="#myView" data-target="#myView" class="dropdown-item"><i class="fas fa-binoculars mr-1"></i>View product</a>
                      <a href="#" class="dropdown-item"><i class="fas fa-edit mr-1"></i>Edit Product</a>
                      <a href="#" class="dropdown-item"><i class="fas fa-edit mr-1"></i>Add variation</a>
                 

                      
                      <a data-toggle="modal" href="#myDelete1" data-target="#myDelete1"class="dropdown-item"><i class="fas fa-trash mr-1"></i>Delete</a>
                   
                     <!--  <a data-toggle="modal" href="#addPayment1" data-target="#addPayment1" class="dropdown-item"><i class="fas fa-money-bill mr-1"></i>Add Payment</a>
                       <a href=""class="dropdown-item"><i class="fas fa-file-pdf mr-1"></i>Report</a> -->
                    </div>
                  </div>
                </td>
                  </tr>
                  <!-- Modal -->
<div class="modal fade" id="myDelete1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <form action="#" method="post">
          @csrf
          @method('DELETE')
        <button type="submit" class="btn btn-primary">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </form>
      </div>
    </div>
  </div>
</div>
                 
                   
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
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

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


