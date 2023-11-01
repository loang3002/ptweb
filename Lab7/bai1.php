<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Phân trang đơn giản</title>
</head>
<body>
<?php

// Tạo mảng dữ liệu
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Tính tổng số trang
$total_pages = ceil(count($data) / 5);

// Hiển thị phân trang
for ($i = 1; $i <= $total_pages; $i++) {
  // Tạo liên kết đến trang thứ $i
  $link = '<a href="?page=' . $i . '">Trang ' . $i . '</a>';

  // Hiển thị liên kết
  echo $link;
}

?>
</body>
</html>