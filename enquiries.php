<!DOCTYPE html>
<html>
    <head>
        <title>Enquiries</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/b15a8855ee.js" crossorigin="anonymous"></script>
        <script src="../photography/photography.js"></script>
        <link rel="stylesheet" href="../photography/photography.css?php echo time(); ?>">
    </head>
    <body class="container-fluid p-0 m-0">
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
         
        <main id="enqma" class="row justify-content-center">
            <div id="loading">
                <img src="../Images/loading.gif" alt="">
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center">
                <form id="form1" method="post" action="external.php">
                    <label for="nameof">Name</label><br>
                    <input type="text" id="nameof" name="name"><br>
                    <label for="email">Email</label><br>
                    <input type="text" id="email" name="email"><br>
                    <label for="subj">Subject</label><br>
                    <input type="text" id="subj" name="subj"><br>
                    <label for="mess">Message</label><br>
                    <textarea id="mess" name="message"></textarea><br>
                    <button type="submit" name="submit" id="submit">Send</button>
                </form>
            </div>
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
