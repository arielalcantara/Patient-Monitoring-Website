<?php
require_once 'dbconnect.inc.php';
session_start();
require_once 'datetime.inc.php';
// Terminate session and redirect to homepage
session_unset();
session_destroy();
header("Location: ../index.php");