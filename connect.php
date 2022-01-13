<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    $conn = new mysqli('localhost', 'MilicevicM', 'PZI_MilicevicM1', 'MilicevicM');
    if($conn->connect_error){
        die('Connection failed :' .$conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO Testimonials(fname, lname, email, rating, comment) VALUES(?,?,?,?,?)");
        $stmt->bind_param("sssis", $fname, $lname, $email, $rating, $comment);
        $stmt->execute();
        echo "Executed successfully";
        $stmt->close();
        $conn->close();
        die();
    }
?>