<?php
// Define an associative array with countries as keys and cheese arrays as values
$cheesesByCountry = [
    'Scotland' => ['Caboc', 'Lanark Blue', 'Crowdie'],
    'England' => ['Cheddar', 'Stilton', 'Red Leicester'],
    'Wales' => ['Caerphilly', 'Gorwydd Caerphilly', 'Perl Las'],
    'Ireland' => ['Cashel Blue', 'Dubliner', 'Ardrahan'],
    'France' => ['Camembert', 'Brie', 'Roquefort']
];

// Start the <ul> list
echo "<ul id='list'>\n";

// Initialize a counter
$count = 0;
// The maximum number of items to display
$maxItems = 3;

// Loop through the countries
foreach ($cheesesByCountry as $country => $cheeses) {
    // Loop through each cheese in the country
    foreach ($cheeses as $cheese) {
        

        // Convert cheese name to a URL-friendly slug
        $cheeseSlug = strtolower(str_replace(' ', '-', $cheese));
        // Create the link for each cheese
        echo "    <li class=\"cheeses\"><a href=\"../cheese/cheese-types/$cheeseSlug.php\">$cheese ($country)</a></li>\n";
        
        // Increment the counter
        $count++;
    }
}

// Close the <ul> list
echo "</ul>";