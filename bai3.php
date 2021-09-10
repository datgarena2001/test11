<?php
               if (isset($_POST['canha']) && isset($_POST['canhb']) && isset($_POST['canhc'])) {
                   $ca = $_POST['canha'];
                   $cb = $_POST['canhb'];
                   $cc = $_POST['canhc'];
                   $cv = $ca + $cb + $cc;
                   $ncv = $cv / 2;
                   $dt = sqrt($ncv * ($ncv - $ca ) * ($ncv - $cb ) * ($ncv - $cc));
                   echo 'Chu vi là: '.$cv.'</br>';
                   echo 'Diện tích là: '.$dt;
               }
             ?>
<html>
    <head>
        <title>Lab 1</title>
    </head>
    <body>
        <form action="lab3.php" method="POST">
            Cạnh a: <input type="text" name ="canha"><br>
            <br>
            Cạnh b: <input type="text" name ="canhb"><br>
            <br>
            Cạnh c: <input type="text" name ="canhc"><br>
            <br>
            <input type="submit" value="Tính">
        </form>
         
    </body>
</html>
