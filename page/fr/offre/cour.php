<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../asset/image/background/black-flag.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../../../asset/css/cssOffre/cour.css">
    <link rel="stylesheet" href="../../../asset/css/fond.css">
    <title>Cour</title>
</head>
<body>
<main>
    <!--Debut intro de page-->
        <div id="intro" class=" container-fluid p-2 ">
            <?php include_once "navService.php" ?>
            <div class="fond"></div>
            <div class="intro-contenu text-center text-light fw-bold">
                <h1 class="p-2 rounded"><span class="text-dark">c</span>our d'<span class="text-danger">a</span>lleman<span class="text-warning">d</span></h1>
                <div class="text-intro pt-5">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia nam facere, 
                        velit ad soluta corporis ducimus id doloribus ab commodi cumque deserunt, 
                        quis minima laudantium, nulla beatae accusantium. Porro, suscipit.
                    </p>
                </div>
            </div>
        </div>

    <!--Fin intro de page-->

    <!-- Aprops des court debut-->
        <div id="about" class="container text-center rounded">
            <h2 class=" rounded p-2 about-title text-light">A propos des cours</h2>
            <section class=" row pt-5 align-items-center">
            <!--Debut de la partie cour et etape-->
                <div class="cour-description col-12 col-lg-8 pt-4">
                    <!--Debut du text introductif au cour-->
                    <div class="cour">
                        <h4 class=" border-bottom p-2">Les cours chez <span>Cour d'allemand</span></h4>
                        <p class="intro-cour p-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Labore veritatis nesciunt sint saepe vitae, reiciendis iure ea 
                            sequi ipsum nostrum ut rerum quidem culpa consequatur praesentium 
                            earum recusandae animi fuga.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Labore veritatis nesciunt sint saepe vitae, reiciendis iure ea 
                            sequi ipsum nostrum ut rerum quidem culpa consequatur praesentium 
                            earum recusandae animi fuga.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Labore veritatis nesciunt sint saepe vitae, reiciendis iure ea 
                            sequi ipsum nostrum ut rerum quidem culpa consequatur praesentium 
                            earum recusandae animi fuga.
                        </p>
                    </div>
                    <!--Fin du text introductif au cour-->

                    <!-- Liste des etapes-->
                    <div class="etape p-3">
                        <h4 class=" border-bottom p-2">Les etapes pour debuter les cour chez <span>Cour d'allemand</span></h4>
                        <div class="list-etape d-block d-lg-flex justify-content-center p-2  pt-lg-5">

                            <!--Debut etape 1-->
                            <div class="bulle-etape m-2 rounded">
                                <h6 class="p-2">Etape <i class="fi fi-rr-1"></i></h6>
                                <p class="titre-etape pt-2">
                                    Nous rencoter
                                </p>
                                <div class="separation w-100 d-flex">
                                    <span></span>
                                    <i class="fi fi-rr-circle-bolt"></i>
                                    <span></span>
                                </div>
                                <div class="description">
                                    <p class="description-text p-2">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, a.
                                    </p>
                                    <a href="../contact.php">
                                        <button class="btn text-light">
                                            Nous contacter
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <!--fin etape 1-->

                            <!--Debut etape 2-->
                            <div class="bulle-etape m-2 rounded">
                                <h6 class="p-2">Etape <i class="fi fi-rr-2"></i></h6>
                                <p class="titre-etape pt-2">
                                    S'inscrire
                                </p>
                                <div class="separation eparation w-100 d-flex">
                                    <span></span>
                                    <i class="fi fi-rr-circle-bolt"></i>
                                    <span></span>
                                </div>
                                <div class="description">
                                    <p class="description-text p-2">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, a.
                                    </p>
                                    <a href="../contact.php">
                                        <button class="btn text-light">
                                            Nous contacter
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <!--Fin etape 2-->
                            
                            <!--Debut etape 3-->
                            <div class="bulle-etape m-2 rounded">
                                <h6 class="p-2">Etape <i class="fi fi-rr-3"></i></h6>
                                <p class="titre-etape pt-2">
                                    Profiter
                                </p>
                                <div class="separation eparation w-100 d-flex">
                                    <span></span>
                                    <i class="fi fi-rr-circle-bolt"></i>
                                    <span></span>
                                </div>
                                <div class="description">
                                    <p class="description-text p-2">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, a.
                                    </p>
                                    <a href="../contact.php">
                                        <button class="btn text-light">
                                            Nous contacter
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <!--Fin etape 3-->
                        </div>
                    </div>
                </div>
            <!--Fin de la partie cour et etape-->



            <!--niveau de cour debut-->
                <article class="niveau col-12 col-lg-4  rounded">
                    <!--Debut du text introductif au niveau-->
                    <h5 class=" p-2 niveau-title rounded">Les niveaux chez Cour d'allemand</h5>
                    <p>
                        <span>Cour d'allemand</span> propose une formation interactive,
                        complete et adapter afin de vous permettre de terminer tout les niveau en quelque
                        mois.
                    </p>
                    <!--Fin du text introductif au niveau-->

                    <div class="list-niveau p-3">
                        <!--Debut niveau 1-->
                        <div class="debutant border card mb-2">
                            <a href="../checkout.php" class="text-decoration-none text-dark">
                                <div class="fw-bold p-2">
                                    <span>A1</span> -
                                    <span>A2</span>
                                </div>
                                <div class="niveau-note">  
                                    <p class="note1"><i class="fi  fi-rr-badge"></i> Debutant</p>
                                    <p class="note2"><i class="fi fi-rr-list-check"></i> Tester de niveau</p>
                                </div>
                            </a>
                        </div>
                        <!--Fin niveau 1-->

                        <i class="fi  fi-rr-arrow-from-top"></i>

                        <!--Debut niveau 2-->
                        <div class="intermediaire border card mb-2">
                            <a href="../checkout.php" class="text-decoration-none text-dark">
                                <div class="fw-bold p-2">
                                    <span>B1</span> -
                                    <span>B2</span>
                                </div>
                                <div class="niveau-note">  
                                    <p class="note1"><i class="fi  fi-rr-trophy"></i> Intermediaire</p>
                                    <p class="note2"><i class="fi fi-rr-list-check"></i> Tester de niveau</p>
                                </div>
                            </a>
                        </div>
                        <!--Fin niveau 2-->

                        <i class="fi  fi-rr-arrow-from-top"></i>

                        <!--Debut niveau 3-->
                        <div class="avance border card mb-2">
                            <a href="../checkout.php" class="text-decoration-none text-dark">
                                <div class="fw-bold p-2">
                                    <span>C1</span> -
                                    <span>C2</span>
                                </div>
                                <div class="niveau-note">  
                                    <p class="note1"><i class="fi  fi-rr-trophy-star"></i> Avancer</p>
                                    <p class="note2"><i class="fi fi-rr-list-check"></i> Tester de niveau</p>
                                </div>
                            </a>
                        </div>
                        <!--Fin niveau 3-->
                    </div>
                </article>
            <!--niveau de cour debut-->
            </section>
        </div>
    <!--Aprops des court fin-->
</main>


<footer>
    <?php include_once "../foot.php"; ?>
</footer>
</body>
</html>