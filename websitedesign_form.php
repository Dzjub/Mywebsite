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
    $has_existing_website = $_POST["has_existing_website"];
    $existing_website_url = $_POST["existing_website_url"];
    $website_goal = $_POST["website_goal"];
    $target_audience = $_POST["target_audience"];
    $website_colors = $_POST["website_colors"];
    $website_styles = $_POST["website_styles"];
    $logo_brand_assets = $_POST["logo_brand_assets"];
    $website_pages = $_POST["website_pages"];
    $website_features = $_POST["website_features"];
    $responsive_design = $_POST["responsive_design"];
    $content_readiness = $_POST["content_readiness"];
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
