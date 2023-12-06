<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select box động</title>
</head>
<body>

<h1>Select box động</h1>

<form action="bai5.php" method="post">
    <select name="user">
        <?php foreach ($data as $item) { ?>
            <option value="<?php echo $item["id"]; ?>"><?php echo $item["name"]; ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Chọn">
</form>

<?php

$data = [
    ["id" => 1, "name" => "John Doe"],
    ["id" => 2, "name" => "Jane Doe"],
    ["id" => 3, "name" => "John Smith"],
    ["id" => 4, "name" => "Jane Smith"],
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["user"];

    if ($user_id != "") {
        echo "Bạn đã chọn: $user_id";
    }
}

?>

</body>
</html>