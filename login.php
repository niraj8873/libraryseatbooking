<?php session_start(); 
    $title='Login';
    include './includes/top.php';
?>
    <style>
        body  {
        background-image:url("./includes/asset/images/login_bg.avif");
        background-size:cover; 
        }

        .main-form {
        max-width: 400px;
        margin-top: 100px;
        background-color: rgba(0,0,0,0.7);
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        padding: 30px;
        }

        .form-label {
        font-weight: 600;
        }

        .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        }

        .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
        }
    </style>

    <div class="container main-form text-light mx-auto">
        <h1 class="mb-4">Login</h1>
        <form action="log_handle.php" method='POST'>
        <div class="mb-3">
            <label for="userId" class="form-label">User ID</label>
            <input type="text" class="form-control" id="userId" placeholder="Enter your user ID" name='User_Id' required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password" name='Password' required>
        </div>
        <div class="mb-3">
            <center><button type="submit" class="btn btn-primary" name='login'>Login</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            <a href="./forget.php" class="btn btn-warning">Forgot Password?</a></center>
        </div>
        
        </form>
    </div>
<?php
    include './includes/bottom.php';
?>