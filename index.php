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
            div{
                margin:auto;
                width:30px;
                height: 30px;
            }
            .steenrood{
                border-radius : 100%;
                background-color:red;
            }
            .steenblauw{
                border-radius : 100%;
                background-color:blue;
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
        return "<td class=zwart><div class=".bepaalsteen().">.</div></td>";
    }
}
$stenenTeller = 0;
function bepaalsteen(){

    global $stenenTeller;
    $stenenTeller++;
    if($stenenTeller > 20){
        if($stenenTeller <= 30){
            return "";
        }
        return "steenblauw";
    }else{
        return "steenrood";
    }
}

?>
    </body>
</html>
