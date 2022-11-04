<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation Log In</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid bg-primary text-center p-2">
        <h1>LOG IN</h1>
    </div>
    <div class="container bg-primary mt-4 p-3">
        <div class="container bg-light text-center p-3">
            <?php
                $hostname = "ldap.forumsys.com";
                $port = 389;
                $ldap_dn = "cn=read-only-admin,dc=example,dc=com";
                $ldap_password = "password";
                $user = "uid=".$_POST["user"].",dc=example,dc=com";
                $pass = $_POST["pass"];
                $ldap_con = ldap_connect($hostname) or die("We cannot connect to the server. Try again soon. :(");
                ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION,3);
                if($ldap_con){
                    @$correctUser = ldap_bind($ldap_con, $user, $pass);
                    if($correctUser){
                        echo "<h3>User is correct. Welcome. :)</h3>";
                    }else{
                        echo "<h3>User is incorrect. Try again soon. :(</h3>";
                        echo "<p>Try with just the name of scientists or mathematicians and pass: 'password'</p>";
                    }
                }
            ?>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>