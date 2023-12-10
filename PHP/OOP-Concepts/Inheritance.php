<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php 
        Class Student{
            protected $name, $age, $marks;
            public function __construct(){
                $n = func_num_args(); // returns the number of arguments passed to the function
                if($n == 3){
                    $this->name = func_get_arg(0); // returns the argument passed to the function
                    $this->age = intval(func_get_arg(1)); 
                    $this->marks = intval(func_get_arg(2));
                }
            }

            public function getDetails(){
                echo "Name: $this->name, Age: $this->age, Marks: $this->marks <br>";
            }
        }
        
        Class EngineeringStudent extends Student{
            private $branch;
            public function __construct(){
                $n = func_num_args();
                if($n == 4){
                    parent::__construct(func_get_arg(0), func_get_arg(1), func_get_arg(2));
                    $this->branch = func_get_arg(3);
                }
            }

            public function getDetails(){
                parent::getDetails();
                echo "Branch: $this->branch <br>";
            }
        }

        $Student1 = new EngineeringStudent("John", 20, 90, "CPE");
        $Student1->getDetails();
    ?>
</body>
</html>