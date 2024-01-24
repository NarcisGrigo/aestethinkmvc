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

        <?php
        $collections = [
            'Icarus Collection' => [
                ['name' => 'Icarus To the Sun', 'image' => '/aesthetinkmvc/public/assets/img/icarus_to_the_sun.jpg', 'price' => '€350'],
                ['name' => 'Winged Icarus', 'image' => '/aesthetinkmvc/public/assets/img/winged_icarus.jpg', 'price' => '€500'],
                ['name' => 'Icarus In The Sun', 'image' => '/aesthetinkmvc/public/assets/img/icarus_in_the_sun.jpg', 'price' => '€550'],
            ],
            'Sculpture Collection' => [
                ['name' => 'Ingenious Sculpture', 'image' => '/aesthetinkmvc/public/assets/img/ingenious.jpg', 'price' => '€550'],
                ['name' => 'Centaur Sculpture', 'image' => '/aesthetinkmvc/public/assets/img/centaur.jpg', 'price' => '€600'],
                ['name' => 'Poseidon Sculpture', 'image' => '/aesthetinkmvc/public/assets/img/poseidon.jpg', 'price' => '€500'],
            ],
        ];

        foreach ($collections as $collectionTitle => $items) {
            echo '<div class="carousel-item">';
            echo '<h2 class="icarus_title">' . $collectionTitle . '</h2>';
            echo '<div class="tattoo">';
            foreach ($items as $item) {
                echo '<div class="card">';
                echo '<img src="' . $item['image'] . '" class="card-img-top" alt="..." />';
                echo '<div class="card-body">';
                echo '<p class="titletattoo">Tattoo Model</p>';
                echo '<h5 class="card-title">' . $item['name'] . '</h5>';
                echo '<p class="price">' . $item['price'] . '</p>';
                echo '<button type="submit" class="buy-button">Buy</button>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>

    <?php
    require_once("../public/footer.html.php");
    ?>
</body>
</html>
