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

        .info_container {
            height: 50vh;
            /* width: 15rem; */
            margin: 2% 25%;
            padding-top: 1%;
            padding-left: 4%;
            padding-right: 4%;
            padding-bottom: 6%;
            font-family: 'Montserrat', sans-serif !important;
            font-weight: 600;
        }

        .info_card {
            /* width: 75%; */
            height: 100%;
            border: 2px solid;
            border-radius: 10px;
        }

        .modifier {
            margin: 3%;

        }

        .selectcontainer {
            height: 50vh;
            padding-top: 0 4%;
        }

        .parent-selector {
            width: 70vh;
            /* position: static; */
            /* top: 110%; */
            /* left: 50%; */
            /* transform: translate(-50%, -50%); */
            margin: 0 auto;
            /* margin-bottom: 5%; */
            background-color: #eeeeee;
            border-radius: 5px;
            box-shadow: 10px 10px 10px 0px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .list-image>img {
            display: inline-block;
            margin: 10px;
            width: 64px;
            heigth: 64px;
            cursor: pointer;
        }

        .list-image>img:hover {
            border: solid 2px #1e88e5;
            border-radius: 2px;
        }

        .list-image>img.active {
            border: solid 2px #43a047;
            border-radius: 2px;
        }

        .view-image>img {
            max-width: 128px;
            max-height: 128px;
            padding: 10px;
        }

        .list-image>#image {
            display: inline-block;
            margin: 10px;
            width: 100px;
            heigth: 100px;
            cursor: pointer;
        }

        .list-image>#image:hover {
            border: solid 2px #1e88e5;
            border-radius: 2px;
        }

        .list-image>#image.active {
            border: solid 2px #43a047;
            border-radius: 2px;
        }

        .view-image>#image {
            max-width: 128px;
            max-height: 128px;
            padding: 10px;
        }

        /* INPUT TEXT */

        .input-div {
            position: relative;
            padding: 15px;
        }

        .input-text {
            font-family: inherit;
            width: 100%;
            border: 0;
            border-bottom: 1px solid #242424;
            outline: 0;
            font-size: 12px;
            color: #242424;
            padding: 7px 0;
            background: transparent;
            transition: border-color 0.2s;
        }

        .input-text::placeholder {
            color: transparent;
        }

        .input-text:placeholder-shown~.input-label {
            font-size: 14px;
            cursor: text;
            top: 20px;
        }

        label,
        .input-text:focus~.input-label {
            position: absolute;
            top: 0;
            display: block;
            transition: 0.2s;
            font-size: 12px;
            color: #242424;
        }

        .input-text:focus~.input-label {
            color: #242424;
        }

        .input-text:focus {
            padding-bottom: 6px;
            border-bottom: 2px solid #242424;
        }

        /* BUTTON */

        .button {
            width: 90%;
            margin-left: 5%;
            margin-right: 5%;
            padding-top: 8px;
            padding-bottom: 8px;
            background-color: #424242;
            text-align: center;
            cursor: pointer;
            border-radius: 2px;
        }

        .button:hover {
            background-color: #242424;
        }

        .button:active {
            background-color: #121212;
        }

        .button>span {
            color: #eeeeee
        }

        footer {
            margin-top: 10%;
        }
    </style>
</head>

<body>
    <?php include('phptemplates/header.php') ?>
    <!-- Guide d'inscription -->
    <h2 class="center">Vote</h2>
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
    <p class="flow-text center"> Vos Informations</p>
    <div class="info_container center-align">
        <div class="info_card ">
            <p class="center"><?php echo $nom . " " . $prenom ?></p>
            <p class="center"><?php echo $cin; ?></p>
            <p class="center"><?php echo $tel; ?></p>
            <p class="center"><?php echo $mail; ?></p>
            <p class="center"><?php echo $date; ?></p>
            <p class="center"><?php echo $region; ?></p>

        </div>
        <a class="waves-effect btn modifier center-align" href="modifier.php?nom=<?php echo $nom; ?>&prenom=<?php echo $prenom; ?>&cin=<?php echo $cin; ?>&tel=<?php echo $tel; ?>&mail=<?php echo $mail; ?>&date=<?php echo $date; ?>&region=<?php echo $region; ?>">Modifier</a>
    </div>
    <div class="selectcontainer center">

        <div class="parent-selector ">
            <div class="select-image center-align">
                <div class="list-image">
                    <input class="active" type="image" id="image" alt="Login" src="./images/MP.png">
                    <input type="image" id="image" alt="Login" src="./images/PAM.png">
                    <input type="image" id="image" alt="Login" src="./images/PI.png">
                    <input type="image" id="image" alt="Login" src="./images/PJD.jpg">
                    <!-- <img src="https://www.graphicsprings.com/filestorage/stencils/4f97c0da61af25cc6bf355c3ada42299.png?width=500&height=500" alt="2" />
                    <img src="https://www.graphicsprings.com/filestorage/stencils/18caf1005c4eedca8b833788e88e53bc.svg" alt="1" />
                    <img src="https://www.graphicsprings.com/filestorage/stencils/4f97c0da61af25cc6bf355c3ada42299.png?width=500&height=500" alt="2" /> -->
                </div>
                <div class="list-image">
                    <input type="image" id="image" alt="Login" src="./images/PPS.PNG">
                    <input type="image" id="image" alt="Login" src="./images/RNI.png">
                    <input type="image" id="image" alt="Login" src="./images/UC.png">
                    <input type="image" id="image" alt="Login" src="./images/USFP.png">
                </div>

                <div class="button" id="button-confirm"><span>Voter</span></div>
            </div>
            <div class="view-image" style="display: none;">
                <img src="" />
                <div class="button" id="button-other"><span><a href="index.php" style="color:white">Confirmer</a></span></div>
                <div class="button" id="button-other" style="margin-top:3%;"><span>Autre Choix</span></div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- <script src="./JavaScript/vote.js"></script> -->
    <script>
        $(document).on('click', '.list-image > input', function() {
            $('.list-image > input').each(function() {
                $(this).removeClass('active');
            })
            $(this).addClass('active');
            elementSelected = $(this);
            typeSelected = false;
        });

        $(document).on('input', '#text-src', function() {
            $('.list-image > input').each(function() {
                $(this).removeClass('active');
            })
            elementSelected = $(this);
            typeSelected = true;
        })
        $(document).on('click', '#button-confirm', function() {
            $('.select-image').hide();
            if (typeSelected == true) {
                $('.view-image > img').attr('src', elementSelected.val());
            } else {
                $('.view-image > img').attr('src', elementSelected.attr('src'));
            }
            $('.view-image').fadeIn('high');
        })

        $(document).on('click', '#button-other', function() {
            $('.view-image').hide();
            $('.select-image').fadeIn('high');
        })
    </script>
    <?php include('phptemplates/footer.php') ?>
</body>

</html>