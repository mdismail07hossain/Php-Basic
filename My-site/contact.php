<?php 
include('common-file/header.php');
?>

 <section class="container my-5">
        <h1 class="text-center mb-4">Contact Us</h1>
        <p class="text-center mb-5">We'd love to hear from you! Please fill out the form below.</p>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="process_form.php" method="POST">
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Your Name">
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Your Email">
                    </div>

                    <!-- Subject -->
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject of your message">
                    </div>

                    <!-- Message -->
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Your Message"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>
        </div>
    </section>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Basic form validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Set up email parameters
        $to = "youremail@example.com"; // Change to your email
        $subject = "New message from $name: $subject";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

        // Send email (you may need to configure your server for mail functionality)
        if (mail($to, $subject, $body, "From: $email")) {
            echo "Thank you for contacting us, $name. We will get back to you soon!";
        } else {
            echo "Sorry, something went wrong. Please try again later.";
        }
    } else {
        echo "All fields are required!";
    }
}
?>


<?php
include('common-file/footer.php');
?>