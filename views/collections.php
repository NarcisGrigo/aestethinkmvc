<?php
require_once("../public/header.html.php");
?>

<body>
    <div class="collections">
        <nav>
            <!-- <a href="http://localhost/aesthetinkmvc/views/home.html.php" class="btnh">HOME</a> -->
            <a href="http://localhost/aesthetinkmvc/views/artists.php" class="btna">ARTISTS</a>
            <a href="http://localhost/aesthetinkmvc/views/contact.php" class="btnc">CONTACT</a>
        </nav>
        <form action="logout.php" method="post">
            <input type="submit" class="logout custom-button" value="Logout"
                style="background-color: #1b201e; color:#ffd700; width:120px; height:35px; font-family: Raleway, sans-serif; font-size:25px; border:none; outline:none; box-shadow:none; cursor:pointer;">
        </form>
        <!-- <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active"> -->
        <h2 class="icarus_title">Icarus Collection</h2>
        <div class="tattoo">
            <div class="card">
                <img src="/aesthetinkmvc/public/assets/img/icarus_to_the_sun.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <p class="titletattoo">Tattoo Model</p>
                    <h5 class="card-title">Icarus To the Sun</h5>
                    <p class="price">€350</p>
                    <button type="submit" class="buy-button">Buy</button>
                </div>
            </div>
            <div class="card">
                <img src="/aesthetinkmvc/public/assets/img/winged_icarus.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <p class="titletattoo">Tattoo Model</p>
                    <h5 class="card-title">Winged Icarus</h5>
                    <p class="price">€500</p>
                    <button type="submit" class="buy-button">Buy</button>
                </div>
            </div>
            <div class="card">
                <img src="/aesthetinkmvc/public/assets/img/icarus_in_the_sun.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <p class="titletattoo">Tattoo Model</p>
                    <h5 class="card-title">Icarus In The Sun</h5>
                    <p class="price">€550</p>
                    <button type="submit" class="buy-button">Buy</button>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel-item">
        <h2 class="icarus_title">Sculpture Collection</h2>
        <div class="tattoo">
            <div class="card">
                <img src="/aesthetinkmvc/public/assets/img/ingenious.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <p class="titletattoo">Tattoo Model</p>
                    <h5 class="card-title">Ingenious Sculpture</h5>
                    <p class="price">€550</p>
                    <button type="submit" class="buy-button">Buy</button>
                </div>
            </div>
            <div class="card">
                <img src="/aesthetinkmvc/public/assets/img/centaur.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <p class="titletattoo">Tattoo Model</p>
                    <h5 class="card-title">Centaur Sculpture</h5>
                    <p class="price">€600</p>
                    <button type="submit" class="buy-button">Buy</button>
                </div>
            </div>
            <div class="card">
                <img src="/aesthetinkmvc/public/assets/img/poseidon.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <p class="titletattoo">Tattoo Model</p>
                    <h5 class="card-title">Poseidon Sculpture</h5>
                    <p class="price">€500</p>
                    <button type="submit" class="buy-button">Buy</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>
<?php
require_once("../public/footer.html.php");
?>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> -->