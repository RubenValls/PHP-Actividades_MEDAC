<?php
    if($_GET["username"] && $_GET["name"] && $_GET["surname"] && $_GET["email"] && $_GET["password"]){
        print "<h1>Results:</h1>";
        if (!filter_input(INPUT_GET, "username", FILTER_SANITIZE_SPECIAL_CHARS)) {
            print "<p>Username is not valid</p>";
        } else {
            print "<p>Username is valid: </p>". $_GET["username"];
        }
        if (!filter_input(INPUT_GET, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS)) {
            print "<p>Name is not valid</p>";
        } else {
            print "<p>Name is valid: </p>". $_GET["name"];
        }
        if (!filter_input(INPUT_GET, "surname", FILTER_SANITIZE_FULL_SPECIAL_CHARS)) {
            print "<p>Surname is not valid</p>";
        } else {
            print "<p>Surname is valid: </p>". $_GET["surname"];
        }
        if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)) {
            print "<p>Email is not valid</p>";
        } else {
            print "<p>Email is valid: </p>". $_GET["email"];
        }
        print "<p>Password is valid: </p>". $_GET["password"];
    }else{
        print "<h1>There was empty files at the form. Try Again</h1>";
    }
?>