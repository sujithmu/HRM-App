<?php

    $ctn=mysqli_connect("localhost","root","!+@_qpal") or die("ERR: Connection");
    $databa=mysqli_select_db($ctn,"roundcubemail") or die("ERR: Database");
    
    #$pswd = "sujith";
    $unam = "sujith";
    
    $sqlins = "INSERT INTO users(username) VALUES ('$unam')";
    $exe = mysqli_query($ctn, $sqlins);
    
    $rdata = mysqli_fetch_array($exe);
   
    mysqli_close($ctn);
    
    ?>
