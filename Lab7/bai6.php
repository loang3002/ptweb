<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trắc nghiệm tính cách</title>
</head>
<body>

<h1>Trắc nghiệm tính cách</h1>

<form action="bai6.php" method="post">
    <?php foreach ($questions as $question) { ?>
        <h3><?php echo $question["question"]; ?></h3>
        <input type="radio" name="answer[<?php echo $question["id"]; ?>]" value="<?php echo $question["options"][0]; ?>"> <?php echo $question["options"][0]; ?>
        <input type="radio" name="answer[<?php echo $question["id"]; ?>]" value="<?php echo $question["options"][1]; ?>"> <?php echo $question["options"][1]; ?>
    <?php } ?>
    <input type="submit" value="Kết quả">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answers = $_POST["answer"];

    // Kiểm tra xem người dùng đã trả lời hết các câu hỏi hay chưa
    if (count($answers) != count($questions)) {
        echo "Bạn chưa trả lời hết các câu hỏi. Vui lòng trả lời tất cả các câu hỏi để nhận kết quả.";
        exit;
    }

    // Tính điểm cho mỗi câu hỏi
    $scores = [];
    foreach ($questions as $key => $question) {
        $scores[$key] = 0;
        if ($answers[$key] == $question["options"][0]) {
            $scores[$key] = 1;
        } else if ($answers[$key] == $question["options"][1]) {
            $scores[$key] = -1;
        }
    }

    // Xác định tính cách
    $personality = "";
    $median = array_sort($scores)[int(count($scores) / 2)];
    if ($median >= 0) {
        $personality = "Hướng ngoại";
    } else {
        $personality = "Hướng nội";
    }

    // Hiển thị kết quả
    echo "Tính cách của bạn là: $personality";
}

?>

</body>
</html>
