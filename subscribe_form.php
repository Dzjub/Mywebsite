<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prevent output buffering
    ob_start();

    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    // Database connection details
    $servername = "localhost"; // Change to your server name
    $username = "AlexDzjub"; // Change to your database username
    $password = "Dzjub-098"; // Change to your database password
    $dbname = "subscribe_to_my_newsletter_form"; // Change to your database name
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Prepare and bind a prepared statement
    $stmt = $conn->prepare("INSERT INTO newsletter_subscriptions (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email); // "ss" indicates two string parameters
    
    // Execute the prepared statement
    if ($stmt->execute()) {
        // Close the statement and connection
        $stmt->close();
        $conn->close();
        
        // Clean the buffer
        ob_clean();
        
        // Redirect to thank-you page
        header("Location: thank_you.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
        
        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
}
?>
