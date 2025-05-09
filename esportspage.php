<!DOCTYPE html>
<html lang="en">

<head>
    <title>esportspage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />

    <!-- remix icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css">

    <!-- swiper css -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href="assets/css/swiper-bundle.min.css"> -->

    <link rel="stylesheet" href="assets/css/style.css">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>


<body>

    <!-- ใส่ controller !!!!! -->
    <!-- ?????? -->
    <!-- ใส่ controller !!!!! -->

    <?php
    ob_start();
    include 'index.php';
    $content = ob_get_clean();

    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($content);
    libxml_clear_errors();

    $navs = $dom->getElementsByTagName('nav');
    foreach ($navs as $nav) {
      
        $anchors = $nav->getElementsByTagName('a');
        foreach ($anchors as $anchor) {
          
            if (trim($anchor->textContent) == 'News') {
                
                $anchor->setAttribute('href', 'index.php');
            }
        }
   
        echo $dom->saveHTML($nav);
    }
    ?>

    <div class="squad-arena">
        <div class="squad-row">
            <div class="squad-card">
                <p class="squad-card-title">Edu Castellano</p>
                <div class="esports-box-image">
                    <img class="esports-image" src="assets/images/teameasportsfc/edu.jpg" alt="edu">
                </div>
                <div class="squad-card-box-name">
                    <p class="squad-card-name">Info Esport Coach</p>
                    <div class="squad-card-info-box">
                        <p class="squad-card-info">
                        <p>Date of birth: 2002-03-06</p>
                        <p>Location : Tenerife, Spain</p>
                        <p>Nationality : Spain</p>
                        <p>Game: EA FC</p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="squad-card">
                <p class="squad-card-title">Faraaz</p>
                <div class="esports-box-image">
                    <img class="esports-image" src="assets/images/teameasportsfc/fg.jpg" alt="fg">
                </div>
                <div class="squad-card-box-name">
                    <p class="squad-card-name">Info Esport Player</p>
                    <div class="squad-card-info-box">
                        <p class="squad-card-info">
                        <p>Date of birth: 1994-05-04</p>
                        <p>Location : Manchester, England</p>
                        <p>Nationality : England</p>
                        <p>Game: EA FC</p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="squad-card">
                <p class="squad-card-title">Kacee</p>
                <div class="esports-box-image">
                    <img class="esports-image" src="assets/images/teameasportsfc/kacee.jpg" alt="kacee">
                </div>
                <div class="squad-card-box-name">
                    <p class="squad-card-name">Info Esport Player</p>
                    <div class="squad-card-info-box">
                        <p class="squad-card-info">
                        <p>Date of birth: 1993-02-11</p>
                        <p>Location : Chicago, United States of America</p>
                        <p>Nationality : United States of America</p>
                        <p>Game: EA FC</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="squad-row">
            <div class="squad-card">
                <p class="squad-card-title">Matias Bonanno</p>
                <div class="esports-box-image">
                    <img class="esports-image" src="assets/images/teameasportsfc/mati.jpg" alt="matias">
                </div>
                <div class="squad-card-box-name">
                    <p class="squad-card-name">Info Esport Player</p>
                    <div class="squad-card-info-box">
                        <p class="squad-card-info">
                        <p>Date of birth: 2002-11-12</p>
                        <p>Location : Rosario, Argentina</p>
                        <p>Nationality : Argentina</p>
                        <p>Game: EA FC</p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="squad-card">
                <p class="squad-card-title">Donovan ‘Tekkz’ Hunt</p>
                <div class="esports-box-image">
                    <img class="esports-image" src="assets/images/teameasportsfc/tekkz.jpg" alt="tekkz">
                </div>
                <div class="squad-card-box-name">
                    <p class="squad-card-name">Info Esport Player</p>
                    <div class="squad-card-info-box">
                        <p class="squad-card-info">
                        <p>Date of birth: 2001-06-02</p>
                        <p>Location : Torquay, England</p>
                        <p>Nationality : England</p>
                        <p>Game: EA FC</p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="squad-card">
                <p class="squad-card-title">Ander "Neat" Tobal</p>
                <div class="esports-box-image">
                    <img class="esports-image" src="assets/images/teameasportsfc/neat-hs.jpg" alt="neat-hs">
                </div>
                <div class="squad-card-box-name">
                    <p class="squad-card-name">Info Esport Player</p>
                    <div class="squad-card-info-box">
                        <p class="squad-card-info">
                        <p>Date of birth: 2004-01-27</p>
                        <p>Location : Tenerife, Spain</p>
                        <p>Nationality : Spain</p>
                        <p>Game: EA FC</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- nationality -->
    <div class="squad-row-nationality">
        <div class="squad-card-nationality">
            <div class="nationality-box">
                <div class="text-nationality">
                    EA FCCommunity
                    <div class="nationality-link-box">
                        <a class="nationality-link-box" href="#">
                            <img class="flag-icon" src="assets/images/flags/gb-eng.jpg" alt="england">
                        </a>
                        <a class="nationality-link-box" href="#">
                            <img class="flag-icon" src="assets/images/flags/es.jpg" alt="spain">
                        </a>
                        <a class="nationality-link-box" href="#">
                            <img class="flag-icon" src="assets/images/flags/us.jpg" alt="united states">
                        </a>
                        <a class="nationality-link-box" href="#">
                            <img class="flag-icon" src="assets/images/flags/ar.jpg" alt="argentina">
                        </a>
                    </div>
                </div>          
            </div>
          
            <!-- asdsads -->
        </div>
    </div>

    <!-- follow us -->
    <div class="squad-row-follow-us">
        <div class="squad-card-follow-us">
            <div class="follow-us-box">
                <p>FOLLOW US</p>
            </div>
            <div class="follow-us-link-box">
                <a class="esports-link-box" href="https://www.instagram.com/mancityesports/#" target="_blank" rel="noopener noreferrer">
                    <i class="icon-instagram ri-instagram-fill"></i>
                </a>
                <a class="esports-link-box" href="https://www.twitch.tv/mancity" target="_blank" rel="noopener noreferrer">
                    <i class="icon-twitch ri-twitch-fill"></i>
                </a>
                <a class="esports-link-box" href="https://www.youtube.com/playlist?list=PLp_A7BZlpSOdNMXreed__K2w_3-xUYfnK" target="_blank" rel="noopener noreferrer">
                    <i class="icon-youtube ri-youtube-fill"></i>
                </a>
                <a class="esports-link-box" href="https://www.tiktok.com/@mancity" target="_blank" rel="noopener noreferrer">
                    <i class="icon-tiktok ri-tiktok-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- <div class="mancity-logo-box">
        <a class="logo-mancity-box" href="index.php">
            <img class="logo-mancity-footer" src="assets/images/logo/mancity.jpg" alt="mancitylogo">
        </a>
        <a class="navbar-brand-footer" href="https://www.instagram.com/mancity/" target="_blank" rel="noopener noreferrer">
            <i class="icon-ig ri-instagram-fill"></i>
        </a>
        <a class="navbar-brand-footer" href="https://www.facebook.com/mancity/?locale=th_TH" target="_blank" rel="noopener noreferrer">
            <i class="icon-facebook ri-facebook-circle-fill"></i>
        </a>
        <a class="navbar-brand-footer" href="https://www.youtube.com/@mancity" target="_blank" rel="noopener noreferrer">
            <i class="icon-youtube ri-youtube-fill"></i>
        </a>
        <a class="navbar-brand-footer" href="https://x.com/mancity" target="_blank" rel="noopener noreferrer">
            <i class="icon-twitter-x ri-twitter-x-fill"></i>
        </a>
    </div> -->

    <div class="battle-deck">
        <div class="player-card-battle-deck">Player 1</div>
        <div class="player-card-battle-deck">Player 2</div>
        <div class="player-card-battle-deck">Player 3</div>
    </div>




    <?php include 'modals.php'; ?>
    <?php include 'footer.php'; ?>



    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="assets/js/index.js" defer></script>
    <script src="jsscript.js"></script>


    <!-- swiperjs -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="assets/js/swiper.js"></script>


    <!-- ajax request server -->
    <script src="main.js"></script>
</body>

</html>