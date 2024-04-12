<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container main-form mx-auto">
        <div class="row my-5">
            <center><div class="col-sm-6 border rounded p-5">
                <h1>Forgot Password</h1>
                <form method="post" action="process_forgot_password.php">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="securityQuestion" class="form-label">Security Question</label>
                        <select class="form-select" id="securityQuestion" name="securityQuestion" required>
                            <option value="">Select a security question</option>
                            <option value="1">My favourite book is</option>
                            <option value="2">My favourite place is</option>
                            <option value="3">My firt pet was</option>
                            <!-- Add more security questions here -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="securityAnswer" class="form-label">Security Answer</label>
                        <input type="text" class="form-control" id="securityAnswer" name="securityAnswer" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div></center>
        </div>
    </div>
</body>
</html>
