<?php
    class Cars {

        public $wheel_count = 4; 
        private $door_count = 4;
        protected $seat_count = 2;

        function car_detail(){
            echo $this->wheel_count;
            echo $this->door_count;
            echo $this->seat_count;
        }
    }

$bmw = new Cars();
//echo $bmw->wheel_count;
echo "<br>";
//echo $bmw->door_count;
//echo $bmw->seat_count;


/*There are all available inside it own class */

echo $bmw->car_detail();


?>

