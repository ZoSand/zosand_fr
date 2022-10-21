<?php
if (isset($_POST['username']) && isset($_POST['useremail']) && isset($_POST['usersubject']) && isset($_POST['usermessage'])) {
    $from = "noreply@zosand.fr";
    $to = "webmaster@zosand.fr";
    $subject = $_POST['usersubject'];
    $message = "Message from: " . $_POST['useremail'] . " (" . $_POST['username'] . ") " . $_POST['usermessage'];
    $headers = "From:" . $from;
    mail($to, $subject, $message, $headers);
    $to = $_POST['useremail'];
    $message = "You send a message from " . $to . ": " . $_POST['usermessage'];
    mail($to, $subject, $message, $headers);

}

include("header.php");
?>

    <form action="#" method="post">
        <input type="text" name="username" placeholder="Name" autocomplete="off" required><br>
        <input type="email" name="useremail" placeholder="E-mail" autocomplete="off" required><br>
        <input type="text" name="usersubject" placeholder="Subject" autocomplete="off" required><br>
        <textarea name="usermessage" placeholder="Message" autocomplete="off" required></textarea><br>
        <input type="submit" value="Send">
    </form>

<?php
include("footer.php");
?>