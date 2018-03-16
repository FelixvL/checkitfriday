<?php
$db = "voorbeeld";
$user = "root";
$ps = "";
$host = "localhost";
if (isset ($_GET['symbool'])){
    $conn = mysqli_connect($host, $user, $ps, $db);
    $sql="INSERT INTO `spelers`( `naam`, `laatsteworp`) VALUES ( '".$_GET['speler1']."' ,'".$_GET['symbool']."')";
    //echo $sql;
    $conn->query($sql);
    $sql = "SELECT * FROM `spelers` WHERE naam = '".$_GET['speler2']."';";
    echo $sql;
    $result = $conn->query($sql);
    
    while($row = $result->fetch_assoc()){
        echo $row['laatsteworp'];
    }
    
}
class Game {
    public $id;
}

class Player {
    public $id;
    public $game_id;
    public $name;
    
    function __construct($id, $game_id, $name){
        $this->id = $id;
        $this->game_id = $game_id;
        $this->name = $name;
        
    }
}
$game = new Game();
$game->id = 1;
$player1 = new Player(1,1,'Henk');
$player2 = new Player(2,1,'Klaas');
function maakKnopen($symbool){
    echo "<input type='button' onclick=getSymbool('$symbool') value='".$symbool."'>";
}
maakknopen('steen');
maakknopen('papier');
maakknopen('schaar');

echo "<br>";

echo "<input type ='text' id = 'speler1'><br>";
echo "<input type ='text' id = 'speler2'>";
if (isset ($_GET['symbool'])){
    echo "<div id = 'uitkomst'>Je heet " . $_GET['speler1'] . ", je tegenstander is " . $_GET['speler2'] . " en je koos " . $_GET['symbool'].".</div>";
}
?>

<script>
    
function getSymbool(symbool){
    var speler1 = document.getElementById("speler1").value;
    var speler2 = document.getElementById("speler2").value;
        if (speler1 == '' || speler2 == ''){           
           alert ('Kies spelernaam AUB');   
    } else {
        document.location = '?symbool='+symbool+'&speler1='+speler1+'&speler2='+speler2;
    }    
}


    
</script>
