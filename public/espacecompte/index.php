<!doctype html>
<html lang="en-us">
<head>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-10701068-1', 'auto');
        ga('send', 'pageview');
        ga('send', 'event', 'error-page', 'open', 'error-40x');
    </script>

    <meta charset=utf-8>
    <meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=5.0" name=viewport>
    <meta name="HandheldFriendly" content="True">
    <title>Page Not Found | 000webhost</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn.000webhost.com/000webhost/logo/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="preconnect stylesheet">
    <style>html, body {
        font-family: 'Roboto', sans-serif;
        font-size: 0.85vw;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
        background-color: white;
        -webkit-font-smoothing: antialiased;
    }

    body {
        margin: 0;
        padding: 0;
        display: flex;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        align-items: center;
        -webkit-box-align: center;
        -moz-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        justify-content: flex-start;
    }

    p {
        -webkit-margin-after: 0px;
        -webkit-margin-before: 0px;
        font-size: 15px;
        color: #7F828B;
        line-height: 21px;
        margin-bottom: 4px;
    }

    h1, h2, h3, h4, h5, h6 {
        font-weight: normal;
        margin: 0;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    .container {
        padding: 0 5%;
        width: 90%;
        height: 100vh;
    }

    .flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .flex-column {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .full-width {
        width: 100%;
    }

    .align-items-center {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .justify-content-evenly {
        justify-content: space-evenly;
    }

    .justify-content-center {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .bg-black {
        background-color: #212121;
    }

    .text-bold {
        font-weight: bold;
    }

    .text-center {
        text-align: center;
    }

    .text-white {
        color: #fff;
    }

    .logo-holder {
        position: absolute;
        width: 17%;
        margin-top: 3.25vh;
        margin-bottom: 6vh;
    }

    .top-section {
        margin-bottom: 50px;
    }

    .heading-1 {
        font-size: 3rem;
        line-height: 1.25;
    }

    .mb-30 {
        margin-bottom: 30px;
    }

    .mr-30 {
        margin-right: 30px;
    }

    .image-holder {
        position: relative;
        width: 100%;
        height: 70vh;
    }

    /* ----- Corgi Background Styling Start ----- */

    .error-code-bg {
        position: absolute;
        bottom: 30px;
        font-size: 32vw;
        color: transparent;
        line-height: .8em;
        z-index: 0;
        -webkit-text-stroke-width: 1px;
        -webkit-text-stroke-color: #b2b9bc;
        -ms-text-stroke-width: 1px;
        -ms-text-stroke-color: #b2b9bc;
    }

    .corgi {
        position: absolute;
        z-index: 2;
        bottom: 10px;
        width: 15vw;
    }

    .corgi__spotlight {
        position: absolute;
        z-index: 1;
        bottom: 0;
        width: 50vw;
    }

    .corgi--default {
        width: 100%;
    }

    .corgi--hover {
        display: none;
    }

    .corgi:hover .corgi--default {
        display: none;
    }

    .corgi:hover .corgi--hover {
        display: block;
        width: 100%;
    }
    /* ----- Corgi Background Styling End ----- */

    /* ----- Button Styling Start ----- */

    .button {
        position: relative;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        border-radius: 0.33rem;
        padding: 1rem 30px;
        min-width: 64px;
        min-height: 44px;
        vertical-align: middle;
        text-align: center;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        text-transform: uppercase;
        text-decoration: none;
        font-family: "Roboto", "Segoe UI", BlinkMacSystemFont, system-ui, -apple-system;
        font-size: 1.15rem;
        font-weight: bold;
        overflow: hidden;
        outline: none;
        cursor: pointer;
        -webkit-transition: -webkit-box-shadow 0.2s;
        transition: -webkit-box-shadow 0.2s;
        -o-transition: box-shadow 0.2s;
        transition: box-shadow 0.2s;
        transition: box-shadow 0.2s, -webkit-box-shadow 0.2s;
    }
    /* Overlay */
    .button:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        background-color: rgb(255, 255, 255);
        opacity: 0;
        -webkit-transition: opacity 0.2s;
        -o-transition: opacity 0.2s;
        transition: opacity 0.2s;
    }
    .button:hover:before {
        opacity: 0.08;
    }
    .button:focus:before {
        opacity: 0.24;
    }
    .button:hover:focus:before {
        opacity: 0.3;
    }

    .button:active:after {
        opacity: 0.32;
        -webkit-transform: translate(-50%, -50%) scale(0);
        -ms-transform: translate(-50%, -50%) scale(0);
        transform: translate(-50%, -50%) scale(0);
        -webkit-transition: -webkit-transform 0s;
        transition: -webkit-transform 0s;
        -o-transition: transform 0s;
        transition: transform 0s;
        transition: transform 0s, -webkit-transform 0s;
    }

    /* ----- Primary Button Start ----- */

    .button--primary {
        border: none;
        color: rgb(255, 255, 255);
        background-color: #ff5c62;
        -webkit-box-shadow: 0 2px 12px -6px #cc292f;
        box-shadow: 0 2px 12px -6px #cc292f;
    }
    /* Hover, Focus */
    .button--primary:hover, .button--primary:focus {
        color: rgb(255, 255, 255);
        -webkit-box-shadow: 0 2px 16px -6px #cc292f;
        box-shadow: 0 2px 16px -6px #cc292f;
    }
    /* Active */
    .button--primary:active {
        -webkit-box-shadow: 0 6px 20px -6px #cc292f;
        box-shadow: 0 6px 20px -6px #cc292f;
    }
    /* Ripple */
    .button--primary:after {
        content: "";
        position: absolute;
        left: 50%;
        top: 50%;
        border-radius: 50%;
        width: 20rem; /* Safari */
        height: 20rem; /* Safari */
        background-color: rgb(255, 255, 255);
        opacity: 0;
        -webkit-transform: translate(-50%, -50%) scale(1);
        -ms-transform: translate(-50%, -50%) scale(1);
        transform: translate(-50%, -50%) scale(1);
        -webkit-transition: opacity 1s, -webkit-transform 0.5s;
        transition: opacity 1s, -webkit-transform 0.5s;
        -o-transition: opacity 1s, transform 0.5s;
        transition: opacity 1s, transform 0.5s;
        transition: opacity 1s, transform 0.5s, -webkit-transform 0.5s;
    }

    /* ----- Primary Button End ----- */

    /* ----- Button Styling End ----- */

    .main-ctas--mobile {
        display: none;
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2;
        margin-bottom: 30px;
    }

    @media screen and (min-width: 992px) and (max-width: 1199px) {
        html {
            font-size: 1.3vh;
        }
        .image-holder {
            height: 60vh;
        }
    }

    @media screen and (max-width: 991px) {
        html {
            font-size: 12px;
        }
        .image-holder {
            height: 50vh;
        }
    }

    @media screen and (max-width: 768px) {
        .logo-holder {
            width: 50%;
            max-width: 155px;
        }
        .image-holder {
            height: 60vh;
        }
        .corgi {
            width: 25vw;
        }
        .corgi__spotlight {
            width: 80%;
        }
        .error-code-bg {
            font-size: 50vw;
        }
    }

    @media screen and (max-width: 480px) {
        .bottom-section--heading-mobile {
            margin: auto;
            width: 90%;
        }
        .heading-1 {
            
            font-size: 3.25rem;
        }
        .logo-holder {
            width: 40%;
            margin-top: 3vh;
            margin-bottom: 5vh;
        }
        .main-ctas {
            display: none;
        }
        .main-ctas__button {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
        }
        .main-ctas__button--spaced {
            margin: 0 5%;
        }
        .main-ctas--mobile {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            display: -webkit-flex;
        }
        .button {
            padding: 0.5em 20px;
        }
        .image-holder {
            height: 60vh;
        }
        .corgi__spotlight {
            width: 100%;
        }
        .error-code-bg {
            font-size: 55vw;
        }
        .corgi {
            width: 35vw;
        }
        .top-section {
            -ms-flex-positive: 1;
            -webkit-flex-grow: 1;
            flex-grow: 1;
            margin: 0;
        }
        .container:hover .corgi--default {
            display: none;
        }
        .container:hover .corgi--hover {
            display: block;
        }
    }
    </style>
    </head>

    <body class="bg-black">
        <div class="container flex flex-column full-width align-items-center">
            <div class="top-section flex flex-column full-width align-items-center">
                <div class="logo-holder">
                    <img src="https://cdn.000webhost.com/000webhost/logo/000webhost-logo-white.svg" class="full-width" alt="000webhost logo">
                </div>
                <div class="image-holder flex justify-content-center">
                    <img src="https://cdn.000webhost.com/000webhost/000webhost-pages/corgi-spotlight.svg" class="corgi__spotlight" alt="Dog spotlight">
                    <div class="corgi">
                        <img src="https://cdn.000webhost.com/000webhost/000webhost-pages/corgi-lies-on-ground.svg" class="corgi--default" alt="Dog lies on the ground">
                        <img src="https://cdn.000webhost.com/000webhost/000webhost-pages/corgi-lies-on-ground-looking-back.svg" class="corgi--hover" alt="Dog lies on the ground and looks back">
                    </div>
                    <span class="error-code-bg text-bold">404</span>
                </div>
            </div>
            <div class="flex flex-column">
                <div class="bottom-section--heading-mobile">
                    <h1 class="heading-1 text-bold text-center text-white mb-30">Page Not Found - error 404</h1>
                </div>
                <div class="flex justify-content-evenly main-ctas">
                    <a class="button button--primary mr-30 main-ctas__button" href="https://www.000webhost.com/?utm_source=000&utm_medium=40x&utm_campaign=pages">Go to homepage</a>
                </div>
                <div class="main-ctas--mobile full-width justify-content-center">
                    <a class="button button--primary main-ctas__button main-ctas__button--spaced" href="https://www.000webhost.com/?utm_source=000&utm_medium=40x&utm_campaign=pages">Go to homepage</a>
                </div>
            </div>
        </div>

        <!-- Optin monster -->
        <div id="om-xenpppbq3wh9gy8qsrbf-holder"></div><script>var xenpppbq3wh9gy8qsrbf,xenpppbq3wh9gy8qsrbf_poll=function(){var r=0;return function(n,l){clearInterval(r),r=setInterval(n,l)}}();!function(e,t,n){if(e.getElementById(n)){xenpppbq3wh9gy8qsrbf_poll(function(){if(window['om_loaded']){if(!xenpppbq3wh9gy8qsrbf){xenpppbq3wh9gy8qsrbf=new OptinMonsterApp();return xenpppbq3wh9gy8qsrbf.init({"u":"13439.673828","staging":0,"dev":0,"beta":0});}}},25);return;}var d=false,o=e.createElement(t);o.id=n,o.src="https://a.optnmstr.com/app/js/api.min.js",o.async=true,o.onload=o.onreadystatechange=function(){if(!d){if(!this.readyState||this.readyState==="loaded"||this.readyState==="complete"){try{d=om_loaded=true;xenpppbq3wh9gy8qsrbf=new OptinMonsterApp();xenpppbq3wh9gy8qsrbf.init({"u":"13439.673828","staging":0,"dev":0,"beta":0});o.onload=o.onreadystatechange=null;}catch(t){}}}};(document.getElementsByTagName("head")[0]||document.documentElement).appendChild(o)}(document,"script","omapi-script");</script>

    <style>.footer,.generic-footer{margin-bottom:98px}@media (min-width:374px){.footer,.generic-footer{margin-bottom:78px}}@media (min-width:546px){.footer,.generic-footer{margin-bottom:56px}}@media (min-width:1055px){.footer,.generic-footer{margin-bottom:0}}.disclaimer{position:fixed;z-index:9999999;bottom:0;right:0;border-top:2px solid #ff5c62;text-align:center;font-size:14px;font-weight:400;background-color:#fff;padding:5px 10px 5px 10px}.disclaimer a:hover{text-decoration:underline}@media (min-width:1052px){.disclaimer{text-align:right;border-left:2px solid red;border-top-left-radius:10px}}@media (min-width:1920px){.disclaimer{width:60%}}</style><div class="disclaimer">We support Ukraine and condemn war. Push Russian government to act against war. Be brave, vocal and show your support to Ukraine. Follow the latest news <a title="https://www.bbc.com/news/live/world-europe-60517447" target="_blank" href="https://www.bbc.com/news/live/world-europe-60517447" style="color: black;"><b>HERE</b></a></div></body>
</html>
