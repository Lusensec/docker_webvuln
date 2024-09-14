<link rel="stylesheet" href="css/style.css">

<div id="qipan_div">
    <table>
        <?php
        include_once "conn.php";
        $qipan_id = "qipan_".$_COOKIE['home_id'];
        for ($i = 1; $i <= 5; $i++) {
            $sqli = "select * from " . $qipan_id . " where id = $i";
            $result = mysqli_query($conn,$sqli);
            $row = mysqli_fetch_array($result);

            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                if ($row[$j] == 0){
                    echo "<td><div id='div_kong'></div></td>";
                } elseif ($row[$j] > 0) {
                    echo "<td><div id='div_yang'></div></td>";
                } else {
                    echo "<td><div id='div_lang'></div></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</div>