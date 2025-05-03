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

    // $navs = $dom->getElementsByTagName('nav');
    // foreach ($navs as $nav) {
    //     echo $dom->saveHTML($nav);
    // }


    ?>

    <!-- <nav>
        <div class="nav-container">
            <a class="navbar-brand" href="index.php">
                <img class="logo-mancity" src="assets/images/logo/mancity.jpg" alt="mancitylogo">
            </a>

            <ul class="nav-menu">
                <li><a href="#news-container">News</a></li>
                <li><a href="#club">Club</a></li>
                <li class="dropdown">
                    <a href="#">Fixtures</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Upcoming</a></li>
                        <li><a href="#">Results</a></li>
                        <li><a href="tables.php">Tables</a></li>
                    </ul>
                </li>
            </ul>

            <div class="nav-profile">
                <p class="nav-profile-name">Name Profile</p>
                <div onclick="openCart()" style="cursor: pointer;" class="nav-profile-cart">
                    <i class="fas fa-cart-shopping"></i>
                    <div id="cartcount" class="cartcount" style="display: none;">0</div>
                </div>
            </div>
        </div>
    </nav> -->
    <div class="standings-title-box">
        <p class="standings-title">Premier League</p>
    </div>

    <p class="standings-title-season">Season 2024/2025</p>

    <?php if (!empty($standings)): ?>
        <div class="table-container-pl">
            <div class="table-container">
                <table>
                    <thead class="table-header">
                        <tr class="table-header-tr">
                            <th>Position</th>
                            <th>Club</th>
                            <!-- <th>Season</th> -->
                            <th>P</th>
                            <th>W</th>
                            <th>D</th>
                            <th>L</th>
                            <th>GF</th>
                            <th>GA</th>
                            <th>GD</th>
                            <th>Pts</th>
                            <th>Form</th>
                            <!-- <th>Team ID</th> -->
                            <!-- <th>Created At</th> -->
                            <!-- <th>Updated At</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($standings as $standing): ?>
                            <tr>
                                <td><?= htmlspecialchars($standing['standing_id']) ?></td>
                                <td><?= htmlspecialchars($standing['team_name']) ?></td>
                                <!-- <td>< htmlspecialchars($standing['season']) </td> -->
                                <td><?= htmlspecialchars($standing['match_played']) ?></td>
                                <td><?= htmlspecialchars($standing['win']) ?></td>
                                <td><?= htmlspecialchars($standing['draw']) ?></td>
                                <td><?= htmlspecialchars($standing['lose']) ?></td>
                                <td><?= htmlspecialchars($standing['goals_for']) ?></td>
                                <td><?= htmlspecialchars($standing['goals_against']) ?></td>
                                <td><?= htmlspecialchars($standing['goal_difference']) ?></td>
                                <td><?= htmlspecialchars($standing['points']) ?></td>
                                <td><?= htmlspecialchars($standing['form']) ?></td>
                                <!-- <td> htmlspecialchars($standing['team_id']) </td> -->
                                <!-- <td> htmlspecialchars($standing['created_at'])</td> -->
                                <!-- <td> htmlspecialchars($standing['updated_at'])</td> -->
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php else: ?>
        <p>Standing list not found.</p>
    <?php endif; ?>

    <div class="update-box">
        <h6 class="update-latest">Latest update on 27/04/2025, season 2024/2025</>
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