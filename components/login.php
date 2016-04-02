<?php
    $username = trim($_POST['username']);
    $pass = trim($_POST['password']);

    if($username == 'Max' && $pass == 'LordPlunger1') {
        echo "<script type='text/javascript'>alert('Success!');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Please enter a username and password');</script>";
        return false;
    };
?>