<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ghaziabad</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/splide.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="js/splide.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
    input {

        padding: 16px;
        margin: 5px 0 22px 0;
        border: none;
        border-bottom: 1px solid black;
        border-radius: 10px;
    }

    .btn {
        background-color: #f4511e;
        display: block;
        padding: 10px;
        border: 0px;
        color: white;
        width: 50%;
        margin: 0px auto;
        font-size: 16px;
    }

    span {
        margin-top: 0px;
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand fw-bold ps-5 gradient-text" href="index.html"
                            style="font-size: 35px;"><span style="font-size: 50px;">G</span>haziabad</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Why Holidify</a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link active dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Lead Pricing
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-disabled="true">How it Works</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-disabled="true">FAQs</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">

                                <button class="btn btn bg-dark text-white" type="submit" style="width:100px">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!--second section start-->
        <div class="row bg-secondary" style="background-image: url('images/destination-1.jpg');background-attachment:fixed;background-size:cover">
            <div class="col-sm-6" style="padding-bottom:250px;background:rgba(0,0,0,0.5)">
                <h1 class="text-center text-white" style="padding-top:150px;font-size:55px">Buy travels leads</h1>
                <p class="text-center text-white fs-5">Grow your travel business with 100% phone & email verified leads.
                </p>
                <h6 class="text-center text-white">Call Us at +91-8080809161 and learn about how we can help you
                </h6>
                <button class="btn btn bg-warning w-75 mt-4 text-white" type="submit" style="width:100px">view more</button>

            </div>
            <div class="col-sm-6" style="background:rgba(0,0,0,0.5)">

                

                <div class="cards float-center"
                    style="margin-top:100px;background-color: white;height:550px;width: 520px;border-radius:35px">
                    <h3 class="card-title text-center pt-3 pb-5">Travel Agent Registration</h3>
                    <form action="reg.php" method="post">

                        <input type="text" placeholder="Username.." name="n" id="n" class="form-control ms-3 me-5"
                            style=" width:490px;">
                        <input type="number" placeholder="phone.." name="num" id="ph" class="form-control ms-3 me-5"
                            style=" width:490px;">
                        <input type="email" placeholder="email.." name="e" id="n" class="form-control ms-3 me-5"
                            style=" width:490px;">
                        <input type="password" placeholder="pass.." name="ps" id="n" class="form-control ms-3 me-5"
                            style=" width:490px;">


                        <p style="text-align: center;">By creating an account you agree to our <a href="#">Terms &
                                Privacy</a>.</p>

                        <input type="submit" class="btn" value="Register">
                        <div style="text-align: center;padding-top:10px;font-size:29px">
                            <i class="fa-brands fa-twitter" style="color: #001e4d;"></i>
                            <i class="fa-brands fa-youtube" style="color: #001e4d;"></i>
                            <i class="fa-brands fa-facebook" style="color: #001e4d;"></i>
                        </div>

                    </form>
                </div>


            </div>
        </div>


        <!--second section end-->
    </div>
</body>

</html>