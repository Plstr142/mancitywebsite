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
                                <img id="mdd-img" src="assets/images/1746805811001.jpg" alt="DavidSilva">
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