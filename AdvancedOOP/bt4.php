<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <!-- <script src="main.js"></script> -->
</head>

<body>
    <?php 
    interface Resizeable
    {
        public function resize();
    }
    class Circle implements Resizeable
    {
        public $radius;
        public function __construct($radius)
        {
            $this->radius = $radius;
        }
        public function calculateArea()
        {
            return pi() * pow($this->radius, 2);
        }
        public function calculatePerimeter()
        {
            return pi() * $this->radius * 2;
        }
        public function resize()
        {
          $this->radius +=rand(1,100);
        }
    }
    class Rectangle implements Resizeable
    {
        public $width;
        public $height;
        public function __construct($width, $height)
        {
            $this->width = $width;
            $this->height = $height;
        }
        public function calculateArea()
        {
            return $this->height * $this->width;
        }
        public function calculatePerimeter()
        {
            return ($this->height + $this->width) * 2;
        }
        public function resize()
        {
             $this->width +=rand(1,100);
             $this->height +=rand(1,100);
        }
    }
    class Square extends Rectangle implements Resizeable
    {
        public $width;
        public function __construct($width)
        {
            $this->width = $width;
        }
        public function resize()
        {
             $this->width +=rand(1,100);
             $this->height +=rand(1,100);
        }
        public function calculateArea(){
            return $this->width*$this->width;
        }
    }
    $mang[0] = new Circle(20);
    $mang[1] = new Rectangle(10,20);
    $mang[2] = new Square(10);
  
    echo "Diện tích khi  chưa tăng  kích thước :-----------"."</br>";
    foreach($mang as $value){
     echo "diện tích là ".$value->calculateArea()."</br>";
    }
    echo "Diện tích sau khi tăng  kích thước :-----------"."</br>";
    
    foreach($mang as $value){
        echo "diện tích là ".$value->resize().$value->calculateArea()."</br>";
       }
    ?>
</body>

</html>