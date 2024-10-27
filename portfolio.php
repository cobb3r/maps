<!DOCTYPE html>
<html>
    <head>
        <title>Photography Portfolio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/b15a8855ee.js" crossorigin="anonymous"></script>
        <script src="../photography/photography.js"></script>
        <link rel="stylesheet" href="../photography/photography.css?php echo time(); ?>">
    </head>
    <body class="container-fluid p-0">
    <header class="row display-flex align-items-center">
            <div class="col-1 d-sm-flex justify-content-center align-items-center" style="height: 10vh; width: 10vw; display: none;">
                <img src="../Images/logo.png" height="200%" width="200%">
            </div>
            <h1 class="col-10 text-center">Mark Annis Photography</h1>
            <div class="position-absolute end-0 d-flex align-items-center justify-content-center" style="height: 10vh; width: 10vw";>
                <i onclick="shoppingCart.hideOrShow()" id="basket" class="fa-solid fa-basket-shopping fa-2xl"></i>
                <div id="counter">0</div>
                <div id="viewBasket" class="text-center">
                    <p>Your Basket is Currently Empty</p>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #2E3944;">
                <a class="navbar-brand ms-2" href="../photography/photography.php">Mark Annis Photography</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../photography/photography.php">Home</a>
                        </li>
                        <li class="nav-item">   
                            <a class="nav-link" href="../photography/about.php">About</a>
                        </li>
                        <li class="nav-item">   
                            <a class="nav-link" href="../photography/portfolio.php">Portfolio</a>
                        </li>
                        <li class="nav-item">   
                            <a class="nav-link" href="../photography/enquiries.php">Enquiries</a>
                        </li>
                    </ul>
                    <form class="form-inline ms-auto my-lg-0">
                        <div class="input-group">
                            <input class="form-control me-sm-2" type="search" placeholder="Search" >
                            <button id="searchBut" class="btn btn-outline-success me-2 my-sm-0" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </nav>
        <main class="row justify-content-center overflow-scroll">
            <div id="loading">
                <img src="../Images/loading.gif" alt="">
            </div>
            <div class="row">
                <div id="portcon" class="col-sm-12 col-lg-3 text-center d-flex align-items-center position-relative">
                    <img id="laxey" src="../Images/laxey.jpg" height="90%" width="100%" onclick="carousel('laxcol')">
                    <button class="position-absolute start-50 bottom-0"  onclick="shoppingCart.addToCart('laxey')" style="z-index: 999;transform: translate(-50%, -85%);";>Add To Cart</button>
                </div>
                <div id="portcon" class="col-sm-12 col-lg-6 text-center d-flex align-items-center position-relative">
                    <img id="ref" src="../Images/lake.jpg" height="90%" width="100%" onclick="carousel('refcol')">
                    <button class="position-absolute start-50 bottom-0" onclick="shoppingCart.addToCart('lake')" style="z-index: 999;transform: translate(-50%, -85%);";>Add To Cart</button>
                </div>
                <div id="portcon" class="col-sm-12 col-lg-3 text-center d-flex align-items-center position-relative">
                    <img id="forest" src="../Images/forest.jpg" height="90%" width="100%" onclick="carousel('forcol')">
                    <button class="position-absolute start-50 bottom-0" onclick="shoppingCart.addToCart('forest')" style="z-index: 999;transform: translate(-50%, -85%);";>Add To Cart</button>
                </div>
            </div>

            <div class="row">
                <div id="portcon" class="col-sm-12 col-lg-8 text-center d-flex align-items-center position-relative">
                    <img id="castle" src="../Images/castle.jpg" height="90%" width="100%" onclick="carousel('cascol')">
                    <button class="position-absolute start-50 bottom-0" onclick="shoppingCart.addToCart('castle')" style="z-index: 999;transform: translate(-50%, -115%);";>Add To Cart</button>
                </div>
                <div id="portcon" class="col-sm-12 col-lg-4 text-center d-flex align-items-center position-relative">
                    <img id="rocks2" src="../Images/rocks2.jpg" height="90%" width="100%" onclick="carousel('roccol2')">
                    <button class="position-absolute start-50 bottom-0" onclick="shoppingCart.addToCart('rocks')" style="z-index: 999;transform: translate(-50%, -115%);";>Add To Cart</button>
                </div>
            </div>

            <div class="row">
                <div id="portcon" class="col-sm-12 col-lg-3 text-center d-flex align-items-center position-relative">
                    <img id="path" src="../Images/path.jpg" height="90%" width="100%" onclick="carousel('patcol')">
                    <button class="position-absolute start-50 bottom-0" onclick="shoppingCart.addToCart('path')" style="z-index: 999;transform: translate(-50%, -85%);";>Add To Cart</button>
                </div>
                <div id="portcon" class="col-sm-12 col-lg-6 text-center d-flex align-items-center position-relative">
                    <img id="tower" src="../Images/tower.jpg" height="90%" width="100%" onclick="carousel('towcol')">
                    <button class="position-absolute start-50 bottom-0" onclick="shoppingCart.addToCart('tower')"  style="z-index: 999;transform: translate(-50%, -85%);";>Add To Cart</button>
                </div>
                <div id="portcon" class="col-sm-12 col-lg-3 text-center d-flex align-items-center position-relative">
                    <img id="leaf" src="../Images/leaf.jpg" height="90%" width="100%" onclick="carousel('leacol')">
                    <button class="position-absolute start-50 bottom-0" onclick="shoppingCart.addToCart('leaf')" style="z-index: 999;transform: translate(-50%, -85%);";>Add To Cart</button>
                </div>
            </div>

            <div class="row">
                <div id="portcon" class="col-sm-12 col-lg-4 text-center d-flex align-items-center position-relative">
                    <img id="rocks" src="../Images/rocks.jpg" height="90%" width="100%" onclick="carousel('roccol')">
                    <button class="position-absolute start-50 bottom-0" onclick="shoppingCart.addToCart('rocks')" style="z-index: 999;transform: translate(-50%, -115%);";>Add To Cart</button>
                </div>
                <div id="portcon" class="col-sm-12 col-lg-8 text-center d-flex align-items-center position-relative">
                    <img id="res" src="../Images/sea.jpg" height="90%" width="100%" onclick="carousel('rescol')">
                    <button class="position-absolute start-50 bottom-0" onclick="shoppingCart.addToCart('sea')"  style="z-index: 999;transform: translate(-50%, -115%);";>Add To Cart</button>
                </div>
            </div>

            <div class="row">
                <div id="portcon" class="col-sm-12 col-lg-3 text-center d-flex align-items-center position-relative">
                    <img id="snow" src="../Images/snow.jpg" height="90%" width="100%" onclick="carousel('snocol')">
                    <button class="position-absolute start-50 bottom-0" onclick="shoppingCart.addToCart('snow')"  style="z-index: 999;transform: translate(-50%, -85%);";>Add To Cart</button>
                </div>
                <div id="portcon"  class="col-sm-12 col-lg-6 text-center d-flex align-items-center position-relative">
                    <img id="qua" src="../Images/quay.jpg" height="90%" width="100%" onclick="carousel('quacol')">
                    <button class="position-absolute start-50 bottom-0" onclick="shoppingCart.addToCart('quay')"  style="z-index: 999;transform: translate(-50%, -85%);";>Add To Cart</button>
                </div>
                <div id="portcon" class="col-sm-12 col-lg-3 text-center d-flex align-items-center position-relative">
                    <img id="waterfall" src="../Images/waterfall.jpg" height="90%" width="100%" onclick="carousel('watcol')">
                    <button class="position-absolute start-50 bottom-0" onclick="shoppingCart.addToCart('waterfall')" style="z-index: 999;transform: translate(-50%, -85%);";>Add To Cart</button>
                </div>
            </div>

            <div id="carouselExampleIndicators" class="col-10 carousel slide position-absolute" data-ride="carousel" style="display: none; height: 85vh; width:max-content; top: 50%;">
                <div class="carousel-inner" style="height: 100%; width: 100%;">
                    <div id="laxcol" class="carousel-item" style="height: 100%; width: 100%;">
                        <img class="d-block w-100" src="../Images/laxey.jpg" alt="First slide" width="100%" height="100%" onclick="carousel('laxcol')">
                    </div>
                    <div id="refcol" class="carousel-item" style="height: 100%; width: 100%;">
                        <img  class="d-block w-100" src="../Images/lake.jpg" alt="Second slide" width="100%" height="100%" onclick="carousel('refcol')">
                    </div>
                    <div id="forcol" class="carousel-item" style="height: 100%; width: 100%;">
                        <img class="d-block w-100" src="../Images/forest.jpg" alt="Third slide" width="100%" height="100%" onclick="carousel('forcol')">
                    </div>

                    <div id="cascol" class="carousel-item" style="height: 100%; width: 100%;">
                        <img class="d-block w-100" src="../Images/castle.jpg" alt="Fourth slide" width="100%" height="100%" onclick="carousel('cascol')">
                    </div>
                    <div id="roccol2" class="carousel-item" style="height: 100%; width: 100%;">
                        <img class="d-block w-100" src="../Images/rocks2.jpg" alt="Fifth slide" width="100%" height="100%" onclick="carousel('roccol2')">
                    </div>

                    <div id="patcol" class="carousel-item" style="height: 100%; width: 100%;">
                        <img class="d-block w-100" src="../Images/path.jpg" alt="Sixth slide" width="100%" height="100%" onclick="carousel('patcol')"> 
                    </div>
                    <div id="towcol" class="carousel-item" style="height: 100%; width: 100%;">
                        <img class="d-block w-100" src="../Images/tower.jpg" alt="Seventh slide" width="100%" height="100%" onclick="carousel('towcol')">
                    </div>
                    <div id="leacol" class="carousel-item" style="height: 100%; width: 100%;">
                        <img class="d-block w-100" src="../Images/leaf.jpg" alt="Eigth slide" width="100%" height="100%" onclick="carousel('leacol')">
                    </div>

                    <div id="roccol" class="carousel-item" style="height: 100%; width: 100%;">
                        <img class="d-block w-100" src="../Images/rocks.jpg" alt="Ninth slide" width="100%" height="100%" onclick="carousel('roccol')">
                    </div>
                    <div id="rescol" class="carousel-item" style="height: 100%; width: 100%;">
                        <img class="d-block w-100" src="../Images/sea.jpg" alt="Tenth slide" width="100%" height="100%" onclick="carousel('rescol')">
                    </div>

                    <div id="snocol" class="carousel-item" style="height: 100%; width: 100%;">
                        <img class="d-block w-100" src="../Images/snow.jpg" alt="Eleventh slide" width="100%" height="100%" onclick="carousel('snocol')">
                    </div>
                    <div id="quacol" class="carousel-item" style="height: 100%; width: 100%;">
                        <img class="d-block w-100" src="../Images/quay.jpg" alt="Twelfth slide" width="100%" height="100%" onclick="carousel('quacol')">
                    </div>
                    <div id="watcol" class="carousel-item" style="height: 100%; width: 100%;">
                        <img class="d-block w-100" src="../Images/waterfall.jpg" alt="Thirteenth slide" width="100%" height="100%" onclick="carousel('watcol')">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>`
        </main>
        <footer class="row d-flex justify-content-center align-items-center">
            <div class="col-7 col-md-3" style="overflow: hidden;">
                <img class="ms-2" src="../Images/logo.png" alt="" style="width: 100%; height:40vh; border-radius:1em">
            </div>
            <div class="col-12 col-sm-6 col-md-5 text-center order-2 order-md-1">
                <ul class="p-0">
                    <li>
                        <a href="../photography/photography.php">Home</a>
                    </li>
                    </br>
                    <li>
                        <a href="../photography/about.php">About</a>
                    </li>
                    </br>
                    <li>
                        <a href="../photography/portfolio.php">Portfolio</a>
                    </li>
                    </br>
                    <li>
                        <a href="../photography/enquiries.php">Enquiries</a>
                    </li>
                    <hr>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-4 text-center order-1 order-md-2">
                <h3>Mark Annis Photography</h2>
                </br>
                <p>64 Farmhill Meadows</p>
                <p>Douglas</p>
                <p>Isle of Man</p>
                <p>IM2 2LW</p>
                </br>
                <p><a href="tel:+447624315231">Phone</a></p>
                <p><a href="mailto:tylerannis55@gmail.com">Email</a></p>
                <hr>
            </div>
        </footer>
    </body>
</html>
