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
    $have_logo = $_POST["have_logo"];
    $primary_message = $_POST["primary_message"];
    $target_audience = $_POST["target_audience"];
    $design_elements = $_POST["design_elements"];
    $design_styles = $_POST["design_styles"];
    $brand_guidelines = $_POST["brand_guidelines"];
    $brand_collateral = $_POST["brand_collateral"];
    $additional_items = $_POST["additional_items"];
    $competitor_analysis = $_POST["competitor_analysis"];
    $unique_selling_points = $_POST["unique_selling_points"];
    $timeline = $_POST["timeline"];
    $ongoing_maintenance = $_POST["ongoing_maintenance"];
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
