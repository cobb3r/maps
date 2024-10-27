<!DOCTYPE html>
<html>
    <head>
        <title>Mark Annis Photography</title>
        <meta name="description" content=" ">
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
                <div class="col-sm-12 col-lg-8 d-flex justify-content-center align-items-center">
                    <p>At Mark Annis Photography, our passion for photography goes beyond just capturing moments—its about telling stories through every shot we take. We believe that every photograph is a piece of art that reflects emotions, connections, and the beauty of life's fleeting moments. With an eye for detail and a deep love for the craft, we strive to create images that resonate, bringing memories to life in a way that feels authentic and timeless. Whether it's the candid smile of a loved one, the awe-inspiring beauty of a landscape, or the unique energy of a special event, our commitment is to preserve these moments with creativity, heart, and soul. Photography is our way of seeing the world, and were honored to share that vision with you.</p>
                </div>
                <div class="vidcon col-sm-12 col-lg-4 d-flex align-items-center justify-content-center">
                    <video src="../Images/Site Ken Burns.mov" loop autoplay muted style="max-height: 85%;max-width:85%;"></video>
                </div>
            </div>
            <div class="row">
                <div class="vidcon order-2 order-lg-1 col-sm-12 col-lg-4 d-flex align-items-center justify-content-center">
                    <video src="../Images/Ken Burns 2.mov" loop autoplay muted style="max-height: 85%;max-width:85%;"></video>
                </div>
                <div class="order-1 order-lg-2 col-lg-8 d-flex justify-content-center align-items-center">
                    <p>We are dedicated to capturing the moments that matter most to our clients. Whether its a wedding, family portrait, corporate event, or product shoot, we work closely with our clients to understand their vision and bring it to life through stunning imagery. From the initial consultation to the final delivery of edited photos, we handle every detail with utmost care and professionalism. Our goal is not just to take pictures but to create lasting memories that our clients will cherish for years to come. Each project is unique, and we approach it with creativity, passion, and a commitment to excellence.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-8 d-flex justify-content-center align-items-center">
                    <p>We dont just take photos, we create personalized experiences that capture the essence of who you are. What sets us apart is our attention to detail and the way we truly listen to your vision, ensuring every shot reflects your personality and style. We bring not only technical skill and creativity but also a genuine passion for storytelling through images. With us, its not just about delivering high-quality photos; its about building lasting relationships and making sure you walk away with something youll treasure for a lifetime. Our dedication to client satisfaction, coupled with our unique approach, means youll get more than just a photo session—youll get a tailored, memorable experience from start to finish.</p>
                </div>
                <div class="vidcon col-sm-12 col-lg-4 d-flex align-items-center justify-content-center">
                    <video src="../Images/Site Ken Burns.mov" loop autoplay muted style="max-height: 85%;max-width:85%;"></video>
                </div>
            </div>
        </main>
        <footer class="row d-flex justify-content-center align-items-center">
            <div class="col-7 col-md-3" style="overflow: hidden;">
                <img class="ms-2" src="../Images/logo.png" alt="" style="width: 100%; height:40vh; border-radius:1em">
            </div>
            <div class="col-12 col-sm-6 col-md-5 text-center">
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
            <div class="col-12 col-sm-6 col-md-4 text-center">
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
