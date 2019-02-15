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
    class QuadraticEquation {
        private $a =2
        ;
        private $b;
        private $c;
        
        
        // public function __construct($a, $b,$c)
        // {
        //     $this->a = $a;
        //     $this->b = $b;
        //     $this->c = $c;
        // }
        function gettera($a){
           return $this->a = $a ;
           
        }
        function getterb($b){
            return $this->b =$b  ;
            
         }
         function getterc($c){
            return $this->c = $c;
           
         }

        function getDiscriminant(){
          return   pow($this->b,2) - 4*$this->a*$this->c;
        }
        function getRoot1(){
            return (-($this->b) + sqrt($this->getDiscriminant())) / 2*$this->a;
        }
        function getRoot2(){
            return (-($this->b) - sqrt( $this->getDiscriminant()))/ 2*$this->a;
        }
        function getRoot3(){
            return -($this->b)/2 *$this->a;
        }
       
    }
    // $a = 2;
    // $b = 7;
    // $c = 3;
    $canbac2 = new QuadraticEquation();
    $canbac2->gettera(1);
    $canbac2->getterb(2);
    $canbac2->getterc(1);
    //  echo $canbac2->getDiscriminant();
    if($canbac2->getDiscriminant() > 0){
        echo "Phương trình có 2 nghiệm:". $canbac2->getRoot1()."</br>". $canbac2->getRoot2();
    }else{
        echo "Phương trình vô nghiệm";
    }
    if($canbac2->getDiscriminant() == 0){
        echo $canbac2->getRoot3();
    }
    ?>
</body>
</html>