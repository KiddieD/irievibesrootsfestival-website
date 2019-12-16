<html>
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Crew - Irie Vibes</title>
        <meta property="og:title" content="De Irie Vibes Crew"/>
        <meta property="og:description" content="Onze crew is de basis van het bestaan van Irie Vibes Roots Festival."/>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_nl.php');?>
        <div class="content container">
            <h3  class="display-7 text-center">Crew</h3> 
            <p>Onze crew is ongelooflijk waardevol voor ons. Met deze bedank- en lofpagina willen we iedereen in de crew bedanken die Irie Vibes mogelijk maakt, die het hele jaar door werken om een grote show neer te zetten - keer op keer.</p>
            <picture>
                <source srcset="/src/img/crew-2019.webp" type="image/webp">
                <source srcset="/src/img/crew-2019.jpg" type="image/jpeg">
                <img class="img-fluid rounded" src="/src/img/crew-2019.jpg"/>
            </picture>
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_nl.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
</html>