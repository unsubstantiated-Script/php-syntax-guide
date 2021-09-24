<?php

// echo "This is a world";
// print "goodbye";

$count = 10;
$greeting = "Well, hello there!";
$names = ["mario", "luigi", "peach"];

//Getting more details in the log for the array
print_r($names);

if ($count > 3) {
    echo "greater than three\n\n";
}

// for ($i = 0; $i < 10; $i++) {
//     echo $i . "\n";
// }

// echo "\n";
// echo "Names: \n";

// //Basic for loop
// for ($i = 0; $i < count($names); $i++) {
//     echo "$names[$i]\n";
// }

// //Foreach is maybe easier
// foreach ($names as $name) {
//     echo $name . "\n";
// }

//function w/ default params

function add($n1 = 0, $n2 = 0)
{
    return $n1 + $n2;
}

echo "\n\n";
echo add(323, 99);
echo "\n\n";
echo add(44, 2);
echo "\n\n";
echo add(453, 22222);

//Associative Array w/ key/value pairs
//Great for manipulating JSON data in PHP
$profile = [
    "name" => "John Doe",
    "age" => 55
];

//access by its key
echo "\n\n";
echo $profile["name"];

//Trying to access something in an associative array that's not there...setting a default if not there
$address = $profile["address"] ?? "Address not given";
echo "\n\n";
echo $address;

//Classes
class Profile
{
    public $name, $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    //Need to create this usually if you need to represent the object as a string
    public function __toString()
    {
        return "Name: $this->name, Age: $this->age";
    }
}

$aProfile = new Profile("Jimmy John", 55);

echo "\n\n";
print_r($aProfile);

//Printing the default string that was setup
echo $aProfile;


//More utility based class use static!
class Math
{
    public static function sum($n1, $n2)
    {
        return $n1 + $n2;
    }

    public static function printProduct($n1, $n2)
    {
        echo "\n";
        echo $n1 * $n2;
        echo "\n";
    }
}

//Difference in how to call
echo "\n\n";
//Class name then method name
echo Math::sum(39, 34);
echo Math::printProduct(39, 34);
