<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InmoVibe</title>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="description" content="Contact InmoVibe for assistance with finding your dream home in Spain and Europe. We're here to help.">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css"/>
</head>
<body>
    <?php include "nav-bar.php"?>
    <section class="section">
        <h1>Get in Touch</h1>
        <p>
            Want to know more about our properties,have questions about them or need assistance? 
            We're here to help! 
            Fill out the form below or contact us directly through the information provided. 
            Let's make your property search a smooth experience.
        </p>
        <?php
            $message = '';
    
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $name = htmlspecialchars($_POST['name']);
                $surname = htmlspecialchars($_POST['surname']);
                $email = htmlspecialchars($_POST['email']);
                $messageContent = htmlspecialchars($_POST['message']);
                $message = "Thank you for contacting us, $name $surname. We will respond to your message at $email as soon as possible.";
            }
        ?>
    
        <?php if ($message): ?>
            <p class="form-message needs-validation"><?php echo $message?></p>
        <?php else: ?>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="contact-form">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input required type="text" class="form-control" name="name" placeholder="Tu Nombre">
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Surname</label>
                    <input required type="text" class="form-control" name="surname" placeholder="Tu Apellido">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input required type="email" class="form-control" name="email" placeholder="tuEmail@example.com">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea name="message" class="form-control" id="message-textarea"></textarea>
                </div>
                <input type="submit" class="primary-btn" value="Submit" onsubmit="">
            </form>
        <?php endif; ?>
    </section>


    <?php include "footer.html" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>