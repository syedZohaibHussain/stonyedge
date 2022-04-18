<!DOCTYPE html>
<html lang="en">

<head>
    <title>StonyEdge - Thank-You</title>

@include('frontend.links')
</head>

<body style="height: 100vh;" class=" d-flex flex-row justify-content-center align-items-center">

    <div class="">

        <div class="container text-center">
            <h1 class="heading60 mb-4">Thank You! <i class="fa fa-check heading36 text-success" aria-hidden="true"></i></h1>

            <p class="heading20 mb-4"><strong>Your order was completed sucessfully</strong> </p>


            <p class="para16 mb-4 d-flex  align-items-center fw-bold text-start">
                <span class="me-3"><img src="asset//img/email-svgrepo-com.svg" width="80" alt=""></span>
                An email receipt including the details about your order has been <br> sent to the email address provided.
                Please keep it for your records.
            </p>
            <div class="d-flex  align-items-center">
                <p class="para16 mb-4 text-start  fw-bold">

                    You can visit the my account page at any time to check the status <br>
                    of your order. Or click here to <a href="#">Print a copy of your receipt</a></p>

                <p class="ms-4"><img src="asset/img/laptop-svgrepo-com.svg" width="80" alt="">
                    <img src="asset/img/printer-svgrepo-com.svg" width="80" alt="">
                </p>

            </div>


            <a class="text-decoration-none" href="/" role="button">
                <button class="btn btn-dark btn-lg px-5 text-white para16">
                    Continue to homepage
                </button>
            </a>

        </div>
    </div>
</body>

</html>