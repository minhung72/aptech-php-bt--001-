<?php
function Ve_Tamgiac_Can($n) {
    // Vẽ phần tam giác tăng dần
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "# ";
        }
        echo "<br>";
    }
    
    // Vẽ phần tam giác giảm dần
    for ($i = $n-1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "# ";
        }
        echo "<br>";
    }
}

// Sử dụng hàm Ve_Tamgiac_Can với ví dụ n = 10
$n = 10;
Ve_Tamgiac_Can($n);
?>
