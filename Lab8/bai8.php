<?php
// Kiểm tra dữ liệu từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Biểu thức chính quy để kiểm tra dữ liệu
    $name_pattern = "/^[a-zA-Z ]*$/";
    $email_pattern = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
    $phone_pattern = "/^\d{10}$/";

    // Kiểm tra dữ liệu sử dụng biểu thức chính quy
    if (!preg_match($name_pattern, $name)) {
        echo "Tên không hợp lệ";
    }
    if (!preg_match($email_pattern, $email)) {
        echo "Email không hợp lệ";
    }
    if (!preg_match($phone_pattern, $phone)) {
        echo "Số điện thoại không hợp lệ";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kiểm tra dữ liệu form bằng biểu thức chính quy</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        Tên: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
        Số điện thoại: <input type="text" name="phone"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
