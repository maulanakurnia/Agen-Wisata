<?php 
    session_start();
    session_destroy();

    header("location: http://localhost/agen_wisata/views/?pesan=logout");
?>