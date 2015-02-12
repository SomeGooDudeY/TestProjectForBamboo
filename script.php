<?php 
    $to = "soverstas@gmail.com";
    $subject = "subj";
    $message = "Message body";
    $from = "stas@debian.com";
    $headers = "From: me:)";
if(mail($to,$subject,$message,$headers)) {
    echo "Mail Sent.\n";
} else {
    echo "Sending mail failed=(.\n";
}
?>
