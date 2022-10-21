<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .margen{
            margin-top: 25vh;
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-primary text-center p-1 text-white">
        <h2>Sign In</h2>
    </div>
    
    <div class="container bg-light rounded margen">
        <form class="p-3" action="check.php" method="post">
            <div class="mb-3">
                <label for="exampleUsername" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleUsername" aria-describedby="userHelp" name="user">
                <div id="userHelp" class="form-text">User between 6-15 characters (Letters and Numbers).</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" aria-describedby="passHelp" name="pass">
                <div id="passHelp" class="form-text">Use just 7 letters.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>