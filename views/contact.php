<?php
require_once("../public/header.html.php");
?>

<body class="contbody">
    <nav>
        <!-- <a href="http://localhost/aesthetinkmvc/views/home.html.php" class="btnho">HOME</a> -->
        <a href="http://localhost/aesthetinkmvc/views/collections.php" class="btncl">COLLECTIONS</a>
        <a href="http://localhost/aesthetinkmvc/views/artists.php" class="btnar">ARTISTS</a>
    </nav>
    <form action="logout.php" method="post">
        <input type="submit" class="logout custom-button" value="Logout"
            style="background-color: #1b201e; color:#ffd700; width:120px; height:35px; font-family: Raleway, sans-serif; font-size:25px; border:none; outline:none; box-shadow:none; cursor:pointer;">
    </form>
    <div>
        <img src="/img/aesthhand.jpg" alt="" class="aesthand" />
    </div>
    <div class="cntc">
        <h3>Get in touch with us</h3>
        <h4 class="credential">PHONE</h4>
        <p class="undercred">(123) 456-7890</p>
        <h4 class="credential">EMAIL</h4>
        <p class="undercred">aesthetink@tattoo.com</p>
        <h4 class="credential">SOCIALS</h4>
        <i class="fb fa-brands fa-facebook-f"></i>
        <i class="inst fa-brands fa-instagram"></i>
        <i class="tw fa-brands fa-x-twitter"></i>
    </div>
</body>
<?php
require_once("../public/footer.html.php");
?>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/761e9fb707.js" crossorigin="anonymous"></script> -->