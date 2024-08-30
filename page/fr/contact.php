<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous contacter</title>
    <?php include_once "nav-contact.php"; ?>
    <link rel="stylesheet" href="../../asset/css/contact.css">
    <link rel="stylesheet" href="../../asset/css/fond.css">
</head>
<body>
    <main class="d-block">
        <div class="fond"></div>
        <div class="contact row row-cols-lg-2 p-5 w-100">
    <!--debut partie formulaire de contact et reseau-->
            <div class="mail-reseau col">
                <div class="reseau text-center">
                    <h3 class="">Nous contacter via ...</h3>
                    <div class="d-flex w-100 pt-3">
                        <figure class="ms-2 me-2 ms-lg-5 me-lg-5 rounded">
                            <a href="checkout.php">
                                <img src="../../asset/image/contact/logo/logo_15713434.png" alt="" class="img-fluid">
                                <figcaption>WhatsApp</figcaption>
                            </a>
                        </figure>

                        <figure class="ms-2 me-2 ms-lg-5 me-lg-5 rounded">
                            <a href="checkout.php">
                                <img src="../../asset/image/contact/logo/communication_15047435.png" alt="" class="img-fluid">
                                <figcaption>Facebook</figcaption>
                            </a>
                        </figure>

                        <figure class="ms-2 me-2 ms-lg-5 me-lg-5 rounded">
                            <a href="tel:+237658713232">
                                <img src="../../asset/image/contact/logo/viber_254407.png" alt="" class="img-fluid">
                                <figcaption>Telephone</figcaption>
                            </a>
                        </figure>
                    </div>
                </div>

                <div class="mail mt-5 fw-bolder">
                    <h3 class="text-center">Nous ecrire...</h3>
                    <form action="checkout.php" class=" p-2 p-lg-4">
                        <div class="d-flex">
                            <div class="mb-3 me-2 w-100">
                                <label for="exampleFormControlInput1" class="form-label ps-3">Nom</label>
                                <input type="text" name="nom" class="form-control" id="exampleFormControlInput1" placeholder="Mon nom..." required>
                            </div>
                            <div class="mb-3 w-100">
                                <label for="exampleFormControlInput1" class="form-label ps-3">Prenom</label>
                                <input type="text" name="prenom" class="form-control" id="exampleFormControlInput1" placeholder="Mon prenom..." required>
                            </div>
                        </div>
                        <div class="">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label ps-3">Email address</label>
                                <input type="email" name="mail" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label ps-3">Votre message</label>
                                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary align-items-center">Envoyer <i class="fi fi-rr-paper-plane-top"></i></button>
                    </form>
                </div>
            </div>
    <!--fin partie formulaire de contact et reseau-->
    <!--debut partie localisation-->
                <div class="localisation col fw-bolder">
                    <h3 class="text-center">localisation...</h3>
                    <div class="pt-4">
                        <div>
                            <p>Nous sommes situe a:</p>
                            <ul>
                                <li class="pb-2"> <i class="fi  fi-rr-marker"></i> Point de localisation 1 <i class="fi  fi-rr-arrow-small-right"></i></li>
                                <li class="pb-2"> <i class="fi  fi-rr-marker"></i> Point de localisation 2 <i class="fi  fi-rr-arrow-small-right"></i></li>
                                <li class="pb-2"> <i class="fi  fi-rr-marker"></i> Point de localisation 3 <i class="fi  fi-rr-arrow-small-right"></i></li>
                            </ul>
                        </div>
                        <div class="map bg-dark rounded">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.8636659791764!2d9.699003220119481!3d4.048223687989484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1061128b0a565983%3A0x5c3817e7dad6dac2!2sH%C3%B4pital%20Laquintinie%2C%20Douala!5e0!3m2!1sfr!2scm!4v1722381793813!5m2!1sfr!2scm" class="w-100 rounded" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
    <!--fin partie localisation-->
    
        </div>
    </main>
    <?php include_once "foot.php"; ?>
</body>
</html>