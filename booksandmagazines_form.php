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
    $project_details = $_POST["project_details"];
    $publication_type = $_POST["publication_type"];
    $publication_purpose = $_POST["publication_purpose"];
    $target_audience = $_POST["target_audience"];
    $design_themes = $_POST["design_themes"];
    $required_deliverables = $_POST["required_deliverables"];
    $publication_details = $_POST["publication_details"];
    $content_ready = $_POST["content_ready"];
    $brand_identity = $_POST["brand_identity"];
    $printing_assistance = $_POST["printing_assistance"];
    $timeline = $_POST["timeline"];
    $budget = $_POST["budget"];
    $ongoing_assistance = $_POST["ongoing_assistance"];
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
