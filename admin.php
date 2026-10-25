<?php

include "db.php";

$sql = "SELECT * FROM complaints ORDER BY id DESC";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Admin - Complaints</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Submitted Complaints</h1>

    <table>

        <tr>

            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Complaint</th>
            <th>Date</th>

        </tr>

        <?php

        while ($row = $result->fetch_assoc()) {

        ?>

        <tr>

            <td>
                <?php echo $row["id"]; ?>
            </td>

            <td>
                <?php echo htmlspecialchars($row["name"]); ?>
            </td>

            <td>
                <?php echo htmlspecialchars($row["address"]); ?>
            </td>

            <td>
                <?php echo htmlspecialchars($row["email"]); ?>
            </td>

            <td>
                <?php echo htmlspecialchars($row["complaint"]); ?>
            </td>

            <td>
                <?php echo $row["created_at"]; ?>
            </td>

        </tr>

        <?php

        }

        ?>

    </table>

    <br>

    <a href="index.php">Back to Complaint Form</a>

</div>

</body>

</html>

<?php

$conn->close();

?>