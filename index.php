<?php
tabelmaken();

function tabelmaken(){
    $hb = 10;
    echo "<table border=1>";
    for($x=0;$x<$hb;$x++){
        echo "<tr>";
        for($y=0; $y<$hb;$y++){
            echo "<td>a</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}