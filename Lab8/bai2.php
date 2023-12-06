<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Máy tính cầm tay</title>
</head>
<body>
    <form action="bai2.php" method="post">
        <input type="text" name="a" placeholder="Số thứ nhất">
        <select name="cal">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <input type="text" name="b" placeholder="Số thứ hai">
        <input type="submit" value="=">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST["a"];
            $b = $_POST["b"];
            $cal = $_POST["cal"];

            switch ($cal) {
                case "+":
                    $result = $a + $b;
                    break;
                case "-":
                    $result = $a - $b;
                    break;
                case "*":
                    $result = $a * $b;
                    break;
                case "/":
                    $result = $a / $b;
                    break;
                case "%":
                    $result = $a % $b;
                    break;
            }

            echo "<p>Kết quả: $result</p>";
        }
    ?>
</body>
</html>