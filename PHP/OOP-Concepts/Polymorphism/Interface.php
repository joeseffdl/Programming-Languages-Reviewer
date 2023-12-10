<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polymorphism using Interface</title>
</head>
<body>
    <?php 
        interface ButtonFunction{
            public function buttonClicked();
        }

        Class Button implements ButtonFunction{
            public function buttonClicked(){
                echo "Button clicked";
            }
        }

        Class Link implements ButtonFunction{
            public function buttonClicked(){
                echo "Link clicked";
            }
        }

        $myButton = new Button();
        $buttonLink = new Link();

        $myButton->buttonClicked();
        echo "<br>";
        $buttonLink->buttonClicked();
        echo "<br>";
    ?>
</body>
</html>