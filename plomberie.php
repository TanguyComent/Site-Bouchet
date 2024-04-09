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

    <div class="wrapper">
        <div class="item" style="margin-bottom: 20px;">
            <div class="image">
                <img src="image/icons/fuite.png" alt="dessin d'un tuyau qui fuit">
            </div>
            <div class="txt">
                <h2>Recherche de fuite</h2>
                <div class="information" style="display: flex;">
                    <p>Vous avez besoin de plus d'informations ?</p>
                    <a href="contact.php"><button>
                        <h4>Contact</h4>
                        <div class="animation"></div>
                    </button></a>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="txt">
                <h2>Dégorgement et réfection des canalisations des eaux usées</h2>
                <div class="information" style="display: flex;">
                    <p>Vous avez besoin de plus d'informations ?</p>
                    <a href="contact.php"><button>
                        <h4>Contact</h4>
                        <div class="animation"></div>
                    </button></a>
                </div>
            </div>
            <div class="image">
                <img src="image/icons/dégorgement.png" alt="dessin d'une maison avec des tuyau vers les égouts">
            </div>
        </div>
    </div>


    <?php include("footer.php") ?>

	<script src="js/script.js" defer></script>
	<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
	<script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>    
</body>
</html>