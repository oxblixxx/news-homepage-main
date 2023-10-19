<?php
$servername = "db-server-addr";
$username = "db-username";
$password = "db-pass";
$dbname = "db-name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Perform a simple query
$sql = "SELECT * FROM your_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"];
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
