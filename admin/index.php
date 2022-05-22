<?php
if(empty($_SESSION["adminUserid"])) {
    header("Location: ../home.php");
}