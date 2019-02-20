<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 15px;
    }
    </style>
</head>
<?php include "connect.php" ?>
<body>
  <a href ="add.php">Add</a>
    <table style="width:100%">
        <tr>
            <th>Id</th>
            <th>student_Name</th>
            <th>student_Address</th>
			<th>student_Email</th>	
            <th>student_Imager</th>
            <th>Action</th>
      
        </tr>
        <?php
        $data = $pdo->query("SELECT * FROM student")->fetchAll();
// and somewhere later:
        foreach ($data as $row) {
            ?>
        <tr>
            <td><?php echo $row["studentId"]; ?></td>
            <td><?php echo $row["studentName"]; ?></td>
            <td><?php echo $row["studentAddress"]; ?></td>
            <td><?php echo $row["studentEmail"]; ?></td>
            <td><?php echo $row["studentImager"]; ?></td>
            <td><a href ="edit.php?id=<?php echo $row["studentId"] ; ?> & title=method_get">Edit</a></br><a href="dele.php?id=<?php echo $row["studentId"] ; ?> & title=method_get">Delete</a></td>
        </tr>
        <?php 
    }
    ?>
    </table>

</body>

</html>
