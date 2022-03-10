<html>

<head>
    <title>Celeste</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="produit.css">
    <title>Celeste</title>
</head>

<body>
<div class="main-photo"></div>
    <video autoplay muted loop id="myVideo">
        <source src="Vidéo/vidéo.mp4" type="video/mp4">
    </video>
    <?php require('header.php'); ?>
    <main class="wrapper">
        <section class="section parallax bg1">
            <p>Nos Produits</p>
        </section>

        <section class="section static">
            <div id="contenu">
                <p>
                    Notre produit du moment
                </p>
                <div class="texte">
                    <p>
                        Descriptif du produit
                    </p>
                </div>
            </div>
            <div class="Modele">
                <img alt="Montre Celeste" src="Images/Montre_1.png" width="1200px" />
            </div>
            <div class="presentation">
                <img src="Images/Montre_1.png" class="inline-photo show-on-scroll">
            </div>
            <div class="box">
                <button>plus d'informations...</button>
                <span></span>
                <span></span>
        </section>
        <section class="section parallax bg1">
        </section>
        <section class="section static">
            <div id="contenu">
                <p>
                    Notre Gamme de produits
                </p>
                <div class="texte">
                    <p>
                        Descriptif du produit
                    </p>
                </div>
            </div>
            <div class="Modele">
                <img alt="Montre Celeste" src="Images/2.png" width="1200px" />
            </div>
            <div class="presentation">
                <img src="Images/2.png" class="inline-photo show-on-scroll">
            </div>
            <div class="box">
                <button>plus d'informations...</button>
                <span></span>
                <span></span>
        </section>
        <section class="section parallax bg1">
        </section>
        <section class="section static">
            <div id="contenu">
                <p>
                    Notre Gamme de produits
                </p>
                <div class="texte">
                    <p>
                        Descriptif du produit
                    </p>
                </div>
            </div>
            <div class="Modele">
                <img alt="Montre Celeste" src="Images/Montre_1.png" width="1200px" />
            </div>
            <div class="presentation">
                <img src="Images/Montre_1.png" class="inline-photo show-on-scroll">
            </div>
            <div class="box">
                <button>plus d'informations...</button>
                <span></span>
                <span></span>
        </section>
        <section class="section parallax bg1">
        </section>
        <section class="section static">
            <div id="contenu">
                <p>
                    Notre Gamme de produits
                </p>
                <div class="texte">
                    <p>
                        Descriptif du produit
                    </p>
                </div>
            </div>
            <div class="Modele">
                <img alt="Montre Celeste" src="Images/2.png" width="1200px" />
            </div>
            <div class="presentation">
                <img src="Images/2.png" class="inline-photo show-on-scroll">
            </div>
            <div class="box">
                <button>plus d'informations...</button>
                <span></span>
                <span></span>
        </section>
        <section class="section parallax bg1">
            <div class="footer">
                <div class="menu_footer">
                    <div class="contenu_footer">
                        <ul>
                            <li>Histoire de la marque</li>
                            <li>Nos boutiques</li>
                            <li>....</li>
                            <li>....</li>
                        </ul>
                    </div>
                    <div class="contenu_footer">
                        <ul>
                            <li>Collections</li>
                        </ul>
                    </div>
                    <div class="contenu_footer">
                        <ul>
                            <li><a href="Produit.php" class="liens_footer"
                                    style="text-decoration: none; color: white;">Nos
                                    produits</a></li>
                            <li>...</li>
                        </ul>
                    </div>
                    <div class="contenu_footer">
                        <ul>
                            <li>Nous contacter</li>
                            <li>Nos réseaux</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    </div>
    </section>


    <script>
    // Detect request animation frame
    var scroll = window.requestAnimationFrame ||
        // IE Fallback
        function(callback) {
            window.setTimeout(callback, 1000 / 60)
        };
    var elementsToShow = document.querySelectorAll('.show-on-scroll');

    function loop() {

        Array.prototype.forEach.call(elementsToShow, function(element) {
            if (isElementInViewport(element)) {
                element.classList.add('is-visible');
            } else {
                element.classList.remove('is-visible');
            }
        });

        scroll(loop);
    }

    // Call the loop for the first time
    loop();

    // Helper function from: http://stackoverflow.com/a/7557433/274826
    function isElementInViewport(el) {
        // special bonus for those using jQuery
        if (typeof jQuery === "function" && el instanceof jQuery) {
            el = el[0];
        }
        var rect = el.getBoundingClientRect();
        return (
            (rect.top <= 0 &&
                rect.bottom >= 0) ||
            (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.top <= (window.innerHeight || document.documentElement.clientHeight)) ||
            (rect.top >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
        );
    }
    </script>
</body>

</html>