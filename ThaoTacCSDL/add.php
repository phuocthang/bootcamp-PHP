<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
    </style>
</head>

<body>

    <?php
    require "connect.php";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["stname"];
    $address = $_POST["staddress"];
    $email = $_POST["stemail"];
    $img = $_POST["stimages"];
    
    $sql = "INSERT INTO student (studentName,studentAddress,studentEmail,studentImager) VALUES (?,?,?,?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$name, $address, $email,$img]);
    echo "thành công";
    header("Location: http://localhost/bootcamp-PHP/ThaoTacCSDL/index.php"); 
}
    ?>

    <!-- Toàn văn	studentId	studentName	studentAddress	studentEmail	studentImager -->
    <div style="width:500px;">
        <form action="add.php" method="Post">
            <h3>ADD STUDENT</h3>
            <label for="fname">Student Name</label>
            <input type="text" id="fname" name="stname" placeholder="Your name..">
            <label for="country">Student Address</label>
            <input type="text" id="lname" name="staddress" placeholder="address..">
            <label for="country">Student Email</label>
            <input type="text" id="lname" name="stemail" placeholder="email..">
            <label for="country">Student images</label>
            <input type="text" id="lname" name="stimages" placeholder="images..">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>