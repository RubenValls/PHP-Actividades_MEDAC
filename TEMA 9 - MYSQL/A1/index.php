<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table from SQL</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
        </tr>
        <?php 
            $servername = 'localhost';
            $user = 'root';
            $pass = '';

            $connection = mysqli_connect($servername, $user, $pass);
            if (!$connection) {
                die("Connection failed: " . mysqli_connect_error());
            }else{
                mysqli_select_db($connection,'users');
                $query = 'SELECT * FROM my_users';
                $result = mysqli_query($connection, $query);

                while($line = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo '<tr>';
                    foreach($line as $col){
                        echo '<td>' . $col .'</td>';
                    }
                    echo '</tr>';
                }

                mysqli_free_result($result);
                mysqli_close($connection);
            }
        ?>
    </table>
</body>
</html>