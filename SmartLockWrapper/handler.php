<?php 

    $txt = $_GET["data"];

    $file = fopen("data.txt", "w") or die("Unable to open file!");
    fwrite($file, $txt);
    fclose($file);

?>