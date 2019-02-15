<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
 
</head>
<body>
    <?php 
    include_once ('Shape.php');
    class Circle extends Shape{
        public $radius;
       
        public function __construct($name, $radius)
        {
        parent::__construct($name);
        $this->radius = $radius;
        }
       
        public function calculateArea(){
        return pi() * pow($this->radius, 2);
        }
       
        public function calculatePerimeter(){
        return pi() * $this->radius * 2;
        }
       }
    ?>
</body>
</html>