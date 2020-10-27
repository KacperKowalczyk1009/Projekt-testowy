<?php
    $conn = new mysqli("localhost", "root", "", "nauka");
    $result=$conn->query('SELECT * FROM pracownicy');
        echo("<l1><b>Kacper");
            echo("<table border=1 style='margin-bottom:20px; font-size:20px'>");
            echo("<th>ID");
            echo("<th>Imie");
            echo("<th>Dział");
            echo("<th>Zarobki");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                    echo("</tr>");

                }
            echo("</table>");
?>
