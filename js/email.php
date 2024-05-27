<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the email field is set and not empty
    if (isset($_POST["email"]) && !empty($_POST["email"])) {
        $email = $_POST["email"];
        
        // Here you can process the email (e.g., save it to a database, send it in an email, etc.)
        // For demonstration purposes, we'll just print it
        echo "Thank you for subscribing with email: " . $email;
    } else {
        // If the email field is empty, display an error message
        echo "Please provide your email address.";
    }
} else {
    // If the form is not submitted via POST method, redirect back to the form page
    header("Location: index.html");
}
?>