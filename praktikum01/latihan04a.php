<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="latihan01a.css" type="text/css">
        <title>Query ke Database</title>
    </head>
    <body>
    <h1>Klasemen Sementara (HTML + PHP + MySQL)</h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "praktikum01";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
    }
    $sql = "SELECT rank, name, points, team FROM klasemen";
    $result = $conn->query($sql);
    ?>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>rank</th>
                        <th>name</th>
                        <th>points</th>
                        <th>team</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                    ?>
                        <tr>
                            <td><?php echo $row["rank"]?></td>
                            <td><?php echo $row["name"]?></td>
                            <td><?php echo $row["points"]?></td>
                            <td><?php echo $row["team"]?></td>
                        </tr>
                    <?php
                        }
                    } else {
                    ?>
                        <tr>
                            <td colspan="4" style="...">No data</td>
                        </tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>
    </body>
</html>