<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST['fullname'] ?? '');
    $email = trim($_POST['youremail'] ?? '');
    $phone = trim($_POST['phonenuber'] ?? '');
    $restaurant = trim($_POST['restaurantname'] ?? '');
    $message = trim($_POST['Message'] ?? '');
    if ($fullname && $email && $phone && $restaurant && $message) {
        $to = "support@sevams.com"; 
        $subject = "New Message from Sevams Pos";
        $body = "Full Name: $fullname\nEmail: $email\nPhone: $phone\nRestaurant: $restaurant\n\nMessage:\n$message";
        $headers = "From: $email";
        if (mail($to, $subject, $body, $headers)) {
            echo "<p style='color: green;'>Message sent successfully!</p>";
        } else {
            echo "<p style='color: red;'>Message could not be sent. Please try again later.</p>";
        }
    } else {
        echo "<p style='color: red;'>All fields are required.</p>";
    }
}
?>
