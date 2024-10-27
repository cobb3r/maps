<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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

        <main class="row">
            <div id="loading">
                <img src="../Images/loading.gif" alt="">
            </div>
            <div id="about" class="row h-50 overflow-scroll">
                <div class="col-12 col-md-4 h-100 d-flex align-items-center justify-content-center">
                    <img id="aboutme" src="../Images/about.jpg" height="75%" width="70%">
                </div>
                <div id="abouttext" class="col-12 col-md-8 d-flex align-items-center">
                    <p>Ever since I picked up my first camera, Ive been captivated by the power of photography to freeze moments in time. What started as a hobby, taking snapshots of my family and friends, quickly turned into a passion. Over the years, Ive honed my skills, learning not just the technical aspects of photography but also how to tell stories through my images. Ive always been drawn to the beauty in everyday moments—the laughter, the quiet smiles, and the details that often go unnoticed. For me, photography is about connection. Its about capturing the essence of a person, a place, or a feeling, and giving people something they can hold onto forever. Whether its a wedding, a family portrait, or a candid shot of a special moment, Im committed to creating images that are authentic, personal, and timeless.</p>
                </div>
            </div>
            <div id="infobars" class="row h-50 overflow-scroll" style="scrollbar-width: none; font-size:0.9em">
                <div id="infob" class="col-4 text-center">
                    <p>Over 10 Years of Experience </br></br> With over a decade of professional photography experience, weve had the privilege of working on a diverse range of projects, from intimate weddings and family portraits to large-scale corporate events and commercial shoots. </br></br> This depth of experience allows us to adapt to any setting or occasion, ensuring that we capture your moments with creativity and precision. Our seasoned expertise means you can trust us to deliver stunning images, no matter the challenge or complexity of your vision.</p>
                </div>
                <div id="infob" class="col-4 text-center">
                    <p>100% Client Satisfaction Guarantee </br></br> We are deeply committed to exceeding our clients' expectations with every project. Thats why we offer a 100% satisfaction guarantee—if youre not fully happy with your final images, we will work with you through additional edits or retakes until weve captured exactly what you envisioned. </br></br> Your satisfaction is our top priority, and we won't rest until youre absolutely in love with the results. This personalized approach ensures that every client leaves with photos they truly cherish.</p>
                </div>
                <div id="infob" class="col-4 text-center">
                    <p>Fast Turnaround Time </br></br> We understand how important it is for our clients to receive their photos quickly, whether its a wedding album, corporate headshots, or product photos. Thats why we pride ourselves on delivering professionally edited images within just 7 days of the shoot.</br></br> Our streamlined editing process guarantees a fast turnaround without sacrificing attention to detail or quality, allowing you to enjoy and share your stunning images sooner while maintaining the highest standards of craftsmanship.</p>
                </div>
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
