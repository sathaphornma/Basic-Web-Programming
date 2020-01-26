<?php
if ($_GET) {

    $out =
        $_GET['initial'] ." ". 
        $_GET['myName'] ." ". 
        $_GET['myId'] . " ".
        $_GET['school'] . " ".
        $_GET['myEmail'] ." ".
        date("H:i, dS F")."\n";

    $fp = fopen("gbook.txt", "a");
    flock($fp, LOCK_EX);
    if (!$fp) {
        echo "<p><strong>Error : </strong>ไม่สามารถดำเนินการตามคำสั่งของคุณได้ <b>กรุณาลองใหม่อีกครั้ง!!</b></p>";
        exit;
    }
    fwrite($fp, $out);
    flock($fp, LOCK_UN);
    fclose($fp);

    echo '<h2>Guestbook Record</h2>';
    echo '<p>Guestbook Record : Time processed at' . date("H:i, dS F") . '</p>';
    echo '<p>Guestbook Record has been process</p>';
    echo '<p>It will take you back to Guestbook form in 10 second!</p>';
}
?>
<script>
    function letGo() {
        window.location.assign("./guestbook.html")
    };
    setInterval(letGo, 2000);
</script>