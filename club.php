<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Standings & Teams</title>
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

    <!-- main js -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/table.css"> -->

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>
    <!--  include 'index.php';  -->
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

    // $navs = $dom->getElementsByTagName('nav');
    // foreach ($navs as $nav) {
    //     echo $dom->saveHTML($nav);
    // }


    ?>

    <div class="club-mancity">
        <img src="assets/images/manchestercitywallpaper.jpg" alt="manchestercitywallpaper.jpg" class="club-mancity-wallpaper" />
    </div>

    <div class="club-text-box">
        <div class="club-text-sub">
            <h1>Manchester City FC - Club History</h1>
            <h2>Humble Beginnings (Founded: 1880)</h2>
            <p>Manchester City Football Club was originally formed in 1880 as St. Mark’s (West Gorton), later becoming Ardwick AFC in 1887, and officially renamed Manchester City in 1894.
                What began as a community initiative in the industrial heart of Manchester soon evolved into a globally admired football institution.
            </p>
        </div>
        <div class="club-text-sub">
            <h2>Home Ground – Etihad Stadium</h2>
            <p>Opened: 2003 <br>
                Capacity: 53,400
                <br>
                Known for its modern design, electric atmosphere, and expansion plans aiming for 60,000+ seats.
                <br>
                Located at the heart of Etihad Campus, a world-class training and community facility.
            </p>
        </div>
        <div class="club-text-sub">
            <h2>Major Honours</h2>
            <p>Competition: Premier League
                <br>
                Titles Won: 9
                <br>
                Key Years: 1936–37, 1967–68, 2011–12, 2013–14, 2017–18, 2018–19, 2020–21, 2021–22, 2022–23
            </p>
        </div>
        <div class="club-text-sub">
            <p>Competition: FA Cup
                <br>
                Titles Won: 6
                <br>
                Key Years: 1904, 1934, 1956, 1969, 2011, 2019
            </p>
        </div>
        <div class="club-text-sub">
            <p>Competition: EFL Cup (Carabao)
                <br>
                Titles Won: 8
                <br>
                Key Years: 1970, 1976, 2014, 2016, 2018, 2019, 2020, 2021
            </p>
        </div>
        <div class="club-text-sub">
            <p>Competition: FA Community Shield
                <br>
                Titles Won: 6
                <br>
                Key Years: 1937, 1968, 1972, 2012, 2018, 2019
            </p>
        </div>
        <div class="club-text-sub">
            <p>Competition: UEFA Champions League
                <br>
                Titles Won: 1
                <br>
                Key Years: 2022–23
            </p>
        </div>
        <div class="club-text-sub">
            <p>Competition: UEFA Super Cup
                <br>
                Titles Won: 1
                <br>
                Key Years: 2023
            </p>
        </div>
        <div class="club-text-sub">
            <p>Competition: FIFA Club World Cup
                <br>
                Titles Won: 1
                <br>
                Key Years: 2023
            </p>
        </div>
        <div class="club-text-sub">
            <h2>Milestones & Memorable Moments</h2>
            <p>100 Points in 2017–18: First Premier League team to hit 100 points in a season <br>

                “AGÜEROOOO!” Moment: Sergio Agüero's 93rd-minute goal to win the 2011–12 title in dramatic fashion <br>

                Historic Treble (2022–23): City won the Premier League, FA Cup, and Champions League — only the second English club to achieve this feat <br>

                Erling Haaland Record: 36 Premier League goals in 2022–23 — an all-time single-season record
            </p>
        </div>
        <div class="club-text-sub">
            <h2>Legends Who Made History</h2>
            <p>Colin Bell – The “King of the Kippax”, a midfield icon <br>

                Sergio Agüero – City’s all-time top scorer (260 goals) <br>

                David Silva – The magician who defined an era of creativity <br>

                Vincent Kompany – Inspirational captain and rock-solid defender <br>

                Yaya Touré – The powerhouse of City's midfield revolution
            </p>
        </div>
        <div class="club-text-sub">
            <h2>Pep Guardiola Era – The Tactical Revolution</h2>
            <p>Since joining in 2016, Pep Guardiola has transformed City into a tactical powerhouse: Philosophy: High pressing, possession football, intelligent transitions <br>

                Youth Development: Rising stars like Phil Foden have flourished under his leadership <br>

                Style: Football as an art form, combining precision, rhythm, and dominance
            </p>
        </div>
        <div class="club-text-sub">
            <h2>Manchester City Today</h2>
            <p>More than just a football club — City stands as a global brand, an innovation hub, and a symbol of modern football excellence. Backed by world-class infrastructure and passionate fans known as Cityzens, the journey continues with relentless ambition.</p>
            <h2 class="quote">“Once a Blue, Always a Blue.”</h2>
        </div>
    </div>






    <!-- modalDescproduct -->
    <div class="modal" id="modalDescproduct" style="display: none;">
        <div onclick="CloseModal()" class="modal-bg">
        </div>
        <div class="modal-page">
            <p class="topic-news">Manchester City Poster</p>
            <br>

            <div class="cartlist-spacer">
                <div class="cartlist">
                    <div class="cartlist-items">
                        <div class="cartlist-left">
                            <div class="cartlist-img">
                                <img id="mdd-img" src="assets/images/DavidSilva.jpg" alt="DavidSilva">
                            </div>
                        </div>
                        <div class="cartlist-center">
                            <div class="cartlist-detail">
                                <p id="mdd-name" class="product-name">Product Name</p>
                                <p id="mdd-price" class="product-price">500 THB</p>
                            </div>
                        </div>
                        <div class="cartlist-right">
                            <p class="btnc">-</p>
                            <p class="btnq">1</p>
                            <p class="btnc">+</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="btn-control">
                <div class="btn-group-submit">
                    <button onclick="AddtoCart()" class="btn btn-submit">Add to Cart</button>
                </div>
                <div class="btn-group-out">
                    <button onclick="CloseModal()" class="btn btn-out">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="modalCart" style="display: none;">
        <div onclick="CloseModal()" class="modal-bg">
        </div>
        <div class="modal-page">
            <p class="topic-news">My Cart</p>
            <br>
            <div class="cartlist-spacer">
                <div id="mycart" class="cartlist">
                    <!-- cartlist item -->
                </div>
            </div>
            <br>
            <div class="btn-control">
                <div class="btn-group-submit">
                    <button class="btn btn-submit">Checkout</button>
                </div>
                <div class="btn-group-out">
                    <button onclick="CloseModal()" class="btn btn-out">Close</button>
                </div>
            </div>
        </div>
    </div>


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