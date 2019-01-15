<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM cuaca_aviation ORDER BY id DESC");
?>

<html>
<head>  
    
</head>

<body>
            <?php
                $x = 1;
                while($res = mysqli_fetch_array($result)) {         
                   
                    echo $res['latitude'];
                    echo ", ";
                    echo $res['longitude'];
                    $x++;  
                    echo "<br>";
                }
            ?>
</body>
</html>