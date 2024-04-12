<?php session_start(); 
    if(isset($_SESSION['user'])){

        include 'Database/connection.php';
        $sql = 'SELECT * FROM `libraries`';
        $result = $conn->query($sql);
        $isFound = 0;
        while($row=$result->fetch_assoc()){
            if($_GET['lib_id'] == $row['id']){
                $isFound = 1;
                break;
            }
        }
        if($isFound){

            $sql = 'SELECT * FROM `libraries` WHERE `id`='.$_GET['lib_id'];
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $title=$row['library_name'];
            include './includes/top.php';
?>
    <style>
        .img-fluid{
            width: 100%;
            max-height: 65vh;
        }
    </style>
    <!--Main Part-->

    <div class="container my-2">
        <div class="row">
            <div class="col-md-6">
            <div class="image-container">
                <img src="./uploads/<?php echo $row['image']; ?>" class="img-fluid" alt="Description of the image">
            </div>
            </div>
            <div class="col-md-6">
            <div class="text-container">
                <h1><?php echo $row['library_name']; ?></h1>
                <h3><?php echo $row['about']; ?></h3>
                <p><?php echo $row['location']; ?></p>
                <h2>Available slots are:</h2>
                <select name="lib_slot" id="lib_slot">
                    <option value="">Choose your preffered slot</option>
                    <?php
                        $sql = 'SELECT * FROM `slot` WHERE `lib_id` = ' . $row['id'];
                        $result = $conn->query($sql);
                        while($row=$result->fetch_assoc()){
                            echo"<option value='$row[slot_id]'>$row[s_start] to $row[s_end]</option>";
                        }
                    ?>
                </select>
                <div>
                    <span id='avaiblity'></span>
                    <button id='order-btn' class="btn btn-success m-2 d-none">Book a seat now</button>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script>
        
        window.addEventListener('load', function(e) {

            document.querySelector('#order-btn').addEventListener('click', function () {
                console.log(document.querySelector('#lib_slot').value);
                const requestData = {
                    slotID: document.querySelector('#lib_slot').value
                };
                console.log(requestData)
                fetch('placeOrder.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(requestData)
                })
                .then(response => {
                    //console.log(response);
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // Process the JSON data
                    console.log(data.query);
                    if(data.message == "New record created successfully"){
                        alert('Order done');
                        window.location.href = './index.php';
                    }
                })
                .catch(error => {
                    // Handle errors
                    alert('This slot is already booked');
                });
            });

            document.querySelector('#lib_slot').addEventListener('change', function () {
                document.querySelector('#avaiblity').textContent = '';
                document.querySelector('#order-btn').classList.add('d-none');
                document.querySelector('#order-btn').classList.remove('d-inline-block');
                console.log(this.value);
                // Data to be sent to the server
                const requestData = {
                    slotID: this.value
                };

                fetch('fetchSlotAvailability.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(requestData)
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // Process the JSON data
                    console.log(data.message);
                    if(data.message > 0){
                        console.log(data.query);
                        document.querySelector('#avaiblity').textContent = data.message + ' Seats available';
                        document.querySelector('#order-btn').classList.add('d-inline-block');
                        document.querySelector('#order-btn').classList.remove('d-none');
                    }
                })
                .catch(error => {
                    // Handle errors
                    console.error('Fetch error:', error);
                });

            })
        });
    </script>
<?php
            include './includes/bottom.php';
        }else{
            echo'
                <script> 
                    alert("Please select a valid library"); 
                    window.location.href = "./index.php";
                </script>
                ';
        }
    }else {
        echo'
            <script> 
                alert("Please login to continue"); 
                window.location.href = "./login.php";
            </script>
            ';
    }
?>