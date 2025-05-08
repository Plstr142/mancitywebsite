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
        // หาทุกลิงก์ <a> ใน <nav>
        $links = $nav->getElementsByTagName('a');
        foreach ($links as $link) {
            // ตรวจสอบว่า <a> มีข้อความ "News" หรือไม่
            if ($link->nodeValue == 'News') {
                // กำหนด href เป็น index.php
                $link->setAttribute('href', 'index.php');
            }
        }
        // แสดงผล <nav> หลังจากแก้ไขลิงก์
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
                    <p class="squad-card-name">Info</p>
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
                <p class="squad-card-title">Edu Castellano</p>
                <div class="esports-box-image">
                    <img class="esports-image" src="assets/images/teameasportsfc/edu.jpg" alt="edu">
                </div>
                <div class="squad-card-box-name">
                    <p class="squad-card-name">Info</p>
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
                <p class="squad-card-title">Edu Castellano</p>
                <div class="esports-box-image">
                    <img class="esports-image" src="assets/images/teameasportsfc/edu.jpg" alt="edu">
                </div>
                <div class="squad-card-box-name">
                    <p class="squad-card-name">Info</p>
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
        </div>

        <!-- Row 2 -->
        <div class="squad-row">
            <div class="squad-card">
                <p class="squad-card-title">Edu Castellano</p>
                <div class="esports-box-image">
                    <img class="esports-image" src="assets/images/teameasportsfc/edu.jpg" alt="edu">
                </div>
                <div class="squad-card-box-name">
                    <p class="squad-card-name">Info</p>
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
                <p class="squad-card-title">Edu Castellano</p>
                <div class="esports-box-image">
                    <img class="esports-image" src="assets/images/teameasportsfc/edu.jpg" alt="edu">
                </div>
                <div class="squad-card-box-name">
                    <p class="squad-card-name">Info</p>
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
                <p class="squad-card-title">Edu Castellano</p>
                <div class="esports-box-image">
                    <img class="esports-image" src="assets/images/teameasportsfc/edu.jpg" alt="edu">
                </div>
                <div class="squad-card-box-name">
                    <p class="squad-card-name">Info</p>
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
        </div>

        <!-- sdsadasdsasadsds -->
        <div class="squad-row">
            <div class="squad-card">Card 4</div>
            <div class="squad-card">Card 5</div>
            <div class="squad-card">Card 6</div>
        </div>
    </div>

    <div class="battle-deck">
        <div class="player-card">Player 1</div>
        <div class="player-card">Player 2</div>
        <div class="player-card">Player 3</div>
    </div>



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