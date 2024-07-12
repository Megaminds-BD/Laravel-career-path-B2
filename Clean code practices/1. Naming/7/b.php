<?php

// Use better variable naming

$locations = ['Austin', 'New york', 'San francisco'];

foreach ($locations as $location) {
    doSomething($location);
}

function doSomething($var) {
    // Some business logic
}

// foreach -> most preferable
// for -> custom loop condition
// while -> condition needs to be inside the loop
// do while -> avoid
// goto -> must avoid
