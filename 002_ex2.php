<?php

function Ve_Tamgiac($n) {
    if ($n == 1) {
        echo "*<br>";
    } elseif ($n == 2) {
        echo "*<br>";
        echo "* *<br>";
    } elseif ($n == 3) {
        echo "*<br>";
        echo "* *<br>";
        echo "* * *<br>";
    } elseif ($n == 4) {
        echo "*<br>";
        echo "* *<br>";
        echo "* * *<br>";
        echo "* * * *<br>";
    } elseif ($n == 5) {
        echo "*<br>";
        echo "* *<br>";
        echo "* * *<br>";
        echo "* * * *<br>";
        echo "* * * * *<br>";
    } 
}

// Sử dụng hàm draw_triangle với ví dụ n = 5
$n = 5;
Ve_Tamgiac($n);

?>
