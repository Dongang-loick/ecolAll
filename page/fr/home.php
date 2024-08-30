<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include_once "nav.php"; ?>
    <link rel="stylesheet" href="../../asset/css/home.css">
    <link rel="stylesheet" href="../../asset/css/fond.css">
</head>
<body class="">
    <main>
     <!-- Debut du slide -->
        <div id="slide-block" class=" p-2 p-md-3 p-lg-5 w-100">
            <div id="carouselAuto" class="carousel slide container rounded" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active indic1" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="indic2" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="indic3" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../../asset/image/background/black-flag.jpg" class="d-block img-fluid w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../asset/image/background/white-flag.jpg" class="d-block img-fluid w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../asset/image/slide/card3.jpg" class="d-block img-fluid w-100 rounded" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselAuto" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselAuto" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <i id="ancre-Service"></i>
        </div>
     <!-- Fin du slide -->



     <!-- debut service -->
        <div id="nosSevice" class="container-fluid p-5">
            <div class="fond"></div>
            <h3 class="text-light nosSevice-title p-md-2 p-lg-3">Nos Service</h3>

            <div class="list-service p-3 d-block d-md-flex p-lg-2 text-center">
                <div class="card m-2 m-md-3 p-2">
                    <img src="../../asset/image/service/card/card1.jpg" class="card-img-top rounded img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title w-100 d-flex">
                            <span class="rounded service-1 bg-dark"></span> Cour d'allemand <span class="rounded service-1 bg-dark"></span>
                        </h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="http://localhost/projets/ecoleAll/page/fr/offre/cour.php" class="btn btn-primary">lire plus ...</a>
                    </div>
                </div>

                <div class="card m-2 m-md-3 p-2">
                    <img src="../../asset/image/service/card/card2.jpg" class="card-img-top rounded img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title w-100 d-flex">
                            <span class="rounded service-2 bg-danger"></span> Cour d'allemand <span class="rounded service-2 bg-danger"></span>
                        </h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="checkout.php" class="btn btn-primary">lire plus ...</a>
                    </div>
                </div>

                <div class="card m-2 m-md-3 p-2">
                    <img src="../../asset/image/service/card/card3.jpg" class="card-img-top rounded img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title w-100 d-flex">
                            <span class="rounded service-3 bg-warning"></span> Cour d'allemand <span class="rounded service-3 bg-warning"></span>
                        </h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <a href="checkout.php" class="btn btn-primary">lire plus ...</a>
                    </div>
                </div>

            </div>
            <i id="ancre-About"></i>
        </div>
     <!-- fin service -->


    <!-- about us start-->
    <div id="aboutUs" class=" p-md-5 text-center">
        <h3 class="aboutUs-title p-md-2 p-lg-3 rounded text-light"><i class="w-100">A</i>propos de <span class="w-100">nous</span></h3>

        <div class="list-aboutUs p-3 pt-md-3 pt-lg-5">

            <div class="description d-lg-flex align-items-center pb-5">
                <div class="description-text  p-md-3 p-lg-5">
                    <h4 class="p-2">Qui sommes-nous ?</h4>
                    <p class="pt-md-2 p-lg-2">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                </div>
                <div class="description-video align-items-center">
                    <video controls controlslist="nodownload" src="../../asset/image/video/Ninho_-_No_love_feat._Ayra_Starr__Clip_officiel_(1080p).mp4" class="w-100 rounded ">Nous connaitre</video>
                </div>
            </div>

            <div class="date-renter p-md-3 p-lg-5">
                <h4 class="date-titre p-2">Nos differentre rentrer</h4>
                <div class="date-list text-center p-3">
                    <a class="btn btn-warning fw-bold p-2 m-3" href="checkout.php"> 02 Septembre</a>
                    <a class="btn btn-warning fw-bold p-2 m-3" href="checkout.php"> 02 Septembre</a>
                    <a class="btn btn-warning fw-bold p-2 m-3" href="checkout.php"> 02 Septembre</a>
                    <a class="btn btn-warning fw-bold p-2 m-3" href="checkout.php"> 02 Septembre</a>
                    <a class="btn btn-warning fw-bold p-2 m-3" href="checkout.php"> 02 Septembre</a>
                    <a class="btn btn-warning fw-bold p-2 m-3" href="checkout.php"> 02 Septembre</a>
                    <a class="btn btn-warning fw-bold p-2 m-3" href="checkout.php"> 02 Septembre</a>
                    <a class="btn btn-warning fw-bold p-2 m-3" href="checkout.php"> 02 Septembre</a>
                    <a class="btn btn-warning fw-bold p-2 m-3" href="checkout.php"> 02 Septembre</a>
                    <a class="btn btn-warning fw-bold p-2 m-3" href="checkout.php"> 02 Septembre</a>
                    <a class="btn btn-warning fw-bold p-2 m-3" href="checkout.php"> 02 Septembre</a>
                </div>
            </div>
        </div>
    </div>
    <!-- about us end-->

    <!--Temoignage start-->
        <div id="temoignage" class="text-center pt-5 p-0 p-lg-5 ">
            <h3 class="temoignage-title">Il nous on fait confiance</h3>
            <div class="list-temoignage d-flex justify-content-center pt-3">
                <div class="card p-2 m-2">
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Perferendis odio officia ullam asperiores consequuntur dolores 
                            sapiente labore sunt, repellendus nostrum eveniet, doloremque 
                            cupiditate magni qui obcaecati nam delectus doloribus reiciendis?
                        </p>
                    </div>
                    <div class="nom-temoin d-flex justify-content-center">
                        <img src="../../asset/image/temoin/10.jpg" alt="" class="img-fluid">
                        <p class="p-2">Julien Laverne</p>
                    </div>
                </div>

                <div class="card p-2 m-2">
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Perferendis odio officia ullam asperiores consequuntur dolores 
                            sapiente labore sunt, repellendus nostrum eveniet, doloremque 
                            cupiditate magni qui obcaecati nam delectus doloribus reiciendis?
                        </p>
                    </div>
                    <div class="nom-temoin d-flex justify-content-center">
                        <img src="../../asset/image/temoin/11.jpg" alt="" class="img-fluid">
                        <p class="p-2">Julien Laverne</p>
                    </div>
                </div>

                <div class="card p-2 m-2">
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Perferendis odio officia ullam asperiores consequuntur dolores 
                            sapiente labore sunt, repellendus nostrum eveniet, doloremque 
                            cupiditate magni qui obcaecati nam delectus doloribus reiciendis?
                        </p>
                    </div>
                    <div class="nom-temoin d-flex justify-content-center">
                        <img src="../../asset/image/temoin/7.jpg" alt="" class="img-fluid">
                        <p class="p-2">Julien Laverne</p>
                    </div>
                </div>

                <div class="card p-2 m-2">
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Perferendis odio officia ullam asperiores consequuntur dolores 
                            sapiente labore sunt, repellendus nostrum eveniet, doloremque 
                            cupiditate magni qui obcaecati nam delectus doloribus reiciendis?
                        </p>
                    </div>
                    <div class="nom-temoin d-flex justify-content-center">
                        <img src="../../asset/image/temoin/8.jpg" alt="" class="img-fluid">
                        <p class="p-2">Julien Laverne</p>
                    </div>
                </div>
            </div>
        </div>
    <!--Temoignage end-->
    </main>

    <footer>
        <?php include_once "foot.php" ?>
    </footer>


    
</body>
</html>