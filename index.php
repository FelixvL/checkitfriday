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
$speelveld = [
    [1,0,1,0,1,0,1,0,1,0],
    [0,1,0,1,0,1,0,1,0,1],
    [1,0,1,0,1,0,1,0,1,0],
    [0,1,0,1,0,1,0,0,0,1],
    [2,0,0,0,0,0,0,0,1,0],
    [0,0,0,0,0,0,0,0,0,0],
    [2,0,0,0,2,0,2,0,2,0],
    [0,2,0,2,0,2,0,2,0,2],
    [2,0,2,0,2,0,2,0,2,0],
    [0,2,0,2,0,2,0,2,0,2],
];
tabelmaken();

function tabelmaken(){
    $hb = 10;
    echo "<table>";
    for($x=0;$x<$hb;$x++){
        echo "<tr>";
        for($y=0; $y<$hb;$y++){
            if($x % 2){
                echo bepaalkleur($y,$x);
            }else{
                echo bepaalkleur($y,$x,true);
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

function bepaalkleur($positiey,$positiex, $omgekeerd = false){
    $achtergrond = $positiey;
    if($omgekeerd){
        $achtergrond = $positiey + 1;
    }
    if($achtergrond % 2 == 0){
        return "<td class=wit></td>";
    }else{
        return "<td class=zwart ><div id=steen".$positiex."".$positiey." class=".bepaalsteen($positiex,$positiey).">.</div></td>\n";
    }
}
function bepaalsteen($x, $y){
    global $speelveld;
    switch($speelveld[$x][$y]){
        case 1:
            return "steenblauw";
        case 2:
            return "steenrood";
        default:
            return "";
    }
}

?>
    </body>
</html>
