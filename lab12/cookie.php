<?php
// Define the cookie name and value
$cookie_name = "cs4413";
$cookie_value = "2"; // You can choose any value for the cookie

// Define the expiration time (2 minutes from now)
$expiration_time = time() + (2 * 60); // 2 minutes * 60 seconds

// Check if the cookie is already set
if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is already set. Value: " . $_COOKIE[$cookie_name];
} else {
    // Set the cookie
    setcookie($cookie_name, $cookie_value, $expiration_time, "/");

    // Output the correct message
    echo "Cookie named '" . $cookie_name . "' is now set with value: " . $cookie_value . " and will expire in 2 minutes";
}
?>
