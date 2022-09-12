<?php 
    $conn = mysqli_connect('localhost','root','','pharma2');
    
    if (! $conn) {
        die(mysqli_error($conn));
    }
?>
