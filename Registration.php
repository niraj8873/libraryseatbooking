<?php session_start(); 
    $title='About Us';
    include './includes/top.php';
?>
    <style>
        body {
        background-image:url("./includes/asset/images/clasic.jpg");
        background-size:cover; 
        }

        .main-form {
        max-width: 500px;
        margin-top: 50px;
        background-color:rgba(0,0,0,0.7);
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

    <div class="container main-form text-light mx-auto" >
        <h1 class="mb-4">Registration Form</h1>
        <form action="reg_handle.php" method='POST'>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" placeholder="Enter your address" name="address" required>
        </div>
        <div class="mb-3">
            <label for="number" class="form-label">Number</label>
            <input  type="text" class="form-control" id="phone" placeholder="Enter your phone number" name="number" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="userId" class="form-label">User ID</label>
            <input type="text" class="form-control" id="userId" placeholder="Enter your user ID" name="user_id" required>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="security1" class="form-label">Security Question 1</label>
                    <input type="text" class="form-control" id="security1" value="My favourite book is" name="security1" required disabled>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="answer1" class="form-label">Security Answer 1</label>
                    <input type="text" class="form-control" id="answer1" placeholder="My favourite book is" name="answer1" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="security2" class="form-label">Security Question 2</label>
                    <input type="text" class="form-control" id="security2" value="My favourite place is" name="security2" required disabled>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="answer2" class="form-label">Security Answer 2</label>
                    <input type="text" class="form-control" id="answer2" placeholder="My favourite place is" name="answer2" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="security3" class="form-label">Security Question 3</label>
                    <input type="text" class="form-control" id="security3" value="My firt pet was" name="security3" required disabled>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="answer3" class="form-label">Security Answer 3</label>
                    <input type="text" class="form-control" id="answer3" placeholder="My first pet was" name="answer3" required>
                </div>
            </div>
        </div>
        
        
        
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" name="pwd" required>
        </div>
        <button type="submit" class="btn btn-primary px-4" name="submit">Submit</button>
        <button type="reset" class="btn btn-danger px-4 mx-3" name="Reset">Reset</button>
        </form>
    </div>
    <script>
      
        window.addEventListener('load', function(e) { 
          console.log('The page has finished loading.'); 

          //Listner method for contact no input
          document.querySelector('#phone').addEventListener('input', function() {
            var phone = this.value;
            var isValid = /^[0-9]+$/.test(phone);
            if(!isValid){
              this.value=phone.slice(0,phone.length-1);
            }
            this.value=this.value.slice(0,10);
          });

          //Listner method for pwd fields
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

        //
        document.querySelector('#name').addEventListener('input', function() {
            var name = this.value;
            var isValid = /^[a-zA-Z\s]+$/.test(name);
            if(!isValid){
              this.value=name.slice(0,name.length-1);
            }
        });

    </script>
<?php
    include './includes/bottom.php';
?>