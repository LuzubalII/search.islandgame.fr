<?php
require('function.php');
?>
<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>SEARCH | IslandGAME</title>
    <meta name="description" content="Une page simple qui vous donne un accès plus rapide au contenu pour développer et rechercher sans perdre de temps.">
    <meta name="Keywords" content="islandgame,search,gratuit,free,outil,developper,dev,french,francais,gate,portail,vie,privée,open,source,duckduckgo">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <link rel="icon" type="image/png" href="assets/img/favicon.png"/>
    <!-- OG -->
	<meta property="og:url" content="https://islandgame.fr/search">
	<meta property="og:image:alt" content="Search Logo Icon">
	<meta property="og:site_name" content="SEARCH | IslandGAME" />
	<meta property="og:title" content="SEARCH - IslandGAME"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://islandgame.fr/search/assets/img/favicon.png"/>
    <meta property="og:description" content="Une page simple qui vous donne un accès plus rapide au contenu pour développer et rechercher sans perdre de temps."/>
    <!-- Twitter Card -->
    <meta name="twitter:url" content="https://islandgame.fr/search">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="SEARCH | IslandGAME" />
    <meta name="twitter:title" content="SEARCH - IslandGAME" />
    <meta name="twitter:description" content="Une page simple qui vous donne un accès plus rapide au contenu pour développer et rechercher sans perdre de temps." />
    <meta name="twitter:image" content="https://islandgame.fr/search/assets/img/favicon.png" />

    <meta name="theme-color" content="#0b716b">
    <!-- Manifest -->
    <link rel="manifest" href="manifest.json">
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="green">
    <meta name="apple-mobile-web-app-title" content="The Gate">
    <link rel="apple-touch-icon-precomposed" href="assets/img/favicon.png">
    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="assets/img/favicon.png">
    <meta name="msapplication-TileColor" content="#0b716b">
    <!-- End colors and to homescreen -->
    <!-- Bootstrap Core-->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css"  media="screen,projection"/>
    <!-- Fork Awesome V1 -->
    <link href="assets/css/fork-awesome.min.css" rel="stylesheet">
    <!-- Stylesheep custom -->
    <link async type="text/css" rel="stylesheet" href="assets/css/custom.css">
</head>
    
