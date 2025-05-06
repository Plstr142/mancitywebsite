<?php

$poster_name = [
    // 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, soluta quibusdam animi rem eum iure nemo itaque suscipit repellendus magni velit neque quaerat inventore voluptas consectetur, beatae ab adipisci, facere impedit. Est, similique laudantium. Quo ratione, esse sint omnis quaerat debitis eaque expedita odio autem consectetur suscipit, reprehenderit hic! Pariatur quae ad, quam dolores, tempore odit a beatae in adipisci sit distinctio quaerat nisi soluta, odio eius! Dolorem minima vel magnam amet quibusdam aspernatur, iste, ab mollitia praesentium eligendi quia cum quos rem saepe molestiae, hic eveniet. Inventore sapiente aliquid unde optio assumenda quos at maiores doloribus asperiores, quis nam?',
    'David Sivla Poster',
    'Erling Haaland Poster',
    'KDB Poster',
    'Kyle Walker Poster',
    'Pep Manager Poster',
];

?>

<!doctype html>
<html lang="en">

<head>
    <title>Manchester City Home</title>
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

<!-- class="container_bg" -->

<body>
    <nav>
        <div class="nav-container">
            <a class="navbar-brand" href="index.php">
                <img class="logo-mancity-nav" src="assets/images/logo/mancity.jpg" alt="mancitylogo">
            </a>

            <ul class="nav-menu">
                <li><a href="#news-container">News</a></li>
                <li><a href="club.php">Club</a></li>
                <li class="dropdown">
                    <a href="#">Fixtures</a>
                    <ul class="dropdown-menu">
                        <li><a class="li-upcoming" href="#">Upcoming</a></li>
                        <!-- <li><a class="li-results" href="#">Results</a></li> -->
                        <li><a class="li-tables" href="tables.php">Tables</a></li>
                    </ul>
                </li>
            </ul>

            <div class="nav-profile">
                <p class="nav-profile-name">Name Profile</p>
                <div onclick="openCart()" style="cursor: pointer;" class="nav-profile-cart">
                    <i class="iccart-shopping fas fa-cart-shopping"></i>
                    <div id="cartcount" class="cartcount" style="display: none;">0</div>
                </div>
            </div>
        </div>
    </nav>


    <section class="container-search">
        <div class="container-box-search">
            <img class="img-slide" src="assets/images/thisistheplacemancity.jpg" alt="thisistheplacemancity">
        </div>
    </section>

    <!-- container-fluid -->
    <div class="ourposter-container">
        <h1>Our Poster</h1>
    </div>



    <div class="container-card">
        <div class="productsidebar">
            <input onkeyup="searchsomethingproduct(this)" id="txt_search_product" type="text" class="sidebar-product" placeholder="search our product" />
            <!-- product category -->
            <!-- <a onclick="searchnewsproduct(this, 'poster')" data-param="poster" class="sidebar-items">Poster product</a> -->
            <!-- <a onclick="searchnews(this, 'mensteam')" data-param="mensteam" class="sidebar-items">Men's Team</a>
            <a onclick="searchnews(this, 'academyteam')" data-param="academyteam" class="sidebar-items">Manchester City Academy</a>
            <a onclick="searchnews(this, 'womensteam')" data-param="womensteam" class="sidebar-items">Women's Team</a> -->
        </div>

        <div class="container-card-list" id="card-list">
            <!-- items -->
        </div>
    </div>

   


    <!-- /********************************************************************************************************/ -->
    <div class="swiper">
        <div class="timeline">
            <div class="ucltrophy">
                <button class="ucltrophycontent">TOTAL WINNERS</button>
            </div>
            <div class="ucltrophy">
                <button class="ucltrophycontent">COLLECTION OF HONORS 🏆🏅</button>
            </div>
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="assets/imagestrophy/UCLTrophy20222023.jpg" alt="UCLTrophy20222023">
            </div>
            <div class="swiper-slide">
                <img src="assets/imagestrophy/trophypl20172018.jpg" alt="UCLTrophy20222023">
            </div>
            <div class="swiper-slide">
                <img src="assets/imagestrophy/trophypl20182019.jpg" alt="trophypl20182019">
            </div>
            <div class="swiper-slide">
                <img src="assets/imagestrophy/trophypl20202021.jpg" alt="trophypl20202021">
            </div>
            <div class="swiper-slide">
                <img src="assets/imagestrophy/trophypl20212022.jpg" alt="trophypl20212022">
            </div>
            <div class="swiper-slide">
                <img src="assets/imagestrophy/trophypl20222023.jpg" alt="trophypl20222023">
            </div>
            <div class="swiper-slide">
                <img src="assets/imagestrophy/medals_gundogan.jpg" alt="medals_gundogan">
            </div>
            <div class="swiper-slide">
                <img src="assets/imagestrophy/trophyfacommunityshied2019.jpg" alt="trophyfacommunityshied2019">
            </div>
            <div class="swiper-slide">
                <img src="assets/imagestrophy/MensplayeroftheyearHaaland.jpg" alt="MensplayeroftheyearHaaland">
            </div>
            <div class="swiper-slide">
                <img src="assets/imagestrophy/trophyefl20202021.jpg" alt="/trophyefl20202021">
            </div>
        </div>
    </div>
    <!-- /********************************************************************************************************/ -->


    <div class="topnews-container">
        <p class="topnews-container-news">News Club</p>
    </div>


    <!-- <div class="news-container1">
        <div class="my-card1">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.</p>
        </div>
        <div class="my-card1">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.</p>
        </div>
        <div class="my-card1">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.</p>
        </div>
        <div class="my-card1">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.</p>
        </div>
        <div class="my-card1">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.</p>
        </div>
        <div class="my-card1">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.</p>
        </div>
    </div> -->

    <!-- /********************************************************************************************************/ -->

    <!-- <a onclick="searchnews('mensteam')" class="sidebar-items">Men's Team</a>
            <a onclick="searchnews('mancityacademy')" class="sidebar-items">Manchester City Academy</a>
            <a onclick="searchnews('womensteam')" class="sidebar-items">Women's Team</a> -->
    <div id="news-container" class="news-container">
        <!-- id="active" -->
        <div class="sidebar">
            <input onkeyup="searchsomething(this)" id="txt_search" type="text" class="sidebar-search" placeholder="search" />

            <!-- <a onclick="renderMen_check(this, 'mensteam')" data-param="mensteam" class="sidebar-items">Men's Team</a>
            <a onclick="renderAcademy_check(this, 'academyteam')" data-param="academyteam" class="sidebar-items">Manchester City Academy</a>
            <a onclick="renderWomen_check(this, 'womensteam')" data-param="womensteam" class="sidebar-items">Women's Team</a> -->
            <a onclick="searchnews(this, 'mensteam')" data-param="mensteam" class="sidebar-items">Men's Team</a>
            <a onclick="searchnews(this, 'academyteam')" data-param="academyteam" class="sidebar-items">Manchester City Academy</a>
            <a onclick="searchnews(this, 'womensteam')" data-param="womensteam" class="sidebar-items">Women's Team</a>
        </div>
    </div>
    
    <div class="news">
        <div class="news-items" id="card-news">
            <!-- item -->
        </div>
    </div>

    <!-- <div class="my-card-news">
        <img class="news-img" src="assets/newsimages/OmarMarmoushmarketvaluechangeswhohasmovedtoanewclubthistransferwindow.jpg" alt="ManchesterCitysacademyhasexcelledinproducingtalent">
        <p>The market value change of players who’ve moved to a new club this transfer window 📈💫</p>
    </div>
    <div class="my-card-news">
        <img class="news-img" src="assets/newsimages/ManchesterCitysacademyhasexcelledinproducingtalent.jpg" alt="ManchesterCitysacademyhasexcelledinproducingtalent">
        <p>Manchester City's academy has excelled in producing talent Despite the presence of a world-class squad, these players continue to carve out a reputation abroad and have now become worth millions! 🔵💰 2023 Estimated Value</p>
    </div>
    <div class="my-card-news">
        <img class="news-img" src="assets/newsimages/MatchdayPosterforMancityManchesterCity.jpg" alt="ManchesterCitysacademyhasexcelledinproducingtalent">
        <p>Manchester City's UEFA Champions League clash with Sparta Prague on Wednesday, October 23, 2024, has concluded with Manchester City winning 5-0 at the Etihad Stadium.</p>
    </div>
    <div class="my-card-news">
        <img class="news-img" src="assets/newsimages/TheManchesterEveningNews.jpg" alt="ManchesterCitysacademyhasexcelledinproducingtalent">
        <p>This story is from the May 22, 2023 edition of Manchester Evening News.</p>
    </div>
    <div class="my-card-news">
        <img class="news-img" src="assets/newsimages/WestHamCitythetitleisours.jpg" alt="ManchesterCitysacademyhasexcelledinproducingtalent">
        <p>West Ham City: The title is ours 😁! Uncredible News FODEN will not get any like.</p>
    </div>
    <div class="my-card-news">
        <img class="news-img" src="assets/newsimages/Whichforwardwouldyouprefertohaveinyourteam.jpg" alt="ManchesterCitysacademyhasexcelledinproducingtalent">
        <p>Which forward would you prefer to have in your team? (ZFlix Football Post)</p>
    </div> -->

    <!-- /********************************************************************************************************/ -->


    <!-- <div class="modal">
        <div class="modal-bg">
        </div>
        <div class="modal-page">
            <p>Manchester City News Club</p>
            <div class="modaldesc-content">
                <div class="modaldesc-img-container">
                    <img class="modaldesc-img" src="assets/newsimages/OmarMarmoushmarketvaluechangeswhohasmovedtoanewclubthistransferwindow.jpeg" alt="OmarMarmoushmarketvaluechangeswhohasmovedtoanewclubthistransferwindow">
                </div>
                <div class="modaldesc-detail">
                    <p>The market value change of players who’ve moved to a new club this transfer window 📈💫</p>
                </div>
            </div>
        </div>
    </div> -->

    <!-- modalDescnews -->
    <div class="modal" id="modalDescnews" style="display: none;">
        <div onclick="CloseModal()" class="modal-bg">
        </div>
        <div class="modal-page">
            <p class="topic-news">Manchester City News</p>
            <br>
            <div class="modaldesc-content">
                <div class="modaldesc-img-container">
                    <img id="modaldesc-img" class="modaldesc-img" src="assets/newsimages/TheManchesterEveningNews.jpg" alt="TheManchesterEveningNews">
                </div>
                <div class="modaldesc-detail">
                    <p class="topic-desc-news">News Today</p>
                    <div class="news-desc-container">
                        <div class="news-desc-news">
                            <p id="news-desc" class="news-desc">The market value change of players who’ve moved to a new club this transfer window 📈💫</p>
                            <br>
                        </div>
                        <br>
                        <div class="btn-control">
                            <div class="btn-group-submit">
                                <button class="btn btn-submit">Go to News</button>
                            </div>
                            <div class="btn-group-out">
                                <button onclick="CloseModal()" class="btn btn-out">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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


    <div class="playeroftheweek-container">
        <p class="playeroftheweek">
            Player of the week premier league
        <p class="gameofweek">#gameofweek</p>
        </p>
    </div>

    <section class="mancity-box-search">
        <div class="box-search">
            <h5 class="mctext text-center font-weight-bold">Manchester City Search</h5>
            <hr class="my-1">
            <h5 class="text-center text-secondary">
                write any player name in the search box
            </h5>
            <form action="details.php" method="POST" class="form-control">
                <div class="input-group">
                    <input type="text" name="search" id="search" class="input-form-control form-control-lg border-dark rounded-start-1" placeholder="search player" autocomplete="off" required>
                    <div class="input-group-append">
                        <input type="submit" name="submit" value="Search" class="btn btn-dark btn-lg rounded-start-1 mcbtn">
                    </div>
                </div>
            </form>
        </div>

        <div class="playeroftheweek-box">
            <div class="playeroftheweekmancity">
                <a class="playernamemancity">
                    <img class="playermancity" src="assets/images/phil-foden-playeroftheweek34.jpg" alt="phil-foden-playeroftheweek34">
                </a>
            </div>
        </div>

        <!-- <div class="playeroftheweek-static-box">
            <div class="info-player-box">
                <p>dfasdsa</p>
                <br>
                <p>asdasdsaasdsad</p>
                <br>
                <p>asdasdsaasdsad</p>
                <p>asdasdsaasdsad</p>
                <p>asdasdsaasdsad</p>
                <p>asdasdsaasdsad</p>
            </div>
        </div> -->

        <div class="news-container1">
            <div class="my-card1">
                <p class="topic-card-gameweek">Gameweek 34 Performance Highlights:</p>
                <p class="text-card-gameweek">
                    <br>
                    Match: Manchester City vs. Aston
                    <br>
                    Result: Manchester City 2–1 Aston Villa
                    <br>
                    Performance: Foden contributed significantly to the team's victory, showcasing his skill and influence on the pitch.
                </p>
            </div>
            <div class="my-card1">
                <p class="topic-card-gameweek">Season Stats (Premier League 2024/25 as of Gameweek 34):</p>
                <p class="text-card-gameweek">
                    <br>
                    Appearances: 25
                    <br>
                    Goals: 7
                    <br>
                    Assists: 2
                    <br>
                    Minutes Played: 1,690
                    <br>
                    Starts: 19
                    <br>
                    Goals per Match: 0.28
                    <br>
                    Total Goal Contributions (Goals + Assists): 9
                </p>
            </div>
        </div>
        <!-- <div class="news-container1">
            <div class="my-card1">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.</p>
            </div>
            <div class="my-card1">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.</p>
            </div>
        </div> -->
    </section>

    <section class="top-playeroftheweek-box">
        <div class="playeroftheweek-static-box">
            <!-- <div class="static-player-box">
                <a class="player-static">
                    <img class="static-player" src="assets/images/phil-foden-playeroftheweek34.jpg" alt="phil-foden-playeroftheweek34">
                </a>
            </div>
            <div class="asdsadsadsa">
                <a class="sadgdsagds">
                    <img class="sdgadsgaasdsad" src="assets/images/phil-foden-playeroftheweek34.jpg" alt="phil-foden-playeroftheweek34">
                </a>
            </div> -->

            <div class="news-container1-1">
                <p class="gameofweek-topic">FPL GAMEWEEK 35</p>
                <div class="my-card1-1">
                    <div class="football-title">Top Picks</div>
                    <div class="football-lineup">
                        <!-- active -->
                        <!-- <div class="my-card-player playerteam" data-id="1" data-type="" data-param="">
                            <img class="player-img" src="assets/images/PHILFODEN_SPORTSDESIGN.jpg" alt="">
                            <div class="card-player-name">
                                <p onclick="openPlayerDetail(0)" class="player-name">Player Name</p>
                            </div>
                            <p class="playeroftheweek-name">The market value change of players who’ve moved to a new club this transfer window 📈💫</p>
                            <p class="playeroftheweek-team">The market value change of players who’ve moved to a new club this transfer window 📈💫</p>
                        </div> -->
                        <div class="player-position-goalkeeper">
                            <div class="player-card">
                                <img class="player-img" src="assets/images/gameoftheweek/david_raya.jpg" alt="david_raya">
                                <div class="player-info">
                                    <div class="player-name">Raya</div>
                                    <div class="player-team">BOU (H)</div>
                                </div>
                            </div>
                        </div>
                        <div class="player-position-defender">
                            <div class="player-card">
                                <img class="player-img" src="assets/images/gameoftheweek/Josko_Gvardiol.jpg" alt="Josko_Gvardiol">
                                <div class="player-info">
                                    <div class="player-name">Gvardiol</div>
                                    <div class="player-team">WOL (H)</div>
                                </div>
                            </div>
                            <div class="player-card">
                                <img class="player-img" src="assets/images/gameoftheweek/Daniel_Munoz.jpg" alt="Daniel_Munoz">
                                <div class="player-info">
                                    <div class="player-name">Munoz</div>
                                    <div class="player-team">NFO (H)</div>
                                </div>
                            </div>
                            <div class="player-card">
                                <img class="player-img" src="assets/images/gameoftheweek/Jake_O_Brien.jpg" alt="Jake_O_Brien">
                                <div class="player-info">
                                    <div class="player-name">O'Brien</div>
                                    <div class="player-team">IPS (H)</div>
                                </div>
                            </div>
                        </div>
                        <div class="player-position-center">
                            <div class="player-card">
                                <img class="player-img" src="assets/images/gameoftheweek/Mohamed_Salah.jpg" alt="Mohamed_Salah">
                                <div class="player-info">
                                    <div class="player-name">M. Salah</div>
                                    <div class="player-team">CHE (A)</div>
                                </div>
                            </div>
                            <div class="player-card">
                                <img class="player-img" src="assets/images/gameoftheweek/Bryan_Mbeumo.jpg" alt="Bryan_Mbeumo">
                                <div class="player-info">
                                    <div class="player-name">Mbeumo</div>
                                    <div class="player-team">MUN (H)</div>
                                </div>
                            </div>
                            <div class="player-card">
                                <img class="player-img" src="assets/images/gameoftheweek/Jarrod_Bowen.jpg" alt="Jarrod_Bowen">
                                <div class="player-info">
                                    <div class="player-name">Bowen</div>
                                    <div class="player-team">TOT (H)</div>
                                </div>
                            </div>
                            <div class="player-card">
                                <img class="player-img" src="assets/images/gameoftheweek/Leandro_Trossard.jpg" alt="Leandro_Trossard">
                                <div class="player-info">
                                    <div class="player-name">Trossard</div>
                                    <div class="player-team">BOU (H)</div>
                                </div>
                            </div>
                        </div>
                        <div class="player-position-forward">
                            <div class="player-card">
                                <img class="player-img" src="assets/images/gameoftheweek/Alexander_Isak.jpg" alt="Alexander_Isak">
                                <div class="player-info">
                                    <div class="player-name">Isak</div>
                                    <div class="player-team">BHA (A)</div>
                                </div>
                            </div>
                            <div class="player-card">
                                <img class="player-img" src="assets/images/gameoftheweek/Omar_Marmoush.jpg" alt="Omar_Marmoush">
                                <div class="player-info">
                                    <div class="player-name">Marmoush</div>
                                    <div class="player-team">WOL (H)</div>
                                </div>
                            </div>
                            <div class="player-card">
                                <img class="player-img" src="assets/images/gameoftheweek/Iliman_Ndiaye.jpg" alt="Iliman_Ndiaye">
                                <div class="player-info">
                                    <div class="player-name">Ndiaye</div>
                                    <div class="player-team">IPS (H)</div>
                                </div>
                            </div>
                        </div>
                        <div class="desktop-only-warning" style="display: none">
                            This content is available on larger screens (desktop only).
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="section-heading-container">
        <h2 class="section-heading">Our Manchester City E-Sports Squad </h2>
    </div>
    <section class="esports-squad">

        <div class="squad-container">
            <a href="/esports-page" class="squad-card">
                <img src="/assets/images/teameasportsfc/tekkz.jpg" alt="teameasportsfctekkz" class="squad-image">
                <div class="squad-content">
                    <h3 class="squad-title">The Man City Esports Team</h3>
                    <p class="squad-description">EA SPORTS FC</p>
                    <span class="explore-btn">see more</span>
                </div>
            </a>
        </div>
    </section>

    <footer class="footer-box">
        <div class="footer-sub-box">
            <p class="mc1text text-start font-weight-bold">Citizens</p>
            <hr class="my-1-">
            <p class="all-link-aboutus">
                Fan Support
            </p>
        </div>

        <div class="footer-right">
            <div class="mancity-logo-box">
                <a class="logo-mancity-box" href="index.php">
                    <img class="logo-mancity-footer" src="assets/images/logo/mancity.jpg" alt="mancitylogo">
                </a>
                <a class="navbar-brand-footer" href="index.php">
                    <i class="icon-ig ri-instagram-fill"></i>
                </a>
                <a class="navbar-brand-footer" href="index.php">
                    <i class="icon-facebook ri-facebook-circle-fill"></i>
                </a>
                <a class="navbar-brand-footer" href="index.php">
                    <i class="icon-youtube ri-youtube-fill"></i>
                </a>
                <a class="navbar-brand-footer" href="index.php">
                    <i class="icon-twitter-x ri-twitter-x-fill"></i>
                </a>
            </div>
        </div>
    </footer>
    <div class="box-list-group col-md-5">
        <div class="list-group" id="show-list">
        </div>
    </div>


    <button onclick="backToTop()" id="btt" title="Back to top"><i class="ri-arrow-up-circle-fill"></i></button>










    <!-- <div id="modalCart" class="modal" style="display: none;">
        <div onclick="CloseModal()" class="modal-bg"></div>
        <div class="modal-page">
            <p class="topic-news">Manchester City Poster</p>
            <br>
            <div id="mycart" class="cartlist">

            </div>
            <div class="btn-control">
                <button onclick="CloseModal()" class="btn">
                    Cancel
                </button>
                <button class="btn btn-buy">
                    Buy
                </button>
            </div>
        </div>
    </div> -->

    <!-- <div class="news-container1">
        <div class="my-card1">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.</p>
        </div>
        <div class="my-card1">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.</p>
        </div>
        <div class="my-card1">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.</p>
        </div>
        <div class="my-card1">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.</p>
        </div>
        <div class="my-card1">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.</p>
        </div>
        <div class="my-card1">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque.</p>
        </div>
    </div> -->



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