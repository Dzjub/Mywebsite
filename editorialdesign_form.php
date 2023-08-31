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
    $publication_type = $_POST["publication_type"];
    $publication_purpose = $_POST["publication_purpose"];
    $themes_styles = $_POST["themes_styles"];
    $publication_requirements = $_POST["publication_requirements"];
    $page_dimensions = $_POST["page_dimensions"];
    $content_ready = $_POST["content_ready"];
    $brand_identity = $_POST["brand_identity"];
    $printing_assistance = $_POST["printing_assistance"];
    $timeline = $_POST["timeline"];
    $budget = $_POST["budget"];
    $maintenance_updates = $_POST["maintenance_updates"];
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
