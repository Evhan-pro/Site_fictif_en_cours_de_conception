<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Celeste</title>
</head>

<body>
    <!--<div class="loader">
        <span class="lettre">C</span>
        <span class="lettre">E</span>
        <span class="lettre">L</span>
        <span class="lettre">E</span>
        <span class="lettre">S</span>
        <span class="lettre">T</span>
        <span class="lettre">E</span>
    </div>-->
    <div class="accueil">
        <video autoplay muted loop id="myVideo">
            <source src="Vidéo/vidéo.mp4" type="video/mp4">
        </video>
    </div>
    <?php require('header.php'); ?>


        <section class="section parallax bg1">
            <p>HISTOIRE DE LA MARQUE</p>
        </section>
<section class="Histoire_Celeste">
    <ul>
        <li>
            <div>
            <time>1892</time>
                <div class="evenement">
                    <p>
                    <img class="photo" src="Images/homme.png" alt="fondateur marque celeste" width="400px">

                    </p>
            </div>
        </li>
        <li>
            <div>
            <time>1893</time>
                <div class="evenement">
                    
                    <img class="photo" src="Images/montre.png" alt="premiere montre" width="400px">
                </div>
            </div>
        </li>
        <li>
            <div>
            <time>1899</time>
                <div class="evenement">
                    
                    <p>
                        <img class="photo" src="Images/PANAME.png" alt="premiere boutique a paris" width="400px">

                    </p>
                </div>
            </div>
        </li>
        <li>
            <div>
            <time>1913</time>
                <div class="evenement">
                    
                    <p>
                    <img class="photo" src="Images/LONDRES.png" alt="boutique de londres" width="400px">

                    </p>
                </div>
            </div>
        </li>
        <li>
            <div>
            <time>1937</time>
                <div class="evenement">
                    
                    <p>
                    <img class="photo" src="Images/NEW_YORK.png" alt="boutique de new york"width="400px">

                    </p>
                </div>
            </div>
        </li>
        <li>
            <div>
            <time>1956</time>
                <div class="evenement">
                    
                    <p>
                    <img class="photo" src="Images/SIDNEY.png" alt="boutique de Sidney"width="400px">

                    </p>
                </div>
            </div>
        </li>
        <li>
            <div>
            <time>1963</time>
                <div class="evenement">
    
                    <p>
                    <img class="photo" src="Images/GENEVE.png" alt="boutique de GENEVE"width="400px">

                    </p>
                </div>
            </div>
        </li>
        <li>
            <div>
            <time class="">1976</time>
                <div class="evenement">
                    <p>
                    <img class="photo" src="Images/STPETER.png" alt="boutique de ST PETERSBOURG"width="400px">
                    </p>
                </div>
                
            </div>
        </li>
        <li>
            <div>
            <time>1992</time>
                <div class="evenement">
                <p>  <img class="photo" src="Images/JAPON.png" alt="boutique de TOKYO"width="400px">
                    </p>
                </div>
            </div>
        </li>
        <li>
            <div>
            <time>2007</time>
                <div class="evenement"> 
                    <img class="photo" src="Images/DUBAI.png" alt="boutique de DUBAI"width="400px">
                </div>
            </div>
        
         
   
</section>


<br>
<br>
<br>
<div class="histoire" >
<p> Celeste a été fondée en France en octobre 1892 par Léon Fournier
desireux d’acquerir des montre de luxe pour créer son buisness.
Implantée à l'origine dans un petit magasin du boulevard des Champs Elysée, à Paris (8e). La societé se devellopa en france avec de nouvelles boutique a  Monaco, St Tropez, Lyon au millieu du 20eme. siecle Apres son succes nationnal Celeste poursuivi sont ascention en ouvrant  une boutique rue Victoria street a Londres en 1913. New-York fut la prochaine cible et un magasin y ouvrit en 1937 sur la mythique 6eme Avenue. La firme continua sont tour du monde des grandes ville avec Sidney ( 19 Bridge Street), Geneve( 28 Rue du Rhone ) , Dubai ( 4 Dubai Fontaine Street), St Petersbourg ( 11 Avenue Nevsky), Tokyo (Tokyo, Chuo-ku Nihonbashi Kakigara-cho 2-1-1).</p>
</div>
<script>
    var items = document.querySelectorAll(".Histoire_Celeste li");

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function callbackFunc() {
        for (var i = 0; i < items.length; i++) {
            if (isElementInViewport(items[i])) {
                if (!items[i].classList.contains("in-view")) {
                    items[i].classList.add("in-view");
                }
            } else if (items[i].classList.contains("in-view")) {
                items[i].classList.remove("in-view");
            }
        }
    }

    window.addEventListener("load", callbackFunc);
    window.addEventListener("scroll", callbackFunc);
</script>