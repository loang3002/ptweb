<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chòm sao</title>
</head>
<body>
    <form action="bai3.php" method="post">
        <input type="text" name="day" placeholder="Ngày sinh">
        <input type="text" name="month" placeholder="Tháng sinh">
        <input type="submit" value="Xem chòm sao">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $day = $_POST["day"];
            $month = $_POST["month"];

            $constellation = "";

            switch ($month) {
                case 1:
                    if ($day >= 20) {
                        $constellation = "Bảo Bình";
                    } else {
                        $constellation = "Ma Kết";
                    }
                    break;
                case 2:
                    if ($day >= 19) {
                        $constellation = "Song Ngư";
                    } else {
                        $constellation = "Bảo Bình";
                    }
                    break;
                case 3:
                    if ($day >= 21) {
                        $constellation = "Bạch Dương";
                    } else {
                        $constellation = "Song Ngư";
                    }
                    break;
                case 4:
                    if ($day >= 20) {
                        $constellation = "Kim Ngưu";
                    } else {
                        $constellation = "Bạch Dương";
                    }
                    break;
                case 5:
                    if ($day >= 21) {
                        $constellation = "Song Tử";
                    } else {
                        $constellation = "Kim Ngưu";
                    }
                    break;
                case 6:
                    if ($day >= 22) {
                        $constellation = "Cự Giải";
                    } else {
                        $constellation = "Song Tử";
                    }
                    break;
                case 7:
                    if ($day >= 23) {
                        $constellation = "Sư Tử";
                    } else {
                        $constellation = "Cự Giải";
                    }
                    break;
                case 8:
                    if ($day >= 23) {
                        $constellation = "Xử Nữ";
                    } else {
                        $constellation = "Sư Tử";
                    }
                    break;
                case 9:
                    if ($day >= 23) {
                        $constellation = "Thiên Bình";
                    } else {
                        $constellation = "Xử Nữ";
                    }
                    break;
                case 10:
                    if ($day >= 23) {
                        $constellation = "Bọ Cạp";
                    } else {
                        $constellation = "Thiên Bình";
                    }
                    break;
                case 11:
                    if ($day >= 22) {
                        $constellation = "Nhân Mã";
                    } else {
                        $constellation = "Bọ Cạp";
                    }
                    break;
                case 12:
                    if ($day >= 22) {
                        $constellation = "Ma Kết";
                    } else {
                        $constellation = "Nhân Mã";
                    }
                    break;
            }

            echo "<p>Chòm sao của bạn là: $constellation</p>";
        }
    ?>
</body>
</html>