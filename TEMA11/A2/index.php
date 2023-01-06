<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess</title>
    <style>
        body{
            text-align: center;
        }
    </style>
    <?php 
    $url = "http://localhost/test/SOAP/calculatorService.php";
    $uri = "http://localhost/test/SOAP";
    $client = new SoapClient(null, array('location' => $url, 'uri' => $uri));
    $num1 = 7;
    $num2 = 3;
    ?>  
</head>
<body>
    <h1>Guess the numbers:</h1>
    <?php 
        $result = $client->plus($num1, $num2);
        print "<p>The addition result is: $result.</p>";
        print "<br>";

        $result = $client->subs($num1, $num2);
        print "<p>The substraction result is: $result.</p>";
        print "<br>";

        $result = $client->divide($num1, $num2);
        print "<p>The division result is: $result.</p>";
        print "<br>";

        $result = $client->root($num1, $num2);
        print "<p>The square root's first number is: $result.</p>";
        print "<br>";

        $result = $client->power($num1, $num2);
        print "<p>The power result is: $result.</p>";
        print "<br>";

        print "<h2>Which is the first and second number?</h2>";
    ?>
</body>
</html>