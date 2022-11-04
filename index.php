<html>
<head>
    <title></title>
</head>
<body>
<table border="5">

    <?php

    for ($a = 1; $a <= 5; $a++) {
        echo "<tr>";
        for ($b = 1; $b <= 5; $b++) {
            echo "<td>";
            echo $a * $b;
            echo "</td>";

        }
        echo "</br>";
        echo "</tr>";
    }
    ?>

</table>
</body>
</html>
