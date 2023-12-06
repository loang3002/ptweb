<!DOCTYPE html>
<html>
<head>
    <title>Trắc nghiệm tính cách</title>
</head>
<body>
    <h1>Trắc nghiệm tính cách</h1>
    <form action="process.php" method="post">
        <p>Câu hỏi 1: Tôi thích giao tiếp với người lạ.</p>
        <input type="radio" name="question1" value="1"> Đồng ý
        <input type="radio" name="question1" value="-1"> Không đồng ý
        <br>

        <p>Câu hỏi 2: Tôi thường cảm thấy thoải mái khi ở một mình.</p>
        <input type="radio" name="question2" value="-1"> Đồng ý
        <input type="radio" name="question2" value="1"> Không đồng ý
        <br>

        <input type="submit" value="Xác nhận">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $question1 = $_POST["question1"];
            $question2 = $_POST["question2"];
            $totalScore = $question1 + $question2;

            $personality = ($totalScore >= 0) ? "Hướng ngoại" : "Hướng nội";

            echo "<p>Kết quả tính cách của bạn là: " . $personality . "</p>";
        }
    ?>
</body>
</html>
