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
                <img src="image/icons/entretien.png" alt="image chaudiere sur fond bleu">
            </div>
            <div class="txt">
                <h2>Entretien / Pause de chaudière gaz ou fioul</h2>
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
                <h2>Nettoyage / Ramonage des conduits de fumées chaudière gaz ou fioul</h2>
                <div class="information" style="display: flex;">
                    <p>Vous avez besoin de plus d'informations ?</p>
                    <a href="contact.php"><button>
                        <h4>Contact</h4>
                        <div class="animation"></div>
                    </button></a>
                </div>
            </div>
            <div class="image">
                <img src="image/icons/ramonage.png" alt="image chaudiere sur fond bleu">
            </div>
        </div>

        <div class="item">
            <div class="image">
                <img src="image/icons/installation-chaudiere.png" alt="image chaudiere sur fond bleu">
            </div>
            <div class="txt">
                <h2>Installation et intervension sur toutes chaudières basse température et condensation</h2>
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