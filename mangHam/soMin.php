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


   kết quả: <?php 
    function soNhonhat($saveNum){
    $index = count($saveNum);
    $min = $saveNum[0];

    for($i = 0;$i < $index; $i++ ){
       if($saveNum[$i] < $min){
           $min = $saveNum[$i];
           
       }
    }
       echo $min;
       echo "</br>".$index;
    }
    
     $saveNum = array(4 ,6,1);
    soNhonhat($saveNum);
    ?>
</body>
</html>