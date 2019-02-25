
<?php
require "view/layout/head.php";
require "view/layout/menu.php";
require "model/DBConnection.php";
require "model/productDB.php";
require "model/product.php";
require "controller/ProductController.php";

use \Controller\ProductController;

?>


<div class="container">
    <div class="navbar navbar-default">
        <a class="navbar-brand" href="index.php">Product management</a>
    </div>
    <?php
    $controller = new ProductController();
    $page = isset($_REQUEST['page'])? $_REQUEST['page'] : NULL;
    switch ($page){
        case 'add':
            $controller->add();
            break;
        case 'delete':
            $controller->delete();
            break;
        case 'edit':
            $controller->edit();
            break;
        default:
            $controller->index();
            break;
    }
    ?>
</div>
<?php require "view/layout/footer.php";   ?>
