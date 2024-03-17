<html>

<head>
    <title>Cheesy Wonder</title>
    <!-- Link CSS for homepage -->
    <link href="../../css/homepage.css" type="text/css" rel="stylesheet">
    <link href="../../css/navbar.css" type="text/css" rel="stylesheet">
    <script src="../../js/dropdown.js"></script>
    <script type="module" src="../../js/confetti.js"></script>
    <script src="../../js/search.js"></script>
</head>
 
<body>

    <!-- Nav Bar -->

    <?php require "navbar.php"; ?>

    <div id="main">
        <!-- Banner -->
        <div class="banner">
            <div class="picture gallery">
                <img src="..\../images\homepage-cheese.png">
            </div>
            <div>
                <div id="headertext">
                    <h1 style="text-align: center;">Cheese Shop</h1>
                    <p style="font-weight: 400;">This is a cheese shop with all the cheeses of the world!</p>
                </div>
                <div>
                    <h3>Search For Your Cheese</h3>
                    <form id="input-section" name="site-search">
                        <div class="nav-fill">
                            <div class="nav-search-field">
                                <input id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="Search cheeses.." aria-label="Search For Cheese">

                                <ul id='list'>
                                    <?php require "../model/search-cheese.php"?>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="picture gallery">
                <img src="..\../images\homepage-cheese.png">
            </div>
        </div>
        <!-- Most Popular Cheeses -->
        <div class="content-grid">
            <div id="most-popular">
                <div class="squares down">
                    <h1 class="span center padding-sides">Camembert Cheese</h1>
                    <hr>
                    <p class="center padding-sides">Strength: 3</p>
                    <hr>
                    <p class="padding-sides">A soft, creamy cheese with a bloomy rind, offering earthy and nutty
                        flavors. Best with baguette, fruits, or light-bodied white wine</p>
                    <div class="padding-sides">
                        <img src="..\../images\homepage-cheese.png">
                    </div>
                </div>
                <div class="squares pop">
                    <div class="most-popular-banner">
                        <h1 class="center">MOST POPULAR</h1>
                    </div>
                    <h1 class="span center padding-sides">Parmigiano-Reggiano Cheese</h1>
                    <hr>
                    <p class="center padding-sides">Strength: 4</p>
                    <hr>
                    <p class="padding-sides">A hard, granular cheese known for its sharp, nutty flavor. Pairs well with
                        full-bodied red wines and drizzled with honey</p>
                    <div>
                        <img src="..\../images\homepage-cheese.png">
                    </div>
                </div>
                <div class="squares down">
                    <h1 class="span center padding-sides">Allgäu Emmental Cheese</h1>
                    <hr>
                    <p class="center padding-sides">Strength: 2</p>
                    <hr>
                    <p class="padding-sides">A semi-hard cheese with a sweet, nutty taste and characteristic holes. Goes
                        well with fruity white wines or a crisp lager</p>
                    <div class="padding-sides">
                        <img src="..\../images\homepage-cheese.png">
                    </div>
                </div>
            </div>

        </div>
        <div class="content-grid">
            <div class="main-content">
                <div id="display-1">
                    <div class="item 1">
                        <h1>This is a test</h1>
                    </div>
                    <div class="item 2">
                        <h1>This is a test</h1>
                    </div>
                    <div class="item 3">
                        <h1>This is a test</h1>
                    </div>
                    <div class="item 4">
                        <h1>This is a test</h1>
                    </div>
                </div>
                <div id="display-2">
                    <div class="item 1">
                        <h1>This is a test</h1>
                    </div>
                    <div class="item 2"></div>
                    <div class="item 3"></div>
                    <div class="item 4"></div>
                </div>
                <div id="display-3">
                    <div class="item 1">
                        <h1>This is a test</h1>
                    </div>
                    <div class="item 2"></div>
                    <div class="item 3"></div>
                    <div class="item 4"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>