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
            être âgé d'au moins 18 ans ;
        </li>
        <li style="font-size:1.3rem">
            être de nationalité́ marocaine ;
        </li>
    </ul>
    <p style="margin-left:10%;margin-right:10%;font-size:1.3rem">Tout d’abord l’électeur doit envoyer le numéro de sa CIN au 2727 afin de connaitre son bureau de vote. Lors du vote, seule la carte d’identité nationale est nécessaire. Les bureaux de vote seront ouverts de 8h à 19H.</p>
    <p style="margin-left:10%;margin-right:10%;font-size:1.3rem">L'électeur se présente à la table où sont déposés les bulletins et les enveloppes. Son inscription sur les listes électorales est vérifiée. Il prend une enveloppe, un bulletin de vote </p>
    <p style="margin-left:10%;margin-right:10%;font-size:1.3rem">L'électeur se rend à l'isoloir. Le passage par l'isoloir est obligatoire dans tous les cas afin de garantir le caractère secret et personnel du vote.</p>
    <p style="margin-left:10%;margin-right:10%;font-size:1.3rem">Il se présente devant l'urne où le président du bureau ou son suppléant vérifie son identité.</p>
    <p style="margin-left:10%;margin-right:10%;font-size:1.3rem">Le président ou son suppléant constate que l'électeur n'a qu'une enveloppe, mais il ne doit en aucun cas la toucher. L'électeur introduit lui-même l'enveloppe dans l'urne.</p>
    <p style="margin-left:10%;margin-right:10%;font-size:1.3rem">Il signe alors la liste d'émargement en face de son nom. </p>
    <p style="margin-left:10%;margin-right:10%;font-size:1.3rem">La carte de l'électeur ou son attestation sont rendues à leur détenteur après que l'assesseur a apposé un timbre à la date du scrutin sur l'emplacement prévu à cet effet. Ce timbre n'est pas apposé si l'électeur n'a pas présenté sa carte électoral</p>
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