<!DOCTYPE html>
<html>
<head>
    <title>PHP Chess Board</title>
    <style>
        .chessboard {
            width: 480px;
            height: 480px;
            border: 2px solid #333;
            display: flex;
            flex-wrap: wrap;
        }
        .square {
            width: 60px;
            height: 60px;
        }
        .black {
            background-color: red;
        }
        .white {
            background-color: pink;
        }
    </style>
</head>
<body>

<h2>Chess Board (8x8)</h2>

<div class="chessboard">
    <?php
    for ($row = 0; $row < 8; $row++) {
        for ($col = 0; $col < 8; $col++) {
            // Determine color
            if (($row + $col) % 2 == 0) {
                echo '<div class="square white"></div>';
            } else {
                echo '<div class="square black"></div>';
            }
        }
    }
    ?>
</div>

</body>
</html>