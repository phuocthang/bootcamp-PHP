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
        <h1>Future Value Calculator</h1>
                    <p class="error">  <?php 
                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                            if (empty($_POST["investment"]) && empty($_POST["investment"]) && empty($_POST["investment"])) {
                                                echo "bạn chưa điền vào ô trống";
                                            } else
                                                if (empty($_POST["investment"])) {
                                                echo "bạn chưa nhập số lượng";
                                            } else if (empty($_POST["rate"])) {
                                                echo "bạn chưa nhập rate";
                                            } else if (empty($_POST["years"])) {
                                                echo "bạn chưa nhập năm";
                                            }

                                            $soLuong = $_POST["investment"];
                                            $raTe = $_POST["rate"];
                                            $year = $_POST["years"];
                                            $giaTri = $soLuong + ($soLuong * ($raTe/100) * ($year * 0.1));
                                        }
                                        ?> </p> 
        <form action="bt6.php" method="POST">
            <div id="data">
                <label>Investment Amount:</label>
                <input type="text" name="investment" value="<?php if (!empty($_POST["investment"])) echo $soLuong . "$"; ?>"/><br/>

                <label>Yearly Interest Rate:</label>
                <input type="text" name="rate" value="<?php if (!empty($_POST["rate"])) echo $raTe . "%"; ?>"/><br/>

                <label>Number of Years:</label>
                <input type="text" name="years" value="<?php if (!empty($_POST["years"])) echo $year; ?>"/>
</br>                
   <label>Future Value: </label>
        <span><?php 
        if(isset($giaTri)){
       
        echo (double)$giaTri;
        }else{
            echo "0";
        }
        ?></span> <br/>
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate"/><br/>
            </div>
        </form>
      
    </div>
</body>
</html>
