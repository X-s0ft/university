<?php
    $connect = mysqli_connect('localhost', 'root', 'root', 'storageaccounts');

    if (!$connect){
        die ('Error connect to database');
    }
?>