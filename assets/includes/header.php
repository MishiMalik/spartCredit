<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CreditSpark</title>
</head>

<body>
    <header>

        <!-- +==============================================social header -->
        <div class="social-header">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-centers">
                            <i class="bi bi-telephone  text-primary f-18 me-2"></i>
                            <p class="mb-0 pb-0 text-light f-16 w-500">+1 (800) 607-0603</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-end">
                        <div class="d-flex align-items-centers">
                            <a href=""><i class="bi bi-facebook text-primary f-18 me-3"></i></a>
                            <a href=""><i class="bi bi-twitter text-primary f-18 me-3"></i></a>
                            <a href=""><i class="bi bi-instagram text-primary f-18 me-3"></i></a>
                            <a href=""> <i class="bi bi-linkedin text-primary f-18"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===============================================navbar -->
        <div class="navbar-header">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 py-0">
                        <nav class="navbar navbar-expand-lg navbar-light py-0 px-0">
                            <div class="container-fluid px-0">
                                <a class="navbar-brand" href="index.php">
                                    <img src="assets/images/logo.jpg" alt="" class="img-fluid">
                                </a>
                                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button> -->
                                <div class="d-flex">
                                    <!-- <a href="cart.php" class="cart-sm">
                                        <div class="cart-icon">
                                            <i class="bi bi-cart-plus-fill"></i>
                                            <div class="cart-number">3</div>
                                        </div>
                                    </a> -->
                                    <!-- <div class="dropdown cart-sm me-2">
                                        <button class="dropdown-toggle profile-dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-person-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                          <li><a class="dropdown-item" href="#">Action</a></li>
                                          <li><a class="dropdown-item" href="#">Another action</a></li>
                                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div> -->
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    
                                </div>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active-nav" aria-current="page" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.php">About</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Services
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="credit-repair.php">Credit Repair</a></li>
                                                <li><a class="dropdown-item" href="credit-approval.php">Credit Approvals</a></li>
                                                <li><a class="dropdown-item" href="credit-limit.php">Increase Credit Limit</a></li>
                                                <li><a class="dropdown-item" href="negative-item.php">Remove Negative Items</a></li>
                                                <li><a class="dropdown-item" href="tradelines.php">Tradelines</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="results.php">Results</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="education.php">Education</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.php">Contact</a>
                                        </li>

                                    </ul>
                                    <!-- <div class="button">
                                        <a href="appointment.php"><button>Book Appointment</button></a>
                                    </div> -->
                                    <div>
                                    <a href="cart.php" class="">
                                        <div class="cart-icon">
                                            <i class="bi bi-cart-plus-fill"></i>
                                            <div class="cart-number">3</div>
                                        </div>
                                    </a>
                                    </div>
                                    <div class="dropdown ">
                                        <button class="dropdown-toggle profile-dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-person-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                          <li><a class="dropdown-item" href="#">Action</a></li>
                                          <li><a class="dropdown-item" href="#">Another action</a></li>
                                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>