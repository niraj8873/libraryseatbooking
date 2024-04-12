<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['createLibSubmit'])) {
    
    // Database connection parameters
    include "Database/connection.php"; 


    // SQL query to get the maximum ID value
    $sql = "SELECT MAX(id) as max_id FROM libraries";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the maximum ID value and increment it by one
        $row = $result->fetch_assoc();
        $next_id = $row["max_id"] + 1;
    } else {
        // If there are no rows in the table, set next ID to 1
        $next_id = 1;
    }
    
    // Move uploaded file to desired location
    $target_dir = "uploads/";
    $fileExtension = pathinfo($_FILES['libraryImage']['name'], PATHINFO_EXTENSION);
    $file_name = $next_id.".".$fileExtension;
    $target_file = $target_dir . $file_name;
    move_uploaded_file($_FILES["libraryImage"]["tmp_name"], $target_file);

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO libraries (library_name, location, about, image) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $libraryName, $location, $about, $image);

    // Set parameters and execute
    $libraryName = $_POST['libraryName'];
    $location = $_POST['location'];
    $about = $_POST['about'];
    $image = $file_name;

    $stmt->execute();

    echo "Library added successfully.<a href='./create_lib.php'>Back to Create Library</a></br><a href='./admin_dashboard.php'>Admin Dashboard</a>";

    $stmt->close();
    $conn->close();
}
?>