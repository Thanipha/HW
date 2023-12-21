<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <div class = "HW">
    <table>
        <tbody>
            <?php
            for($i = 1 ; $i <= 24 ; $i++){
                echo "<tr>";
                echo "<td> $multi_x X $i = ".$multi_x*$i."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <style>
        table {
            width: 150px;
            height: 200px;
        }
        div.HW{
            width: 300px;
            height: 200px;
            overflow-y : scroll ;
        }
    </style>
</body>
</html>