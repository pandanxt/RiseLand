<?php
 $db = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'realestate' ) or die(mysqli_error($db));

       // echo '<script>alert("Connection is established")</script>';
?>