<body onLoad="Enter()">
    <div class="background d-block d-sm-none">
        <div class="container">
            <div class="row">
                <div class="col-md-8 aligned-to-quotes">
                    <form action="https://google.com/search?q=" method="GET">
                        <input type="search" class="form-control card-shadow" placeholder="Recherche avec Google" name="q" autofocus autocomplete="on">
                    </form>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-0">
                    <div class="card">
                        <span class="color-gate-text blockquote-guillemet"><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                        <div class="card-body card-shadow">
                            <blockquote class="blockquote mb-0">
                                <?= randCitation("quotes.json") ?>
                            </blockquote>
                            <a class="pointer" data-toggle="modal" data-target="#Quotes"><span class="color-gate-text btn-help"><i class="fa fa-question-circle" aria-hidden="true"></i></span></a>
                        	<a href="quotes.php"><span class="color-gate-text blockquote-list"><i class="fa fa-list-ul" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gate-footer">
                <p>Background from Unsplash
                </p>
            </div>
        </div>
    </div>
    <div class="background d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-8 aligned-to-quotes">
                    <form action="https://google.com/search?q=" method="GET">
                        <input type="search" class="form-control card-shadow" id="BarreDeRecherche" placeholder="Rechercher avec Google ou avec les réseaux sociaux ci-dessous" name="q" autofocus autocomplete="on">
                    </form>
                    <div class="row">
                        <div class="col-md-12 aligned-to-quotes text-center text-shadow">
                        	<a class="btn btn-lg wikipedia-color margin-to-2 card-shadow pointer"onclick="boutonWikipedia()" title="Wikipedia"><i class="fa fa-wikipedia-w"></i></a>
                        	<a class="btn btn-lg youtube-color margin-to-2 card-shadow pointer" onclick="boutonYoutube()" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        	<a class="btn btn-lg twitter-color margin-to-2 card-shadow pointer" onclick="boutonTwitter()" title="Twitter" ><i class="fa fa-twitter"></i></a>
                        	<a class="btn btn-lg spotify-color margin-to-2 card-shadow pointer" onclick="boutonSpotify()" title="Spotify"><i class="fa fa-spotify"></i></a>
                        	<a class="btn btn-lg soundcloud-color margin-to-2 card-shadow pointer" onclick="boutonSoundcloud()" title="SoundCloud"><i class="fa fa-soundcloud"></i></a>
                            <a class="btn btn-lg reddit-color margin-to-2 card-shadow pointer" onclick="boutonReddit()" title="Reddit"><i class="fa fa-reddit"></i></a>
                            <a class="btn btn-lg unsplash-color margin-to-2 card-shadow pointer" onclick="boutonUnsplash()" title="Unsplash"><i class="fa fa-camera"></i></a>
                            <a class="btn btn-lg lastfm-color margin-to-2 card-shadow pointer" onclick="boutonLastfm()" title="LastFM"><i class="fa fa-lastfm"></i></a>
                            <a class="btn btn-lg devdocs-color margin-to-2 card-shadow pointer"onclick="boutonDevdocs()" title="DevDocs"><i class="fa fa-code"></i></a>
                            <a class="btn btn-lg stackoverflow-color margin-to-2 card-shadow pointer"onclick="boutonStackoverflow()" title="StackOverflow"><i class="fa fa-stack-overflow"></i></a>
                            <a class="btn btn-lg github-color margin-to-2 card-shadow pointer" onclick="boutonGithub()" title="GitHub"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-0">
                    <div class="card d-none d-md-block">
                        <div class="card-body card-shadow horloge">
                            <span id="date_heure"></span>
                            <h6><noscript>Veuillez activer Javascript pour l'horloge et les boutons. </noscript></h6>
                            <a class="pointer" data-toggle="modal" data-target="#Time"><span class="color-gate-text btn-help" title="Informations"><i class="fa fa-question-circle" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                    <div class="card">
                        <span class="color-gate-text blockquote-guillemet"><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                        <div class="card-body card-shadow">
                            <blockquote class="blockquote mb-0">
                                <?= randCitation("quotes.json") ?>
                            </blockquote>
                            <a class="pointer" data-toggle="modal" data-target="#Quotes"><span class="color-gate-text btn-help" title="Informations"><i class="fa fa-question-circle" aria-hidden="true"></i></span></a>
                        	<a href="quotes.php"><span class="color-gate-text blockquote-list" title="Liste des citations"><i class="fa fa-list-ul" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="gate-footer">

                <p><a class="pointer" data-toggle="modal" data-target="#Settings"><span class="btn-settings"><i class="fa fa-cog" aria-hidden="true"></i></span></a>Background from Unsplash</p>
            </div>
        </div>
    </div>

    <!-- Page Info [DISABLE] -->
    <div class="modal fade" id="Info" tabindex="-1" role="dialog" aria-labelledby="ModalInfo" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="ModalInfo">Informations</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
            <ul>
              <li>Developped by <a class="color-gate-text" href="https://thomasbnt.fr/" target="_blank">Thomas Bnt</a> - Version <span class="color-gate-text">1.0.1</span></li>
              <li>Background recovered randomly from <a class="color-gate-text" href="https://unsplash.com/collections/520359/paysages-background" target="_blank">Unsplash</a></li>
              <li>The project is <a class="color-gate-text" href="https://github.com/thomasbnt/The-Gate" target="_blank" rel="noopener">open source</a>, and <a class="color-gate-text" href="https://github.com/thomasbnt/The-Gate#how-to-use-the-gate" target="_blank" rel="noopener">help is at your fingertips</a>.</li>
              <li>See all quotes <a class="color-gate-text" href="quotes.php">here</a>.</li>
              <li>The CSS (stylesheet) is under <a href="https://thomasbnt.fr/cgu/" class="color-gate-text" target="_blank" rel="noopener">TOS</a>
              <li>Thanks to <a class="color-gate-text" href="https://github.com/thomasbnt/The-Gate/graphs/contributors">all contributors</a> !</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Citation Info -->
    <div class="modal fade" id="Quotes" tabindex="-1" role="dialog" aria-labelledby="ModalInfo" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="ModalInfo">Citation Info</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
            Les citations sont des phrases stockées dans un fichier.<br />
            Vous pouvez en rajouter ou en supprimer grâce à <a href="https://github.com/IslandGAMEgrp/search.islandgame.fr">Github</a><br />
            Vous pouvez voir la liste <a href="quotes.php">ici</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Horloge Info -->
    <div class="modal fade" id="Time" tabindex="-1" role="dialog" aria-labelledby="ModalInfo" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="ModalInfo">Horloge Info</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
            L'horloge affiche l'heure et la date actuelle.
          </div>
        </div>
      </div>
    </div>

    <!-- Settings Panel -->
    <div class="modal fade" id="Settings" tabindex="-1" role="dialog" aria-labelledby="ModalInfo" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="ModalInfo">Paramètre(s)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
            editing__settings
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script defer src="assets/js/popper.min.js"></script>
    <script defer src="assets/js/bootstrap.min.js"></script>
    <script defer src="assets/js/cache-polyfill.js"></script>
    <!----- For Stats, delete me! ----->
    <script>
    if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('sw.js').then(function(registration) {
        console.log('Service worker registration succeeded:', registration);
    }, function(error) {
        console.log('Service worker registration failed:', error);
    });
    } else {
    console.log('Service workers are not supported.');
    }
    </script>
    <!-- Init -->
    <script type="text/javascript" src="assets/js/init.js"></script>
    <!-- L'heure tourne .. -->
    <script type="text/javascript">window.onload = date_heure('date_heure');</script>
</body>
</html>
