<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote.ma</title>
    <!-- CSS styles -->
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

        li {
            padding: 3%;
        }
    </style>

</head>

<body>
    <?php include('phptemplates/header.php') ?>
    <h2 class="center">Lois et Décrets</h2>
    <p class="flow-text" style="margin-left:10%;margin-top:4%">Voici les principaux textes régissant les élections au Maroc&nbsp;:</p>
    <div style="margin-left:10%;margin-right:10%;margin-top:4%">
        <ul class="collection with-header">
            <li class="collection-item" style="padding: 2% ;"><strong>La Constitution (<a href="http://www.sgg.gov.ma/Portals/0/constitution/constitution_2011_Fr.pdf">FR</a>) (<a href="http://www.sgg.gov.ma/Portals/1/lois/constitution_2011_Ar.pdf">AR</a>)</strong><strong></strong></li>
            <li class="collection-item" style="padding: 2% ;"><strong>Loi formant code électoral (<a href="http://www.sgg.gov.ma/Portals/0/lois/Loi_9.97_Fr.pdf?ver=2017-02-28-153937-543">FR</a>) (<a href="http://www.sgg.gov.ma/Portals/1/lois/Loi_9.97_Ar.pdf?ver=2017-02-22-112753-587">AR</a>), modifiée en <a href="http://www.sgg.gov.ma/Portals/0/lois/Loi_64.02_Fr.pdf?ver=2017-02-28-154158-947">2003,</a> <a href="http://www.sgg.gov.ma/Portals/0/lois/Loi_23.06_Fr.pdf?ver=2017-02-28-154422-767">2007</a>, <a href="http://www.sgg.gov.ma/Portals/0/lois/Loi_36.08_Fr.pdf?ver=2017-02-28-154618-640">2008</a> et <a href="http://www.sgg.gov.ma/Portals/0/lois/Loi_43.15_Fr.pdf?ver=2017-02-28-155123-737">2015</a>. </strong></li>
            <li class="collection-item" style="padding: 2% ;"><strong>Loi organique relative aux partis politiques (<a href="http://www.sgg.gov.ma/Portals/0/lois/Loi_29-11_Fr.pdf?ver=2015-12-15-122125-867">FR</a>) (<a href="http://www.sgg.gov.ma/Portals/1/lois/Loi_29.11_Ar.pdf?ver=2012-10-17-104850-000">AR</a>), modifiée en <a href="http://www.sgg.gov.ma/Portals/0/lois/Loi-organique_33.15_Fr.pdf?ver=2015-12-15-122246-710">2015</a> et en <a href="http://www.sgg.gov.ma/Portals/0/lois/Loiorgnique_21-16_Fr.pdf?ver=2018-02-01-162903-803">2016</a></strong></li>
            <li class="collection-item" style="padding: 2% ;"><strong>Loi organique relative à la Chambre des conseillers (<a href="http://www.sgg.gov.ma/Portals/0/lois/Loi_28-11_Fr.pdf?ver=2015-12-15-120347-147">FR</a>) (<a href="http://www.sgg.gov.ma/arabe/CodesTextesLois/loiorganique_CR.aspx">AR</a>), modifiée en <a href="http://www.sgg.gov.ma/Portals/0/lois/Loi-organique_32.15_Fr.pdf?ver=2015-12-15-120531-570">2015</a></strong></li>
            <li class="collection-item" style="padding: 2% ;"><strong>Loi organique relative à la Chambre des représentants (<a href="http://www.sgg.gov.ma/Portals/0/lois/Loi_27-11_Fr.pdf">FR</a>) (<a href="http://www.sgg.gov.ma/Portals/1/lois/Loi_27.11_Ar.pdf?ver=2012-10-17-105430-000">AR</a>), modifiée en <a href="http://www.sgg.gov.ma/Portals/1/lois/Loi-organique_20.16_Ar.pdf?ver=2016-09-30-121210-560">2016</a></strong></li>
            <li class="collection-item" style="padding: 2% ;"><strong>Loi organique relative aux régions (<a href="http://www.sgg.gov.ma/Portals/0/lois/Loi_org_111-14_fr.pdf?ver=2016-06-16-144306-930">FR</a>) (<a href="http://www.sgg.gov.ma/Portals/1/lois/Loi-organique_111.14_Ar.pdf">AR</a>)</strong></li>
            <li class="collection-item" style="padding: 2% ;"><strong>Loi organique relative aux communes (<a href="http://www.sgg.gov.ma/Portals/0/lois/loi_org_113-14_fr.pdf?ver=2016-06-16-144720-997">FR</a>) (<a href="http://www.sgg.gov.ma/Portals/1/lois/Loi-organique_113.14_Ar.pdf">AR</a>)</strong></li>
            <li class="collection-item" style="padding: 2% ;"><strong>Loi organique relative aux préfectures et provinces (<a href="http://www.sgg.gov.ma/Portals/0/lois/loi_org_112-14_fr.pdf?ver=2016-06-16-144539-747">FR</a>) (<a href="http://www.sgg.gov.ma/Portals/1/lois/Loi-organique_112.14_Ar.pdf">AR</a>)</strong></li>
            <li class="collection-item" style="padding: 2% ;"><strong>Loi organique relative à l’élection des membres des conseils des collectivités territoriales (<a href="http://www.sgg.gov.ma/Portals/0/lois/Loi_59.11_Fr.pdf?ver=2015-12-15-115855-490">FR</a>) (<a href="https://www.chambredesrepresentants.ma/sites/default/files/loi_59.11_ar.pdf">AR</a>), modifiée et complétée en <a href="http://www.sgg.gov.ma/Portals/0/lois/Loi-organique_34.15_Fr.pdf?ver=2015-12-15-120034-117">2015</a> </strong></li>
            <li class="collection-item" style="padding: 2% ;"><strong>Loi fixant les conditions et les modalités de l’observation indépendante et neutre des élections (<a href="https://www.chambredesrepresentants.ma/sites/default/files/bo_5984_fr_loi3011.pdf">FR</a>) (<a href="https://www.chambredesrepresentants.ma/sites/default/files/36.11.pdf">AR</a>)</strong></li>
            <li class="collection-item" style="padding: 2% ;"><strong>Loi relative au renouvellement des listes électorales générales et leur réaménagement au traitement informatique (<a href="https://www.chambredesrepresentants.ma/sites/default/files/36.11.pdf">AR</a>)</strong></li>
            <li class="collection-item" style="padding: 2% ;"><strong>Loi relative aux listes électorales générales, aux opérations de référendums et à l’utilisation des moyens audiovisuels publics lors des campagnes électorales et référendaires (<a href="http://adala.justice.gov.ma/production/html/Fr/180076.htm">FR</a>) (<a href="https://www.chambredesrepresentants.ma/sites/default/files/57.11.pdf">AR</a>), modifiée en <a href="https://www.listeselectorales.ma/fr/web/files/loi_2-16_ar.pdf">2016</a> </strong></li>
        </ul>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <?php include('phptemplates/footer.php') ?>
</body>

</html>