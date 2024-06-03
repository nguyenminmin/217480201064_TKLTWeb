<?php

    $x = rand(-100, 100);
    $y = rand(-100, 100);
    echo "x = " . $x;
    echo "<br>";
    echo "y = " . $y;
    echo "<br>";


    if ($x > $y) {
        echo "Tổng x và y = " . ($x + $y) . "<br>";
    } else {
        echo "Điều kiện x > y không thỏa mãn. Không thực hiện phép tính.<br>";
    }

    do {
        $x = rand(-100, 100);
        $y = rand(-100, 100);
        echo "x = " . $x;
        echo "<br>";
        echo "y = " . $y;
        echo "<br>";
    } while ($x <= $y);

    echo "Tổng x và y sau khi điều kiện thỏa mãn (x > y) = " . ($x + $y) . "<br>";
    ?>