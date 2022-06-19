<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- material-icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .hover-underline-animation {
            display: inline-block;
            position: relative;
            font-family: 'Nunito', sans-serif;
        }

        .hover-underline-animation:after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 5px;
            bottom: 0;
            left: 0;
            background-color: #0087ca;
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .hover-underline-animation:hover:after {
            transition: 1s;
            transform: scaleX(1);
            transform-origin: bottom left;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <div class="navbarfixed">
        <nav class="nav-wraper  blue-grey darken-4">
            <div class="container">
                <a href="index.html" class="brand-logo"><img src="images/logo1.png" alt="logo" class="left responsive-img"></a>
                <a href="#" class="sidenav-trigger" data-target="mobile-links">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php" class="hover-underline-animation">Acceuil</a></li>
                    <li><a href="vote.php" class="hover-underline-animation">Voter</a></li>
                    <li><a href="informer.php" class="hover-underline-animation">S'informer</a></li>
                    <li><a href="lois.php" class="hover-underline-animation">Lois Et Décrets</a></li>
                    <li><a href="faq.php" class="hover-underline-animation">FAQ</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-links">
        <li><a href="index.php" class="hover-underline-animation">Acceuil</a></li>
        <li><a href="vote.php" class="hover-underline-animation">Voter</a></li>
        <li><a href="informer.php" class="hover-underline-animation">S'informer</a></li>
        <li><a href="lois.php" class="hover-underline-animation">Lois Et Décrets</a></li>
        <li><a href="faq.php" class="hover-underline-animation">FAQ</a></li>
    </ul>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.sidenav').sidenav();
        });
    </script>
</body>

</html>