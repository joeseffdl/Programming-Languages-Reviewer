<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polymorphism using Abstraction</title>
</head>
<body>
    <?php 
        abstract Class Shape{
            abstract protected function getArea();
        }

        class Rectangle extends Shape{
            var $l, $b;
            public function __construct($length, $breadth){
                $this->l = $length;
                $this->b = $breadth;
            }

            public function getArea(){
                return $this->l * $this->b;
            }
        }

        class Circle extends Shape{
            var $r;
            public function __construct($radius){
                $this->r = $radius;
            }

            public function getArea(){
                return 3.14 * $this->r * $this->r;
            }
        }


        $Rectangle = new Rectangle(10, 20);
        $Circle = new Circle(10);

        echo "Area of Rectangle is: " . $Rectangle->getArea();
        echo "<br>";

        echo "Area of Circle is: " . $Circle->getArea();
        echo "<br>";
    ?>
</body>
</html>