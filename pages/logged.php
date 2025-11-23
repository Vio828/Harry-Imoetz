<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: signup.php");
    exit();
}
?>

<?php include("home.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>KIZUNA</title>
    <link rel="stylesheet" type="text/css" href="/styles/home.css">
    <link rel="website icon" type="png" href="/image/Logo footer.png">
</head>

<body>
    <img src="/image/top-view-delicious-sushi-with-sauce.jpg" alt="" class="top_sushi">

    <div class="header">
        <div id="home_bg"></div>
        <h3 class="home">Home</h3>
        <div id="menu_bg"></div>
        <a href="/pages/menu-sushi1.html">
            <h3 class="menu">Menu</h3>
        </a>
        <a href="/pages/account-profile.html">
            <h3 class="contact">Contact</h3>
        </a>
        <div id="logo_bg"></div>
        <img src="/image/Logo.png" alt="" class="logo">
        <a href="/pages/branches1.html">
            <h3 class="branches">Branches</h3>
        </a>
        <a href="/pages/cart.html">
            <h3 class="cart">Cart</h3>
        </a>
        <a href="/pages/account_profile.html">
            <h3 class="account">Account</h3>
        </a>
    </div>

    <div class="op_text">
        <h3 class="h1">Feel The Taste Of Japanese Food</h3>
        <h3 class="desc">Feel the taste of most popular Japanese foods from everywhere and anytime</h3>
        <button>Order Now</button>
    </div>

    <div class="about_us">
        <img id="aboutImg" src="/image/close-up-nigiri-maki-sushi.jpg" alt="" class="img_ab">
        <hr class="line1">
        <img src="/image/Gradient.png" alt="" class="gradient">
        <h3 class="h1">A Journey of Japanese Flavours</h3>
        <h3 class="desc_2">From the art of sushi-making to the spirit of hospitality, we bring authenticJapanese
            flavours closer to you.</h3>
        <button>Learn More</button>
        <hr class="line2">
    </div>

    <div class="best_seller">
        <h3 class="h1">BEST SELLER</h3>
        <div class="options">
            <button class="all">All</button>
            <button class="sushi">Sushi</button>
            <button class="udon">Udon</button>
            <button class="drinks">Drinks</button>
            <Button class="others">Others</Button>
        </div>

        <img src="/image/Left arrow.png" alt="" class="left">

        <div class="menu">
            <div class="menu1">
                <div class="outer">
                    <div class="inner">
                        <img src="/Food/Salmon Nigiri.png" alt="">
                    </div>
                    <h3>Salmon Nigiri</h3>
                    <div class="rating">
                        <h3><img src="/image/Star.png" alt=""><span class="rate">4.9</span> <span
                                class="price">$4.95</span></h3>
                    </div>
                </div>
            </div>

            <div class="menu2">
                <div class="outer">
                    <div class="inner">
                        <img src="/Food/Rainbow Fusion.png" alt="">
                    </div>
                    <h3>Rainbow Fusion Maki</h3>
                    <div class="rating">
                        <h3><img src="/image/Star.png" alt=""><span class="rate">4.8</span> <span
                                class="price">$21.00</span></h3>
                    </div>
                </div>
            </div>

            <div class="menu3">
                <div class="outer">
                    <div class="inner">
                        <img src="/Food/Tuna Avocado.png" alt="">
                    </div>
                    <h3>Tuna Avo Maki</h3>
                    <div class="rating">
                        <h3><img src="/image/Star.png" alt=""><span class="rate">4.5</span> <span
                                class="price">$18.00</span></h3>
                    </div>
                </div>
            </div>
        </div>

        <img src="/image/Right arrow.png" alt="" class="right">

        <button class="more">Explore Foods <img src="/image/arrow-right.png" alt=""></button>
    </div>

    <div class="foods">
        <hr class="line3">

        <h3 class="h1">Japanese Foods</h3>
        <h3 class="desc">Experience the taste of authentic sushi, freshly made for you.</h3>

        <div class="list">
            <div class="first_list">
                <h3><img src="/image/Pocket.png" alt="">Nigiri Sushi</h3>
                <h3><img src="/image/Pocket.png" alt="">Maki Sushi</h3>
                <h3><img src="/image/Pocket.png" alt="">Shoyu Ramen</h3>
            </div>

            <div class="sec_list">
                <h3><img src="/image/Pocket.png" alt="">Gyudon</h3>
                <h3><img src="/image/Pocket.png" alt="">Gyoza</h3>
                <h3><img src="/image/Pocket.png" alt="">Yakitori</h3>
            </div>
        </div>

        <img src="/image/korean-food-kim-bap-steamed-rice-with-vegetables-seaweed.jpg" alt="" class="food_img">
    </div>

    <div class="drinks">
        <img src="/image/front-view-matcha-tea-glasses-tray.jpg" alt="" class="drink_img">

        <h3 class="h1">Japanese Drinks</h3>
        <h3 class="desc">Experience authentic flavors in every sip.</h3>

        <div class="list">
            <div class="first_list">
                <h3><img src="/image/Pocket.png" alt="">Matcha Latte</h3>
                <h3><img src="/image/Pocket.png" alt="">Sakura Tea</h3>
                <h3><img src="/image/Pocket.png" alt="">Genmaicha</h3>
            </div>

            <div class="sec_list">
                <h3><img src="/image/Pocket.png" alt="">Hojicha</h3>
                <h3><img src="/image/Pocket.png" alt="">Ramune Soda</h3>
                <h3><img src="/image/Pocket.png" alt="">Mugicha</h3>
            </div>
        </div>

        <hr class="line4">
    </div>

    <div class="offers">
        <img src="/image/割引.png" alt="" class="bg_img">

        <h3 class="h1">Get Sushi Offers Straight to Your Inbox</h3>
        <h3 class="desc">Join our newsletter for the latest menus and special deals</h3>
        <input type="email" placeholder="Enter your email...."> <button>Send</button>
    </div>

    <div class="footer">
        <img src="/image/Logo footer.png" alt="" class="logo">

        <ul class="page">
            <li class="h1">Pages</li>
            <li class="desc">Home</li>
            <li class="desc">Menu</li>
            <li class="desc">Contact</li>
            <li class="desc">Branches</li>
            <li class="desc">Account</li>
        </ul>

        <ul class="socials">
            <li class="h1">Socials</li>
            <li class="desc">+1 (202) 555-0147</li>
            <li class="desc">@Kizuna</li>
            <li class="desc">Official Kizuna</li>
            <li class="desc">Kizuna@email.com</li>
        </ul>

        <ul class="icons">
            <li><img src="/image/whatsapp.png" alt=""></li>
            <li><img src="/image/insta.png" alt=""></li>
            <li><img src="/image/Youtube.png" alt=""></li>
            <li><img src="/image/Email.png" alt=""></li>
        </ul>

        <iframe class="loc"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423284.69000255124!2d-118.41173260000001!3d34.02047895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sid!4v1763697936707!5m2!1sen!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

        <hr class="line5">

        <h3 class="rights">© 2025 Kizuna. All rights reserved.</h3>
        <h3 class="tospp"><span class="tos">Terms of Service</span> <span class="pp">Privacy Policy</span></h3>
    </div>
</body>

</html>