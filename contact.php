<?php
if (isset($_POST['username']) && isset($_POST['useremail']) && isset($_POST['usersubject']) && isset($_POST['usermessage']))
{
    error_reporting(E_ALL);
    $from = "noreply@zosand.fr";
    $to = "webmaster@zosand.fr";
    $subject = $_POST['usersubject'];
    $message = "Message from:" . $_POST['useremail']. "(" . $_POST['username'] . ")<br>" . $_POST['usermessage'];
    $headers = "From:" . $from;
    mail($to, $subject, $message, $headers);
}

include("header.php");
?>

    <form action="#" method="post">
        <input type="text" name="username" placeholder="Name" required><br>
        <input type="text" name="useremail" placeholder="E-mail" required><br>
        <input type="text" name="usersubject" placeholder="Subject" required><br>
        <textarea name="usermessage" placeholder="Message" required ></textarea><br>
        <input type="submit" value="Send">
    </form>

<?php
include("footer.php");
?>