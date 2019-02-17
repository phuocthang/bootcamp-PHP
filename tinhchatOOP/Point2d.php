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
    class Point2d
    {
        private $x;
        private $y;
        public function __construct($x = 0.0, $y = 0.0)
        {
            $this->x = $x;
            $this->y = $y;
        }
        public function getX()
        {
            return $this->x;
        }
        public function setX($x)
        {
            $this->x = $x;
        }
        public function getY()
        {
            return $this->y;
        }
        public function setY($y)
        {
            $this->y = $y;
        }
        public function getXY()
        {
            return array("x" => $this->x, "y" => $this->y);
        }
        public function setXY($x, $y)
        {
            $this->x = $x;
            $this->y = $y;
        }
        public function toString()
        {
            return "($this->x,$this->y)";
        }
    }
    class Point3d extends Point2d
    {
        private $z;
        public function __construct($x = 0.0, $y = 0.0, $z = 0.0)
        {
            parent::__construct($x, $y);
            $this->z = $z;
        }
        function getZ()
        {
            return $this->z;

        }
        public function setZ($z)
        {
            $this->z = $z;

        }

        public function setXYZ($x, $y, $z)
        {
            $this->x = $x;
            $this->y = $y;
            $this->z = $z;
        }
        public function getXYZ()
        {
            return array("X" => $this->x, "Y" => $this->y, "Z" => $this->z);
        }
        public function toString()
        {
            return "($this->x,$this->y,$this->z)";
        }

    }
    $run = new Point2d(10, 20);

    foreach ($run->getXY() as $value => $key) {
        echo $value . "=" . $key . "</br>";
    }
    $run2 = new Point3d();
    $run2->setXYZ(20, 40, 50);
    foreach ($run2->getXYZ() as $value => $key) {
        echo $value . "=" . $key . "</br>";
    }
    echo $run2->toString();
    ?>

</body>
</html>