<!DOCTYPE HTML>
<html>

<head>
    <style>
    .error {
        color: #FF0000;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: solid 1px #ccc;
    }

    form {
        width: 450px;
    }
    </style>
</head>

<body>
    <?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST["name"];
        if (empty($_POST["name"]) && empty($_POST["email"]) && empty($_POST["phone"])) {
            $Er = "* Bạn chưa điền vào ô trống";
        }
        if (empty($_POST["name"])) {
            $nEr = "* bạn chưa nhập tên";
        } else {
            $name = $_POST["name"];
        }
        if (empty($_POST["email"])) {
            $emEr = "* bạn chưa nhập Email";
        } else if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST["email"];
        } else {
            $emEr1 = "$email is not a valid email address";
        }
        if (empty($_POST["phone"])) {
            $phoneEr = "* bạn chưa nhập phone";
        } else {
            $phone = $_POST["phone"];
        }
    }
    ?>
    <h2>Registration Form</h2>
    <form method="post">
        <fieldset>
            <legend>Details</legend>
            Name: <input type="text" name="name" value="">
            <span class="error"><?php echo $nEr;  ?>ssssss</span>
            <br><br>
            E-mail: <input type="text" name="email" value="">
            <span class="error"><?php echo $emEr."</br>.$emEr1";  ?></span>
            <br><br>
            Phone: <input type="text" name="phone" value="">
            <span class="error"><?php echo $phoneEr;  ?></span>
            <br><br>
            <input type="submit" name="submit" value="Register">
            <p><span class="error"><?php echo $Er ?>.</span></p>
        </fieldset>
    </form>

    <h2>Registration list</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <tr>
            <td>xxx</td>
            <td>xxx</td>
            <td>xx</td>
        </tr>
    </table>
</body>

</html>