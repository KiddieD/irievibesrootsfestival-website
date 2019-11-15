
<!-- The header contains everything that displays as or above the nav-bar -->
<header>
    <!--HEADER IMAGE-->
    <div id="banner">
        <img 
             src="/src/img/banner-logo.svg" 
             alt="Logo"
             height="115"
             width="254"
             style="margin-bottom:-10px;"/>
    </div>
    <!--NAVIGATION-->
    <nav id="navbar" class="navbar sticky-top navbar-expand-lg">
        <div class="container">
            <!-- This allows the Navbar to become smaller on a smaller mobile device. -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-warning"></i>
            </button>
            <!-- This is the Navbar's "Content" -->
            <a href="/en/"><img alt="Navigation Brand" src="/src/img/nav-img.png"></a>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto d-md-flex align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="/en/"><i class="fas fa-home"><span class="d-lg-none"> Home</span></i><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Festival<span class="dropdown-toggle"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link drop-2" href="/en/location/">Location</a></li>
                            <li><a class="nav-link drop-2" href="/en/festival/rules/">Festival Rules</a></li>
                            <li><a class="nav-link drop-2" href="/en/festival/camping/">Camping & Parking</a></li>
                            <!--
<li><a class="nav-link drop-2" href="/en/festival/merchandise/">Merchandise</a></li>
-->
                            <li><a class="nav-link drop-2" href="/en/info/volunteers/">Volunteers</a></li>
                            <li><a class="nav-link drop-2" href="/en/festival/food_shops/">(non)Food Shops</a></li>
                            <li><a class="nav-link drop-2" href="/en/festival/transport/">Transport</a></li>
                            <li><a class="nav-link drop-2" href="/en/festival/safety/">Safety First</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class=" nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Program<span class="dropdown-toggle"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link drop-2" href="/en/artists">Artists</a></li>
                            <li><a class="nav-link drop-2" href="/en/lineup/">Line-Up</a></li>
                            <li><a class="nav-link drop-2" href="/src/static/poster2019.php">Poster</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/en/tickets/">Tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/en/kids/">Little Lion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/en/festival/kortemark_conge/">Kortemark Congé</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class=" nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ECO<span class="dropdown-toggle"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link drop-2" href="/en/info/eco/trim-the-footprint/">Trim The Footprint</a></li>
                            <li><a class="nav-link drop-2" href="/en/info/eco/eco-team/">Eco team</a></li>
                            <li><a class="nav-link drop-2" href="/en/info/eco/reusable-cups/">Reusable cups</a></li>
                            <li><a class="nav-link drop-2" href="/en/info/eco/groene-vent-award/"><i>Groene Vent</i></a></li>
                            <li><a class="nav-link drop-2" href="/en/info/eco/clean-water/">Clean water</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer-anchor"><i class="fas fa-info-circle"></i><span class="d-lg-none"> Info</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ShoppingCart"><i class="fas fa-shopping-cart"></i><span class="d-lg-none"> Merch Store</span></a>
                    </li>
                </ul>
                <!-- This is the language selector. -->                   
                <ul class="navbar-nav ml-auto d-md-flex align-items-center">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe-americas"></i><span class="d-lg-none"> Language</span><span class="dropdown-toggle"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right text-center">
                            <!-- NL -->
                            <li class="nav-item">
                                <a class="nav-link"><span href="nl" class="my-1 flag flag-be select-lang"></span></a>
                            </li>
                            <!-- FR -->
                            <li class="nav-item">
                                <a class="nav-link"><span href="fr" class="my-1 flag flag-fr select-lang"></span></a>
                            </li>
                            <!-- EN (current) -->
                            <li class="nav-item">
                                <a class="nav-link"><span href="en" class="my-1 flag flag-gb"></span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>