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
   
    <form action ="maytinh"  method="post">
        @csrf
    Nhập số: <input type="text" name="soA" value="" /> <input type="text" name="soB" value="" /></br>
    </br>
        <input type="submit" name="pheptoan" value="+" />  <input type="submit" name="pheptoan" value="-" /> <input type="submit" name="pheptoan" value="*" />  <input type="submit" name="pheptoan" value="/" />
    </form>
</br>
    <b>Kết quả:
    </b>

</body>

</html>