<?php

session_start();

if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    
    header('location:dashboard.php?fn='.$_SESSION['firstname'].'&&ln='.$_SESSION['lastname'].'&&pi='.$_SESSION['image']);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/login.css">
    <title>Identification</title>
</head>

<body>
    <!--start header-->
    <div class="header-top py-2 w-100 position-relative">
        <div class="container-md">
            <div class="row">
                <div class="call col-md-4 text-md-left d-none d-md-block">Appelez: (+216) 98 744 846</div>
                <div class="social col-6 col-md-4 text-right">
                    <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f px-2"></i></a>
                    <a href="https://www.twitter.com/" target="_blank"><i
                            class="fab fa-twitter px-2 border-left"></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i
                            class="fab fa-youtube px-2 border-left"></i></a>
                    <a href="http://www.instagram.com/" target="_blank"><i
                            class="fab fa-instagram px-2 border-left"></i></a>
                </div>
                <div class="topbar col-md-4 text-right">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                        <img class="mr-2" src="../../assets/images1/Tunisia-Flag-icon.png">TN / DT
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!--end header-->

    <!--start navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark py-1 py-md-2 text-capitalize w-100">
        <a class="navbar-brand ml-lg-5 ml-sm-0" href="index.html" data-page="page01">Echri<span>Tounsi.</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-mobile"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-md">
            <div class="collapse navbar-collapse col-xs-12" id="nav-mobille">
                <ul class="navbar-nav mx-auto font-weight-bold">

                    <li class="nav-item px-2">
                        <a class="nav-link" href="../index.html" data-page="page01">acceuil <span
                                class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item px-2">
                        <a class="nav-link" href="pages/vetements.html" data-page="page02">vetements</a>
                    </li>

                    <li class="nav-item px-2">
                        <a class="nav-link" href="pages/shoes.html" data-page="page02">chaussures</a>
                    </li>

                    <li class="nav-item px-2">
                        <a class="nav-link" href="pages/watches.html" data-page="page02">montres</a>
                    </li>

                    <li class="nav-item px-2">
                        <a class="nav-link" href="pages/bags.html" data-page="page02">sacs</a>
                    </li>

                    <li class="nav-item px-2">
                        <a class="nav-link" href="pages/accessory.html" data-page="page06">accessoires</a>
                    </li>
                </ul>

            </div>
            <div class="nav_icons position-relative ml-auto">

                <i class="search_close_open fas fa-search px-2 position-relative">
                    <span class="tooltiptext">Chercher</span>
                </i>

                <i class="search_close_open close_icon fas fa-times position-absolute opacity_0">
                    <span class="tooltiptext">Fermer</span>
                </i>

                <i class="fas fa-sign-in-alt px-2 border-left">
                    <span class="tooltiptext">S'identifier</span>
                </i>

                <i class="fas fa-user-plus px-2 border-left">
                    <span class="tooltiptext">s'inscrire</span>
                </i>

                <a href="pages/cart.html"><i class="fas fa-shopping-cart px-2 border-left">
                    </i></a>


                <form class="search_bar form-inline my-2 my-lg-0 position-absolute">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="position-absolute rounded-circle" type="submit">
                        <i class="fas fa-search "></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-----s'identifier -->
    <section style="margin-top: 100px;">
        <form class="container" method="POST" action="../../controllers/userController.php?event=login">
            <?php
        if (isset($_GET['error']) && !empty($_GET['error'])) {

            if ($_GET['error'] == 'true') {
                echo "<div class='form-row'>
                    <div class='col'>
                        <div class='alert alert-danger'>Email or Password are incorrect !</div>
                    </div>
                </div>";
            }else if($_GET['error'] == 'notallowed'){
                echo "<div class='form-row'>
                <div class='col'>
                    <div class='alert alert-danger'>You are not connected!</div>
                </div>
            </div>";  
            }else if ($_GET['error'] == 'false') {
                echo "<div class='form-row'>
                <div class='col'>
                    <div class='alert alert-info'>Bye bye !</div>
                </div>
            </div>";  
            }
        } ?>



            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>




            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">S'identifier</button>
        </form>
    </section>


    <!---  footer-->
    <div class="footer text-white ">
        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="text-uppercase mr-4 pb-2 mb-5 font-weight-bold">contactez nous</h5>

                        <div class="row my-4">
                            <div class="col-2 pt-2"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="col-10 px-0">
                                Formalab, Rue Palestine,19 rue Yahia Turki <br> Lafayette Tunis.
                            </div>
                        </div>

                        <div class="row my-4">
                            <div class="col-2 pt-2"><i class="fas fa-phone-alt"></i></div>
                            <div class="col-10 px-0">
                                (+216) 98 744 846 <br>
                                (+216) 54 736 117
                            </div>
                        </div>

                        <div class="row my-4">
                            <div class="col-2 pt-2"><i class="fas fa-envelope-open"></i></div>
                            <div class="col-10 px-0">
                                waelmkacher2020@gmail.com <br>
                                ramziattig@gmail.com
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <h5 class="text-uppercase  mr-4 pb-2 mb-5  font-weight-bold">catégories</h5>
                        <ul class="list-unstyled text-capitalize">
                            <a href="index.html">
                                <li class="w-75 border-bottom pb-1 mb-1 overflow-hidden" data-page="page01">accueil <i
                                        class="fas fa-angle-right fa-sm float-right pt-2"></i></li>
                            </a>
                            <a href="pages/clothes.html">
                                <li class="w-75 border-bottom pb-1 mb-1 overflow-hidden" data-page="page02">vettements
                                    <i class="fas fa-angle-right fa-sm float-right pt-2"></i></li>
                            </a>

                            <a href="pages/shoes.html">
                                <li class="w-75 border-bottom pb-1 mb-1 overflow-hidden" data-page="page04">chaussures<i
                                        class="fas fa-angle-right fa-sm float-right pt-2"></i></li>
                            </a>
                            <a href="pages/watches.html">
                                <li class="w-75 border-bottom pb-1 mb-1 overflow-hidden" data-page="page05">montres <i
                                        class="fas fa-angle-right fa-sm float-right pt-2"></i></li>
                            </a>
                            <a href="pages/bags.html">
                                <li class="w-75 border-bottom pb-1 mb-1 overflow-hidden" data-page="page06">sacs <i
                                        class="fas fa-angle-right fa-sm float-right pt-2"></i></li>
                            </a>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h5 class="text-uppercase mr-4 pb-2 mb-5  font-weight-bold">newsletter</h5>
                        <p class="my_p mb-4">BÉNÉFICIEZ EN EXCLUSIVITÉ D’OFFRES & DE MISES À JOUR</p>
                        <input class="py-2 px-3 my-3 text-white" type="email" name="e-mail" id="mail"
                            placeholder="Enterez votre E-mail">
                        <button class="py-1 px-3 text-white text-capitalize" type="submit">S'abonner</button>

                        <div class="widget pb-2 mb-4">
                            <h3 class="widget-title text-light pb-1">Download our app</h3>
                            <div class="app-downold">
                                <a href="#">
                                    <img src="../../assets/images1/available-google.png" alt="play-store">
                                </a>
                                <a href="#">
                                    <img src="../../assets/images1/store.png" alt="app-store">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- footer copyrigth-->
        <div class="copyright">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-6 col-12 mr-left">
                            <p>&copy; 2020 all rights reserved Wael Mkacher & Ramzi Attig</p>
                        </div>
                        <div class="col-lg-6 col-12">
                            <img src="../../assets/images1/payments.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>