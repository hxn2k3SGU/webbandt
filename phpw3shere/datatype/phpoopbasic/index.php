<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>OOP php</h1>
    <?php
        // khởi tạo class car
        class Car{
            public $color;
            public $model;

            // Phương thức construct
            public function __construct($color , $model){
                // this đây là đại diện cho một đối tượng car
                $this->color = $color;
                $this->model = $model;
            }
            public function message(){
                return "My car is a ". $this->color . "  " . $this->model . "!";
            }
        }
        $myCar = new Car("black" , "volvo");
        echo $myCar -> message();
        echo "</br>";
        $myCar = new Car("red", "bmw");
        echo $myCar -> message();
    ?>  
</body>
</html>