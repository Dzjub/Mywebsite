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
    $product_description = $_POST["product_description"];
    $packaging_update = $_POST["packaging_update"];
    $packaging_message = $_POST["packaging_message"];
    $target_audience = $_POST["target_audience"];
    $packaging_colors = $_POST["packaging_colors"];
    $packaging_styles = $_POST["packaging_styles"];
    $packaging_requirements = $_POST["packaging_requirements"];
    $packaging_dimensions = $_POST["packaging_dimensions"];
    $brand_logo_materials = $_POST["brand_logo_materials"];
    $printing_production = $_POST["printing_production"];
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
