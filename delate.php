<?php
include "config.php";
$id = $_GET['ID'];
mysqli_query($con, "DELETE FROM `tabeltodo` where `id` = '$id' ");

header("location:index.php");