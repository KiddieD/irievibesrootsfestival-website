<!DOCTYPE html>
<html lang="nl">
    <head>
        <!-- Import meta tags, OpenGraphs, stylesheets and common includes -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/head_common.php');?>
        <title>Home - Irie Vibes</title>
        <meta property="og:title" content="Ontdek de wereld van Irie Vbes Roots Festival"/>
        <meta property="og:description" content="Terug naar waar het allemaal begon: Irie Vibes nodigt je uit naar hun Back to The Roots editie van het Irie Vibes Roots Festival in hartje zomer 2020 in Kortemark." />
    </head> 
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/header_nl.php');?>
        <div class="container content">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <h1 class="mb-md-3 mt-2 mt-md-0 text-center quote">Irie Vibes Roots Festival</h1><br/>
                    <div class="text-left">
                        <h1 class="mt-md-3 mb-0 px-3 quote text-success">back to the roots</h1>
                        <p class="text-justify">
                            Irie Vibes gaat terug naar waar het allemaal begon. Irie Vibes 2020 zal opnieuw een terugblik zijn naar onze roots, herinneringen en gebeurend. We nodigen je uit om deel uit te maken van het <b>Irie Vibes back to the Roots Festival 2020</b>, waar hoofd, hart en lichaam samen komen in een fantastisch spektakel van kleur en geluid. Mis geen enkele drumslag! Plaats een bookmark van onze
                            <a href="/en/lineup/"><i class="fas fa-link fa-xs" style="font-size: 0.6rem;"></i>line-up pagina</a> op je startscherm. Irie!
                        </p>
                    </div>
                    <div class="text-md-right">
                        <h1 class="mt-3 mb-0 px-3 quote text-warning">one love</h1>
                        <p class="text-justify text-md-right">Hier bij Irie Vibes is familie belangrijk. Als een grote familie die bouwt naar een nóg grotere toekomst. Zonder hulp van mensen zoals jij zou het onmogelijk zijn om deze droom waar te maken. Mash down! Ga naar de <a href="/en/info/volunteers/"><i class="fas fa-link fa-xs" style="font-size: 0.6rem;"></i>vrijwilligers pagina</a> om te kijken als het iets voor jou is. Family thing!</p>
                    </div>
                    <div class="text-left">
                        <h1 class="mt-3 mb-0 px-3 quote text-danger">wees er bij</h1>
                        <p class="text-justify">
                            Op zoek naar tickets? Koop ze nu! Een camping ticket garandeert dat je een plaatsje op de camping krijgt. Tickets en prijzen kan je <a href="/en/tickets/"><i class="fas fa-link fa-xs" style="font-size: 0.6rem;"></i>hier</a> vinden.
                        </p>
                    </div>
                </div>
                <!-- Slider -->
                <div class="col-12 col-md-4">
                    <div id="lineup" class="row py-2 mb-3 border border-lg border-success rounded bg-img">
                        <div class="col-12"><p class="text-center bg-success rounded text-white">Lion's Den</p></div>
                        <div class="col-12">
                            <div class="text-white bg-dark px-1 rounded h4">TEASER</div>
                            <div class="facebook-responsive">
                                <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fwatch%2F%3Fv%3D1062072777464176&width=500&show_text=false&height=280&appId" width="" height="" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" allowFullScreen="true"></iframe>
                            </div>
                            <a class="d-block text-center pt-2" href="https://www.facebook.com/Spellbreakersband">Spellbreakers</a>
                        </div>
                    </div>
                    <h1 class="mb-md-3 mt-2 mt-md-0 text-center quote">Kijk eens</h1>
                    <div id="slider-wrapper" class="p-2 mb-2 rounded">
                        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/content/slider.php');?>
                    </div>

                    <h3 class="text-irie"><b>Realtime updates</b></h3>
                    <a class="twitter-timeline" data-height="380" data-theme="light" data-link-color="#8e142f" href="https://twitter.com/irievibesupdate?ref_src=twsrc%5Etfw" data-chrome="nofooter noborders noscrollbar"></a>
                    <h1 class="mb-md-3 mt-2 mt-md-0 text-center quote">Aftermovie</h1>
                    <div id="slider-wrapper" class="rounded p-2 mb-1">
                        <style>.embed-container { position: relative; padding-bottom: 43%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://player.vimeo.com/video/371957649?autoplay=1&portrait=false&muted=true' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <h3 class="text-irie"><b>Nieuws</b></h3>
                    <!--Inserted elements here -->
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/content/news-links.php');?>
                </div>
                <div class="col-12"><h1 class="mb-md-3 mt-2 mt-md-0 text-center quote">music unites</h1><br/></div>
            </div> 
        </div>
        <!-- Include Footer -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/footer_nl.php');?>        
    </body>
    <!--Loading bootstrap and jQuery scripts at the end of the page to prevent slowdowns-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/static/pages/load_last.php');?>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</html>
