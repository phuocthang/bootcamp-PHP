
<?php
require "view/layout/head.php";
require "view/layout/menu.php";
require "model/DBConnection.php";
require "model/CustomerDB.php";
require "model/Customer.php";
require "controller/CustomerController.php";

use \Controller\CustomerController;

?>


<div class="container">
    <div class="navbar navbar-default">
        <a class="navbar-brand" href="index.php">Customer management</a>
    </div>
    <?php
    $controller = new CustomerController();
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
