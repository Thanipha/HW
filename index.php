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
            width: 300px;
            height: 200px;
            background-color: #43a5be;
        }
        div.HW{
            width: 300px;
            height: 200px;
            overflow-y : scroll ;
        }
        h1{
            color: #be398d;
            text-shadow: 3px 3px yellow;
        }
        body {
            /*background-color: #43a5be;*/
            color:#ffffff;
        }
        
    </style>
</body>
</html>