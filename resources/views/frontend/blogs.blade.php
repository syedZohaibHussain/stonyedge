<!DOCTYPE html>
<html lang="en">

<head>
  <title>StonyEdge - Blogs</title>
  @include('frontend.links')

</head>
<?php $page='blog'?>
<body>
@include('frontend.header')

  <div class="container mb-5 pb-5">
    <div class="wellhole">
      <div class="row">
        <!-- <div class="col-lg-3 col-12">
            <div class="well">
              <h1 style="letter-spacing: 1px">
                PARACHUTE / <span style="font-size: 16px">Blog</span>
              </h1>
              <br />
              <li>Wellnes</li>
              <br />
              <li>Design</li>
              <br />
              <li>Bedtime Routines</li>
              <br />
              <li>Entertaning</li>
              <br />
              <li>Learn</li>

              <div class="imgtag" style="background-color: #f3f3f3">
                <div class="boxhead">
                  <h6 style="font-size: 16px">Learn</h6>
                  <h1 style="font-size: 30px; font-weight: bold">
                    Parachute Edin is Now Open
                  </h1>
                  <h6 style="font-size: 16px">
                    We just opened our 15th and largest store to-date!
                  </h6>
                </div>
              </div>
            </div>
          </div> -->

        <div class="col-lg-12 col-12">
          <!-- <div class="largest d-flex justify-content-end">
              <img src="asset/img/parachute.jpeg" />
            </div> -->

          <section>
            <div class="new">
              <h1>NEWEST STORIES</h1>
            </div>

            <div class="container">
              <div class="row g-5">
                <div class="col-lg-6 col-12">
                  <div class="lrn">
                    <img src="asset/img/79D85812-9FB1-4F3A-8AFF-C970B0CCD709_1_201_a.jpeg" class="img-fluidOwn" />
                    <br />
                    <!-- <h5>LEARN</h5> -->
                    <br />
                    <h4>
                      Steps to Successfully Style a Nightstand
                    </h4>
                    <br />
                    <p>
                      A bedroom is almost incomplete without a nightstand. With no lamps at the corner or somewhere to throw
                       your random belongings at, it almost feels like something’s missing. Well, it really is. A nightstand for
                        bedroom serves more than just space. It adds to the comfort of not having to get out of bed  <a href="single-blog" class="fw-bold">Read more</a>
                    </p>
                  </div>
                </div>

                <div class="col-lg-6 col-12">
                  <div class="lrn">
                    <img src="asset/img/SusHp.jpg" class="img-fluid" />
                    <br />
                    <!-- <h5>DESIGN</h5> -->
                    <br />
                    <h4>The Art of Buying The Right Home Article!</h4>
                    <br />
                    <p>
                      Home is your happy haven. Where everything is built with love and dreams. From furniture to your bedsheets,
                       from towels to your tables. Everything in your home tells your story. Let your home talk about you
                       <a href="single-blog" class="fw-bold">Read more</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>


          </section>
        </div>
      </div>
    </div>
  </div>
@include('frontend.footer')
</body>

</html>