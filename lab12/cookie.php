<?php
// Define the cookie name and value
$cookie_name = "cs4413";
$cookie_value = "your_value_here"; // You can choose any value for the cookie

// Define the expiration time (1 week from now in this example)
$expiration_time = time() + (7 * 24 * 60 * 60); // 7 days * 24 hours * 60 minutes * 60 seconds

// Check if the cookie is already set
if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is already set. Value: " . $_COOKIE[$cookie_name];
} else {
    // Set the cookie
    setcookie($cookie_name, $cookie_value, $expiration_time, "/");

    echo "Cookie named '" . $cookie_name . "' is now set with value: " . $cookie_value;
}
?>
