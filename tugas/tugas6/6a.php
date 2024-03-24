<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <style>
        .box {
            display: inline-block;
            padding: 15px;
            margin: 5px;
            border: 1px solid black;
            width: 4px;
            height: 4px;
            text-align: center;
        }
        .blue {
            background-color: blue;
            color: white;
        }
        .red {
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_GET['angka']) && is_numeric($_GET['angka'])) {
        $angka = $_GET['angka'];

        
        for ($i = $angka; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                if ($i % 2 == 0) {
                    echo '<div class="box red">' . $i . '</div>';
                } else {
                    echo '<div class="box blue">' . $i . '</div>';
                }
            }
            echo '<br>';
        }
    } else {
        
    }
    ?>
</body>
</html>
