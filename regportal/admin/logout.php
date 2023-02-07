<?php
session_start();

session_unset();
header("Location: ../index.php");
?>
<script>alert("Logout Successfully")</script>