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
    include_once ('bai1.php');
    include_once ('Cylinder.php');
    include_once ('Rectangle.php');
    include_once ('Square.php');
    
    $circle = new Circle('Circle 01', 3);
    echo 'Circle area: ' . $circle->calculateArea() . '<br />';
    echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';
    
    $cylinder = new Cylinder('Cylinder 01', 3 , 4);
    echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
    echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';
    
    $rectangle = new Rectangle('Rectangle 01', 3 , 4);
    echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
    echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';
    
    $square = new Square('Square 01', 4 , 4, 4);
    echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
    echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';
    ?>
</body>
</html>