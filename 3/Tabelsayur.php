<?php
    $sayur = array("Kubis","Kol","Sawi","Bayam","Kangkung");
    $berat = array("0.5","0.75","1","1.5","2");
    $stock = array("0","4","6","8","10");
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>Warung Pak Joy</title>
        <style>
            table, td, th {
                border: 1px solid black;
            }

            table {
                border-collapse: collapse;
                width: 50%;
            }

            td {
                text-align: center;
            }

            table.center {
                margin-left: auto; 
                margin-right: auto;
            }

        </style>
    </head>

    <body>
        <h1 align="center">Tabel Sayur Pak Joy</h1>
    <style>
        body {background-color: lightgray;}   
    </style>

        <table border='1' cellspacing='0' width='200' class="center"><tr>
            <tr bgcolor='#00FF00'>
                <th>No</th>
                <th>Nama</th>
                <th>Berat (Kg)</th>
                <th>Stock</th>
            </tr>

            <?php
                for ($i = 0; $i <= 4; $i++) {
                    $nomor = 1 + $i;
                    echo "<tr bgcolor='lightgreen'>";
                    echo "<td>$nomor</td>";
                    echo "<td>$sayur[$i]</td>";
                    echo "<td>$berat[$i]</td>";
                    if($stock[$i] == 0){
                        echo "<td bgcolor='red'>Kosong</td>";
                    }
                    else{
                        echo "<td>$stock[$i]</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>