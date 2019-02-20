<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    input[type=text], select {
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
    ?>
    
<!-- Toàn văn	studentId	studentName	studentAddress	studentEmail	studentImager -->
<div style="width:500px;">
<!-- // add infor -->
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["stname"];
    $address = $_POST["staddress"];
    $email = $_POST["stemail"];
    $img = $_POST["stimages"];

    $sql = "INSERT INTO student (studentName,studentAddress,studentEmail,studentImager) VALUES (?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $address, $email, $img]);
    echo "thành công";
    header("Location: http://localhost/bootcamp-PHP/ThaoTacCSDL/index.php");
}
?>
<form action="#" method="POST">

<h3>EDIT STUDENT</h3>
<!-- // show infor -->
<?php
$id = $_GET["id"];
$data = $pdo->prepare("SELECT * FROM student where studentId =?");
$data->execute([$id]);
$user = $data->fetchAll();
// and somewhere later:
foreach ($user as $row) {
    ?>
    <label for="fname">Student Name</label>
    <input type="text" id="fname" name="stname" value="<?php echo $row["studentName"]; ?>">
    <label for="country">Student Address</label>
    <input type="text" id="lname" name="staddress" value="<?php echo $row["studentAddress"]; ?>">

    <label for="country">Student Email</label>
    <input type="text" id="lname" name="stemail" value="<?php echo $row["studentEmail"]; ?>">
    <label for="country">Student images</label>
    <input type="text" id="lname" name="stimages" value="<?php echo $row["studentImager"]; ?>">
  
    <input type="submit" value="Submit">
    <?php 
}

?>
  </form>
  </div>
</body>
</html>