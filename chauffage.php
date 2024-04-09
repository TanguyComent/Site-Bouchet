<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="all-page.css">
    <link rel="stylesheet" href="css/chaudiere.css">
</head>
<body style="padding-bottom: 50px;">

    <?php include("header.php") ?>
    <!-- desembouage chauffage / pose & remplacement de radiateur / pose et installation de thermostat d'ambiance -->


    <div class="wrapper">
        <div class="item" style="margin-bottom: 20px;">
            <div class="image">
                <img src="image/icons/désembouage chauffage.png" alt="dessin d'un radiateur en reparation">
            </div>
            <div class="txt">
                <h2>Désembouage de votre chauffage</h2>
                <div class="information" style="display: flex;">
                    <p>Vous avez besoin de plus d'informations ?</p>
                    <a href="contact.php"><button>
                        <h4>Contact</h4>
                        <div class="animation"></div>
                    </button></a>
                </div>
            </div>
        </div>

        <div class="item" style="margin-bottom: 20px;">
            <div class="txt">
                <h2>Pose ou remplacement d'un radiateur</h2>
                <div class="information" style="display: flex;">
                    <p>Vous avez besoin de plus d'informations ?</p>
                    <a href="contact.php"><button>
                        <h4>Contact</h4>
                        <div class="animation"></div>
                    </button></a>
                </div>
            </div>
            <div class="image">
                <img src="image/icons/pose radiateur.png" alt="dessin d'une pose de radiateur en quatres etapes">
            </div>
        </div>

        <div class="item">
            <div class="image">
                <img src="image/icons/thermostat d'ambiance.png" alt="dessin d'un tuyau qui fuit">
            </div>
            <div class="txt">
                <h2>pose et installation de thermostat d'ambiance</h2>
                <div class="information" style="display: flex;">
                    <p>Vous avez besoin de plus d'informations ?</p>
                    <a href="contact.php"><button>
                        <h4>Contact</h4>
                        <div class="animation"></div>
                    </button></a>
                </div>
            </div>
        </div>
    </div>


    <?php include("footer.php") ?>

	<script src="js/script.js" defer></script>
	<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
	<script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>    
</body>
</html>