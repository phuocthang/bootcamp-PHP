<?php 
interface Colorable
{
    public function howtoColor();
}
class Square implements Colorable
{
    public $a;
    public function __construct($a)
    {
        $this->a =$a;
    }
    public function howtoColor()
    {
        echo "Color all four sides";
    }
    public function dientich()
    {
     return $this->a * $this->a;
    }
}
$mang[0] = new Square(10);
foreach($mang as $hinh){
 echo "Dien tich la :".$hinh->dientich()."</br>";
 if($hinh instanceof Colorable){
     echo $hinh->howtoColor();
 }
}

?>