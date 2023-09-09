<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <header class="text-center">
        <h1>Contact Me</h1>
    </header>

    <div class="contact-container">
        <div class="contact-content">
            <div class="contact-info">
                <img src="Images/profile.jpg" alt="Your Name" draggable="false" class="profile-image">

                <h2>Harsha Vardhan</h2>
                <p>Email : <a href="mailto:">harshamandava695@gmail.com</a></p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/harsha77" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/HarshaMandava7" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://instagram.com/harshamandava?utm_source=qr&igshid=MThlNWY1MzQwNA==" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="contact-form">
                <?php
                include 'contact_process.php';
                ?>
                <p><a href="index.php" class="return-link">Return To Home</a></p>
                <p class="feedback-text">Get Into Touch With Me By Sharing Your Feedback</p>

                <form id="contact-form" action="" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                    <button type="submit" name="submit">Send</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>
</html>
<style>
    body {
    background-color: #000;
    color: #fff;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
.return-link {
    position: fixed;
    bottom: 1.25rem;
    right: 1.875rem;
    text-decoration: underline;
    font-family: Verdana, Tahoma, sans-serif;
    font-size: 0.85vw;
    color: white;
}
.return-link:hover {
    color: yellow; 
}
.text-center h1 {
    font-size: 2rem;
    padding-left: 40.625rem;
    padding-top: 1.5625rem;
    font-family: Verdana, Tahoma, sans-serif;
    font-size: 1.5vw;
    color: white;
}

.contact-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.contact-content {
    display: flex;
    width: 100%;
    max-width: 75rem;
}

.contact-info,
.contact-form {
    flex: 1;
    padding: 1.25rem;
}

.contact-info h2 {
    font-size: 1.5rem;
    margin-bottom: 0.625rem;
}

.contact-info p {
    font-size: 1rem;
}

.profile-image {
    height: 40%;
    border-radius: 50%;
    width: 40%;
    object-fit: scale-down;
    margin-bottom: 10px;
}

.contact-info {
    text-align: center;
}

.contact-form {
    margin-top: -5.313rem;
}

.feedback-text {
    font-family: 'Your-Desired-Font', sans-serif;
    font-size: 1.125rem;
    color: #fff9f9;
    text-align: center;
    margin-bottom: 1.25rem;
}

.contact-info a {
    color: #fff;
    text-decoration: none;
}

.contact-info a:hover {
    text-decoration: underline;
}

.social-icons a {
    color: #fff;
    font-size: 1.5rem;
    margin-right: 1.25rem;
}

.contact-form label {
    font-weight: bold;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 0.625rem;
    margin-bottom: 0.9375rem;
    border: 0.0625rem solid #ccc;
    border-radius: 0.3125rem;
    background-color: transparent;
    color: #fff;
}

button {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 0.625rem 1.25rem;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

@media (max-width: 768px) {
    .contact-content {
        flex-direction: column;
        align-items: center;
    }

    .contact-info,
    .contact-form {
        width: 100%;
        padding: 1.25rem;
        text-align: center;
    }

    .feedback-text {
        margin-top: 1rem;
    }

    .social-icons {
        margin-top: 1rem;
    }

    .return-link {
    position: fixed;
    bottom: 1.25rem; 
    right: 1.875rem; 
    text-decoration: underline;
    font-size: 1.125rem;
    font-family: 'Perpetua';
    }
}

</style>