<html>
    <head>
        <style>
            td{
                width: 40px;
                height: 40px;
            }
            .wit{
                background-color: white;
            }
            .zwart{
                
                background-color: black;
            }
        </style>
    </head>
    <body>
<?php
tabelmaken();

function tabelmaken(){
    $hb = 10;
    echo "<table>";
    for($x=0;$x<$hb;$x++){
        echo "<tr>";
        for($y=0; $y<$hb;$y++){
            if($x % 2){
                echo bepaalkleur($y);
            }else{
                echo bepaalkleur($y,true);
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

function bepaalkleur($positie, $omgekeerd = false){
    if($omgekeerd){
        $positie++;
    }
    if($positie % 2 == 0){
        return "<td class=wit></td>";
    }else{
        return "<td class=zwart></td>";
    }
}

?>
    </body>
</html>
