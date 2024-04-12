<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $phone = $_POST["phone"];
    $securityQuestion = $_POST["securityQuestion"];
    $securityAnswer = $_POST["securityAnswer"];

    include "Database/connection.php"; 
    $sql = "SELECT `stud_id`, `answer1`, `answer2`, `answer3`, `Password` FROM `stud` WHERE `Phone_No.` = '$phone'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $uesrid = $row["stud_id"];
    $answers = array($row['answer1'], $row['answer2'], $row['answer3']);

    if($securityAnswer == $answers[$securityQuestion-1]) { 
        $title='Reset Password';
        include './includes/top.php';?>
        <div class="container main-form mx-auto" >
            <div class="row">
                <div class="column-sm-6">
                    <h1 class="mb-4">Registration Form</h1>
                    <form action="change_password.php" method='POST'>
                        <div class="mb-3">
                            <label for="userid" class="form-label">UserID: </label>
                            <input type="text" class="form-control" id="userid" name="userid" value="<?php echo$uesrid; ?>" required readonly>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" name="pwd" required>
                        </div>
                        <div class="mb-3">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            window.addEventListener('load', function(e) {
                document.querySelector('#confirmPassword').addEventListener('change', function() {
                    var cpwd = this.value;
                    var pass = document.querySelector('#password').value;
                    if(cpwd != pass){
                    this.value = '';
                    document.querySelector('#password').value = '';
                    alert('Password do not match.!');
                    
                    }
                });
            });
        </script>
    <?php include './includes/bottom.php'; }else{
        echo"Sorry the combination entered do not match.!";
    }
}
?>