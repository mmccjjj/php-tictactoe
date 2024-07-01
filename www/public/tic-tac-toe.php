<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        table{
            border-collapse: collapse;  
        }

        td{
            border: 1px solid;
            width: 50px;
            height: 50px;
        }
        a{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>

<?php

$grid= [
    ['', '',''],
    ['', '',''],
    ['', '','']
];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    unset($_SESSION['grid']);
    $_SESSION['currentPlayer']= "0";
}

if(isset($_SESSION['grid'])){
    $grid= $_SESSION['grid'];
}else{
    $_SESSION['grid'] = $grid;
}

if($_SERVER["REQUEST_METHOD"]== "GET"){
    $_SESSION['currentPlayer']= $_SESSION['currentPlayer']== 'X'? '0': 'X';
    if(isset($_GET['row'])&& isset($_GET['col'])){
        $row= $_GET['row'];
        $col= $_GET['col'];

        if ($grid[$row][$col]== ''){
            $grid[$row][$col]= $_SESSION['currentPlayer'];
            $_SESSION['grid']= $grid;
        }else{
            echo "Feld nicht leer!";
        }
    }
}
?>

<table>
    <?php
    for($i= 0; $i< count($grid); $i++){
        echo "<tr>";
        for($j= 0; $j< count($grid[$i]); $j++){
            echo '<td><a href="tic-tac-toe.php?row='. $i. '&col='. $j. '">'. $grid[$i][$j]. '</a></td>';
        }
        echo '</tr>';
    }
    ?>

    <?php
    function checkWin($grid){
        for ($i= 0; $i< count($grid); $i++){
            if ($grid[$i][0] == $grid[$i][1]&& $grid[$i][1]== $grid[$i][2]&& $grid[$i][0]!=''){
                return $grid[$i][0];
            }

            if ($grid[0][$i] == $grid[1][$i]&& $grid[1][$i]== $grid[2][$i]&& $grid[0][$i]!=''){
                return $grid[0][$i];
            }

            if ($grid[0][0] == $grid[1][1]&& $grid[1][1]== $grid[2][2]&& $grid[0][0]!=''){
                return $grid[0][0];
            }

            if ($grid[0][2] == $grid[1][1]&& $grid[1][1]== $grid[2][0]&& $grid[0][2]!=''){
                return $grid[0][2];
            }

            
        }
        return '';
    }

    if(checkWin($grid) !=''){
        echo 'Player '. checkWin($grid). ' hat gewonnen!';
        unset($_SESSION['grid']);
        $_SESSION['currentPlayer']= "0";
    }
    ?>
</table>

<form action="tic-tac-toe.php" method="post">
    <input type="submit" value="Reset">
</form>


    
</body>
</html>