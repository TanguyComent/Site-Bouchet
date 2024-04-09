<?php
date_default_timezone_set('Europe/Paris');
$heure = date('H');
$min = date('i');
$day = date('w');

if(($heure >= 8 && $heure < 12) || ($heure >= 13 && $heure < 17)){
    $open = "🟢 Nous sommes ouverts !";
    if(($heure == 8 && $min <= 30) || ($heure == 13 && $min <= 30)){
        $open = "🔴 Nous sommes fermés !";
    }
}elseif($day == 6 || $day == 7){
    $open = "🔴 Nous sommes fermés !";
}else{
    $open = "🔴 Nous sommes fermés !";
}

//recuperation du formulaire :
$name = null;
$firstName = null;
$wanted = null;
$phone = null;
$message = null;
$sended = false;
$emailFormat = true;
$telFormat = true;
$mailRegExp = "/^[\w.-]{2,}@[\w.-]{2,}\.[-a-z.]+$/";
$telRegExp = "/^[\d]{10}$/";

if(isset($_POST['valider'])){
    $name = $_POST['name'];
    $firstName = $_POST['firstName'];
    $wanted = $_POST['wanted'];
    $phone = $_POST['phone'];
    $message = $_POST['optionMessage'];
    $email = $_POST['email'];
    $emailFormat = (preg_match($mailRegExp, $email)) ? true : false;
    $telFormat = (preg_match($telRegExp, $phone)) ? true : false;
    
    if($emailFormat && $telFormat){
        $title = 'Problème de ' . $wanted . ' ' . $name . ' ' . $firstName;
        $mailContent='Nom : ' . $name . '<br />' . 'Prénom : ' . $firstName . '<br />' . 'E-mail : ' . $email . '<br />' . 'Type de problème : ' . $wanted . '<br />' . 'Numero de téléphone : ' . $phone;
        if($message != null){
            $mailContent .= '<br />' . 'Message complémentaire : ' . $message;
        }

        if(mail("tanguycoment@gmail.com", $title, $mailContent, "Content-type: text/html")){
            $sended = true;
        }else{
            $sended = false;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="all-page.css">
	<meta charset="utf-8">
	<title></title>
</head>
<body>

    <?php if($emailFormat == false): ?>
    <style>
        [email="true"]{
            border: solid red 2px !important;
        }
    </style>
    <?php endif; ?>

    <?php if($telFormat == false): ?>
    <style>
        [phone="true"]{
            border: solid red 2px !important;
        }
    </style>
    <?php endif; ?>

    <?php include("header.php") ?>

    <?php if(isset($_POST['valider']) && !isset($_POST['cancel']) && $sended && $emailFormat && $telFormat): ?>
    <div class="contact-message">
        <div class="message">
            <h2>Nous avons bien reçu votre message !</h2>
            <div class="resume">
                <h2>Debrief de votre demande :</h2>
                <p style="margin-top: 20px;">Nom : <?php echo($name) ?> </p>
                <p style="margin-top: 20px;">Prenom : <?php echo($firstName) ?> </p>
                <p style="margin-top: 20px;">E-mail : <?php echo($email) ?> </p>
                <p style="margin-top: 20px;">Numero de téléphone : <?php echo($phone) ?> </p>
                <p style="margin-top: 20px;">Type d'intervention : <?php echo($wanted) ?> </p>
                <?php if($message != null): ?>
                <p style="margin-top: 20px;">Votre message : <?php echo($message) ?> </p>
                <?php endif; ?>
            </div>
            <form action="contact.php" method="post">
                <button name="cancel">ok</button>
            </form>
        </div>
    </div>
    <?php endif; ?>

    <?php if(isset($_POST['valider']) && !isset($_POST['cancel']) && $sended == false && $emailFormat && $telFormat): ?>
    <div class="contact-message">
        <div class="message" style="display: flex; align-items: center; flex-direction: column; justify-content: center;">
            <h2 style="color: red;">Une erreur est survenue !</h2>
            <div class="resume" style="width: fit-content; text-align: left;">
                <h2 style="margin-bottom: 20px;">Veuillez réessayer ultérieurement</h2>
                <h3 style="margin-bottom: 10px;">Autres moyens de contact :</h3>
                <p>Adresse e-mail : <a href="mailto:eric_bouchet@hotmail.fr">eric_bouchet@hotmail.fr</a></p>
                <p>Numero de téléphone : <a href="tel:+33160725163">01 60 72 51 63</a></p>
            </div>
            <form action="contact.php" method="post">
                <button name="cancel">ok</button>
            </form>
        </div>
    </div>
    <?php endif; ?>

    <div class="wrapper">
        <div class="middle info">
            <div class="mail-box">
                <div class="dispo">
                    <h3><?php print($open) ?></h3>
                </div>
                <div class="e-mail">
                    <span class="material-icons" mail>alternate_email</span>
                    <h3>eric-bouchet@hotmail.fr</h3>
					<span class="material-icons" onclick="mailCopy(this);" copy>content_copy</span>
                </div>
                <div class="tel">
                    <span class="material-icons" call>call</span>
                    <h3>01 60 72 51 63</h3>
					<span class="material-icons" onclick="telCopy(this);" copy>content_copy</span>
                </div>
            </div>
        </div>
        <div class="middle contact">
            <form method="post" action="">
                <input type="text" placeholder="nom" required name="name">
                <input type="text" placeholder="prenom" required name="firstName">
                <input type="text" placeholder="e-mail" required name="email" email="true">
                <input type="text" placeholder="tel" required name="phone" phone="true">
                <select required name="wanted">
                    <option value="">-- Type D'intervention --</option>
                    <option value="Chauffage">Chauffage</option>
                    <option value="Plomberie">Plomberie</option>
                    <option value="Pompe à chaleur">Pompe à chaleur</option>
                </select>
                <textarea name="optionMessage" cols="30" rows="10" placeholder="Votre message (option)"></textarea>
                <input type="submit" name="valider" value="Envoyer">
            </form>
        </div>
    </div>

    <?php include("footer.php") ?>

	<script src="js/script.js" defer></script>
	<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
	<script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
    
    <style>
        .contact-message{
            position: absolute;
            top: 0;
            left: 0;
            z-index: 100;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .8);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .message{
            position: relative;
            width: 40%;
            min-height: 40%;
            background: #fff;
            border-radius: 20px;
            padding: 20px;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .message button{
            position: absolute;
            bottom: 0;
            right: 0;
            border-radius: 20px;
            z-index: 101;
            border: none;
            background: rgb(23, 201, 23);
            height: 40px;
            width: 100px;
            color: #fff;
            transition: .22s;
        }

        .message button:hover{
            cursor: pointer;
            background: green;
        }

        .resume{
            width: 100%;
            margin-top: 20px;
        }
    </style>

	<script>
		function telCopy(active){
			navigator.clipboard.writeText("0160725163");
			$(active).attr("copy", "true");
			setTimeout(() => $(active).attr("copy", "false"), 1000);
		}
		function mailCopy(active){
			navigator.clipboard.writeText("eric-bouchet@hotmail.fr");
			$(active).attr("copy", "true");
			setTimeout(() => $(active).attr("copy", "false"), 1000);
		}
	</script>
</body>
</html>