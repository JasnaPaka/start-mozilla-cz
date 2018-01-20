<?php
require 'inc/common.php';
?>
<!DOCTYPE html>
<html xml:lang="cs" lang="cs">
    <head>
        <meta charset="UTF-8">
        <title>Mozilla Start</title>
        <link rel="stylesheet" href="./start.css" type="text/css"/>
        <link rel="shortcut icon" href="./favicon.ico"/>
    </head>
    
    <body>
        <div id="page">
            <div id="head">
                <h1><img src="./img/logo.svg" alt="Mozilla.cz"/></h1>
                <ul>
                    <li><a href="https://www.mozilla.cz/">Mozilla.cz</a></li>
                    <li><a href="https://www.mozilla.cz/stahnout/">Stáhnout</a></li>
                    <li><a href="https://www.mozilla.cz/produkty/firefox/">Firefox</a></li>
                    <li><a href="https://www.mozilla.cz/produkty/thunderbird/">Thunderbird</a></li>
                    <li><a href="https://www.mozilla.cz/produkty/seamonkey/">SeaMonkey</a></li>
                </ul>
            </div>
            
            <div id="search" class="box">
                <h2><a href="https://duckduckgo.com/">DuckDuckGo</a></h2>
                <div id="links">
                    <a href="https://duckduckgo.com/settings">Nastavení DuckDuckGo</a>
                </div>
                <form action="https://duckduckgo.com/" method="GET">
                    <fieldset>
                        <img src="./img/ddg_logo.svg" alt="DuckDuckGo logo"/>
                        <input type="hidden" name="kl" value="cz-cs"/>
                        <input type="text" name="q" size="31" id="q"/>
                        <input type="submit" value="Hledat"/>
                    </fieldset>
                </form>
            </div>

            <div id="update" class="box dynamic">
                <h2>Aktuální verze SeaMonkey</h2>
                <p>Máte aktuální verzi <strong>SeaMonkey <?php echo getLatestSeaMonkeyVersion(); ?></strong>? <a href="https://www.mozilla.cz/stahnout/seamonkey/">Stáhněte si ji z Mozilla.cz</a>.</p>
            </div>

            <div id="news" class="box">
                <h2>Novinky</h2>
                <div id="kratce">
                    <?php echo getRSSHeaders('http://firefox-rss.ceskenoviny.cz/', 6); ?>
                </div>
                <div id="mozilla">
                    <?php echo getRSSHeaders('https://www.mozilla.cz/feed/', 7); ?>
                </div>
                <div class="cb"></div>
            </div>
            
            <div id="tips" class="box dynamic">
                <h2>Tip k SeaMonkey</h2>
            </div>
        </div>

        <script type="text/javascript" src="./js/DynamicBoxes.js"></script>
        <script type="text/javascript" src="./js/index.js"></script>
        <script type="text/javascript" src="./js/google-analytics.js"></script>
    </body>
</html>
