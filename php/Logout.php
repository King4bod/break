<?php
    session_start();
    session_unset();
    session_destroy();
    echo "<h1>You have logged out.</h1>";
    echo '<a class="active" href="../html/Break-main.html">Go to main page</a>';
  //  header( "location:../html/Break-main.php");
?>