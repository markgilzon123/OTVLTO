<?php 
session_start();
session_destroy();
header("location:index.php?logout=You are sucessfully logout!");
