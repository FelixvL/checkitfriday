<?php
$db = "voorbeeld";
$user = "root";
$ps = "";
$host = "localhost";

$conn = mysqli_connect($host, $user, $ps, $db);

$sql="INSERT INTO `spelers`(`laatsteworp`) VALUES ('steen');";

$conn->query($sql);
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
maakknopen('steen');
maakknopen('papier');
maakknopen('schaar');
?>

<script>
    
function getSymbool(symbool){
    alert(symbool);
    
}    
    
</script>


