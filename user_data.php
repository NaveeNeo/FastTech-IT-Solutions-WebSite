<?php
$fp = fopen("user_enq.txt", "a");
$savestring = "Name:".$_GET[name] . "\n" ."E-mail:". $_GET[email] . "\n" ."Enquiry:". $_GET[comments] . "\n\n\n";
fwrite($fp, $savestring);
fclose($fp);








?>