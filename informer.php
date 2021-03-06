<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'informer</title>
    <!-- CSS Styles -->
    <link rel="stylesheet" href="styles/style.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- material-icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- favicon -->
    <link rel="icon" href="images/favicon.ico">
    <!-- OpenLayer -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.14.1/css/ol.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.14.1/build/ol.js"></script> -->
    <link rel="stylesheet" href="./libs/v6.14.1-dist/ol.css">
    <script src="./libs/v6.14.1-dist/ol.js"></script>
    <!-- *********************************loading fonts********************************* -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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

        .container_map {
            height: 75vh;
            /* width: 15rem; */
            margin: 0 5%;
            padding: 5%;
        }

        #map {
            /* width: 75%; */
            height: 100%;
            border: 1px solid blue;
        }
    </style>
</head>

<body>
    <?php include('phptemplates/header.php') ?>
    <h2 class="center">S'informer</h2>
    <p style="margin-left:10%;margin-top:5%;font-size:1.3rem">Il faut remplir les conditions suivantes :</p>
    <ul style="margin-left:14%">
        <li style="font-size:1.3rem">
            ??tre a??ge?? d'au moins 18 ans??;
        </li>
        <li style="font-size:1.3rem">
            ??tre de nationalit???? marocaine??;
        </li>
    </ul>
    <p style="margin-left:10%;margin-right:10%;font-size:1.3rem">Tout d???abord l?????lecteur doit envoyer le num??ro de sa CIN au 2727 afin de connaitre son bureau de vote. Lors du vote, seule la carte d???identit?? nationale est n??cessaire. Les bureaux de vote seront ouverts de 8h ?? 19H.</p>
    <p style="margin-left:10%;margin-right:10%;font-size:1.3rem">L'??lecteur se pr??sente ?? la table o?? sont d??pos??s les bulletins et les enveloppes. Son inscription sur les listes ??lectorales est v??rifi??e. Il prend une enveloppe, un bulletin de vote </p>
    <p style="margin-left:10%;margin-right:10%;font-size:1.3rem">L'??lecteur se rend ?? l'isoloir. Le passage par l'isoloir est obligatoire dans tous les cas afin de garantir le caract??re secret et personnel du vote.</p>
    <p style="margin-left:10%;margin-right:10%;font-size:1.3rem">Il se pr??sente devant l'urne o?? le pr??sident du bureau ou son suppl??ant v??rifie son identit??.</p>
    <p style="margin-left:10%;margin-right:10%;font-size:1.3rem">Le pr??sident ou son suppl??ant constate que l'??lecteur n'a qu'une enveloppe, mais il ne doit en aucun cas la toucher. L'??lecteur introduit lui-m??me l'enveloppe dans l'urne.</p>
    <p style="margin-left:10%;margin-right:10%;font-size:1.3rem">Il signe alors la liste d'??margement en face de son nom. </p>
    <p style="margin-left:10%;margin-right:10%;font-size:1.3rem">La carte de l'??lecteur ou son attestation sont rendues ?? leur d??tenteur apr??s que l'assesseur a appos?? un timbre ?? la date du scrutin sur l'emplacement pr??vu ?? cet effet. Ce timbre n'est pas appos?? si l'??lecteur n'a pas pr??sent?? sa carte ??lectoral</p>
    <p style="margin-left:10%;margin-right:10%;font-size:1.3rem">vous trouvez sur la carte ci-dessous les bureaux de votes :</p>
    <div class="container_map ">
        <div id="map" class="center map">

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- OpenLayers JS -->
    <script src="JavaScript/openLayersMaps.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <?php include('phptemplates/footer.php') ?>
</body>

</html>