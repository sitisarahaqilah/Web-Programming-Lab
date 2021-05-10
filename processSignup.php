<?php 

    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $rpass = $_POST["rpassword"];

    $myfile = fopen("javamember.txt", "a+") or die("Unable to open file!");
    fwrite($myfile, $uname . ',');
    fwrite($myfile, $email . ',');
    fwrite($myfile, $pass . ',');
    fwrite($myfile, $rpass . "\n");
    fclose($myfile);

    header("Location: profile.php?action=login_success");

?>