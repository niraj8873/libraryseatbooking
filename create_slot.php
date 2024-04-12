<?php
session_start();
if (isset($_SESSION["admin_logged_in"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Slot Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Add Slot Details
                    </div>
                    <div class="card-body">
                        <form action="submit_slot.php" method="POST">
                            <div class="mb-3">
                                <label for="lib_id" class="form-label">Library ID</label>
                                <select name="lib_id" class="form-control" id="lib_id">
                                    <option value="">Please select library</option>
                                    <?php 
                                        include 'Database/connection.php';
                                        $sql = 'SELECT `id`, `library_name` FROM `libraries`';
                                        $result = $conn->query($sql);
                                        while($row=$result->fetch_assoc()){
                                            echo"<option value='".$row['id']."'>".$row['library_name']."</option>";
                                        }
                                        
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="s_start" class="form-label">Start Time</label>
                                <input type="time" class="form-control" id="s_start" name="s_start" required>
                            </div>
                            <div class="mb-3">
                                <label for="s_end" class="form-label">End Time</label>
                                <input type="time" class="form-control" id="s_end" name="s_end" required>
                            </div>
                            <div class="mb-3">
                                <label for="capacity" class="form-label">Capacity</label>
                                <input type="number" class="form-control" id="capacity" name="capacity" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name='slot_create_submit'>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php }else{
    echo"You are not authorised to view this page.! Please close this page for security reasons";
}?>