<nav
        class="navbar navbar-expand-sm">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img class="logo-mancity" src="assets/images/logo/mancity.jpg" alt="mancitylogo">
            </a>
            <button
                class="navbar-toggler d-lg-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Home
                            <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="dropdownId"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">Dropdown</a>
                        <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <div class="d-flex my-2 my-lg-0">
                    <?php if (isset($_SESSION['adminid'])) { ?>
                        <a id="logout" class="btn btn-warning">Logout</a>
                    <?php } else { ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>

    

    <main class="container">
        <?php
        $adminId = $_SESSION['adminid'];
        $stmt = $con->prepare("SELECT * FROM users WHERE id = :adminid");
        $stmt->bindParam(":adminid", $adminId);
        $stmt->execute();

        $adminData = $stmt->fetch();
        ?>
        <!-- <h1>Hello, <= htmlspecialchars(isset($adminData['username']) ? $adminData['username'] : 'Guest'); ></h1> -->
    </main>

<div class="landing_wrapper">
            <div class="container_search">
                <div class="search_box row">
                    <div class="col-md-8 mx-auto rounded p-4 m-4 w-auto">
                        <a href="#" class="image_row">
                            <img src="assets/images/thisistheplacemancity.jpg" alt="image" class="card_img">
                        </a>
                        <h5 class="text-center font-weight-bold">Manchester City Search</h5>
                        <hr class="my-1">
                        <!-- <h5 class="text-center text-secondary">Please write any player name in the search box</h5> -->
                        <form action="details.php" method="POST" class="p-2" style="position: relative;">
                            <div class="input-group">
                                <input type="text" name="search" id="search" class="form-control form-control-lg border-info rounded" placeholder="Please write any player name in the search box" autocomplete="off" required>
                                <div class="input-group-append">
                                    <input type="submit" name="submit" value="Search" class="btn btn-dark btn-lg m-2 rounded">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="list-group" style="position: absolute; width: 400px;" id="show-list"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-center m-4">Our Top Poster</h2>

        <section class="poster_container">
            <!-- class="carousel slide" data-bs-ride="carousel" -->
            <!-- id="playerCarousel" class="carousel-inner" -->
            <div class="card_container">
                <div class="card_content">
                    <div>
                        <article class="card_article">
                            <div class="card_image">
                                <img src="assets/images/TheEtihadStadiumPoster.jpg" alt="image" class="card_img">
                            </div>

                            <div class="card_data">
                                <h4 class="card_name"><?php echo $poster_name[0]; ?></h4>
                                <p class="card_description">
                                    This is TheEtihadStadium poster
                                </p>

                                <a href="#" class="card_price_tag">
                                    <div class="left">
                                        <i class="fa-solid fa-tag"></i>
                                        <span>Price</span>
                                    </div>

                                    <div class="right card_price">
                                        <span>260THB</span>
                                    </div>
                                </a>
                            </div>
                        </article>
                        <article class="card_article">
                            <div class="card_image">
                                <img src="assets/images/PosterErlingBrautHaalandGoalCollection.jpg" alt="" class="card_img">
                            </div>

                            <div class="card_data">
                                <h4 class="card_name"><?php echo $poster_name[1]; ?></h4>
                                <p class="card_description">
                                    This is Erling Braut Haaland Goal Collection
                                </p>

                                <a href="#" class="card_price_tag">
                                    <div class="left">
                                        <i class="fa-solid fa-tag"></i>
                                        <span>Price</span>
                                    </div>

                                    <div class="right card_price">
                                        <span>280THB</span>
                                    </div>
                                </a>
                            </div>
                        </article>
                        <article class="card_article">
                            <div class="card_image">
                                <img src="assets/images/pep_1000_goals_wide.jpg" alt="" class="card_img">
                            </div>

                            <div class="card_data">
                                <h4 class="card_name"><?php echo $poster_name[2]; ?></h4>
                                <p class="card_description">
                                    This is Pep 1000 goals
                                </p>

                                <a href="#" class="card_price_tag">
                                    <div class="left">
                                        <i class="fa-solid fa-tag"></i>
                                        <span>Price</span>
                                    </div>

                                    <div class="right card_price">
                                        <span>340THB</span>
                                    </div>
                                </a>
                            </div>
                        </article>
                        <article class="card_article">
                            <div class="card_image">
                                <img src="assets/images/KyleWalker.jpg" alt="" class="card_img">
                            </div>

                            <div class="card_data">
                                <h4 class="card_name"><?php echo $poster_name[3]; ?></h4>
                                <p class="card_description">
                                    This is Kyle Walker
                                </p>

                                <div class="card_price_container">
                                    <a href="#" class="card_price_tag">
                                        <div class="left">
                                            <i class="fa-solid fa-tag"></i>
                                            <span>Price</span>
                                        </div>

                                        <div class="right card_price">
                                            <span>240THB</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>