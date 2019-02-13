<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <style> 
        input[type=text] {
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
<h2>Từ Điển Anh - Việt</h2>
<?php 
$dictionary = array(
    "hello"=>"xin chào", 
    "how"=>"thế nào", 
    "book"=>"quyển vở", 
    "computer"=>"máy tính");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchword = $_POST["search"]; 
    $flag = false;
    foreach($dictionary as $word => $description) {
       if($word == $searchword){
          echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
          echo "<br/>";
          $flag = true;
       }
    } 
  
    if($flag == false){
       echo "Không tìm thấy từ cần tra.";
    }
  }
?>
       <form method = "post">
          <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
          <input type = "submit" id = "submit" value = "Tìm"/>
       </form>
</body>
</html>