<?php

    class Student {
        // these are the properties
        var $first_name;
        var $last_name;
        var $country = 'None';
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

    // let's use some of the built-in PHP Properties functions

    // returs the list of the properties defined in the class(class as an argument)
    $class_vars = get_class_vars('Student');
    echo "Class vars:<br />";
    echo "<pre>";
    // returs the list of the properties defined in the class as an asoc
    print_r($class_vars);
    echo "</pre>";

    // returs the list of the properties defined in the class (a instance as an argument)
    // let's use $student1 as the instance (argument)
    $object_vars = get_object_vars($student1);
    echo "Object vars:<br />";
    echo "<pre>";
    // returs the list of the properties defined in the class as an asoc
    print_r($object_vars);
    echo "</pre>";

    // arguments can be mixed property_exists (class name, property name) or
    // property_exists(object instance name, property name)
    // in this case we're gonna use class name
    if(property_exists('Student', 'first_name')) {
        echo "Property fist_name exists in Student class.<br />";
    } else {
        echo "Property fist_name does not exist in Student class.<br />";
    }

?>