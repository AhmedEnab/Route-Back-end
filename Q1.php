<!DOCTYPE html>
<html>
<head>
    <title>Chessboard</title>
    <style>
        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: bisque;
        }
        .chessboard {
            
            border-collapse: collapse;
            border: black solid 3px;
        }

        .chessboard td {
            width: 50px;
            height: 50px;
        }

        .black {
            background-color: black;
        }

        .white {
            background-color: white;
        }
    </style>
</head>
<body>
<table class="chessboard">
    <?php 
    for($row = 0 ; $row < 8 ; $row++){
        echo "<tr>";
        for($col = 0 ; $col < 8 ; $col++){
            $color = ($row + $col) %2 == 0 ? 'white' : 'black';
            echo "<td class = '$color'></td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>