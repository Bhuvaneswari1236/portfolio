<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['Name']);
    $email = htmlspecialchars($_POST['Email']);
    $message = htmlspecialchars($_POST['message']);

    // Save to a file
    $file = fopen("submissions.txt", "a");
    fwrite($file, "Name: $name\nEmail: $email\nMessage: $message\n\n");
    fclose($file);

    // Optionally, send an email
    // $to = "your-email@example.com";
    // $subject = "New Contact Form Submission";
    // $body = "Name: $name\nEmail: $email\nMessage: $message";
    // mail($to, $subject, $body);

    echo "Thank you for contacting us!";
} else {
    echo "There was an error with your submission. Please try again.";
}
?>
