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
            font-weight: 900;
        }
    </style>

</head>

<body>
    <?php include('phptemplates/header.php') ?>
    <!-- images slider -->

    <div class="carousel carousel-slider center card-panel hoverable" data-indicators="true" style="margin-left: 15%;margin-top: 2%">
        <a href="#one!" class="carousel-item "><img src="images/vote1.png" alt="" class="center-align responsive-img"></a>
        <a href="#two!" class="carousel-item "><img src="images/vote2.png" alt="" class="center-align responsive-img"></a>
        <a href="#three!" class="carousel-item "><img src="images/vote3.png" alt="" class="center-align responsive-img"></a>
    </div>

    <!-- buttons for next and preview slide -->
    <div class="prev grey darken-2 hide-on-med-and-down"><i class="material-icons medium">navigate_before</i></div>
    <div class="next grey darken-2 hide-on-med-and-down"><i class="material-icons medium">navigate_next</i></div>


    <div class="text">
        <h2 class="center">Lorem Ipsum Dolor Sit Amet</h2>
        <p class="flow-text textp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris rhoncus diam vel mi
            gravida, id ornare nibh condimentum. Quisque eu sapien a ipsum facilisis laoreet. Vivamus ipsum lorem,
            semper eget mattis sit amet, volutpat nec velit. Nullam at iaculis augue, at ultricies libero. Fusce nec
            egestas sem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris
            posuere, lectus nec rutrum venenatis, massa ligula volutpat massa, a sodales elit ligula aliquet tortor.
            Proin hendrerit, turpis bibendum efficitur ultricies, eros velit dignissim ante, id sollicitudin neque sem
            vel augue. Cras eget nisi ante.

            Etiam pulvinar urna quis orci facilisis efficitur. Vestibulum vehicula porttitor mollis. Vivamus at ante
            imperdiet, imperdiet nulla quis, varius nunc. Praesent ut arcu sapien. Integer pharetra facilisis pulvinar.
            Morbi odio orci, sodales eget pretium non, aliquam sed erat. Etiam tempus eget massa sit amet porttitor.
            Vivamus ut felis sed massa finibus iaculis. Cras sollicitudin odio eu ultrices convallis.

            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas ac
            semper ex, vitae varius lectus. Quisque id porttitor ligula. Curabitur dapibus viverra tellus elementum
            dapibus. Vestibulum iaculis magna sed feugiat eleifend. Quisque ut faucibus lorem. Nulla mollis, ex vitae
            blandit sagittis, libero justo vestibulum ligula, non tincidunt purus augue nec neque. Phasellus vitae lacus
            vel libero tempus finibus ut eu libero. Donec ac leo eget leo mattis efficitur. Nulla cursus ex vel lobortis
            dignissim.

            Suspendisse id arcu dapibus, accumsan diam tincidunt, fermentum lectus. Aenean non libero augue. In
            pellentesque leo est, quis pharetra dolor fermentum id. Donec eleifend, orci quis tincidunt elementum, erat
            dolor tristique sapien, efficitur mollis nisl enim et lorem. Fusce et rutrum ante. Sed vulputate aliquet
            mauris. Suspendisse at dolor sollicitudin odio ultrices porttitor tincidunt in justo. Ut pretium ipsum quis
            ex accumsan, ac convallis lorem blandit. Proin id enim luctus, euismod mauris eu, euismod diam. Proin
            condimentum ultricies massa vitae cursus. Interdum et malesuada fames ac ante ipsum primis in faucibus.
            Maecenas fringilla ante a massa cursus, vitae dignissim erat efficitur. Vivamus erat dolor, ornare sed dolor
            id, faucibus gravida ex.</p>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.carousel').carousel();
            //function for autoplay 
            setInterval(function() {
                $('.carousel').carousel('next');
            }, 5000);
            $('.carousel.carousel-slider').carousel({
                fullWidth: true,
                indicators: true
            });
            //Function for next slide 
            $('.next').click(function() {
                $('.carousel').carousel('next');
            })
            //Function for next slide 
            $('.prev').click(function() {
                $('.carousel').carousel('prev');
            })
        });
    </script>
    <?php include('phptemplates/footer.php') ?>
</body>

</html>