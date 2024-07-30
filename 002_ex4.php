<?php

function is_prime($number) {
    // Các số nhỏ hơn 2 không phải là số nguyên tố
    if ($number < 2) {
        return false;
    }

    // Kiểm tra các số từ 2 đến căn bậc hai của $number
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// Ví dụ kiểm tra
$number = 29;
if (is_prime($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không phải là số nguyên tố.";
}

?>
