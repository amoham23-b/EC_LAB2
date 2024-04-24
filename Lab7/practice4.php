<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["size"]) && is_numeric($_POST["size"]) && $_POST["size"] > 0) {
            $size = (int)$_POST["size"];


            echo "<table border='1'>";
            echo "<tr><th> </th>";

           
            for ($col = 1; $col <= $size; $col++) {
                echo "<th>$col</th>";
            }
            echo "</tr>";

           
            for ($row = 1; $row <= $size; $row++) {
                echo "<tr>";
                echo "<th>$row</th>"; 

               
                for ($col = 1; $col <= $size; $col++) {
                    echo "<td>" . ($row * $col) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Please enter a valid positive number.</p>";
        }
    }
    ?>