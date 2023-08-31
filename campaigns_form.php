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
    $campaign_description = $_POST["campaign_description"];
    $campaign_goal = $_POST["campaign_goal"];
    $target_audience = $_POST["target_audience"];
    $message_theme = $_POST["message_theme"];
    $campaign_channels = $_POST["campaign_channels"];
    $campaign_elements = $_POST["campaign_elements"];
    $branding_materials = $_POST["branding_materials"];
    $timeline = $_POST["timeline"];
    $kpi = $_POST["kpi"];
    $maintenance_reporting = $_POST["maintenance_reporting"];
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
