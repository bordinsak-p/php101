<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<?php
    function classifyTriangle($a, $b, $c) {

        $sum = ($a ** 2) + ($b ** 2);
        $c = $c ** 2;

        echo $sum, $c;

        if ($a == $b && $b == $c) {
            return "Equilateral Triangle";
        } elseif ($a == $b || $a == $c || $b == $c) {
            return "Isosceles Triangle";
        } elseif ($sum == $c) {
            return "Right Triangle";
        } else {
            return "Scalene Triangle";
        }
    }
?>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center mb-3" style="height: 40vh;">
        <?php
            $a = 5;
            $b = 5;
            $c = 10;
            $result = classifyTriangle($a, $b, $c);
            echo "<h1>$result</h1>";
        ?>
    </div>
</body>

</html>