<?php


if (isset($_POST['submit'])) {
    $bgColor = $_POST['color'];
    setcookie('bgColor', $bgColor, time() + 3600); 
    header("location: form.php");
} else {
    header("location: form.php");
}
