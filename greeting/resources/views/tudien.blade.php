<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<h2>Từ điển</h2>    
<form method="POST" action="tudien">
@csrf
          <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
          <input type = "submit" id = "submit" value = "Tìm"/>
       </form>
</body>
</html>