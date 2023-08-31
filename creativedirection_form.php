<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Access form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $company = $_POST["company"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $website = $_POST["website"];
    $method = $_POST["method"];
    $country = $_POST["country"];
    $project_description = $_POST["project_description"];
    $creative_needs = $_POST["creative_needs"];
    $project_goal = $_POST["project_goal"];
    $target_audience = $_POST["target_audience"];
    $messages_themes = $_POST["messages_themes"];
    $brand_guidelines = $_POST["brand_guidelines"];
    $creative_styles = $_POST["creative_styles"];
    $creative_professionals = $_POST["creative_professionals"];
    $project_deliverables = $_POST["project_deliverables"];
    $deliverable_formats = $_POST["deliverable_formats"];
    $timeline = $_POST["timeline"];
    $maintenance_updates = $_POST["maintenance_updates"];
    $budget = $_POST["budget"];
    $additional_comments = $_POST["additional_comments"];
    $how_did_you_hear = $_POST["how_did_you_hear"];

    // Validate and sanitize data (You can add your validation logic here)

    // Simulate data processing (Replace this with actual processing)
    // For demonstration purposes, we're just printing the data here
    echo "First Name: " . $firstname . "<br>";
    echo "Last Name: " . $lastname . "<br>";
    echo "Company/Organization: " . $company . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Phone Number: " . $phonenumber . "<br>";
    echo "Website: " . $website . "<br>";
    echo "Preferred Method of Communication: " . $method . "<br>";
    echo "Country: " . $country . "<br>";
    // ... Continue echoing the rest of the form data
	
	// Redirect or display thank-you message
    header("Location: quote_page.html");
    exit();
}
?>
