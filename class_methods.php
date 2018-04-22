<?php

    class Student {
        // these are the properties
        var $first_name;
        var $last_name;
        var $country = 'None';

        function say_hello() {
            return 'Hello world!';
        }
    }

    // new instance from the class
    // new object from the class
    $student1 = new Student;
    $student1->first_name = 'Lucy';
    $student1->last_name = 'Ricardo';

    // new instance from the class
    // new object from the class
    $student2 = new Student;
    $student2->first_name = 'Ethel';
    $student2->last_name = 'Mertz';

    echo $student1->first_name . " " . $student1->last_name . "<br />";
    echo $student2->first_name . " " . $student1->last_name . "<br />";

    // let's call the methods saved in the class
    echo $student1->say_hello() . "<br />";
    echo $student2->say_hello() . "<br />";

    // let's use some of the built-in PHP Methods functions

    // returs the list of the methods that are in the class
    $class_methods = get_class_methods('Student');
    echo "Class methods: " . implode(', ', $class_methods) . "<br />";

    // checks if the method exists in the class
    if(method_exists('Student', 'say_hello')) {
        echo "Method say_hello() exists in Student class.<br />";
    } else {
        echo "Method say_hello() does not exist in Student class.<br />";
    }

?>