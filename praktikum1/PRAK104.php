<!DOCTYPE html>
<html>
<head>
    <title>Soal Praktikum No 4</title>
    <style>
        table,th,tr,td{
            border: 1px solid;
        }
    </style>
</head>
<body>
    <?Php
        $Samsung = array("Samsung Galaxy S22 ",
                        "Samsung Galaxy S22+ ",
                        "Samsung Galaxy A03",
                        "Samsung Galaxy xcover 5",
        );
        echo "<table>";
        echo "<tr>";
        echo "<th>Daftar Smartphone Samsung</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>$Samsung[0]</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>$Samsung[1]</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>$Samsung[2]</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>$Samsung[3]</td>";
        echo "</tr>";

        echo "</table>";

    ?>
</body>
</html>
