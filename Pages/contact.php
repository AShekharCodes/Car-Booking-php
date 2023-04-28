<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Contact us</title>
</head>

<body>

    <?php include "navbar.php" ?>
    <div class="contact-div">
        <div class="contact-part1">
            <div class="contact-header">
                <p>Hey There</p>
                <h1>Let's Get in Touch</h1>
            </div>
            <div class="contact-info">
                <p><img src="https://img.icons8.com/ultraviolet/40/null/marker.png" /> <span>New Delhi, INDIA</span></p>
                <p><img src="https://img.icons8.com/ultraviolet/40/null/phone.png" /><span>+91 90000 00000</span></p>
                <p><img src="https://img.icons8.com/ultraviolet/40/null/new-post.png" /><span>support@cargus.com</span>
                </p>
            </div>
        </div>
        <div class="contact-part2">
            <h1>Contact Us</h1>
            <form action="" method="post">
                Name <input type="text" name="name" id="name" placeholder="Enter your name">
                Email <input type="text" name="email" id="email" placeholder="Enter your email">
                Message <input type="text" name="message" id="message" placeholder="Enter your message">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <?php include "footer.php" ?>

</body>

</html>