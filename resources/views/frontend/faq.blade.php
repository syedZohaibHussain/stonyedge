<!DOCTYPE html>
<html lang="en">

<head>
  <title>StonyEdge - Blogs</title>
  @include('frontend.links')
<?php $page='';?>
</head>

<body>
  @include('frontend.header')

  <div class="container py-5">
    <div class="row">
      <div class="col-12 col-lg-2"></div>
      <div class="col-12 col-lg-8  ">
        <h1 class="ptFontfamly heading36 text-center mt-5">Frequently Asked Questions</h1>
        <br> <br> <br> <br>

     
        <!-- Accordian Start -->

        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item  py-4">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                <h4> What is your return policy? </h4>
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body para16 ">
                If you've received an incorrect, defective or damaged product, you may contact us within 30 days and a replacement can be arranged at no additional cost.
                <br> <br>
                If for any reason, you are unhappy with your purchase beyond defect or damage issues, you may contact us within 30 days to arrange a return for a full refund. We will then inspect the returned item and apply a full refund accordingly.
              </div>
            </div>
          </div>
          <div class="accordion-item  py-4">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                <h4> I'm missing a product or hardware from my order, what do I do?</h4>


              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body para16 ">
              Multi-quantity orders may be shipped separately. You may refer to your tracking number to see its shipping progress and estimated delivery date.
              <br><br>
              For furniture items with missing hardware, please contact us with your order number and our team will assist you.
              </div>
            </div>
          </div>
          <div class="accordion-item  py-4">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                <h4> Can I cancel or amend my order? </h4>



              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body para16 ">Yes! We typically have two sales per year – one around Memorial Day
              An order may still be cancelled or amended before it has shipped. We are unable to cancel or amend an order if the item is already in transit or a tracking number has been generated.
                  </div>
            </div>

          </div>

          <div class="accordion-item  py-4">
            <h2 class="accordion-header" id="flush-headingThree4">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree4" aria-expanded="false" aria-controls="flush-collapseThree">
                <h4> Where is my order?</h4>



              </button>
            </h2>
            <div id="flush-collapseThree4" class="accordion-collapse collapse" aria-labelledby="flush-headingThree4" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body para16 ">
              We ship all orders using UPS or FEDEX Ground with a standard delivery service of 1-5 business days. If your estimated delivery date has passed and there are no known delivery delays, please contact us so we can assist.
              
            </div>
            </div>

          </div>

          <div class="accordion-item py-4">
            <h2 class="accordion-header" id="flush-headingThree5">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree5" aria-expanded="false" aria-controls="flush-collapseThree">
                <h4> Where is my refund? </h4>



              </button>
            </h2>
            <div id="flush-collapseThree5" class="accordion-collapse collapse" aria-labelledby="flush-headingThree5" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body para16 ">
                
              Refunds will be credited back to the same payment method used. Standard bank processing will apply and may take up to 14 business days. 
              </div>
            </div>

          </div>
        </div>

        <!-- Accordian End -->

     
       

       
     


      </div>
    </div>
  </div>

@include('frontend.footer')
</body>

</html>