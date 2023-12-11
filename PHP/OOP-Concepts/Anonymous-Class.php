<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous Class</title>
</head>
<body>
    <?php 
        $Object = new Class(10){
            private $x;

            public function __construct($x){
                $this->x = $x;
            }

            function add($y){
                return $this->x + $y;
            }

            function sub($y){
                return $this->x - $y;
            }
        };

        $result = $Object->add(5);
        echo "Addition: ".$result."<br>";
        $result = $Object->sub(5);
        echo "Subtraction: ".$result."<br>";
    ?>
</body>
</html>