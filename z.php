<?php

/* =========================================================
   I AM DASH - MOBILE LEGENDS INSPIRED PORTFOLIO
   ONE FILE ONLY
   PHP + HTML + CSS + JAVASCRIPT
   ========================================================= */

$name = "-DASH-";
$role = "ROAM/MAGE";
$rank = "MYTHICAL GLORY";

$stats = [
    "Matches" => "1,248",
    "Win Rate" => "68.7%",
    "MVP" => "214",
    "Assists" => "4,892"
];

/*
|--------------------------------------------------------------------------
| ONLINE HERO IMAGES
|--------------------------------------------------------------------------
*/

$belerickImage =
    "https://vignette.wikia.nocookie.net/mobile-legends/images/1/17/Belerick.png/revision/latest?cb=20190615171457";

$nanaImage =
    "https://vignette.wikia.nocookie.net/mobile-legends/images/3/38/Nana.png/revision/latest?cb=20190116120936";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        I AM <?php echo $name; ?> | Roam Portfolio
    </title>


    <style>

        /* =====================================================
           RESET
        ===================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background:
                radial-gradient(
                    circle at center,
                    rgba(56, 150, 105, 0.18),
                    transparent 35%
                ),
                radial-gradient(
                    circle at left center,
                    rgba(50, 110, 80, 0.10),
                    transparent 30%
                ),
                linear-gradient(
                    135deg,
                    #030807,
                    #07120f,
                    #020605
                );

            color: white;

            min-height: 100vh;

            overflow-x: hidden;
        }


        /* =====================================================
           BACKGROUND EFFECTS
        ===================================================== */

        body::before {
            content: "";

            position: fixed;

            inset: 0;

            pointer-events: none;

            background-image:
                linear-gradient(
                    rgba(255,255,255,.018) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    90deg,
                    rgba(255,255,255,.018) 1px,
                    transparent 1px
                );

            background-size: 50px 50px;

            opacity: .25;

            z-index: -3;
        }

        .glow {
            position: fixed;

            width: 500px;
            height: 500px;

            border-radius: 50%;

            background:
                rgba(77, 255, 168, .08);

            filter: blur(120px);

            pointer-events: none;

            z-index: -2;
        }

        .glow.one {
            top: -250px;
            left: -200px;
        }

        .glow.two {
            bottom: -250px;
            right: -200px;
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        nav {
            position: fixed;

            top: 0;
            left: 0;

            width: 100%;

            height: 75px;

            padding:
                0 7%;

            display: flex;

            justify-content:
                space-between;

            align-items:
                center;

            background:
                rgba(2, 9, 7, .72);

            backdrop-filter:
                blur(18px);

            -webkit-backdrop-filter:
                blur(18px);

            border-bottom:
                1px solid
                rgba(125, 255, 192, .10);

            z-index: 999;
        }

        .logo {
            color: #7dffc0;

            text-decoration: none;

            font-size: 20px;

            font-weight: 900;

            letter-spacing: 4px;
        }

        .logo span {
            color: white;
        }

        .nav-links {
            display: flex;

            gap: 30px;
        }

        .nav-links a {
            color: #91a39b;

            text-decoration: none;

            font-size: 11px;

            font-weight: bold;

            letter-spacing: 2px;

            transition: .3s;
        }

        .nav-links a:hover {
            color: #7dffc0;

            text-shadow:
                0 0 15px
                rgba(125,255,192,.5);
        }


        /* =====================================================
           HERO
        ===================================================== */

        .hero {
            min-height: 100vh;

            position: relative;

            display: flex;

            justify-content: center;

            align-items: center;

            padding:
                110px 20px 60px;

            overflow: hidden;
        }


        /* =====================================================
           CHARACTER CONTAINERS
        ===================================================== */

        .character {
            position: absolute;

            bottom: 0;

            width: 43%;

            height: 88%;

            z-index: 2;

            pointer-events: none;

            display: flex;

            justify-content: center;

            align-items: flex-end;
        }

        .character.left {
            left: -7%;

            justify-content: flex-start;
        }

        .character.right {
            right: -7%;

            justify-content: flex-end;
        }


        /* =====================================================
           CHARACTER IMAGES
        ===================================================== */

        .character img {
            height: 100%;

            width: auto;

            max-width: none;

            object-fit: contain;

            object-position: bottom;

            filter:
                drop-shadow(
                    0 0 35px
                    rgba(60, 255, 170, .14)
                );

            user-select: none;
        }

        .character.left img {
            transform:
                translateX(0)
                scale(1.08);
        }

        .character.right img {
            transform:
                translateX(0)
                scale(1.08);
        }


        /* =====================================================
           CHARACTER DARK FADE
        ===================================================== */

        .character.left::after {
            content: "";

            position: absolute;

            inset: 0;

            background:
                linear-gradient(
                    90deg,
                    transparent 50%,
                    #06100d 100%
                );

            pointer-events: none;
        }

        .character.right::after {
            content: "";

            position: absolute;

            inset: 0;

            background:
                linear-gradient(
                    270deg,
                    transparent 50%,
                    #06100d 100%
                );

            pointer-events: none;
        }


        /* =====================================================
           CHARACTER NAME
        ===================================================== */

        .hero-name {
            position: absolute;

            bottom: 45px;

            padding:
                10px 20px;

            background:
                rgba(3, 12, 9, .82);

            border:
                1px solid
                rgba(125,255,192,.22);

            color: #7dffc0;

            font-size: 11px;

            font-weight: bold;

            letter-spacing: 4px;

            z-index: 5;
        }

        .character.left .hero-name {
            left: 25%;
        }

        .character.right .hero-name {
            right: 25%;
        }


        /* =====================================================
           CENTER PROFILE
        ===================================================== */

        .profile {
            position: relative;

            z-index: 10;

            width: min(650px, 94%);

            padding:
                48px 40px;

            text-align: center;

            background:
                linear-gradient(
                    145deg,
                    rgba(14, 33, 26, .90),
                    rgba(3, 12, 9, .86)
                );

            border:
                1px solid
                rgba(125,255,192,.20);

            border-radius: 18px;

            backdrop-filter:
                blur(15px);

            -webkit-backdrop-filter:
                blur(15px);

            box-shadow:
                0 30px 100px
                rgba(0,0,0,.65),

                inset 0 1px 0
                rgba(255,255,255,.05);

            animation:
                profileIn 1s ease;
        }


        /* =====================================================
           ONLINE
        ===================================================== */

        .online {
            display: inline-flex;

            align-items: center;

            gap: 8px;

            padding:
                7px 15px;

            margin-bottom: 20px;

            border-radius: 50px;

            background:
                rgba(91,255,169,.07);

            border:
                1px solid
                rgba(91,255,169,.18);

            color: #7dffc0;

            font-size: 10px;

            font-weight: bold;

            letter-spacing: 2px;
        }

        .online-dot {
            width: 7px;
            height: 7px;

            background: #62ffae;

            border-radius: 50%;

            box-shadow:
                0 0 12px
                #62ffae;

            animation:
                pulse 1.5s infinite;
        }


        /* =====================================================
           NAME
        ===================================================== */

        .iam {
            color: #81928a;

            font-size: 13px;

            letter-spacing: 9px;

            margin-bottom: 5px;
        }

        h1 {
            font-size:
                clamp(65px, 11vw, 115px);

            line-height: .9;

            letter-spacing: 6px;

            font-weight: 1000;

            color: white;

            text-shadow:
                0 0 35px
                rgba(125,255,192,.15);
        }

        .role {
            margin-top: 18px;

            color: #7dffc0;

            font-size: 15px;

            font-weight: bold;

            letter-spacing: 8px;
        }


        /* =====================================================
           DIVIDER
        ===================================================== */

        .divider {
            width: 110px;

            height: 2px;

            margin:
                25px auto;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    #7dffc0,
                    transparent
                );

            box-shadow:
                0 0 12px
                rgba(125,255,192,.35);
        }


        /* =====================================================
           DESCRIPTION
        ===================================================== */

        .intro {
            color: #91a29b;

            max-width: 500px;

            margin: auto;

            font-size: 13px;

            line-height: 1.8;
        }


        /* =====================================================
           RANK
        ===================================================== */

        .rank {
            display: inline-block;

            margin-top: 22px;

            padding:
                10px 18px;

            background:
                rgba(255,255,255,.035);

            border:
                1px solid
                rgba(255,255,255,.08);

            border-radius: 7px;

            color: #dfffee;

            font-size: 10px;

            font-weight: bold;

            letter-spacing: 2px;
        }


        /* =====================================================
           BUTTONS
        ===================================================== */

        .buttons {
            display: flex;

            justify-content: center;

            gap: 12px;

            flex-wrap: wrap;

            margin-top: 25px;
        }

        .btn {
            padding:
                13px 25px;

            border-radius: 7px;

            text-decoration: none;

            font-size: 10px;

            font-weight: bold;

            letter-spacing: 1.5px;

            cursor: pointer;

            transition: .3s;

            border: none;
        }

        .primary {
            background:
                #7dffc0;

            color:
                #031009;

            box-shadow:
                0 0 25px
                rgba(125,255,192,.12);
        }

        .primary:hover {
            transform:
                translateY(-3px);

            box-shadow:
                0 10px 30px
                rgba(125,255,192,.25);
        }

        .secondary {
            background:
                rgba(255,255,255,.04);

            color:
                #d0ddd7;

            border:
                1px solid
                rgba(255,255,255,.12);
        }

        .secondary:hover {
            background:
                rgba(255,255,255,.09);

            transform:
                translateY(-3px);
        }


        /* =====================================================
           STATS
        ===================================================== */

        .stats {
            display:
                grid;

            grid-template-columns:
                repeat(4, 1fr);

            margin-top: 35px;

            padding-top: 25px;

            border-top:
                1px solid
                rgba(255,255,255,.07);
        }

        .stat {
            border-right:
                1px solid
                rgba(255,255,255,.07);
        }

        .stat:last-child {
            border-right: none;
        }

        .stat strong {
            display: block;

            font-size: 19px;

            margin-bottom: 5px;

            color: white;
        }

        .stat span {
            color: #697a73;

            font-size: 8px;

            letter-spacing: 1.5px;

            text-transform: uppercase;
        }


        /* =====================================================
           OTHER SECTIONS
        ===================================================== */

        section {
            padding:
                110px 8%;
        }

        .section-title {
            text-align: center;

            margin-bottom: 50px;
        }

        .section-title small {
            color: #7dffc0;

            font-size: 9px;

            letter-spacing: 4px;
        }

        .section-title h2 {
            margin-top: 10px;

            font-size: 40px;
        }


        /* =====================================================
           ABOUT CARDS
        ===================================================== */

        .cards {
            max-width: 1000px;

            margin: auto;

            display:
                grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 18px;
        }

        .card {
            padding: 30px;

            background:
                rgba(255,255,255,.035);

            border:
                1px solid
                rgba(255,255,255,.07);

            border-radius: 12px;

            transition: .3s;
        }

        .card:hover {
            transform:
                translateY(-7px);

            border-color:
                rgba(125,255,192,.25);
        }

        .card-icon {
            font-size: 28px;

            margin-bottom: 15px;
        }

        .card h3 {
            color: #7dffc0;

            margin-bottom: 10px;
        }

        .card p {
            color: #7d8d86;

            font-size: 13px;

            line-height: 1.7;
        }


        /* =====================================================
           HERO POOL
        ===================================================== */

        .hero-pool {
            max-width: 1000px;

            margin: auto;

            display:
                grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 20px;
        }

        .hero-card {
            position: relative;

            min-height: 240px;

            padding: 30px;

            overflow: hidden;

            display: flex;

            flex-direction: column;

            justify-content: flex-end;

            border-radius: 14px;

            background:
                linear-gradient(
                    135deg,
                    #10241d,
                    #050c09
                );

            border:
                1px solid
                rgba(255,255,255,.08);
        }

        .hero-card-number {
            position: absolute;

            top: 15px;

            right: 25px;

            font-size: 65px;

            font-weight: 900;

            color:
                rgba(255,255,255,.04);
        }

        .hero-card small {
            color: #7dffc0;

            letter-spacing: 3px;

            font-size: 9px;
        }

        .hero-card h3 {
            margin-top: 5px;

            font-size: 30px;
        }


        /* =====================================================
           CONTACT
        ===================================================== */

        .contact {
            text-align: center;
        }

        .contact p {
            max-width: 550px;

            margin:
                0 auto 25px;

            color: #82918b;

            font-size: 14px;

            line-height: 1.7;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {
            text-align: center;

            padding: 25px;

            border-top:
                1px solid
                rgba(255,255,255,.05);

            color: #52615b;

            font-size: 10px;

            letter-spacing: 1px;
        }


        /* =====================================================
           ANIMATIONS
        ===================================================== */

        @keyframes profileIn {

            from {
                opacity: 0;

                transform:
                    translateY(30px)
                    scale(.97);
            }

            to {
                opacity: 1;

                transform:
                    translateY(0)
                    scale(1);
            }

        }

        @keyframes pulse {

            0%, 100% {
                opacity: 1;
            }

            50% {
                opacity: .35;
            }

        }


        /* =====================================================
           TABLET
        ===================================================== */

        @media (max-width: 1000px) {

            .character {
                width: 48%;

                opacity: .35;
            }

            .character.left {
                left: -15%;
            }

            .character.right {
                right: -15%;
            }

            .profile {
                width: 680px;
            }

            .cards {
                grid-template-columns: 1fr;
            }

        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 650px) {

            nav {
                height: 65px;

                padding:
                    0 20px;
            }

            .nav-links {
                display: none;
            }

            .logo {
                font-size: 16px;
            }

            .hero {
                padding:
                    100px 12px 50px;
            }

            .character {
                width: 75%;

                height: 65%;

                opacity: .18;
            }

            .character.left {
                left: -35%;
            }

            .character.right {
                right: -35%;
            }

            .profile {
                padding:
                    40px 20px;
            }

            .iam {
                letter-spacing: 6px;
            }

            .role {
                letter-spacing: 5px;
            }

            .stats {
                grid-template-columns:
                    repeat(2, 1fr);

                gap: 20px;
            }

            .stat {
                border-right: none;
            }

            .hero-pool {
                grid-template-columns: 1fr;
            }

            section {
                padding:
                    80px 20px;
            }

            .section-title h2 {
                font-size: 32px;
            }

        }

    </style>

</head>


<body>


<!-- =====================================================
     BACKGROUND
===================================================== -->

<div class="glow one"></div>
<div class="glow two"></div>


<!-- =====================================================
     NAVIGATION
===================================================== -->

<nav>

    <a href="#home" class="logo">
        I AM <span>-DASH-</span>
    </a>

    <div class="nav-links">

        <a href="#home">
            HOME
        </a>

        <a href="#about">
            ABOUT
        </a>

        <a href="#heroes">
            HEROES
        </a>

        <a href="#contact">
            CONTACT
        </a>

    </div>

</nav>


<!-- =====================================================
     HERO SECTION
===================================================== -->

<main class="hero" id="home">


    <!-- =========================
         BELERICK - LEFT
    ========================== -->

    <div class="character left">

        <img
            src="<?php echo $belerickImage; ?>"
            alt="Belerick Mobile Legends"
        >

        <div class="hero-name">
            BELERICK
        </div>

    </div>


    <!-- =========================
         CENTER PROFILE
    ========================== -->

    <div class="profile">


        <div class="online">

            <span class="online-dot"></span>

            ONLINE • PLAYING

        </div>


        <div class="iam">
            I AM
        </div>


        <h1>
            <?php echo $name; ?>
        </h1>


        <div class="role">
            <?php echo $role; ?> MAIN
        </div>


        <div class="divider"></div>


        <p class="intro">

            I am a Roam main who enjoys controlling
            the map, protecting teammates, creating
            openings, and being the frontline when
            the team needs someone to step up.

        </p>


        <div class="rank">

            ⚔ <?php echo $rank; ?>

        </div>


        <div class="buttons">

            <a
                href="#about"
                class="btn primary"
            >
                VIEW PROFILE
            </a>

            <button
                class="btn secondary"
                onclick="showGameInfo()"
            >
                GAME INFO
            </button>

        </div>


        <div
            id="gameInfo"
            style="
                display:none;
                margin-top:20px;
                color:#7dffc0;
                font-size:12px;
            "
        >
            DASH is currently roaming the Land of Dawn. 🌿
        </div>


        <!-- =========================
             PLAYER STATS
        ========================== -->

        <div class="stats">

            <?php foreach ($stats as $label => $value): ?>

                <div class="stat">

                    <strong>
                        <?php echo $value; ?>
                    </strong>

                    <span>
                        <?php echo $label; ?>
                    </span>

                </div>

            <?php endforeach; ?>

        </div>

    </div>


    <!-- =========================
         NANA - RIGHT
    ========================== -->

    <div class="character right">

        <img
            src="<?php echo $nanaImage; ?>"
            alt="Nana Mobile Legends"
        >

        <div class="hero-name">
            NANA
        </div>

    </div>


</main>


<!-- =====================================================
     ABOUT
===================================================== -->

<section id="about">

    <div class="section-title">

        <small>
            PLAYER PROFILE
        </small>

        <h2>
            About Me
        </h2>

    </div>


    <div class="cards">


        <div class="card">

            <div class="card-icon">
                🛡️
            </div>

            <h3>
                Roam Main
            </h3>

            <p>
                My main role is Roam. I focus on
                vision, map control, rotations,
                initiating fights, and protecting
                the team.
            </p>

        </div>


        <div class="card">

            <div class="card-icon">
                🌿
            </div>

            <h3>
                Playstyle
            </h3>

            <p>
                I like creating opportunities for
                teammates, controlling the map,
                and making rotations that help
                the team secure objectives.
            </p>

        </div>


        <div class="card">

            <div class="card-icon">
                ⚔️
            </div>

            <h3>
                Mindset
            </h3>

            <p>
                Every match is another opportunity
                to improve positioning, teamwork,
                decision-making, and game sense.
            </p>

        </div>


    </div>

</section>


<!-- =====================================================
     HEROES
===================================================== -->

<section id="heroes">

    <div class="section-title">

        <small>
            MY HERO POOL
        </small>

        <h2>
            Favorite Heroes
        </h2>

    </div>


    <div class="hero-pool">


        <div class="hero-card">

            <div class="hero-card-number">
                01
            </div>

            <small>
                TANK • ROAM
            </small>

            <h3>
                Belerick
            </h3>

        </div>


        <div class="hero-card">

            <div class="hero-card-number">
                02
            </div>

            <small>
                MAGE • ROAM
            </small>

            <h3>
                Nana
            </h3>

        </div>


    </div>

</section>


<!-- =====================================================
     CONTACT
===================================================== -->

<section
    class="contact"
    id="contact"
>

    <div class="section-title">

        <small>
            LET'S PLAY
        </small>

        <h2>
            Ready to Queue?
        </h2>

    </div>


    <p>
        Looking for a Roamer who knows how to rotate,
        protect the team, and start the right fight?
    </p>


    <a
        href="mailto:dash@example.com"
        class="btn primary"
    >
        CONTACT DASH
    </a>

</section>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

    © <?php echo date("Y"); ?>

    I AM DASH • ROAM MAIN

</footer>


<!-- =====================================================
     JAVASCRIPT
===================================================== -->

<script>

    function showGameInfo() {

        const info =
            document.getElementById("gameInfo");

        if (info.style.display === "none") {

            info.style.display = "block";

        } else {

            info.style.display = "none";

        }

    }


    /*
    ---------------------------------------------------------
    SIMPLE MOUSE PARALLAX
    ---------------------------------------------------------
    */

    document.addEventListener(
        "mousemove",
        function(event) {

            const leftHero =
                document.querySelector(
                    ".character.left img"
                );

            const rightHero =
                document.querySelector(
                    ".character.right img"
                );

            if (!leftHero || !rightHero) {
                return;
            }

            const mouseX =
                (event.clientX /
                window.innerWidth) - 0.5;

            const mouseY =
                (event.clientY /
                window.innerHeight) - 0.5;


            leftHero.style.transform =
                `
                translateX(${mouseX * 18}px)
                scale(1.08)
                `;


            rightHero.style.transform =
                `
                translateX(${mouseX * -18}px)
                scale(1.08)
                `;

        }
    );


    /*
    ---------------------------------------------------------
    ACTIVE NAVIGATION
    ---------------------------------------------------------
    */

    const links =
        document.querySelectorAll(
            ".nav-links a"
        );

    links.forEach(function(link) {

        link.addEventListener(
            "click",
            function() {

                links.forEach(function(item) {

                    item.style.color = "";

                });

                this.style.color =
                    "#7dffc0";

            }
        );

    });

</script>


</body>
</html>