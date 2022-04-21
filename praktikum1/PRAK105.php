<!DOCTYPE html>
<html>
<head>
    <title>Soal No 5</title>
    <style>
    table,th,tr,td{
        border: 1px solid;
    }
    th{
        height: 60px;
        background-color: red;
    }
</style>
</head>
<body>
    <?Php
        $Samsung = array('1' => "Samsung Galaxy S22 ",
                         '2' => "Samsung Galaxy S22+ ",
                         '3' => "Samsung Galaxy A03",
                         '4' => "Samsung Galaxy xcover 5",
        );
        echo "<table>";
        echo "<tr>";
        echo "<th><h2>Daftar Smartphone Samsung</h2></th>";
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
        echo "<tr>";
        echo "<td>$Samsung[4]</td>";
        echo "</tr>";
        echo "</table>";
        ?>
</body>
</html>
