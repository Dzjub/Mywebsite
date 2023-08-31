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
    $business_description = $_POST["business_description"];
    $has_logo = $_POST["has_logo"];
    $logo_message = $_POST["logo_message"];
    $logo_colors = $_POST["logo_colors"];
    $logo_styles = $_POST["logo_styles"];
    $logo_elements = $_POST["logo_elements"];
    $print_materials = $_POST["print_materials"];
    $website_social_media = $_POST["website_social_media"];
    $file_formats = $_POST["file_formats"];
    $timeline = $_POST["timeline"];
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
