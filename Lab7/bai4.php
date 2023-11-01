<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Máy ATM</title>
</head>
<body>

<h1>Máy ATM</h1>

<form action="bai4.php" method="post">
    <input type="text" name="card_number" placeholder="Số thẻ">
    <input type="password" name="pin" placeholder="Mật khẩu">
    <input type="number" name="amount" placeholder="Số tiền">
    <input type="submit" value="Rút tiền">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_number = $_POST["card_number"];
    $pin = $_POST["pin"];
    $amount = $_POST["amount"];

    if ($card_number == "" || $pin == "") {
        echo "Vui lòng nhập đầy đủ thông tin";
        exit();
    }

    if ($amount <= 0) {
        echo "Số tiền phải lớn hơn 0";
        exit();
    }

    if ($amount > 100000) {
        echo "Số tiền vượt quá số dư trong tài khoản";
        exit();
    }

    $balance = 100000 - $amount;

    echo "Giao dịch thành công";
    echo "Số dư còn lại: $balance";
}

?>

</body>
</html>