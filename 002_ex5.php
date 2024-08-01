
<?php

function isLeapYear($year) {

    // Năm nhuận là năm chia hết cho 4 và không chia hết cho 100,
    // hoặc chia hết cho 400

    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {

        return true;
    } 

    else {

        return false;
    }
}

// Ví dụ sử dụng hàm
$year = 2005;

if (isLeapYear($year)) {

    echo "$year là năm nhuận.";
} 

else {
    echo "$year không phải là năm nhuận.";
}

?>

