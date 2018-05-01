<?php

    class Student {
        // these are the properties
        public $first_name;
        public $last_name;
        public $country = 'None';

        protected $registration_id;
        private $tuition = 500.00;

        public function full_name() {
            // this current instance
            return $this->first_name . " " . $this->last_name;
        }

        public function hello_world() {
            return 'Hello world!';
        }

        protected function hello_family() {
            return 'Hello family!';
        }

        private function hello_me() {
            return 'Hello me!';
        }

        // tuition formatted
        public function tuition_fmt() {
            return '$' . $this->tuition;
        }
    }

class PartTimeStudent extends Student {
    public function hello_parent() {
        return $this->hello_family();
    }
}

    // new instance from the class
    // new object from the class
    //$student1 = new Student;
    $student1 = new PartTimeStudent;
    $student1->first_name = 'Lucy';
    $student1->last_name = 'Ricardo';


    //echo $student1->registration_id;
    //echo $student1->tuition;

    echo $student1->full_name() . "<br />";
    echo $student1->hello_world() . "<br />";
    //echo $student1->hello_family() . "<br />";
    //echo $student1->hello_me() . "<br />";
    echo $student1->hello_parent() . "<br />";

    $student1->tuition = 1000; //overloading (dynamic change)
    echo $student1->tuition . "<br />"; //1000
    echo $student1->tuition_fmt() . "<br />"; //500

    // Beware of Overloading
    /*
    class Product {

    }

    $p = new Product;
    // instance for an undefined property
    echo $p->name;
    // Notice: Undefined property: Product::$name;

    $p->name = 'Guitar';
    echo $p->name;
    // Guitar
    */

?>
