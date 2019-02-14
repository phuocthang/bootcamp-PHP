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
    // Tạo mảng $contact chứa thông tin $name, $email, $phone.
    // Sử dụng hàm json_encode(): chuyển đổi từ mảng dữ liệu sang dạng json
    // Sử dụng hàm json_decode(): chuyển đổi từ dạng json sang mảng dữ liệu
    // Sử dụng hàm file_put_contents(): lưu dữ liệu dạng json vào file
    // Sử dụng hàm file_get_contents(): lấy dữ liệu từ file json
    function loadRegistrations($filename)
    {
        // lay du lieu tu json
        $jsondata = file_get_contents($filename);
        // conver to array
        $arr_data = json_decode($jsondata, true);
        return $arr_data;
    }
    function saveDataJSON($filename, $name, $email, $phone)
    {
        try {
            $contact = array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone
            );
                // converts json data into array
            $arr_data = loadRegistrations($filename);
                // Push user data to array
            array_push($arr_data, $contact);
                //Convert updated array to JSON
            $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
                //save write json data into data.json file
            file_put_contents($filename, $jsondata);
            echo "Lưu dữ liệu thành công!";
        } catch (Exception $e) {
            echo 'Lỗi: ', $e->getMessage(), "\n";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $has_error = false;

        if (empty($_POST["name"])) {
            $nEr = "* bạn chưa nhập tên";
            $has_error = true;
        }
        if (empty($_POST["email"])) {
            $emEr = "* bạn chưa nhập Email";
            $has_error = true;
        } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {

            $emEr = " * Định dạng email sai (xxx@xxx.xxx.xxx)!";
        }
        if (empty($_POST["phone"])) {
            $has_error = true;
            $phoneEr = "* bạn chưa nhập phone";
        }
        if ($has_error === false) {
            saveDataJSON("data.json", $name, $email, $phone);
            $name = null;
            $email = null;
            $phone = null;
        }
    }
    ?>
    <h2>Registration Form</h2>
    <form method="post" action="bt2.php">
        <fieldset>
            <legend>Details</legend>
            Name: <input type="text" name="name" value="">
            <span class="error"><?php if (isset($nEr)) echo $nEr; ?></span>
            <br><br>
            E-mail: <input type="text" name="email" value="">
            <span class="error"><?php if (isset($emEr)) echo $emEr; ?></span>
            <br><br>
            Phone: <input type="text" name="phone" value="">
            <span class="error"><?php if (isset($phoneEr)) echo $phoneEr; ?></span>
            <br><br>
            <input type="submit" name="submit" value="Register">
            <p><span class="error">* required field..</span></p>
        </fieldset>
    </form>
    <?php
    $registrations = loadRegistrations('data.json');
    ?>
    <h2>Registration list</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php foreach ($registrations as $registration) : ?>
        <tr>
            <td><?= $registration['name']; ?></td>
            <td><?= $registration['email']; ?></td>
            <td><?= $registration['phone']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>