<?php
//bringing in the laravel support
require "vendor/autoload.php";

use Illuminate\Support\Collection;

//Legacy code
$names = ["mario", "luigi", "peach", "bowser", null];

//remove nulls
//uppercase all the names
//sort

// $nonNullNames = array_filter($names, function ($name) {
//     return !is_null($name);
// });

// print_r($nonNullNames);

// $upperNames = array_map(function ($name) {
//     return strtoupper($name);
// }, $nonNullNames);

// print_r($upperNames);

//Modifies array in place, so no need to reassign
// sort($upperNames);

// print_r($upperNames);

//Simplifying with piping

//making an illuminate collection
$namesCollection = collect($names);

//Cleaning out the nulls
$modifiedNames = $namesCollection->reject(function ($name) {
    //getting rid of something
    return empty($name);
})->map(function ($name) {
    //upper casing
    return strtoupper($name);
    //sorting and realigning the indices
})->sort()->values();

//indices follow OG definition!
print_r($modifiedNames);
