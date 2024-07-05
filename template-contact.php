<?php
//Template Name:ContactMe
?>

<?php

get_header();
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
</head> -->
<body>
<section id="contact_bg mt-0" class="contact_bg section light-background">
    <div class="container">
        <div class="row">
             <div class="col-6 container-contact">
                <h1 class="contact">Contact Us</h1>
                <form action="#" method="POST">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <button type="submit">Send Message</button>
                </form>
                </div>
                <div class= "col-6">
                <img src="<?php bloginfo('template_directory'); ?>/map.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
        </div>
    </div>
</Section>




<?php
get_footer();
?>