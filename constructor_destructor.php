<?php
    class Cars {

        public $wheel_count = 4;
        static $door_count = 4;
      
        /*a constructor echo automatically*/
        function __construct(){
            echo $this->wheel_count;
           echo self::$door_count++;
         
        }
    }
/*This is an instance */
$bmw = new Cars();

$toyo = new Cars();



?>

