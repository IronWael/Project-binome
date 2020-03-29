<?php
session_start();

if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    header('location:login.php?error=notallowed');
}
if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {

    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $image = $_SESSION['image'];
} else {

    $firstname = $_REQUEST['fn'];
    $lastname = $_REQUEST['ln'];
    $image = $_REQUEST['pi'];
}


?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font awesome library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
    <!--bootstrap file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" />
    <!--<link rel="stylesheet" href="../../assets/css/style.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/styleDashboard.css">
    <!--<link rel="stylesheet" href="../../assets/css/styles.css">-->
    <title>EchriTounsi</title>
</head>

<body>

    <!--start navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark py-1 py-md-2 text-capitalize w-100">
        <a class="navbar-brand ml-lg-5 ml-sm-0" href="../index.html" data-page="page01">Echri<span>Tounsi.</span></a>

        <div class="container-md">

            <div class="nav_icons position-relative ml-auto">

                <i class="search_close_open fas fa-search px-2 position-relative">
                    <span class="tooltiptext">Chercher</span>
                </i>
                <i class="search_close_open close_icon fas fa-times position-absolute opacity_0">
                    <span class="tooltiptext">Fermer</span>
                </i>

                <a href="../../controllers/userController.php?event=logout"><i class="fas fa-sign-out-alt px-2 border-left">
                        <span class="tooltiptext">Déconnecter</span></i>
                </a>




                <form class="search_bar form-inline my-2 my-lg-0 position-absolute">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="position-absolute rounded-circle" type="submit">
                        <i class="fas fa-search "></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="sidebar col-sm-3 col-lg-2">
            <div class="profile-sidebar">
                <div class="profile-userpic">
                    <img src="../../assets/image/<?php echo $image ?>" alt="">
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name text-capitalize"><?php echo $firstname ?> <?php echo $lastname ?></div>
                    <div class="profile-usertitle-status">
                        <span class="indicator label-success"></span>
                        Online

                    </div>

                </div>
                <div class="clear"></div>
            </div>
            <div class="divider"></div>
            <div class="row">
                <div class="col-md-12 list border-top">
                    <a href="dashboard.php">
                        <i class="fa fa-dashboard px-2"></i>

                        Dashboard
                    </a>
                </div>

                <div class="col-md-12 list">
                    <a href="../products/allProducts.php">
                        <i class="fas fa-shopping-cart px-2"></i>
                        Products
                    </a>
                </div>
                <div class="col-md-12 list">
                    <a href="">
                        <i class="fas fa-users px-2"></i>
                        Users
                    </a>
                </div>
                <div class="col-md-12 list">
                    <a href="">
                        <i class="fas fa-scroll px-2"></i>
                        Orders
                    </a>
                </div>
                <div class="col-md-12 list">
                    <a href="">
                        <i class="fas fa-cog px-2"></i>
                        Parametres
                    </a>
                </div>



            </div>

        </div>
        <div class="col-sm-9 col-lg-10 col-lg-offset-2 main">
            <div class="row">
                <div class="inline-block col-sm-12 breadcrumb">

                    <a href="">
                        <i class="fas fa-home px-2"></i>/
                    </a>

                    <a href="" class="px-2">
                        Dashboard
                    </a>


                </div>


                <div class="col-lg-12">
                    <h1 class="header">Dashboard</h1>
                </div>
            </div>
            <div class="container">
                <div class=" panel-container">
                    <div class="row">
                        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                            <div class="panel  panel-widget border-right">
                                <div class="row no-padding">
                                    <i class="fas fa-xl fa-shopping-cart color-blue col-md-12"></i>
                                    <div class="large col-md-12">120</div>
                                    <div class="text-muted col-md-12">Products</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                            <div class="panel  panel-widget border-right">
                                <div class="row no-padding">
                                    <i class="fas fa-xl fa-scroll color-orange col-md-12"></i>

                                    <div class="large col-md-12">52</div>
                                    <div class="text-muted col-md-12">Orders</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                            <div class="panel  panel-widget border-right">
                                <div class="row no-padding">
                                    <i class="fas fa-xl fa-users color-teal col-md-12"></i>
                                    <div class="large col-md-12">24</div>
                                    <div class="text-muted col-md-12">Users</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                            <div class="panel panel-widget ">
                                <div class="row no-padding">
                                    <i class="fas fa-xl fa-search color-red col-md-12"></i>
                                    <div class="large col-md-12">25.2k</div>
                                    <div class="text-muted col-md-12">Page Views</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.row-->
                </div>
            </div>
            <div class="col-lg-12">
                <h4 class="header p-4">Products</h4>
            </div>
            <div class="products container">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Vetements Hommes (45)
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <table class="table table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Marque</th>
                                        <th scope="col">Prix</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Pantalons</td>
                                        <td>Gucci</td>
                                        <td>500$</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Pulls, Gilets Et Sweats Homme</td>
                                        <td>Amiri</td>
                                        <td>650$</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>T-Shirts, Polos Et Chemises Homme </td>
                                        <td>GIVENCHY</td>
                                        <td>800$</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Vetements Femmes (150)
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <table class="table table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Vetements Enfants (145)
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <table class="table table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-12">
                <h4 class="header p-4">Orders</h4>
            </div>
            <div class="container">

                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Orders (50)
                                </button>
                            </h2>
                        </div>

                        <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <table class="table table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Custumor First Name</th>
                                        <th scope="col">Custumor Last Name</th>
                                        <th scope="col">Order Cost</th>
                                        <th scope="col">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>2000$</td>
                                        <td><a href="">Ouvrir</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>3500$</td>
                                        <td><a href="">Ouvrir</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>1000$</td>
                                        <td><a href="">Ouvrir</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-12">
                <h4 class="header p-4">Utilisateurs</h4>
            </div>
            <div class="container">

                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    Utilisateurs (50)
                                </button>
                            </h2>
                        </div>

                        <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <table class="table table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>





















    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>

</html>