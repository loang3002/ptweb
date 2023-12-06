<?php
function numberToWords($number) {
    $numbers = array(
        0 => 'không',
        1 => 'một',
        2 => 'hai',
        3 => 'ba',
        4 => 'bốn',
        5 => 'năm',
        6 => 'sáu',
        7 => 'bảy',
        8 => 'tám',
        9 => 'chín'
    );

    // ... Thêm các giá trị còn lại tương ứng ...

    if ($number < 10) {
        return $numbers[$number];
    } elseif ($number < 20) {
        return 'mười ' . $numbers[$number % 10];
    } elseif ($number < 100) {
        return $numbers[floor($number / 10)] . ' mươi ' . $numbers[$number % 10];
    } elseif ($number < 1000) {
        $hundreds = floor($number / 100);
        $remainder = $number % 100;
        $result = $numbers[$hundreds] . ' trăm';

        if ($remainder > 0) {
            $result .= ' ' . numberToWords($remainder);
        }

        return $result;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputNumber = isset($_POST['number']) ? $_POST['number'] : '';
    $convertedText = '';

    if (is_numeric($inputNumber) && $inputNumber >= 0 && $inputNumber < 1000) {
        $convertedText = numberToWords((int)$inputNumber);
    } else {
        $convertedText = 'Vui lòng nhập một số từ 0 đến 999.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyển từ số sang chữ</title>
</head>
<body>
    <h1>Chuyển từ số sang chữ</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="number">Nhập số (0-999):</label>
        <input type="text" id="number" name="number" required>
        <button type="submit">Chuyển đổi</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>Kết quả: <?php echo $convertedText; ?></p>
    <?php endif; ?>
</body>
</html>