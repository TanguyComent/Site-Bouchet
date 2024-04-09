<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="all-page.css">
    <link rel="stylesheet" type="text/css" href="css/localisation.css">
	<meta charset="utf-8">
	<title></title>
</head>
<body>

    <?php include("header.php") ?>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2226.8576027164163!2d2.7290895596296294!3d48.41440235433979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5f452dc6e0a4d%3A0x9ad1ba489c76949b!2s62%20Rue%20de%20la%20R%C3%A9publique%2C%2077210%20Avon!5e0!3m2!1sfr!2sfr!4v1668679131044!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="search">
        <h3>Entrez votre code postal pour savoir si nous prenons en charge votre ville</h3>
        <div class="search-bar">
            <input type="text" class="supported">
            <button class="submit-button"><span class="material-icons">search</span></button>
        </div>

        <div class="served if" style="display: none;">
            <h3 style="color: lightgreen;">Votre ville est desservie par nos services !</h3>
            <a href="contact.php"><button class="contact-btn">Contact</button></a>
        </div>

        <div class="not-served if" style="display: none;">
            <h3 style="color: red;">Votre ville n'est pas desservie par nos services !</h3>
        </div>
    </div>

    <?php include("footer.php") ?>

	<script src="js/script.js" defer></script>
	<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
	<script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>

    <script>
        $(".submit-button").on("click", () => {
            var content = $(".supported").val();
            var accepted = [
            "77760", "77630", "77210", "77167", "77630", "77590", "77780", "77310", "77480", "77940", "77130", "77930", "77430", "77760", "77590", "77820", "77190",
            "77520", "77130", "77250", "77920", "77880", "77850", "77690", "77130", "77760", "77350", "77710", "77133", "51300", "77000", "77550", "77130", "77520",
            "77690", "77316", "77370", "77140", "77160", "77310", "77760", "77670", "77460", "77176", "77810", "77760", "77870", "77000", "77250", "77670", "77940",
            "77300"
            ];

            if(accepted.includes(content)){
                $(".if").css("display", "none");
                $(".served").css("display", "inherit");
            }else{
                $(".if").css("display", "none");
                $(".not-served").css("display", "inherit");
            }
        });
    </script>

    <style>
        .served{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .contact-btn{
            background: #fff;
            border: solid black 2px;
            padding: 20px;
            border-radius: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            transition: .22s;
            width: 100px;
        }

        .contact-btn:hover{
            cursor: pointer;
            background: rgb(207, 190, 190);
        }
    </style>
</body>
</html>