<!DOCTYPE html>
<html lang="en">
  <head>
    <title>StonyEdge - Contact</title>
   @include('frontend.links')
    <style>
      .owl-item.active.center {
        display: flex !important;
        justify-content: center !important;
      }
    </style>
  </head>
  <?php $page='contact'?>
  <body>
  @include('frontend.header')

    <section class="contactSection">
      <div class="container text-center">
        <h1 class="heading36 ptFontfamly">Leave a message or Email us at</h1>
        <p class="para16 mb-1">customerservice@stonyedge.com</p>
        <p class="para16">
         Get in touch and visit us at.
        </p>
        <p class="para16">
        Phone number: 646-389-1066</p>
        <p class="para16">
        Address: 2250 Sherman Ave, Pennsauken Township, NJ 08110
</p>
      </div>

      <section class="contactFormSection ">
        <div class="container">
          <div class="px-1 py-3 mx-auto">
            <div class="row d-flex justify-content-center">
              <div class="col-xl-7 col-lg-8 col-md-9 col-11">
                <div class="card2 bg-light">
                  <!-- <h5 class="text-center mb-4">Powering world-class companies</h5> -->
                  <form class="form-card" onsubmit="event.preventDefault()">
                    <div class="row justify-content-between text-left">
                      <div class="form-group col-sm-12 flex-column d-flex">
                        <label class="form-control-label heading20 px-3"
                          >Your name<span class="text-danger"> *</span></label
                        >
                        <input
                          type="text"
                          id="fname"
                          name="fname"
                          placeholder="Your name"
                          onblur="validate(1)"
                        />
                      </div>
                      <!-- <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label heading20 px-3">Last name<span class="text-danger"> *</span></label> <input type="text" id="lname" name="lname" placeholder="Enter your last name" onblur="validate(2)"> </div> -->
                    </div>
                    <div class="row justify-content-between text-left">
                      <div class="form-group col-sm-12 flex-column d-flex">
                        <label class="form-control-label heading20 px-3"
                          >Your email<span class="text-danger"> *</span></label
                        >
                        <input
                          type="text"
                          id="email"
                          name="email"
                          placeholder="Email"
                          onblur="validate(3)"
                        />
                      </div>
                      <!-- <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label heading20 px-3">Phone number<span class="text-danger"> *</span></label> <input type="text" id="mob" name="mob" placeholder="" onblur="validate(4)"> </div> -->
                    </div>
                    <div class="row justify-content-between text-left">
                      <div class="form-group col-sm-12 flex-column d-flex">
                        <label class="form-control-label heading20 px-3"
                          >Subject<span class="text-danger"> *</span></label
                        >
                        <input
                          type="text"
                          id="job"
                          name="job"
                          placeholder="Subject"
                          onblur="validate(5)"
                        />
                      </div>
                    </div>
                    <div class="row justify-content-between text-left">
                      <div class="form-group col-12 flex-column d-flex">
                        <label class="form-control-label heading20 px-3"
                          >Your message (optional)
                          </label
                        >
                        <input
                          type="text"
                          id="ans"
                          name="ans"
                          placeholder="Message"
                          onblur="validate(6)"
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-sm-6">
                        <button type="submit" class="btn-block btn-dark">
                          Submit
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
  @include('frontend.footer')
  </body>
</html>
