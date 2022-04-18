<!DOCTYPE html>
<html lang="en">

<head>
    <title>StonyEdge - Checkout</title>
@include('frontend.links')
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <!-- Event snippet for Purchase conversion page -->

</head>

<body>


    <section>
        <div class="container  pt-5">

            <div class="row g-5">

                <div class="col-12 col-lg-6">
                    <div>
                        <a href="index.php" class="text-decoration-none">
                            <img src="./asset/img/cropped-logo.png" width="150" alt="">
                        </a>
                    </div>
                   <!--  <p class="para12 fw-bold text-black-50 mt-4">Shipping <i class="fa fa-chevron-right" aria-hidden="true"></i> Payment</p>
 -->


                    <div class="d-flex align-items-center justify-content-between py-4">
                        <h1 class="heading20 mb-0 fw-normal">Contact information</h1>
                        <!--<p class="para12 mb-0">Already have an account? Already have an account?<a href="signin.php" class=""> Log in </a></p>-->
                    </div>
                    <!-- <form action="{{route('checkout.store')}}" method="post"> -->
                          <form
                        role="form"
                        action="{{ route('checkout.store') }}"
                        method="post"
                        class="require-validation"
                        data-cc-on-file="false"
                        data-stripe-publishable-key="pk_live_51KExlDEXquYq4yLxim8z52W3cKGq4D2W4w4edB0h40bvKXPlR5vPFMGXwD8H7tBebsY4mCTM7oSG6YEgpGM0UDfm00XLYv1lMB"
                        id="payment-form">
                        @csrf
                        <div class="mb-3">

                            <input type="email" name="email" placeholder="Email" class="form-control para16 fw-normal" required>

                        </div>
                        <div class="mb-3  d-flex align-items-center">
                            <input type="checkbox" class="me-3" name="alert" id="exampleCheck1" checked>
                            <label class="form-check-label para12" for="exampleCheck1">Email me with news and offers</label>
                        </div>
                        <div class="mt-4">
                            <h1 class="heading20 mb-3 fw-normal">Delivery method </h1>
                            <div class=" d-flex align-items-center  border p-3">
                                <input class="" type="radio" name="delivery_method" id="flexRadioDefault1">
                                <label class="form-check-label ms-3 para12" for="flexRadioDefault1">
                                    <span class="me-1">
                                        <i class="fa fa-truck" aria-hidden="true"></i>
                                    </span> Ship
                                </label>
                            </div>

                        </div>

                        <!--<div class="mt-4">-->
                        <!--    <h1 class="heading20 mb-3 fw-normal">Payment method </h1>-->
                        <!--    <div class=" d-flex align-items-center  border p-3">-->
                        <!--        <input class="" type="radio" name="delivery_method" id="flexRadioDefault1" value="stripe">-->
                        <!--        <label class="form-check-label ms-3 para12" for="flexRadioDefault1">-->
                        <!--             COD-->
                        <!--        </label>-->
                        <!--    </div>-->

                        <!--</div>-->
                        <!--<div class="mt-4">-->
                        <!--    <div class=" d-flex align-items-center  border p-3">-->
                        <!--        <input class="" type="radio" name="delivery_method" id="flexRadioDefault1" value="cod">-->
                        <!--        <label class="form-check-label ms-3 para12" for="flexRadioDefault1">-->
                        <!--             Cash On Delivery-->
                        <!--        </label>-->
                        <!--    </div>-->

                        <!--</div>-->


                        <div class="row mb-3 mt-5">
                            <h1 class="heading20  fw-normal">Contact information</h1>
                            <div class="col-12 col-lg-6">
                                <input type="text" name="f_name" placeholder="First Name" class="form-control para16 fw-normal"  required>
                            </div>
                            <div class="col-12 col-lg-6">
                                <input type="text" name="l_name" placeholder="Last Name" class="form-control para16 fw-normal"  required>
                            </div>
                            <div class="col-12 ">
                                <input type="text" name="address" placeholder="Address" class="form-control para16 fw-normal"  required>
                            </div>
                            <div class="col-12 ">
                                <input type="text" name="aparment" placeholder="Aparment, suit, etc (optional)" class="form-control para16 fw-normal" required>
                            </div>
                            <div class="col-12 ">
                                <input type="text" name="city" placeholder="City" class="form-control para16 fw-normal"  required>
                            </div>
                            <div class="row g-2 align-items-center">
                                <div class="col-12 col-lg-4  ">
                                    <select name="u_states" class="form-select formselectCheckout form-select-lg mb-3 para16 fw-normal box-shadow-none " required>
                                        <option selected value="United states">United states</option>
                                       
                                    </select>

                                </div>
                                <div class="col-12 col-lg-4  ">
                                    <select name="states" class="form-select formselectCheckout form-select-lg mb-3 para16 fw-normal box-shadow-none "  required>
                                        <option selected>States</option>
                                        <option value="AL">Alabama</option>
                                    	<option value="AK">Alaska</option>
                                    	<option value="AZ">Arizona</option>
                                    	<option value="AR">Arkansas</option>
                                    	<option value="CA">California</option>
                                    	<option value="CO">Colorado</option>
                                    	<option value="CT">Connecticut</option>
                                    	<option value="DE">Delaware</option>
                                    	<option value="DC">District Of Columbia</option>
                                    	<option value="FL">Florida</option>
                                    	<option value="GA">Georgia</option>
                                    	<option value="HI">Hawaii</option>
                                    	<option value="ID">Idaho</option>
                                    	<option value="IL">Illinois</option>
                                    	<option value="IN">Indiana</option>
                                    	<option value="IA">Iowa</option>
                                    	<option value="KS">Kansas</option>
                                    	<option value="KY">Kentucky</option>
                                    	<option value="LA">Louisiana</option>
                                    	<option value="ME">Maine</option>
                                    	<option value="MD">Maryland</option>
                                    	<option value="MA">Massachusetts</option>
                                    	<option value="MI">Michigan</option>
                                    	<option value="MN">Minnesota</option>
                                    	<option value="MS">Mississippi</option>
                                    	<option value="MO">Missouri</option>
                                    	<option value="MT">Montana</option>
                                    	<option value="NE">Nebraska</option>
                                    	<option value="NV">Nevada</option>
                                    	<option value="NH">New Hampshire</option>
                                    	<option value="NJ">New Jersey</option>
                                    	<option value="NM">New Mexico</option>
                                    	<option value="NY">New York</option>
                                    	<option value="NC">North Carolina</option>
                                    	<option value="ND">North Dakota</option>
                                    	<option value="OH">Ohio</option>
                                    	<option value="OK">Oklahoma</option>
                                    	<option value="OR">Oregon</option>
                                    	<option value="PA">Pennsylvania</option>
                                    	<option value="RI">Rhode Island</option>
                                    	<option value="SC">South Carolina</option>
                                    	<option value="SD">South Dakota</option>
                                    	<option value="TN">Tennessee</option>
                                    	<option value="TX">Texas</option>
                                    	<option value="UT">Utah</option>
                                    	<option value="VT">Vermont</option>
                                    	<option value="VA">Virginia</option>
                                    	<option value="WA">Washington</option>
                                    	<option value="WV">West Virginia</option>
                                    	<option value="WI">Wisconsin</option>
                                    	<option value="WY">Wyoming</option>
                                    </select>

                                </div>
                                <div class="col-12 col-lg-4  ">
                                    <input type="number" name="zip_code" placeholder="Zip code" class="form-control para16 fw-normal mt-0 pt-2"  required>

                                </div>
                            </div>

                            <div class="col-12 ">
                                <input type="number" name="phone" placeholder="Phone" class="form-control para16 fw-normal" required>
                            </div>
                        </div>
                        <!-- <div class="col-12">
                            <div class=" d-flex align-items-center">



                                <input type="checkbox" name="flexRadioDefault" id="nexttim">
                                <label class="form-check-label ms-3 para12" for="nexttim">
                                    Save this information for next time
                                </label>
                            </div>
                        </div> -->

                        <!-- <div class="text-lg-end py-5">
                            <button type="submit" class="btn btn-dark px-5">Continue to shipping</button>
                        </div> -->

                        <!-- warda's code start -->
    <div class='form-row row'>
                           <div class='col-xs-12 form-group required'>
                              <label class='control-label'>Name on Card</label> <input
                                 class='form-control' size='4' type='text'>
                           </div>
                        </div>
                        <div class='form-row row'>
                           <div class='col-xs-12 form-group card required'>
                              <label class='control-label'>Card Number</label> <input
                                 autocomplete='off' class='form-control card-number' size='20'
                                 type='text'>
                           </div>
                        </div>
                        <div class='form-row row'>
                           <div class='col-xs-12 col-md-4 form-group cvc required'>
                              <label class='control-label'>CVC</label> <input autocomplete='off'
                                 class='form-control card-cvc' placeholder='ex. 311' size='4'
                                 type='text'>
                           </div>
                           <div class='col-xs-12 col-md-4 form-group expiration required'>
                              <label class='control-label'>Expiration Month</label> <input
                                 class='form-control card-expiry-month' placeholder='MM' size='2'
                                 type='text'>
                           </div>
                           <div class='col-xs-12 col-md-4 form-group expiration required'>
                              <label class='control-label'>Expiration Year</label> <input
                                 class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                 type='text'>
                           </div>
                        </div>
                        <div class='form-row row'>
                           <div class='col-md-12 error form-group hide'>
                              <div class='alert-danger alert'>Please correct the errors and try
                                 again.
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xs-12">
                              <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                           </div>
                        </div>
                        <!-- warda's code end -->
                    </form>

                    <hr>
                  
                </div>

                <div class="col-12 col-lg-6 border-start mt-0 bgcolor p-5" style="height: auto;">
                    
