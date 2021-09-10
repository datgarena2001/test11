<?php
               if (isset($_POST['chieudai']) && isset($_POST['chieurong'])) {
                   $cd = $_POST['chieudai'];
                   $cr = $_POST['chieurong'];
                   $cv = ($cd + $cr) * 2;
                   $dt = $cd * $cr;
                   echo 'Chu vi là: '.$cv.'</br>';
                   echo 'Diện tích là: '.$dt;
               }
             ?>
<html>
    <head>
        <title>Lab 1</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            Chiều dài: <input type="text" name ="chieudai"><br>
            <br>
            Chiều rộng: <input type="text" name ="chieurong"><br>
            <br>
            <input type="submit" value="Tính">
        </form>           
    </body>
</html>
