<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $complaint = $_POST["complaint"];

    $sql = "INSERT INTO complaints
            (name, address, email, complaint)
            VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssss",
        $name,
        $address,
        $email,
        $complaint
    );

    if ($stmt->execute()) {

        echo "<h2>Complaint submitted successfully!</h2>";

        echo "<a href='index.php'>Submit another complaint</a><br>";

        echo "<a href='admin.php'>View complaints</a>";

    } else {

        echo "Error submitting complaint.";

    }

    $stmt->close();
    $conn->close();
}

?>