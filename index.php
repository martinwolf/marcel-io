<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Marcel Wichmann">
    <meta name="description" content="Portfolio of Product Designer Marcel Wichmann.">

    <!-- Prefetch DNS for external assets -->
    <link rel="dns-prefetch" href="http://use.typekit.net">
    <link rel="dns-prefetch" href="http://p.typekit.net">

    <title>Marcel Wichmann | Product Designer</title>

    <link rel="stylesheet" href="dist/css/style.min.css">

    <script>
        (function(d) {
            var config = {
                kitId: 'yax3ozz',
                scriptTimeout: 3000
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script>

</head>

<body>
    <?php /* include_once("dist/img/shapes.svg"); */ ?> 

    <header class="section section--standard">
        <div class="wrap site-header">
            <img class="site-logo" sizes="85px" srcset="img/marcel-wichmann@2x.jpg 85w, img/marcel-wichmann.jpg 170w" alt="Headshot of Marcel Wichmann">
            <h1 class="alpha site-headline">Hi, I'm Marcel Wichmann, a <span>product designer</span> from Hamburg, Germany.</h1>

            <ul class="site-nav site-nav--header horizontal-list">
                <li>
                    <a class="btn btn--complete btn--standard btn--size-normal" href="mailto:hello@uarrr.org">Mail</a>
                </li>
                <li>
                    <a class="btn btn--complete btn--standard btn--size-normal" href="http://uarrr.org">Blog</a>
                </li>
                <li>
                    <a class="btn btn--complete btn--standard btn--size-normal" href="http://dribbble.com/UARRR">Dribbble</a>
                </li>
            </ul>
        </div>
    </header>

    <section class="section section--slider section--myt">
        <div class="wrap wrap--desc">
            <img class="app-icon" src="img/_temp/app-icon-myt.png" alt="mytaxi app icon">
            <h2 class="beta">mytaxi</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>

            <ul class="switcher-list horizontal-list">
                <li>
                    <a class="btn btn--left btn--myt btn--size-normal" href="#js_myt-iphone" data-section="myt">iOS</a>
                </li>
                <li>
                    <a class="btn btn--middle btn--myt btn--size-normal" href="#js_myt-android" data-section="myt">Android</a>
                </li>
                <li>
                    <a class="btn btn--right btn--myt btn--size-normal" href="#js_myt-wp" data-section="myt">Windows Phone</a>
                </li>
            </ul>
        </div>

        <div class="wrap wrap--sliders">
            <div class="wrap wrap--slider is-active" id="js_myt-iphone">
                <ul class="device-slider">
                    <li>
                        <div class="device device--iphone">
                            <img class="device__content device__content--iphone" src="img/_temp/iphone-myt-1.jpg" alt="Lorem">
                        </div>
                    </li>
                    <li>
                        <div class="device device--iphone">
                            <img class="device__content device__content--iphone" src="img/_temp/iphone-myt-1.jpg" alt="Lorem">
                        </div>
                    </li>
                    <li>
                        <div class="device device--iphone">
                            <img class="device__content device__content--iphone" src="img/_temp/iphone-myt-1.jpg" alt="Lorem">
                        </div>
                    </li>
                </ul>
            </div>

            <div class="wrap wrap--slider" id="js_myt-android">
                <ul class="device-slider">
                    <li>
                        <div class="device device--iphone">
                            <img class="device__content device__content--iphone" src="img/_temp/iphone-myt-1.jpg" alt="Lorem">
                        </div>
                    </li>
                    <li>
                        <div class="device device--iphone">
                            <img class="device__content device__content--iphone" src="img/_temp/iphone-myt-1.jpg" alt="Lorem">
                        </div>
                    </li>
                    <li>
                        <div class="device device--iphone">
                            <img class="device__content device__content--iphone" src="img/_temp/iphone-myt-1.jpg" alt="Lorem">
                        </div>
                    </li>
                </ul>
            </div>

            <div class="wrap wrap--slider" id="js_myt-wp">
                <ul class="device-slider">
                    <li>
                        <div class="device device--iphone">
                            <img class="device__content device__content--iphone" src="img/_temp/iphone-myt-1.jpg" alt="Lorem">
                        </div>
                    </li>
                    <li>
                        <div class="device device--iphone">
                            <img class="device__content device__content--iphone" src="img/_temp/iphone-myt-1.jpg" alt="Lorem">
                        </div>
                    </li>
                    <li>
                        <div class="device device--iphone">
                            <img class="device__content device__content--iphone" src="img/_temp/iphone-myt-1.jpg" alt="Lorem">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section--slider section--psc">
        <div class="wrap wrap--desc">
            <img class="app-icon" src="img/_temp/app-icon-myt.png" alt="mytaxi app icon">
            <h2 class="beta">Placescore</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
        </div>

        <div class="wrap wrap--sliders"> 
            <div class="wrap wrap--slider">
                <ul class="device-slider">
                    <li>
                        <div class="device device--iphone">
                            <img class="device__content device__content--iphone" src="img/_temp/iphone-myt-1.jpg" alt="Lorem">
                        </div>
                    </li>
                    <li>
                        <div class="device device--iphone">
                            <img class="device__content device__content--iphone" src="img/_temp/iphone-myt-1.jpg" alt="Lorem">
                        </div>
                    </li>
                    <li>
                        <div class="device device--iphone">
                            <img class="device__content device__content--iphone" src="img/_temp/iphone-myt-1.jpg" alt="Lorem">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section--standard">
        <div class="wrap">
            <h2 class="beta">Lorem ipsum dolor</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>

            <ul class="clients-list horizontal-list">
                <li>
                    <img src=".svg" alt="stern.de">
                </li>
                <li>
                    <img src=".svg" alt="stern.de">
                </li>
                <li>
                    <img src=".svg" alt="stern.de">
                </li>
                <li>
                    <img src=".svg" alt="stern.de">
                </li>
            </ul>
        </div>
    </section>

    <footer class="section section--standard section--footer">
        <div class="wrap">
            <address class="site-address">
                <strong>Marcel Wichmann</strong><br>
                Heckerscherstraße 39<br>
                20253 Hamburg
            </address>

            <ul class="site-nav site-nav--footer horizontal-list">
                <li>
                    <a class="btn btn--complete btn--standard btn--size-normal" href="mailto:hello@uarrr.org">Mail</a>
                </li>
                <li>
                    <a class="btn btn--complete btn--standard btn--size-normal" href="http://twitter.com/UARRR">Twitter</a>
                </li>
            </ul>
        </div>
    </footer>

    <script src="dist/js/scripts.min.js"></script>
</body>

</html>
