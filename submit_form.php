<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $area_of_interest = $_POST['area_of_interest'];
    $why_volunteer = $_POST['why_volunteer'];
    $gain_experience = $_POST['gain_experience'];
    $relevant_experience = $_POST['relevant_experience'];
    $previous_volunteer_details = $_POST['previous_volunteer_details'];
    $hobbies_skills = $_POST['hobbies_skills'];
    $availability = $_POST['availability'];
    $ref1_name = $_POST['ref1_name'];
    $ref1_address = $_POST['ref1_address'];
    $ref1_email = $_POST['ref1_email'];
    $ref1_telephone = $_POST['ref1_telephone'];
    $ref2_name = $_POST['ref2_name'];
    $ref2_address = $_POST['ref2_address'];
    $ref2_email = $_POST['ref2_email'];
    $ref2_telephone = $_POST['ref2_telephone'];
    $special_needs = $_POST['special_needs'];
    $comments = $_POST['comments'];

    // Build the email message
    $message = "Volunteer Application Form Submission:\n\n";
    $message .= "Surname: " . $surname . "\n";
    $message .= "First Name: " . $firstname . "\n";
    $message .= "Address: " . $address . "\n";
    $message .= "Telephone: " . $telephone . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Gender: " . $gender . "\n";
    $message .= "Age: " . $age . "\n";
    $message .= "Area of Interest: " . $area_of_interest . "\n";
    $message .= "Why Volunteer: " . $why_volunteer . "\n";
    $message .= "Gain Experience: " . $gain_experience . "\n";
    $message .= "Relevant Experience: " . $relevant_experience . "\n";
    $message .= "Previous Volunteer Details: " . $previous_volunteer_details . "\n";
    $message .= "Hobbies/Skills: " . $hobbies_skills . "\n";
    $message .= "Availability: " . $availability . "\n";
    $message .= "\nReference 1:\n";
    $message .= "Name: " . $ref1_name . "\n";
    $message .= "Address: " . $ref1_address . "\n";
    $message .= "Email: " . $ref1_email . "\n";
    $message .= "Telephone: " . $ref1_telephone . "\n";
    $message .= "\nReference 2:\n";
    $message .= "Name: " . $ref2_name . "\n";
    $message .= "Address: " . $ref2_address . "\n";
    $message .= "Email: " . $ref2_email . "\n";
    $message .= "Telephone: " . $ref2_telephone . "\n";
    $message .= "\nSpecial Needs: " . $special_needs . "\n";
    $message .= "Comments: " . $comments . "\n";

    // Recipient email address
    $to = "your_email@sabhyataa_foundation.trust";  // **REPLACE WITH YOUR ACTUAL EMAIL**
    $subject = "Volunteer Application Form Submission";
    $headers = "From: " . $email . "\r\n"; // Use the applicant's email as "From" (for reply)
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    $mailSuccess = mail($to, $subject, $message, $headers);

    // Check if the email was sent successfully
    if ($mailSuccess) {
        echo "<p>Thank you for your application! We will be in touch soon.</p>"; // Display a confirmation message
    } else {
        echo "<p>Sorry, there was an error sending your application. Please try again later.</p>";  // Display an error message
    }
} else {
    // If the form wasn't submitted properly
    echo "<p>There was a problem submitting the form.  Please try again.</p>";
}
?>