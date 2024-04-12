<?php
// Database connection parameters
include 'Database/connection.php';

// Validate input
if (isset($_POST['slot_create_submit'])) {
    $lib_id = $_POST['lib_id'];
    $s_start = $_POST['s_start'];
    $s_end = $_POST['s_end'];
    $capacity = $_POST['capacity'];

    // SQL query to insert slot details
    $sql = "INSERT INTO slot (lib_id, s_start, s_end, capacity) VALUES ('$lib_id', '$s_start', '$s_end', '$capacity')";

    if ($conn->query($sql) === TRUE) {
        echo "Slot details added successfully. <a href='./create_slot.php'>Add more slot</a></br><a href='./admin_dashboard.php'>Admin Dashboard</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
