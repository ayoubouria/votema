<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote</title>
    <!-- CSS Styles -->
    <link rel="stylesheet" href="styles/style.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- material-icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- favicon -->
    <link rel="icon" href="images/favicon.ico">
    <!-- *********************************loading fonts********************************* -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Nunito&display=swap" rel="stylesheet">
    <script src="script.js" defer></script>
    <style>
        body {
            font-family: 'Merriweather', serif;
        }

        h2 {
            font-family: 'Montserrat', sans-serif !important;
            font-weight: 900 !important;
            color: #1565c0;
            padding-top: 3%;
        }
    </style>
</head>

<body>
    <?php include('phptemplates/header.php') ?>

    <!-- Guide d'inscription -->
    <h2 class="center">Vote</h2>

    <div class="guide">
        <p class="flow-text">Pour voter, veuillez remplir le formulaire suivant.</p>
        <br>
        <p class="flow-text">Besoin D'aide :</p>
        <a class="waves-effect waves-light btn">Suivre Le Guide</a>
    </div>
    <?php
    if (isset($_GET['cin'])) {
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        $cin = $_GET['cin'];
        $tel = $_GET['tel'];
        $mail = $_GET['mail'];
        $date = $_GET['date'];
        $region = $_GET['region'];
    }
    ?>

    <!-- Formulaire de vote -->
    <div class="formvote">
        <div class="row">
            <form class="col s12" action="verification.php" method="GET">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate" name="nom" value="<?php echo $nom; ?>" required>
                        <label for="icon_prefix">Nom</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate" name="prenom" value="<?php echo $prenom; ?>" required>
                        <label for="icon_prefix">Pr??nom</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">credit_card</i>
                        <input id="icon_prefix" type="text" class="validate" name="cin" value="<?php echo $cin; ?>" readonly>
                        <label for="icon_card">CIN</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">phone</i>
                        <input id="icon_telephone" type="tel" class="validate" name="tel" value="<?php echo $tel; ?>" required>
                        <label for="icon_telephone">Telephone</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email" type="email" class="validate" name="mail" value="<?php echo $mail; ?>" required>
                        <label for="icon_telephone">E-mail</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">date_range</i>
                        <input id="date" type="text" class="validate datepicker" name="date" value="<?php echo $date; ?>" required>
                        <label for="icon_date">Date De Naissance</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">location_on</i>
                        <select name="region">
                            <option value=""><?php echo $region; ?></option>
                            <option value="Tanger-T??touan-Al Hoce??ma">Tanger-T??touan-Al Hoce??ma</option>
                            <option value="L'Oriental">L'Oriental</option>
                            <option value="F??s-Mekn??s">F??s-Mekn??s</option>
                            <option value="Rabat-Sal??-K??nitra">Rabat-Sal??-K??nitra</option>
                            <option value="B??ni Mellal-Kh??nifra">B??ni Mellal-Kh??nifra</option>
                            <option value="Casablanca-Settat">Casablanca-Settat</option>
                            <option value="Marrakech-Safi">Marrakech-Safi</option>
                            <option value="Dr??a-Tafilalet">Dr??a-Tafilalet</option>
                            <option value="Souss-Massa">Souss-Massa</option>
                            <option value="Guelmim-Oued Noun">Guelmim-Oued Noun</option>
                            <option value="La??youne-Sakia El Hamra">La??youne-Sakia El Hamra</option>
                            <option value="Dakhla-Oued Ed-Dahab"> Dakhla-Oued Ed-Dahab</option>
                        </select>
                        <label>R??gion</label>
                    </div>
                    <div class="input-field col s12 center">
                        <!-- <input class="btn waves-effect waves-light" name="submit" type="submit" value="Submit"> -->
                        <!-- <i class="material-icons prefix">phone</i>
                        <input class="btn waves-effect waves-light" id="icon_telephone" type="submit" class="validate" name="submit" value="Voter"> -->
                        <button class="btn waves-effect waves-light" type="submit" name="vote" onclick="verification.php?nom=<?php echo $nom; ?>prenom=<?php echo $prenom; ?>cin=<?php echo $cin; ?>tel=<?php echo $tel; ?>mail=<?php echo $mail; ?>date=<?php echo $date; ?>region=<?php echo $region; ?>">Modifier
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker();
            $('select').formSelect();
        });
    </script>
    <?php include('phptemplates/footer.php') ?>
</body>

</html>