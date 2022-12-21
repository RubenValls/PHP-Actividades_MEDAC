<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    mysqli_select_db($conn, 'act9');

    $conn->autocommit(false);
    try{
        $sql = 'UPDATE tabla_stock SET STOCK = 1 WHERE TIENDA = "tienda1"';
        $conn->query($sql);

        $sql = 'UPDATE tabla_stock SET STOCK = 4 WHERE TIENDA = "tienda2"';
        $conn->query($sql);

        $sql = 'UPDATE tabla_stock SET STOCK = 3 WHERE TIENDA = "tienda3"';
        $conn->query($sql);

        $conn->commit();
        print '<h1>Changes apllied</h1>';
    }catch (Exception $e){
        $conn->rollback();
        print '<h1>Changes not apllied</h1>';
    }
    $conn->close();
    unset($conn);
?>