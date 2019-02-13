<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <!-- //<script src="main.js"></script> -->
    <style>
    body {
        padding: 5px;
    }

    input[type=text] {
        width: 300px;
        font-size: 16px;
        border: 2px solid #ccc;
        border-radius: 4px;
        padding: 12px 10px 12px 10px;
    }

    .phep {
        width: 300px;
        font-size: 16px;
        border: 2px solid #ccc;
        border-radius: 4px;
        padding: 12px 10px 12px 10px;
    }

    #submit {
        border-radius: 2px;
        padding: 10px 32px;
        font-size: 16px;
    }
    </style>
</head>

<body>
   
    <form action ="bt8.php"  method="post">
        Số thứ nhất: <input type="text" name="soA" value="<?php if (isset($soA)) echo $soA ?>" /></br>
        phép toán: <select class="phep" name="pheptoan">
            <option value="">PHÉP TOÁN</option>
            <option value="cong">+</option>
            <option value="tru">-</option>
            <option value="nhan">*</option>
            <option value="chia">/</option>
        </select> </br>
        số thứ hai : <input type="text" name="soB" value="<?php if (isset($soB)) echo $soB ?>" /></br>
        <div id="submit">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate" /><br />
        </div></br>
    </form>
    <b>Kết quả:
    <?php 
    class calculator
    {

        function tinh($pheptoan, $soA, $soB)
        {
            switch ($pheptoan) {
                case "cong":
                    return $soA + $soB;

                    break;
                case "tru":
                    return $soA - $soB;

                    break;
                case "nhan":
                    return $soA * $soB;

                    break;
                case "chia":
                    if ($soB == 0) {
                        throw new Exception("lổi mẫu số bạn nhập là 0");
                    } else {
                        return $soA / $soB;

                    }
                    break;
            }
        }
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $soA = $_POST["soA"];
        $soB = $_POST["soB"];
        $pheptoan = $_POST["pheptoan"];
   
    $run = new calculator;
    echo $run->tinh($pheptoan, $soA, $soB);
  
    try {
        $run->tinh($pheptoan, $soA, $soB);   
      }
      //catch exception
      catch(Exception $e) {
        echo $e->getMessage();
      }
    }
    ?>
    </b>

</body>

</html>