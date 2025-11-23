<!DOCTYPE html>
<html>
<head>
    <title>Marks Result</title>
</head>
<body>

<h1>Marks Calculation</h1>

<?php
    // Given Marks
    $marks = [50, 37, 76, 98];

    // 1. Calculate Total Sum
    $sum = array_sum($marks);

    // 2. Calculate Average
    $average = $sum / count($marks);

    // 3. Calculate Product of All Marks
    $product = 1;
    foreach ($marks as $m) {
        $product *= $m;
    }

    // 4. Display sum, average, product
    echo "<p><strong>Total Sum of Marks:</strong> $sum</p>";
    echo "<p><strong>Average Mark:</strong> $average</p>";
    echo "<p><strong>Product of All Marks:</strong> $product</p>";

    // 5. Conditions for grades
    echo "<p><strong>Result:</strong> ";

    if ($average > 50 && $average < 70) {
        echo "PASS";
    } elseif ($average == 70 && $average < 80) {
        echo "B";
    } elseif ($average > 81) {
        echo "DISTINCTION";
    } else {
        echo "FAIL";
    }

    echo "</p>";
?>

</body>
</html>