@php 
$subtotal = 0;
@endphp
@if(session('cart'))
       
            @foreach(session('cart') as $id => $details)
                @php $subtotal += $details['price'] * $details['item_quantity'] @endphp
                    <div class="row mt-5">
                        <div class="col-10">
                            <div class="d-flex">
                                <div class="modalImg px-2 me-3">
                                    <span class="cartNum">{{$details['item_quantity']}}</span>
                                    <img src="{{$details['image']}}" class="img-fluidOwn" />
                                </div>
                                <div>
                                    <p class="para12">{{$details['name']}}</p>
                                    <!-- <p class="para12">Large / Bisque</p> -->

                                </div>
                            </div>
                        </div>


                        <div class="col-2 d-flex justify-content-end">
                            <div class="rightsidecheckoutmodal">
                                <p class="para12 fw-bold cursorPointer">${{$details['price'] * $details['item_quantity']}}</p>
                            </div>
                        </div>
                    </div>

@endforeach
        @endif

                    
                    <hr>

                    <div class="">

                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <div>
                                <h2 class="para16 fw-normal">Subtotal</h2>
                                <p class="para16 fw-normal">
                                    Shipping
                                </p>
                            </div>

                            <div>
                                <p class="para16 text-end fw-bold">${{$subtotal}}</p>
                                <p class="para16 text-end fw-normal">Calculated at next step
                                </p>


                            </div>
                        </div>
                        <hr />

                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <div>
                                <h2 class="para16 fw-normal">Total</h2>
                         </div>

                            <div>
                                <p class="para12 text-end ">USD <span class="fw-bold heading20">${{$subtotal}}</span> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="conatainer">
                        <ul class="list-unstyled d-flex  ">
                            <li><a href="../refundpolicy.html" class="para16 me-3">Refund policy</a> </li>
                            <li><a href="../privacypolicy.html" class="para16 me-3">Privacy policy</a> </li>
                            <li><a href="../TermsofUse.html" class="para16 me-3">Terms of service </a> </li>
                        </ul>
                    </div>
        </div>
    </section>




</body>
 <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
   <script type="text/javascript">
      $(function() {
    var $form = $(".require-validation");
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                'input[type=text]', 'input[type=file]',
                'textarea'
            ].join(', '),
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
        $errorMessage.addClass('hide');
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
        });
        if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
        }
    });
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
});

   </script>
   
   

</html>