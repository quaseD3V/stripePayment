<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Artists - New Release | Thin Records | www.thinrecords.com</title>
    <meta name="description" content="Out now!" />
    <meta property="og:title" content="Imanbek &amp;  Thin Records" />
    <meta property="og:description" content="Out now!" />
    <meta property="spinninrecords:content:id" content="7817" />
    <meta property="spinninrecords:content:type" content="release" />
    <meta property="og:type" content="music.song" />
    <meta property="music:release_date" content="2022-02-18T00:00:00+01:00" />
    <link rel="canonical" href="belly-dancer/details.html" />
    <link rel="icon" type="image/png" href="images/ico.png" />
    <link rel="apple-touch-icon" type="image/png" href="images/icon-apple-touch.png" />
    <meta name="theme-color" content="#e6e6e6">
    <meta name="thinrecords:bundle" content="releaseControllerReleaseDetail" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="fonts/spinnin/Typekit.js" defer="defer" async="async"></script>
    <link rel="stylesheet" href="css/main.cf5239f0.css">
    <style>
        body {
            background: linear-gradient(253deg, #0cc898, #1797d2, #864fe1);
            background-size: 300% 300%;
            -webkit-animation: Background 25s ease infinite;
            -moz-animation: Background 25s ease infinite;
            animation: Background 25s ease infinite;
        }

        @-webkit-keyframes Background {
            0% {
                background-position: 0% 50%
            }

            50% {
                background-position: 100% 50%
            }

            100% {
                background-position: 0% 50%
            }
        }

        @-moz-keyframes Background {
            0% {
                background-position: 0% 50%
            }

            50% {
                background-position: 100% 50%
            }

            100% {
                background-position: 0% 50%
            }
        }

        @keyframes Background {
            0% {
                background-position: 0% 50%
            }

            50% {
                background-position: 100% 50%
            }

            100% {
                background-position: 0% 50%
            }
        }

        .full-screen {
            position: relative;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: url(https://i.imgur.com/wCG2csZ.png);
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column
                /* works with row or column */

                flex-direction: column;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            text-align: center;
        }

        h1 {
            color: #fff;
            font-family: 'Open Sans', sans-serif;
            font-weight: 200;
            font-size: 2em;
            letter-spacing: -2px;
            text-align: center;
            text-shadow: 1px 2px 1px rgba(0, 0, 0, .6);
        }

        h1:after {
            display: block;
            color: #fff;
            letter-spacing: 1px;
            font-family: 'Poiret One', sans-serif;
            content: 'Very Hard';
            font-size: .4em;
            text-align: center;
        }

        .button-line {
            font-family: 'Open Sans', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
            background: transparent;
            border: 1px solid #fff;
            color: #fff;
            text-align: center;
            font-size: 1.4em;
            opacity: .8;
            padding: 20px 40px;
            text-decoration: none;
            transition: all .5s ease;
            margin: 0 auto;
            display: block;
            width: 100px;
        }

        .button-line:hover {
            opacity: 1;
        }
    </style>
</head>

<body class="release-controller release-controller-release-detail full-screen">
    <div class="grid-container bootstrap release">
        <div class="top-margin"></div>
        <div class="side-marginleft"></div>
        <div class="side-marginright"></div>
        <div class="white-background"></div>



        <div class="title mobile h-auto marquee-container">
            <div class="songtitle h-auto white-space-nowrap text-center"><span class="marquee-visible">|</span><span class="marquee-visible">

                </span>

            </div>
        </div>


        <div class="release-date-label">
            <div class="center-container"><!-- Edit the date -->
                <div class="release-date">March, 2023</div>
                <div class="release-label"><a href="https://bit.ly/3wuNgXL">THIN RECORDS</a>
                </div>
            </div>
        </div>


        <div style="caret-color: transparent;" class="play-button" data-track-id="">
            <div class="button" id="toque">

                <span id="play" onclick="PLAY();music.play()" class="icon play white pseudo-play" data-category="preview-play"></span>
                <span id="pause" onclick="PAUSE();music.pause()" class="icon pause white pseudo-pause"></span>

            </div>

            <script>
                const music = new Audio('player/Obzkure - Very Hard.mp3') // <----   edit the name of song
                var playng = false

                function PLAY() {

                    document.getElementById('play').style.display = 'none'
                    document.getElementById('pause').style.display = 'block'
                }

                function PAUSE() {

                    document.getElementById('play').style.display = 'block'
                    document.getElementById('pause').style.display = 'none'
                }

                music.addEventListener("canplaythrough", (event) => {
                    music.play()

                })

                music.addEventListener("canplaythrough", (event) => {
                    music.pause()

                })

                music.loop = false;
                music.playbackRate = 1;
            </script>


        </div>



        <div class="cd-art"><img class="image" src="releases/images/obzkure.jpg" title="Very Hard" alt="Very Hard" />
        </div>

        <div class="audio-tab subtab link-buttons">
            <div class="bottom-buttons">
                <div class="flex-container">
                    <form action="action.php" method="POST"><!-- Edit the name data in the stripe script -->
                        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="your pk_live here" data-image="./images/ico.png" data-name="Obzkure - Very Hard" data-description="After checkout the download will automatically start" data-amount="{{ORDER_AMOUNT}}" data-currency="usd" data-label="BUY HERE!"></script>
                    </form>
                </div>
            </div>
        </div>


        <div class="desktop desktop-text-area">
            <div class="title">
                <div class="song-release songtitle">
                    <!-- Edit the Artist Name -->
                    <h1>Obzkure</h1>
                </div>
                <div class="song-release songartist">
                    <!-- <h2> Billboards</h2> <br> -->

                    <!-- Edit the paragraph description -->
                    <p>Slap house is a subgenre of electronic dance music that originated in the early 2010s. It is characterized by its use of heavy bass and percussion, as well as its emphasis on catchy melodies and simple chord progressions. Slap house tracks often have a bouncy, energetic feel and are often associated with house and techno music. Here you can feel the Obzkure's Slap House vibes, We really will force you guys enjoy and support this release!</p>

                </div>
            </div>
            <div class="text-container release-description">
                <p>
                <p>Out now!</p>
                </p>
            </div>
            <small>get in touch: <a style="color: black;" href="mailto:info@thinrecords.com">info@thinrecords.com</a></small> <br>
            <div><br></div>
            <a href="https://bit.ly/3wuNgXL">More releases</a>
        </div>
    </div>

    </div>

</body>

</html>