<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['first_name']) || isset($_POST['last_name']) ||
        isset($_POST['email']) || isset($_POST['home_phone']) || isset($_POST['cell_phone'])) {
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $home_phone = $_POST['home_phone'];
        $cell_phone = $_POST['cell_phone'];
        $host = "sql9.freesqldatabase.com";
        $dbUsername = "sql9554666";
        $dbPassword = "YSQUX5nD8Z";
        $dbName = "sql9554666";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            if($first_name != null){
                $stmt = $conn->prepare("SELECT * FROM users WHERE first_name = ?");
                $stmt->bind_param("s", $_POST['first_name']);
            }
            if($last_name != null){
                $stmt = $conn->prepare("SELECT * FROM users WHERE last_name = ?");
                $stmt->bind_param("s", $_POST['last_name']);
            }
            if($email != null){
                $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
                $stmt->bind_param("s", $_POST['email']);
            }
            if($home_phone != null){
                $stmt = $conn->prepare("SELECT * FROM users WHERE home_phone = ?");
                $stmt->bind_param("s", $_POST['home_phone']);
            }
            if($cell_phone != null){
                $stmt = $conn->prepare("SELECT * FROM users WHERE cell_phone = ?");
                $stmt->bind_param("s", $_POST['cell_phone']);
            }
           
            $stmt->execute();
            $arr = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            if(!$arr) exit('No rows');
           foreach ($arr as $row) {
            echo "first_name: " . $row["first_name"]. " , last_name: " . $row["last_name"]. " , email: " . $row["email"]. " , Home Address: " . $row["home_address"]. " , Home Phone: " . $row["home_phone"]. " , Cell Phone: " . $row["cell_phone"]. "<br>";
           }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "Invalid Search";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>