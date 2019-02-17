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
    class Triangle
    {
        private $side1 = 1.0;
        private $side2 = 1.0;
        private $side3 = 1.0;
        private $color;
        public function __construct($side1, $side2, $side3, $color)
        {
            $this->side1 = $side1;
            $this->side2 = $side2;
            $this->side3 = $side3;
            $this->color = $color;
        }
        public function getcolor()
        {
            return $this->color;
        }
        public function setcolor($color)
        {
            $this->color = $color;
        }
        public function getS1()
        {
            return $this->side1;
        }
        public function setS1($side1)
        {
            $this->side1 = $side1;
        }
        public function getS2()
        {
            return $this->side2;
        }
        public function setS2($side2)
        {
            $this->side2 = $side2;
        }
        public function getS3()
        {
            return $this->side3;
        }
        public function setS3($side3)
        {
            $this->side3 = $side3;
        }
        public function getArea()
        {
            return 1 / 4 * sqrt(($this->side1 + $this->side2 + $this->side3) * ($this->side1 + $this->side2 - $this->side3) * ($this->side2 + $this->side3 - $this->side1) * ($this->side3 + $this->side1 - $this->side2));  //a+b+c)(a+b−c)(b+c−a)(c+a−b)−−−−−−−−−−−−−−−−−−−−−−−−−−−−−−−−−√
        }
        public function getPerimeter()
        {
            return $this->side1 + $this->side2 + $this->side3;
        }
        public function toString()
        {
            return "3 cạnh của tam giác là:" . "($this->side1,$this->side2,$this->side3)";
        }
    }
    class Shape extends Triangle
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function show()
        {
            return "I am a shape. My name is $this->name";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["canhA"];
        $b = $_POST["canhA"];
        $c = $_POST["canhA"];
        $color = $_POST["color"];
        $run = new Triangle($a, $b, $c, $color);
        echo "chu vi tam giac la :" . $run->getArea()."</br>"."color:".$run->getcolor()."</br>";
        echo "dien tich tam giac la :".$run->getPerimeter();
        
    }
    ?>
    <form action="bt2sao.php" method="POST">
        A :<input type="number" name="canhA"></br>
        B :<input type="number" name="canhA"></br>
        C :<input type="number" name="canhA"></br>
        color:<input type="text" name="color"></br>
        <button type="submit">Nhap 3 canh</button>
    </form>
</body>

</html>