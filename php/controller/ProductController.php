<?php


namespace Controller;

use function Couchbase\defaultDecoder;
use Model\Product;
use Model\ProductDB;
use Model\DBConnection;

class ProductController
{

    public $productDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=test","root", "");
        $this->ProductDB = new ProductDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/product/add.php';
        } else {
            $name = $_POST['namepr'];
            $price = $_POST['pricepr'];
            $describe = $_POST['despr'];
            $producer = $_POST['propr'];
            $Product = new Product($name, $price, $describe ,$producer);
            $this->ProductDB->create($Product);
            $this->index();
        }
    }

    public function index()
    {
        $products = $this->ProductDB->getAll();
        include 'view/product/list.php';
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->ProductDB->get($id);
            include 'view/product/dele.php';
        } else {
            $id = $_POST['id'];
            $this->ProductDB->delete($id);
         $this->index();
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $Product = $this->ProductDB->get($id);
            include 'view/product/edit.php';
        } else {
            $id = $_POST['id'];
            $name = $_POST['namepr'];
            $price = $_POST['pricepr'];
            $describe = $_POST['despr'];
            $producer = $_POST['propr'];
            $product = new Product($name,$price,$describe,$producer);
            $this->ProductDB->update($id,$product);
            $this->index();
            echo "thanh cong";
            foreach($product as $key){
                echo $key;
            }
        }
    }
}