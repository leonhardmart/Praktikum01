<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="latihan01a.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 02 - PHP dan Array</title>
</head>
<body>
<h1>Klasmen sementara (HTML + PHP Array)</h1>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Points</th>
                <th>Team</th>
            </tr>
        </thead>
        <tbody>

<?php
$racer_list = array(
    array(1,"Herman","10000","Respol Honda"),
    array(2,"Tomo","9000","Monster Yamaha"),
    array(3,"Hito","8000","Redbull KTM"),
    array(4,"Mina","7000","Gresini Racing"),
    array(5,"Rosi","6000","Aprilia Racing"),
    array(6,"Valent","5000","Pramac Racing"),
    array(7,"Mark","4000","Suzuki Ecstar"),
    array(8,"Fabio","3000","Ducati Team"),
    array(9,"Jack","2000","Respol Honda"),
    array(10,"Alex","1000","Suzuki Ecstar"),
);

#tulis isi array ke page
foreach($racer_list as $racer) {
    echo("<tr><td>" . $racer[0] . "</td><td>". $racer[1] ."</td><td>" 
     . $racer[2] ."</td><td>" . $racer[3] . "</td></tr>");
}


?>
        </tbody>
    </table>
</body>
</html>