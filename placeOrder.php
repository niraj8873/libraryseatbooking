<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $json_data = file_get_contents('php://input');
    
    $data = json_decode($json_data, true);
    
    if ($data !== null) {

        $slotID = $data['slotID'];
        $userID = $_SESSION['user']['stud_id'];

        include "Database/connection.php"; 
        $sql = "INSERT INTO `slot_order_detail`(`slot_id`, `deleted`, `user_id`) VALUES ($slotID, 'N', $userID)";

        if ($conn->query($sql) === TRUE) {
            $result = "New record created successfully";
        } else {
            $result = "Error: Cant insert";// . $sql . "<br>" . $conn->error;
        }
        
        // Perform any desired operations with the data
        //echo$result;
        // Send a response (optional)
        $response = array('status' => 'success', 'message' => $result, 'query' => $sql);
        echo json_encode($response);
    } else {
        // Send an error response if data could not be decoded
        $response = array('status' => 'error', 'message' => 'Failed to fetch data');
        echo json_encode($response);
    }
} else {
    // Send an error response if request method is not POST
    $response = array('status' => 'error', 'message' => 'Invalid request method');
    echo json_encode($response);
}
?>
