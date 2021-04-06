<?php 

require_once('../src/PHPMailer/PHPMailerAutoload.php');

if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

    $header = "Name: $name<br>Email: $email<br><br>";
    $body = str_replace("\n", '<br>', $header.$msg);

    // NOTE: LIMIT 99 EMAILS PER DAY
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = '465';
    $mail->isHTML();
    $mail->Username = 'team.squeezer@gmail.com';
    $mail->Password = 'nolemonadetho';
    // $mail->SetFrom('no-reply@squeezer.com');
    $mail->Subject = "Message from Squeezer user";
    $mail->Body = $body;
    $mail->AddAddress('team.squeezer@gmail.com');
    $mail->Send();

    $form_html = '<h2 class="center-text center-justify-text">Thank you for your feedback!<br><span style="font-size:24pt; color:rgb(0, 202, 91)">✔</span></h2>';
} else {
    $form_html = <<<FORM
    <h2 class="center-text center-justify-text">Contact form</h2>
    <input type="text" class="formEntry" placeholder="Name (optional)" name="name">
    <input id="email" type="text" class="formEntry" placeholder="Email" name="email">
    <textarea id="message" class="formEntry" placeholder="Message" name="message"></textarea>
    <button id="submit-btn">Submit</button>
    <p id="error-msg"></p>
FORM;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Squeezer | Contact</title>
    <meta charset="UTF-8">
    <meta name="description" content="Contact the creators of Squeezer.com.">
    <meta name="author" content="Samer Najjar, Alfredo Huitron, Ayesha Din, Priyank Dharia">

    <link rel="icon" type="image/png" href="../img/squeezer_icon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito&display=swap">
    <link rel="stylesheet" href="../styles/header.css" >
    <link rel="stylesheet" href="../styles/contact.css" >
    <link rel="stylesheet" href="../styles/footer.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../src/contact_form.js" defer></script>
</head>

<body>
    <div id="content-container">

        <!-- AYESHA -->
        <header>
            <a id="logo-link" href="../index.html"><img id="logo" src="../img/squeezer_logo_black.png" alt="SQUEEZER"></a>
            <div id=navbar> 
                <a href="../index.html">HOME</a>
                <a href="learn_more.html">LEARN MORE</a>
                <a href="time_machine.php">TIME MACHINE</a>
                <a href="contact.html" style="border-bottom: 5px solid black; border-top: 5px solid transparent; line-height: 70px">CONTACT</a>
            </div> 
        </header>

        <!-- PRIYANK -->
        <h1 class="center-text center-justify-text">Contact Us</h1>

        <p class="normal-text center-text center-justify-text" id="about_us_desc">
            We are UT Austin students with various backgrounds in finance, math, and computer science.
            Our goal is to create a place where all the right information is aggregated
            in such a way that small investors have a fighting chance against powerful
            hedge funds. We hope you find this site useful!
        </p>

        <p class="normal-text center-text center-justify-text">Have any questions or comments? Fill out the form below and we'll respond ASAP.
        </p>

        <div>
            <form method="post" action="contact.php">
                <?php print($form_html); ?>
            </form>
        </div>

    </div>

    <!-- SAMER -->
    <footer>
        <span id="copyright">© Squeezer 2021</span>
        <span class="center-text center-justify-text">
            — Samer Najjar, Alfredo Huitron, Ayesha Din, Priyank Dharia —<br>
            10 March 2021
        </span>
    </footer>
</body>

</html>