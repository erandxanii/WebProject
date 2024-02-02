<?php
// logout.php

session_start();

// Fshij sesionin dhe ridirekto në faqen e login-it
session_destroy();
header("Location: login.php");
exit();
?>
