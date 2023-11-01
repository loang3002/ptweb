<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    // Mảng lưu trữ các số từ 0 đến 99
    $numbers = [
        "0" => "không",
        "1" => "một",
        "2" => "hai",
        "3" => "ba",
        "4" => "bốn",
        "5" => "năm",
        "6" => "sáu",
        "7" => "bảy",
        "8" => "tám",
        "9" => "chín",
        "10" => "mười",
        "20" => "hai mươi",
        "30" => "ba mươi",
        "40" => "bốn mươi",
        "50" => "năm mươi",
        "60" => "sáu mươi",
        "70" => "bảy mươi",
        "80" => "tám mươi",
        "90" => "chín mươi",
        "100" => "một trăm",
        "200" => "hai trăm",
        "300" => "ba trăm",
        "400" => "bốn trăm",
        "500" => "năm trăm",
        "600" => "sáu trăm",
        "700" => "bảy trăm",
        "800" => "tám trăm",
        "900" => "chín trăm",
    ];

    // Chuyển đổi số thành chữ
    function to_words($number) {
        // Trường hợp số là số nguyên
        if (is_int($number)) {
            // Trường hợp số < 100
            if ($number < 100) {
                // Trường hợp số < 20
                if ($number < 20) {
                    return $numbers[$number];
                } else {
                    // Số có hai chữ số
                    $tens = floor($number / 10);
                    $ones = $number % 10;
                    return $numbers[$tens] . " mươi " . $numbers[$ones];
                }
            } else {
                // Trường hợp số > 100
                $hundreds = floor($number / 100);
                $tens = floor(($number - $hundreds * 100) / 10);
                $ones = $number % 10;
                return $numbers[$hundreds] . " trăm " . to_words($tens) . " mươi " . $numbers[$ones];
            }
        } else {
            // Trường hợp số là số thập phân
            // Lấy phần nguyên của số
            $number = floor($number);
            // Trả về kết quả
            return to_words($number);
        }
    }

    // In kết quả
    echo to_words(123);
?>
</body>
</html>