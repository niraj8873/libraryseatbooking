<?php
session_start();
if (isset($_SESSION["admin_logged_in"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <center>
            <h1>Admin Dashboard</h1>

            <!-- Button to Add Library -->
            <a href="create_lib.php" class="btn btn-primary">Add Library</a>

            <!-- Button to Create Slot -->
            <a href="create_slot.php" class="btn btn-primary">Create Slot</a>

            <!-- Logout Button -->
            <a href="log_out.php" class="btn btn-danger">Logout</a>
        </center>
    </div>
</body>
</html>
<?php }else{
    echo"You are not authorised to view this page.! Please close this page for security reasons";
}?>