<?php

session_start();
session_destroy();
header("Location: ../View/adminLogin.php");
exit();