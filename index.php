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
        <script>
            var eersteklik = "";
            var tweedeklik = "";
            var aantalkeergeklikt = 0;
            function klik(xas, yas){
                if(aantalkeergeklikt == 0){
                    eersteklik = ""+xas+""+yas;                    
                }
                if(aantalkeergeklikt == 1){
                    tweedeklik = ""+xas+""+yas;                    
                    document.location = "?eersteklik="+eersteklik+"&tweedeklik="+tweedeklik;
                }
                
                aantalkeergeklikt++;
                console.log(aantalkeergeklikt);
            }
        </script>
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
//echo $_GET['eersteklik'];
//echo $_GET['tweedeklik'];
if(isset($_GET['eersteklik'])){
    zetverwerken($_GET['eersteklik'], $_GET['tweedeklik']);
}

tabelmaken();

function zetverwerken($startklik, $eindklik){
    global $speelveld;
    $speelveld[$eindklik[0]][$eindklik[1]] = $speelveld[$startklik[0]][$startklik[1]];
    echo "ZET VERWERKEN";
    
    
}

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
    $extrainfo = "onclick=klik($positiex,$positiey)";
    if($achtergrond % 2 == 0){
        return "<td class=wit  $extrainfo id=vakje".$positiex."".$positiey."></td>";
    }else{
        return "<td class=zwart $extrainfo id=vakje".$positiex."".$positiey."><div id=steen".$positiex."".$positiey." class=".bepaalsteen($positiex,$positiey)."></div></td>\n";
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
