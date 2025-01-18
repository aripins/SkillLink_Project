<?php
include 'db_config.php';

$sql = "SELECT * FROM projects";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Daftar Proyek</h2>";
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nama: " . $row["project_name"] . 
             " - Description: " . $row["description"] . 
             " - Start: " . $row["start_date"] . 
             " - Finish: " . $row["end_date"] . "<br>";
    }
} else {
    echo "Nothing.";
}

$conn->close();
?>
