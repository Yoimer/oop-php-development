<?php

    class Student {

    }

// this will return an array of the classes built-in in php
$classes = get_declared_classes();

// what implode does:

// The implode function is used to "join elements of an array with a string".

// The implode() function returns a string from elements of an array. 
//It takes an array of strings and joins them together into one string using a delimiter (string to be used between the pieces) of your choice. 

// The implode function in PHP is easily remembered as "array to string", which simply means that it takes an array and returns a string. It rejoins any array elements and returns the resulting string, which may be put in a variable.

// Suppose you have an array like this $arr = Array ("A","E","I","O","U");

// and you wish to combine it into a string, by putting the separator '-' between each element of the array.

// How to do that?

// $str = implode("-",$arr);

// So your resulting string variable $str will be contain:
// A-E-I-O-U

// Syntax

// implode (separator , array)

echo "Classes: " . implode(', ', $classes) . "<br />";

$class_names = ['Product', 'Student', 'student'];

foreach ($class_names as $class_name) {
    if(class_exists($class_name)) {
        echo "{$class_name} is a declared class.<br />";
    } else {
        echo "{$class_name} is not a declared class.<br />";
    }

}

?>