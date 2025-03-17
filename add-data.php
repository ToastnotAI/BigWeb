<?php
#check if data was posted
if(isset($_POST['name']) && isset($_POST['pokemon']) && isset($_POST['film']) && isset($_POST['height']) && isset($_POST['burger'])){
    #get data
    $name = $_POST['name'];
    $pokemon = $_POST['pokemon'];
    $film = $_POST['film'];
    $height = $_POST['height'];
    $burger = $_POST['burger'];
    #connect to database
    $conn = new mysqli("localhost", "root", "vOj[[emNTb6pQNjB", "webdev");
    #check connection
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    #insert data into database
    $stmt = $conn->prepare("INSERT INTO tebl (name, pokemon, film, height, burger) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $pokemon, $film, $height, $burger);
    $stmt->execute();
    #close statement
    $stmt->close();

    #close connection
    $conn->close();
}

?>