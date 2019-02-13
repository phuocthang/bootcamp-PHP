<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <style>
    #content{
    width: 450px;
    margin: 0 auto;
    padding: 0px 20px 20px;
    background: white;
    border: 2px solid navy;
}

h1{
    color: navy;
}

label{
    width: 10em;
    padding-right: 1em;
    float: left;
}

#data input{
    float: left;
    width: 15em;
    margin-bottom: .5em;
}

#buttons input{
    float: left;
    margin-bottom: .5em;
}
br{
    clear: left;
}
.error{
    color: red;
}
    </style>
<head>
    <title>Future Value Calculator</title>
</head>
<body>
<div id="content">
        <h1>Product Discount Calculator</h1>
                    <p class="error">  <?php 
                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                            if (empty($_POST["name"]) && empty($_POST["gia"]) && empty($_POST["giamGia"])) {
                                                echo "bạn chưa điền vào ô trống";
                                            } else
                                                if (empty($_POST["name"])) {
                                                echo "bạn chưa nhập sp";
                                            } else if (empty($_POST["gia"])) {
                                                echo "bạn chưa nhập gia";
                                            } else if (empty($_POST["giamGia"])) {
                                                echo "bạn chưa nhập số lượng giảm giá";
                                            }

                                            $name = $_POST["name"];
                                            $gia = $_POST["gia"];
                                            $giamGia = $_POST["giamGia"];
                                            $slDiscount = $gia * $giamGia * 0.1;
                                            $thanhTien = $gia - $slDiscount;
                                        }
                                        ?> </p> 
        <form action="bt7.php" method="POST">
            <div id="data">
                <label>Product Description:</label>
                <input type="text" name="name" value="<?php if (!empty($name)) echo $name; ?>"/><br/>

                <label>List Price:</label>
                <input type="text" name="gia" value="<?php if (!empty($gia)) echo "$".$gia; ?>"/><br/>

                <label>Discount Percent:</label>
                <input type="text" name="giamGia" value="<?php if (!empty($giamGia)) echo $giamGia."%"; ?>"/>
                <label>Discount Amount: </label></br>
                <span><?php 
                if(isset($slDiscount)) echo "$".$slDiscount;
                ?></span><br/>
                <label>Discount Price: </label></br>
                <span><?php 
                if(isset($thanhTien)) echo "$".$thanhTien;
                ?></span><br/>
  
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate Discount"/><br/>
            </div>
        </form>
      
    </div>
</body>
</html>
