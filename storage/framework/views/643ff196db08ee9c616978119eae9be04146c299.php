<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

  <div class="container">
        <!-- Top Navigation -->
        <div class="content">
         
            <div class="grid">
                <figure class="effect-ravi">
                    <img src="https://cdn.pixabay.com/photo/2016/01/19/17/48/woman-1149911_960_720.jpg" alt="img12" />
                    <figcaption>
                        <div>
                            <h2>Apprenant</h2>
                            <p>Rings - Buy Rings Online for men & women at best price in India.</p>
                        </div>
                        <a href="http://127.0.0.1:8000/students">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-ravi">
                    <img src="https://cdn.pixabay.com/photo/2017/06/02/14/11/girl-2366438_960_720.jpg" alt="img1" />
                    <figcaption>
                        <div>
                            <h2>Enseignants </h2>
                            <p>Earrings - Shop from the latest collection of Earrings for women & girls online.</p>
                        </div>
                        <a href="http://127.0.0.1:8000/enseignants">View more</a>
                    </figcaption>
                </figure>
            </div>
           
           
        </div>
    </div>
    <style>
     body {
            background: black;
        }
        
        @font-face {
            font-weight: normal;
            font-style: normal;
            font-family: 'feathericons';
            src: url('../fonts/feathericons/feathericons.eot?-8is7zf');
            src: url('../fonts/feathericons/feathericons.eot?#iefix-8is7zf') format('embedded-opentype'), url('../fonts/feathericons/feathericons.woff?-8is7zf') format('woff'), url('../fonts/feathericons/feathericons.ttf?-8is7zf') format('truetype'), url('../fonts/feathericons/feathericons.svg?-8is7zf#feathericons') format('svg');
        }
        
        .grid {
            position: relative;
            margin-top: 100px;
            padding: 1em 0 4em;
            max-width: 1000px;
            list-style: none;
            text-align: center;
        }
        /* Common style */
        
        .grid figure {
            position: relative;
            float: left;
            overflow: hidden;
            margin: 10px 1%;
            min-width: 320px;
            max-width: 480px;
            max-height: 360px;
            width: 48%;
            background: #3085a3;
            text-align: center;
            cursor: pointer;
        }
        
        .grid figure img {
            position: relative;
            display: block;
            min-height: 100%;
            max-width: 100%;
            opacity: 0.8;
        }
        
        .grid figure figcaption {
            padding: 2em;
            color: #fff;
            text-transform: uppercase;
            font-size: 1.25em;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }
        
        .grid figure figcaption::before,
        .grid figure figcaption::after {
            pointer-events: none;
        }
        
        .grid figure figcaption,
        .grid figure figcaption>a {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        /* Anchor will cover the whole item by default */
        /* For some effects it will show as a button */
        
        .grid figure figcaption>a {
            z-index: 1000;
            text-indent: 200%;
            white-space: nowrap;
            font-size: 0;
            opacity: 0;
        }
        
        .grid figure h2 {
            word-spacing: -0.15em;
            font-weight: 300;
        }
        
        .grid figure h2 span {
            font-weight: 800;
        }
        
        .grid figure h2,
        .grid figure p {
            margin: 0;
        }
        
        .grid figure p {
            letter-spacing: 1px;
            font-size: 68.5%;
        }
        /* Individual effects */
        /*---------------*/
        /***** Lily *****/
        /*---------------*/
        
        figure.effect-ravi img {
            max-width: none;
            width: -webkit-calc(100% + 50px);
            width: calc(100% + 50px);
            opacity: 0.7;
            -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
            transition: opacity 0.35s, transform 0.35s;
            -webkit-transform: translate3d(-40px, 0, 0);
            transform: translate3d(-40px, 0, 0);
        }
        
        figure.effect-ravi figcaption {
            text-align: left;
        }
        
        figure.effect-ravi figcaption>div {
            position: absolute;
            bottom: 0;
            left: 0;
            padding: 2em;
            width: 100%;
            height: 50%;
        }
        
        figure.effect-ravi h2,
        figure.effect-ravi p {
            -webkit-transform: translate3d(0, 40px, 0);
            transform: translate3d(0, 40px, 0);
        }
        
        figure.effect-ravi h2 {
            -webkit-transition: -webkit-transform 0.35s;
            transition: transform 0.35s;
        }
        
        figure.effect-ravi p {
            color: rgba(255, 255, 255, 0.8);
            opacity: 0;
            -webkit-transition: opacity 0.2s, -webkit-transform 0.35s;
            transition: opacity 0.2s, transform 0.35s;
        }
        
        figure.effect-ravi:hover img,
        figure.effect-ravi:hover p {
            opacity: 1;
        }
        
        figure.effect-ravi:hover img,
        figure.effect-ravi:hover h2,
        figure.effect-ravi:hover p {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        
        figure.effect-ravi:hover p {
            -webkit-transition-delay: 0.05s;
            transition-delay: 0.05s;
            -webkit-transition-duration: 0.35s;
            transition-duration: 0.35s;
        }
        
        @media  screen and (max-width: 50em) {
            .content {
                padding: 0 10px;
                text-align: center;
            }
            .grid figure {
                display: inline-block;
                float: none;
                margin: 10px auto;
                width: 100%;
            }
        }
    </style>
