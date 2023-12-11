<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class and Object</title>
</head>
<body>
    <?php 
        Class Books{
            var $price;
            var $title;

            function __construct($par1, $par2){
                $this->title = $par1;
                $this->price = $par2;
            }

            function setPrice($par){
                $this->price = $par;
            }

            function getPrice(){
                return $this->price;
            }

            function setTitle($par){
                $this->title = $par;
            }

            function getTitle(){
                return $this->title;
            }

            function getDetails(){
                echo "Title: $this->title, Price: $this->price <br>";
            }
        }
        // Creating Objects
        $Physics = new Books("Physics", 100);
        $Chemistry = new Books("Chemistry", 200);
        $Maths = new Books("Maths", 300);
        
        // Get Details
        $Physics->getDetails();
        $Chemistry->getDetails();
        $Maths->getDetails();

        // Set Details
        $Physics->setPrice(500);
        echo $Physics->getTitle()." is set to: " . $Physics->getPrice() . "<br>";
        $Physics->getDetails();
        
        // Set Title
        $Chemistry->setTitle("Chemistry 2");
        echo "Title of Chemistry is set to: " . $Chemistry->getTitle() . "<br>";
        $Chemistry->getDetails();
    ?>    
</body>
</html>