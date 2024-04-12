<?php session_start(); 
if(isset($_SESSION["admin_logged_in"])){
    $title='Create Library';
    include './includes/top.php';
?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Add Library
                    </div>
                    <div class="card-body">
                        <form action="create_lib_handler.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="libraryName" class="form-label">Library Name</label>
                                <input type="text" class="form-control" id="libraryName" name="libraryName" required>
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label">Location/Address</label>
                                <input type="text" class="form-control" id="location" name="location" required>
                            </div>
                            <div class="mb-3">
                                <label for="about" class="form-label">About Library</label>
                                <textarea class="form-control" id="about" name="about" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="libraryImage" class="form-label">Library Image</label>
                                <input type="file" class="form-control" id="libraryImage" name="libraryImage" required>
                            </div>
                            <button type="submit" name="createLibSubmit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php

    include './includes/bottom.php';
}else{
    echo"Please close the page for security reasons...";
}
?>