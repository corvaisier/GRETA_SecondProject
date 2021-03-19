<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simply Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header id="top">
        <div id="top-media-home">
            <p class="top-margin">|</p>
            <i class="fab fa-facebook-f top-margin"></i>
            <i class="fab fa-twitter top-margin"></i>
            <i class="fab fa-linkedin-in top-margin"></i>
            <i class="fab fa-instagram top-margin"></i>
            <p class="top-margin">|</p>
            <i class="fas fa-phone-alt top-margin"></i>
            <p class="top-margin">0257875900</p>
            <p class="top-margin">|</p>
            <i class="fas fa-house-user top-margin"></i>
            <p class="top-margin">ouvrir mon projet</p>
            <p class="top-margin">|</p>
        </div>
        <figure>
            <img src="images\choisir-constructeur.jpg" alt="maison">
        </figure>
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="http://localhost/soutenance2/index.php">
                <img src="images\simply-home-logo.png" alt="simply home logo">
                <div class="left-nav-home">
                    <h1>Simply Home</h1>
                    <p>Constructeur de vie</p>
                </div>
            </a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse text-nav ml-5" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/soutenance2/index.php">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/soutenance2/Propos.php">A propos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/soutenance2/Maison.php">Nos maisons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/soutenance2/Contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="right-icon">
        <!-- Button trigger modal -->
        <i class="fas fa-phone-alt border" data-toggle="modal" data-target="#exampleModal"></i>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Téléphone</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <a href="tel:+496170961709">
                            <button class="bouton">02 57 87 71 85</button>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
        <br>

        <!-- Button trigger modal -->
        <i class="fas fa-envelope border" data-toggle="modal" data-target="#exampleModalLong"></i>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nom</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">adresse Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Entrez votre message </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>