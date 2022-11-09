<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['first_name']) && isset($_POST['last_name']) &&
        isset($_POST['email']) && isset($_POST['home_address']) &&
        isset($_POST['home_phone']) && isset($_POST['cell_phone'])) {
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $home_address = $_POST['home_address'];
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
            $Select = "SELECT email FROM users WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO users(first_name, last_name ,email, home_address, home_phone, cell_phone) values(?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssii",$first_name, $last_name, $email, $home_address, $home_phone, $cell_phone);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>