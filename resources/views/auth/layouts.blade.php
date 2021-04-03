<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Navbar Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbars/">

    <!-- My css -->
    <link rel="stylesheet" href="css/style.css">



    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/navbar.css" rel="stylesheet">
</head>

<body class="bg_autori">

    <div class="container mt-md-5 pt-md-5 mt-sm-0 pt-sm-0">
        <div class="row">
            @yield('content')
            {{-- <div class="col-md-6 col-sm-12 mt-3 ">
                <div class="bg-white p-3 rounded-3 width_75 py-5">
                    <div class="container">
                        <div class="form-block mx-auto">
                            <div class="text-center mb-1">
                                <div class="d-flex justify-content-around pb-3">
                                    
                                    <a href="#" class="nav-link"> <b>SING IN</b> </a>
                                    <a href="#" class="nav-link"><b>SING UP</b> </a>

                                </div>
                            
                            
                            </div>

                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label text-primary">USERNAME</label>
                                <input type="email" class="form-control rounded-pill" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                               
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label text-primary">PASSWORD</label>
                                <input type="password" class="form-control rounded-pill" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-danger rounded-pill">Submit</button>
                              </div>
                            
                        </form>

                    </div>
                    </div>
                </div>
            </div> --}}


            <div class="col-md-6 col-sm-12 mt-3">
                <div>
                    <img src="images/lecture.png" alt="" width="100%" height="100%">
                </div>
            </div>



        </div>




    </div>
    <!-- Example single danger button -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->



    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>